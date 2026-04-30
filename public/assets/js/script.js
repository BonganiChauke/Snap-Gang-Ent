//toggle function 
function toggleNav(btn) {
    const nav = document.getElementById('mobileNav');
    const isOpen = nav.classList.toggle('open');
    btn.setAttribute('aria-expanded', isOpen);
}

// function to close nav
function closeNav() {
    document.getElementById('mobileNav').classList.remove('open');
    document.querySelector('.hamburger').setAttribute('aria-expanded', false);
}

// Close mobile nav when clicking outside
document.addEventListener('click', function (e) {
    const nav = document.getElementById('mobileNav');
    const btn = document.querySelector('.hamburger');
    if (!nav.contains(e.target) && !btn.contains(e.target)) {
        nav.classList.remove('open');
        btn.setAttribute('aria-expanded', false);
    }
});

// Active nav link on scroll
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav a');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        if (window.scrollY >= section.offsetTop - 80) {
            current = section.getAttribute('id');
        }
    });
    navLinks.forEach(link => {
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