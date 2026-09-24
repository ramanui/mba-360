document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('loginForm');

    if (!form) {
        return;
    }

    const fields = {
        email: {
            input: document.getElementById('loginEmail'),
            error: document.getElementById('emailError'),
        },
        password: {
            input: document.getElementById('loginPassword'),
            error: document.getElementById('passwordError'),
        },
    };
    const responseMessage = document.getElementById('loginResponse');

    function showError(field, message) {
        field.error.textContent = message;
        field.error.classList.add('is-visible');
        field.input.classList.add('is-error');
        field.input.setAttribute('aria-invalid', 'true');
        return false;
    }

    function clearError(field) {
        field.error.textContent = '';
        field.error.classList.remove('is-visible');
        field.input.classList.remove('is-error');
        field.input.removeAttribute('aria-invalid');
    }

    function validateEmail() {
        const email = fields.email.input.value.trim();

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            return showError(fields.email, 'Please enter a valid email address.');
        }

        clearError(fields.email);
        return true;
    }

    function validatePassword() {
        if (fields.password.input.value === '') {
            return showError(fields.password, 'Please enter your password.');
        }

        clearError(fields.password);
        return true;
    }

    function showResponse(message) {
        responseMessage.textContent = message;
        responseMessage.classList.add('is-error');
        responseMessage.hidden = false;
    }

    fields.email.input.addEventListener('input', validateEmail);
    fields.password.input.addEventListener('input', validatePassword);
    fields.email.input.addEventListener('blur', validateEmail);
    fields.password.input.addEventListener('blur', validatePassword);

    form.querySelectorAll('[data-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const input = document.getElementById(button.dataset.toggle);
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            button.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
            button.setAttribute('aria-pressed', String(isPassword));
        });
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        responseMessage.hidden = true;

        if (!validateEmail() || !validatePassword()) {
            form.querySelector('[aria-invalid="true"]')?.focus();
            return;
        }

        const submitButton = document.getElementById('submitBtn');
        const buttonText = submitButton.querySelector('.btn-text');
        const spinner = submitButton.querySelector('.btn-spinner');
        submitButton.disabled = true;
        buttonText.style.display = 'none';
        spinner.style.display = 'inline-flex';

        try {
            const response = await fetch(form.action || window.location.href, {
                method: 'POST',
                body: new FormData(form),
                headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
            });
            const result = await response.json();

            Object.values(fields).forEach(clearError);

            if (!response.ok || !result.success) {
                if (result.fieldErrors) {
                    Object.entries(result.fieldErrors).forEach(([key, message]) => {
                        if (fields[key]) {
                            showError(fields[key], message);
                        }
                    });
                    form.querySelector('[aria-invalid="true"]')?.focus();
                } else {
                    showResponse(result.message || 'Unable to log in. Please try again.');
                }
                return;
            }

            const redirectUrl = result.redirect || './index.php';
            window.location.href = redirectUrl;
        } catch (error) {
            console.error(error);
            showResponse('Something went wrong. Please try again.');
        } finally {
            submitButton.disabled = false;
            buttonText.style.display = '';
            spinner.style.display = 'none';
        }
    });
});
