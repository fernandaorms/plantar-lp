// @Effects
function checkVisibility() {
    const sections = document.querySelectorAll('.fade-section');

    const scrollTop = window.scrollY;
    const windowHeight = window.innerHeight;

    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top + scrollTop;
        const distanceFromTop = sectionTop - scrollTop;

        if (distanceFromTop <= windowHeight * 0.8) {
            section.classList.add('visible');
        }
    });
}

function smoothNavigation() {
    const links = document.querySelectorAll('.menu ul li a');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
}


// @Menu
function toogleMenu(element) {
    element.classList.toggle('open');

    const navElement = element.parentElement.parentElement.querySelector('.nav.responsiveness');
    // const navElement = element.parentElement.parentElement.querySelector('.nav-v2.responsiveness');
    
    navElement.classList.toggle('open');
}

function onLoad() {
    checkVisibility();

    window.addEventListener('scroll', checkVisibility);

    smoothNavigation();
    
}