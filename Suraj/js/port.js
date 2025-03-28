function changeContent() {
    document.getElementById("dynamicContent").innerHTML = "<p>Thanks for download my 'Resume'.</p>";
  }


  // Get all sections and navbar links
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-link');

// Function to add 'active' class based on scroll position
function setActiveLink() {
    let currentSection = '';

    // Check which section is currently in view
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        if (window.scrollY >= sectionTop - sectionHeight / 3) {
            currentSection = section.getAttribute('id');
        }
    });

    // Loop through each navbar link and add 'active' class if it matches the current section
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === currentSection) {
            link.classList.add('active');
        }
    });
}

// Function to smoothly scroll to the section when a navbar link is clicked
function smoothScroll(event) {
    event.preventDefault();
    const targetId = event.target.getAttribute('href').slice(1);
    const targetSection = document.getElementById(targetId);

    window.scrollTo({
        top: targetSection.offsetTop,
        behavior: 'smooth'
    });
}

// Attach the 'setActiveLink' function to the scroll event
window.addEventListener('scroll', setActiveLink);

// Attach 'smoothScroll' function to each navbar link for smooth scrolling
navLinks.forEach(link => {
    link.addEventListener('click', smoothScroll);
});



document.addEventListener('DOMContentLoaded', () => {
    // Get all sections and navbar links
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    // Function to add 'active' class based on scroll position
    function setActiveLink() {
        let currentSection = '';

        // Check which section is currently in view
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.scrollY >= sectionTop - sectionHeight / 3) {
                currentSection = section.getAttribute('id');
            }
        });

        // Loop through each navbar link and add 'active' class if it matches the current section
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').slice(1) === currentSection) {
                link.classList.add('active');
            }
        });
    }

    // Function to smoothly scroll to the section when a navbar link is clicked
    function smoothScroll(event) {
        event.preventDefault();
        const targetId = event.target.getAttribute('href').slice(1);
        const targetSection = document.getElementById(targetId);

        window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth'
        });
    }

    // Attach the 'setActiveLink' function to the scroll event
    window.addEventListener('scroll', setActiveLink);

    // Attach 'smoothScroll' function to each navbar link for smooth scrolling
    navLinks.forEach(link => {
        link.addEventListener('click', smoothScroll);
    });
});

