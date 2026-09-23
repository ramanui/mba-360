document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('registrationForm');

    if (!form) {
        return;
    }

    const responseMessage = document.getElementById(
        'registrationResponse'
    );

    const fields = {
        name: {
            input: document.getElementById('name'),
            error: document.getElementById('nameError')
        },
        email: {
            input: document.getElementById('loginEmail'),
            error: document.getElementById('emailError')
        },
        phone: {
            input: document.getElementById('phone'),
            error: document.getElementById('phoneError')
        },
        education_level: {
            input: document.getElementById('educationLevelInput'),
            error: document.getElementById('studyingInError')
        },
        password: {
            input: document.getElementById('loginPassword'),
            error: document.getElementById('passwordError')
        },
        confirm_password: {
            input: document.getElementById('password_confirmation'),
            error: document.getElementById('confirmPasswordError')
        },
        terms: {
            input: document.getElementById('terms'),
            error: document.getElementById('termsError')
        }
    };

    const allowedEducationLevels = [
        'school',
        'undergraduate',
        'postgraduate',
        'working_professional',
        'other'
    ];

    function showResponse(message, isError = false) {
        if (!responseMessage) {
            return;
        }

        responseMessage.textContent = message;
        responseMessage.classList.toggle('is-error', isError);
        responseMessage.hidden = false;
    }

    function resetAndHideForm() {
        form.reset();
        form.hidden = true;

        Object.values(fields).forEach(clearError);

        if (studyingInInput && studyingInPlaceholder) {
            studyingInInput.value = '';
            studyingInPlaceholder.textContent = 'Select an option';
        }

        if (studyingInMenu && studyingInControl) {
            studyingInMenu.hidden = true;
            studyingInControl.setAttribute('aria-expanded', 'false');
        }
    }

    function showError(field, message) {
        if (!field?.input || !field?.error) {
            return false;
        }

        field.error.textContent = message;
        field.error.classList.add('is-visible');

        if (field.input.type !== 'checkbox') {
            field.input.classList.add('is-error');
        }

        field.input.setAttribute('aria-invalid', 'true');

        return false;
    }

    function clearError(field) {
        if (!field?.input || !field?.error) {
            return;
        }

        field.error.textContent = '';
        field.error.classList.remove('is-visible');

        field.input.classList.remove('is-error');
        field.input.removeAttribute('aria-invalid');
    }

    function validateName() {
        const value = fields.name.input.value.trim();

        if (value === '') {
            return showError(fields.name, 'Please enter your full name.');
        }

        if (value.length < 2) {
            return showError(fields.name, 'Name must contain at least 2 characters.');
        }

        if (value.length > 100) {
            return showError(fields.name, 'Name cannot exceed 100 characters.');
        }

        if (!/^[A-Za-zÀ-ÿ]+(?:[\s'-][A-Za-zÀ-ÿ]+)*$/.test(value)) {
            return showError(fields.name, 'Please enter a valid name.');
        }

        clearError(fields.name);
        return true;
    }

    function validateEmail() {
        const value = fields.email.input.value.trim();

        if (value === '') {
            return showError(fields.email, 'Please enter your email address.');
        }

        if (value.length > 150) {
            return showError(fields.email, 'Email address cannot exceed 150 characters.');
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value)) {
            return showError(fields.email, 'Please enter a valid email address.');
        }

        clearError(fields.email);
        return true;
    }

    function validatePhone() {
        const value = fields.phone.input.value.trim();

        if (value === '') {
            clearError(fields.phone);
            return true;
        }

        if (!/^\d{10}$/.test(value)) {
            return showError(
                fields.phone,
                'Please enter a valid 10-digit mobile number.'
            );
        }

        if (!/^[6-9]/.test(value)) {
            return showError(fields.phone, 'Number not valid.');
        }

        clearError(fields.phone);
        return true;
    }

    function validateEducation() {
        const value = fields.education_level.input.value.trim();

        if (value === '') {
            return showError(
                fields.education_level,
                'Please select your education level.'
            );
        }

        if (!allowedEducationLevels.includes(value)) {
            return showError(
                fields.education_level,
                'Please select a valid education level.'
            );
        }

        clearError(fields.education_level);
        return true;
    }

    function validatePassword() {
        const value = fields.password.input.value;

        if (value === '') {
            return showError(fields.password, 'Please enter a password.');
        }

        if (value.length < 8) {
            return showError(
                fields.password,
                'Password must contain at least 8 characters.'
            );
        }

        if (value.length > 128) {
            return showError(
                fields.password,
                'Password cannot exceed 128 characters.'
            );
        }

        if (/\s/.test(value)) {
            return showError(
                fields.password,
                'Password cannot contain spaces.'
            );
        }

        if (!/[A-Z]/.test(value)) {
            return showError(
                fields.password,
                'Password must contain at least one uppercase letter.'
            );
        }

        if (!/[a-z]/.test(value)) {
            return showError(
                fields.password,
                'Password must contain at least one lowercase letter.'
            );
        }

        if (!/[0-9]/.test(value)) {
            return showError(
                fields.password,
                'Password must contain at least one number.'
            );
        }

        clearError(fields.password);
        return true;
    }

    function validateConfirmPassword() {
        const value = fields.confirm_password.input.value;
        const password = fields.password.input.value;

        if (value === '') {
            return showError(
                fields.confirm_password,
                'Please confirm your password.'
            );
        }

        if (password !== value) {
            return showError(
                fields.confirm_password,
                'Passwords do not match.'
            );
        }

        clearError(fields.confirm_password);
        return true;
    }

    function validateTerms() {
        if (!fields.terms.input.checked) {
            return showError(
                fields.terms,
                'Please accept the communication consent.'
            );
        }

        clearError(fields.terms);
        return true;
    }

    function validateAll() {
        return [
            validateName(),
            validateEmail(),
            validatePhone(),
            validateEducation(),
            validatePassword(),
            validateConfirmPassword(),
            validateTerms()
        ].every(Boolean);
    }

    /*
    |--------------------------------------------------------------------------
    | Blur validation
    |--------------------------------------------------------------------------
    */

    fields.name.input.addEventListener('blur', validateName);
    fields.email.input.addEventListener('blur', validateEmail);
    fields.phone.input.addEventListener('blur', validatePhone);
    fields.password.input.addEventListener('blur', validatePassword);
    fields.confirm_password.input.addEventListener(
        'blur',
        validateConfirmPassword
    );

    /*
    |--------------------------------------------------------------------------
    | Live correction
    |--------------------------------------------------------------------------
    */

    fields.name.input.addEventListener('input', () => {
        if (fields.name.input.value.trim() !== '') {
            validateName();
        }
    });

    fields.email.input.addEventListener('input', () => {
        if (fields.email.input.value.trim() !== '') {
            validateEmail();
        }
    });

    fields.phone.input.addEventListener('input', validatePhone);

    fields.password.input.addEventListener('input', () => {
        if (fields.password.input.value !== '') {
            validatePassword();
        }

        if (fields.confirm_password.input.value !== '') {
            validateConfirmPassword();
        }
    });

    fields.confirm_password.input.addEventListener(
        'input',
        validateConfirmPassword
    );

    fields.terms.input.addEventListener('change', validateTerms);

    /*
    |--------------------------------------------------------------------------
    | Custom education select
    |--------------------------------------------------------------------------
    */

    const studyingInControl =
        document.getElementById('studyingInControl');

    const studyingInMenu =
        document.getElementById('studyingInMenu');

    const studyingInInput =
        document.getElementById('educationLevelInput');

    const studyingInPlaceholder =
        document.getElementById('studyingInPlaceholder');

    if (
        studyingInControl &&
        studyingInMenu &&
        studyingInInput
    ) {
        studyingInControl.addEventListener('click', () => {
            const isOpen =
                studyingInControl.getAttribute('aria-expanded') === 'true';

            studyingInControl.setAttribute(
                'aria-expanded',
                String(!isOpen)
            );

            studyingInMenu.hidden = isOpen;
        });

        studyingInControl.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                studyingInControl.click();
            }

            if (event.key === 'Escape') {
                studyingInMenu.hidden = true;
                studyingInControl.setAttribute(
                    'aria-expanded',
                    'false'
                );
            }
        });

        studyingInMenu
            .querySelectorAll('[role="option"]')
            .forEach((option) => {
                option.addEventListener('click', () => {
                    const value = option.dataset.value;
                    const label = option.textContent.trim();

                    studyingInInput.value = value;
                    studyingInPlaceholder.textContent = label;

                    studyingInMenu.hidden = true;

                    studyingInControl.setAttribute(
                        'aria-expanded',
                        'false'
                    );

                    validateEducation();
                });
            });
    }

    /*
    |--------------------------------------------------------------------------
    | Password show/hide
    |--------------------------------------------------------------------------
    */

    form.querySelectorAll('[data-toggle]').forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.toggle;
            const input = document.getElementById(targetId);

            if (!input) {
                return;
            }

            const isPassword = input.type === 'password';

            input.type = isPassword ? 'text' : 'password';

            button.setAttribute(
                'aria-label',
                isPassword ? 'Hide password' : 'Show password'
            );

            button.setAttribute(
                'aria-pressed',
                String(isPassword)
            );
        });
    });

    /*
    |--------------------------------------------------------------------------
    | Submit
    |--------------------------------------------------------------------------
    */

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        if (!validateAll()) {
            const firstInvalid = form.querySelector(
                '[aria-invalid="true"]'
            );

            if (firstInvalid) {
                firstInvalid.focus();
            }

            return;
        }

        const submitButton =
            document.getElementById('submitBtn');

        const buttonText =
            submitButton?.querySelector('.btn-text');

        const spinner =
            submitButton?.querySelector('.btn-spinner');

        if (submitButton) {
            submitButton.disabled = true;
        }

        if (buttonText) {
            buttonText.style.display = 'none';
        }

        if (spinner) {
            spinner.style.display = 'inline-flex';
        }

        try {
            const formData = new FormData(form);

            const response = await fetch(
                form.action || window.location.href,
                {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                }
            );

            let result;

            try {
                result = await response.json();
            } catch {
                throw new Error(
                    'The server returned an invalid response.'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Clear previous server-side errors
            |--------------------------------------------------------------------------
            */

            Object.values(fields).forEach(clearError);

            /*
            |--------------------------------------------------------------------------
            | Server validation errors
            |--------------------------------------------------------------------------
            */

            if (!response.ok || !result.success) {
                if (result.fieldErrors) {
                    Object.entries(result.fieldErrors).forEach(
                        ([fieldName, message]) => {
                            if (fields[fieldName]) {
                                showError(
                                    fields[fieldName],
                                    message
                                );
                            }
                        }
                    );

                    const firstServerError =
                        form.querySelector(
                            '[aria-invalid="true"]'
                        );

                    if (firstServerError) {
                        firstServerError.focus();
                    }
                } else {
                    showResponse(
                        result.message ||
                        'Registration failed. Please try again.',
                        true
                    );

                    if (result.completed) {
                        resetAndHideForm();
                    }
                }

                return;
            }

            /*
            |--------------------------------------------------------------------------
            | Success
            |--------------------------------------------------------------------------
            */

            resetAndHideForm();
            showResponse(
                result.message ||
                'Registration successful. Please check your email to verify your account.'
            );

        } catch (error) {
            console.error(error);

            showResponse(
                'Something went wrong. Please try again.',
                true
            );
        } finally {
            if (submitButton) {
                submitButton.disabled = false;
            }

            if (buttonText) {
                buttonText.style.display = '';
            }

            if (spinner) {
                spinner.style.display = 'none';
            }
        }
    });
});
