async function getAuthStatus() {

    try {

        const response = await fetch(
            '/mba-html-discovery/api/auth/me.php',
            {
                method: 'GET',
                credentials: 'include'
            }
        );

        return await response.json();

    } catch (error) {

        return {
            success: false,
            authenticated: false
        };

    }
}


async function isUserLoggedIn() {

    const result = await getAuthStatus();

    return result.authenticated === true;
}


async function logoutUser() {

    try {

        await fetch(
            '/mba-html-discovery/api/auth/logout.php',
            {
                method: 'POST',
                credentials: 'include'
            }
        );

    } catch (error) {

        console.error(error);

    } finally {

        window.location.href = '/mba-html-discovery/index.html';
    }
}


function renderHeaderAuthState(authResult) {

    const actions = document.querySelector('.site-header__actions');

    if (!actions || !authResult.authenticated || !authResult.user) {
        return;
    }

    const firstName =
        (authResult.user.name || authResult.user.email || 'Account')
            .split(' ')[0];

    actions.innerHTML = '';

    const greeting = document.createElement('span');
    greeting.className = 'site-header__greeting';
    greeting.style.cssText = 'font-weight:600;color:#111827;font-size:.9rem;';
    greeting.textContent = 'Hi, ' + firstName;

    const logoutBtn = document.createElement('a');
    logoutBtn.href = '#';
    logoutBtn.className = 'btn btn--outline';
    logoutBtn.id = 'siteHeaderLogout';
    logoutBtn.textContent = 'Logout';

    logoutBtn.addEventListener('click', function (e) {
        e.preventDefault();
        logoutUser();
    });

    actions.appendChild(greeting);
    actions.appendChild(logoutBtn);
}


document.addEventListener('DOMContentLoaded', function () {

    getAuthStatus().then(renderHeaderAuthState);
});
