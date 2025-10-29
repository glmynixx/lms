
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const pages = document.querySelectorAll('.page-content');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    pages.forEach(page => page.classList.remove('active-page'));
                    
                    this.classList.add('active');
                    
                    const pageId = this.getAttribute('data-page');
                    document.getElementById(pageId).classList.add('active-page');
                });
            });
        });