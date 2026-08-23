// dom loaded for menu nav
document.addEventListener('DOMContentLoaded', () => {

    const hamburger = document.querySelector('.hamburger');
    const mobileNav = document.getElementById('mobileNav');

    if (!hamburger || !mobileNav) {
        return;
    }

    hamburger.addEventListener('click', () => {

        hamburger.classList.toggle('active');
        mobileNav.classList.toggle('active');

        const isOpen = mobileNav.classList.contains('active');

        hamburger.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );
    });

    // Close menu when a mobile link is clicked
    mobileNav.querySelectorAll('a').forEach(link => {

        link.addEventListener('click', () => {

            hamburger.classList.remove('active');
            mobileNav.classList.remove('active');

            hamburger.setAttribute(
                'aria-expanded',
                'false'
            );
        });

    });

});


// All event listeners are registered inside DOMContentLoaded
// so elements are guaranteed to exist before any handler runs
document.addEventListener('DOMContentLoaded', function () {


    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav a');

    window.addEventListener('scroll', function () {
        let current = '';
        sections.forEach(function (section) {
            if (window.scrollY >= section.offsetTop - 80) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(function (link) {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });

    });

    /* Validation helpers  */

    /**
     * Show an error on a field.
     * @param {string} fieldId  - input element id
     * @param {string} message  - error message to display
     */

    // function to show error message
    function showError(fieldId, message) {
        const input = document.getElementById(fieldId);
        const errorEl = document.getElementById(fieldId + '-error');
        const group = input.closest('.form-group');

        input.classList.remove('valid');
        input.classList.add('invalid');
        errorEl.textContent = message;
        errorEl.classList.add('visible');
        group.classList.add('has-error');
    }

    // Mark a field as valid and hide any error.
    function showValid(fieldId) {
        const input = document.getElementById(fieldId);
        const errorEl = document.getElementById(fieldId + '-error');
        const group = input.closest('.form-group');

        input.classList.remove('invalid');
        input.classList.add('valid');
        errorEl.textContent = '';
        errorEl.classList.remove('visible');
        group.classList.remove('has-error');
    }

    // Reset a field to neutral (no valid/invalid state)
    // Called on oninput to clear stale errors while typing
    function clearError(fieldId) {
        const input = document.getElementById(fieldId);
        const errorEl = document.getElementById(fieldId + '-error');
        const group = input.closest('.form-group');

        input.classList.remove('invalid');
        errorEl.textContent = '';
        errorEl.classList.remove('visible');
        group.classList.remove('has-error');
    }


    // function to validate inputs 

    // validate first and last name 
    // checking length, letters and special characters
    function validateName(fieldId) {
        const input = document.getElementById(fieldId);
        const value = input.value.trim();
        const label = fieldId === 'firstName' ? 'First name' : 'Last name';
        const nameRegex = /^[A-Za-z\s'\-]+$/;

        if (value === '') {
            showError(fieldId, label + ' is required.');
            return false;
        }
        if (value.length < 3) {
            showError(fieldId, label + ' must be at least 3 letters.');
            return false;
        }
        if (!nameRegex.test(value)) {
            showError(fieldId, label + ' cannot contain numbers or special characters.');
            return false;
        }

        showValid(fieldId);
        return true;
    }


    // function to validate email address
    function validateEmail() {
        const input = document.getElementById('email');
        const value = input.value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (value === '') {
            showError('email', 'Email address is required.');
            return false;
        }
        if (!emailRegex.test(value)) {
            showError('email', 'Valid email address required.');
            return false;
        }

        showValid('email');
        return true;
    }

    // function to validate phone number
    function validatePhone() {
        const input = document.getElementById('phone');
        const value = input.value.trim();
        const phoneRegex = /^[0-9\s\+\-\(\)]+$/;

        if (value === '') {
            // Phone is optional — clear any state and pass
            clearError('phone');
            input.classList.remove('valid', 'invalid');
            return true;
        }
        if (!phoneRegex.test(value)) {
            showError('phone', 'Phone number may only contain digits, spaces, +, -, ( ).');
            return false;
        }
        if (value.length > 10) {
            showError('phone', 'Only ten digits required.');
            return false;
        }

        showValid('phone');
        return true;
    }

    // function to validate message
    function validateMessage() {
        const input = document.getElementById('message');
        const value = input.value.trim();
        const len = value.length;

        if (value === '') {
            showError('message', 'Message is required.');
            return false;
        }
        if (len < 20) {
            showError('message', 'Message is too short minimum 20 characters.');
            return false;
        }
        if (len > 250) {
            showError('message', 'Message exceeds 250 characters.');
            return false;
        }

        showValid('message');
        return true;
    }

    // Live character counter plus inline helper for the message textarea
    function onMessageInput() {
        const input = document.getElementById('message');
        const counter = document.getElementById('messageCounter');
        const len = input.value.length;

        // Update counter text
        counter.textContent = len + ' / 250';

        // Colour-code the counter
        counter.classList.remove('warn', 'limit');
        if (len >= 250) {
            counter.classList.add('limit');
        } else if (len >= 220) {
            counter.classList.add('warn');
        }

        // Clear any existing error while typing so it re-validates on blur
        clearError('message');
    }

    // submit form event listener
    document.getElementById('submit_btn')?.addEventListener('click', (e) => {

        // prevent default
        e.preventDefault();

        //const variables
        const validate_names = validateName('firstName');
        const validate_last_names = validateName('lastName');
        const validate_email = validateEmail();
        const validate_phones = validatePhone();
        const validate_messages = validateMessage();

        // to check if inputs are valid
        if (!validate_names || !validate_last_names || !validate_email || !validate_phones || !validate_messages) {
            // Scroll to first invalid field
            const firstInvalid = document.querySelector('.form-group input.invalid, .form-group textarea.invalid');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalid.focus();
            }
            return;
        }

        // All valid show success 
        const btn = document.getElementById('submitBtn');
        const successEl = document.getElementById('formSuccess');

        if (btn) {

            // time out function to remove message after 3 seconds
            setTimeout(() => {

                btn.textContent = 'Message Sent ✓';
                btn.style.background = '#1a6bd4';
                btn.disabled = true;
                document.getElementById('contactForm').reset();

            }, 3000)

        }

        if (successEl) {

            // time out function to remove message after few seconds
            setTimeout(() => {
                successEl.style.display = 'block';
                successEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                document.getElementById('contactForm').reset();
            }, 5000)

        }

    });


    /* ------------ Login form ------------------------------ */

    // elements
    const emailInput = document.getElementById('loginEmail');
    const passwordInput = document.getElementById('loginPassword');
    const loginBtn = document.getElementById('loginBtn');
    const pwToggle = document.getElementById('pwToggle');
    const rememberBox = document.getElementById('rememberBox');
    const rememberLabel = document.getElementById('rememberLabel');
    const formAlert = document.getElementById('formAlert');


    // Only run if the password field exists on this page
    if (pwToggle && passwordInput) {

        // open eye icon svg
        const eyeOpen =
            `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
        </svg>`;

        // close eye icon svg
        const eyeClosed =
            `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/>
            <path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/>
        <line x1="1" y1="1" x2="23" y2="23"/>
        </svg>`;

        // Set initial icon
        pwToggle.innerHTML = eyeOpen;

        // Password visibility toggle
        pwToggle.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            pwToggle.innerHTML = isPassword ? eyeClosed : eyeOpen;
            pwToggle.setAttribute('aria-label', isPassword ? 'Hide password' : 'Show password');
        });

    }

    //helpers
    // show error function
    function showFieldError(inputEl, errorId, message) {
        inputEl.classList.add('invalid');
        inputEl.classList.remove('valid');
        const el = document.getElementById(errorId);
        if (el) { el.textContent = message; el.classList.add('visible'); }
    }

    // show valid state
    function showFieldValid(inputEl, errorId) {
        inputEl.classList.remove('invalid');
        inputEl.classList.add('valid');
        const el = document.getElementById(errorId);
        if (el) { el.textContent = ''; el.classList.remove('visible'); }
    }

    // clear input field
    function clearField(inputEl, errorId) {
        inputEl.classList.remove('invalid', 'valid');
        const el = document.getElementById(errorId);
        if (el) { el.textContent = ''; el.classList.remove('visible'); }
    }

    // show alert dialog
    function showAlert(type, message) {
        formAlert.className = 'form-alert ' + type;
        formAlert.textContent = message;
    }

    // hide alert dialog 
    function hideAlert() {
        formAlert.className = 'form-alert';
        formAlert.textContent = '';
    }

    
    // Show the URL the user tried to access
    (function () {
        const el = document.getElementById('errorPath');
        if (el) {
            el.textContent = window.location.href;
        }
    })();

    /* Dashboard Sidebar toggle (mobile) - dashboard pages (admin, producer, artist)  */
    const sidebarEl = document.getElementById('sidebar');
    const overlayEl = document.getElementById('sidebarOverlay');
    const hamburgerEl = document.getElementById('hamburgerBtn');

    if (sidebarEl && hamburgerEl) {

        /* Open / close on hamburger click */
        hamburgerEl.addEventListener('click', function () {
            const isOpen = sidebarEl.classList.toggle('open');
            overlayEl && overlayEl.classList.toggle('open', isOpen);
            hamburgerEl.setAttribute('aria-expanded', isOpen);
        });

        /* Close when overlay (dimmed background) is clicked */
        if (overlayEl) {
            overlayEl.addEventListener('click', function () {
                sidebarEl.classList.remove('open');
                overlayEl.classList.remove('open');
                hamburgerEl.setAttribute('aria-expanded', 'false');
            });
        }

        /* Close when a sidebar nav link is clicked (mobile) */
        sidebarEl.querySelectorAll('.nav-item').forEach(function (item) {
            item.addEventListener('click', function () {
                if (window.innerWidth <= 768) {
                    sidebarEl.classList.remove('open');
                    overlayEl && overlayEl.classList.remove('open');
                    hamburgerEl.setAttribute('aria-expanded', 'false');
                }
            });
        });

        /* Close on Escape key */
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && sidebarEl.classList.contains('open')) {
                sidebarEl.classList.remove('open');
                overlayEl && overlayEl.classList.remove('open');
                hamburgerEl.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ── Logout dashboard function */
    document.getElementById('logout')?.addEventListener('click', () => {

        window.history.pushState(null, "", window.location.href);

        window.addEventListener("popstate", function () {
            window.history.pushState(null, "", window.location.href);
        });

        if (confirm('Are you sure you want to log out?')) {
            window.location.href = '../../../app/pages/login.php';
        }


    });

    /* ── Animate bars on load ──────────────────────────── */
    // Bars start at 0 width via inline style and transition to final value
    document.querySelectorAll('.bar-fill').forEach(function (bar) {
        const target = bar.style.width;
        bar.style.width = '0%';
        setTimeout(function () {
            bar.style.width = target;
        }, 400);
    });
});