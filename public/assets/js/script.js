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