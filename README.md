# MBA 360

A static HTML/CSS/JS website for MBA program discovery (colleges, courses, entrance exams, alumni, blog, glossary), backed by a small PHP API for authentication and user activity tracking.

## Tech Stack

- **Frontend:** Static HTML pages with pre-built JS/CSS bundles (`assets/`), shared partials (`partials/header.html`, `partials/footer.html`), and page-level scripts (`js/`)
- **Backend:** PHP API (`api/`) using PDO/MySQL, session-based authentication, and PHPMailer for transactional email
- **Database:** MySQL (`mba_discovery`)
- **Local environment:** WAMP (Apache + MySQL + PHP)

## Project Structure

```
├── api/
│   ├── auth/           # Login, signup, logout, password reset, email/OTP verification
│   ├── activity/        # User activity tracking endpoints
│   ├── includes/         # Shared auth guard, mailer, mail config
│   ├── services/         # ActivityTracker service
│   ├── smtp/              # PHPMailer library
│   └── config.php         # Database connection + app base URL
├── assets/                 # Built/bundled JS, CSS, images, fonts (per-page bundles)
├── fonts/                    # Inter & Montserrat web fonts
├── js/                        # Page-level scripts (auth state, activity tracking)
├── partials/                   # Shared header/footer HTML includes
├── college/, course/, exam/,     # Section pages (index + detail views)
│   blog/, alumni/, glossary/
├── index.html                     # Homepage
├── member-login.html               # Login page
├── member-registration.html        # Signup page
├── password-reset.html             # Password reset request
├── new-password.html               # Set new password
└── verify-otp.html                 # OTP verification
```

## Getting Started

### Prerequisites

- [WAMP](https://www.wampserver.com/) (or any Apache + PHP + MySQL stack)
- PHP 7.4+
- MySQL

### Setup

1. Clone this repo into your WAMP `www` directory as `mba-html-discovery`:
   ```
   git clone https://github.com/ramanui/mba-360.git mba-html-discovery
   ```
2. Create a MySQL database named `mba_discovery`.
3. Update database credentials in `api/config.php` if needed (defaults to `root` with no password, matching a default WAMP setup).
4. Configure outgoing mail in `api/includes/mail-config.php` (SMTP host, port, username, password, sender address).
5. Start WAMP and browse to `http://localhost/mba-html-discovery/`.

## Notes

- `APP_BASE_URL` in `api/config.php` and paths in `js/auth.js` assume the app is served at `/mba-html-discovery/`.
- Authentication is session-based (PHP sessions), with a 1-hour idle timeout enforced in `api/includes/auth.php`.
- `api/includes/mail-config.php` currently contains live SMTP credentials committed to this repo — rotate/secure these before making the repository public.
