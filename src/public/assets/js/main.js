// AOS Init
AOS.init({
  duration: 1000,
  once: true,
  offset: 100
});

// Typed Init
if (document.querySelector('.typed')) {
  var typed = new Typed('.typed', {
    strings: ["UI/UX Designer", "Web Developer", "Freelancer", "Content Creator"],
    typeSpeed: 100,
    backSpeed: 50,
    loop: true
  });
}

// Scroll to top button
const scrollTop = document.querySelector('#scroll-top');
if (scrollTop) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      scrollTop.classList.add('active');
    } else {
      scrollTop.classList.remove('active');
    }
  });
  
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// Active menu on scroll
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.navmenu a');

window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (scrollY >= (sectionTop - 200)) {
      current = section.getAttribute('id');
    }
  });

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === `#${current}`) {
      link.classList.add('active');
    }
  });
});

console.log('main.js loaded successfully!');