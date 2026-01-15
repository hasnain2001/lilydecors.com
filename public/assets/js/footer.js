 // Back to Top functionality
        

        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('.newsletter-input').value;
            if (email) {
                alert(`Thank you for subscribing with ${email}! You'll receive our next newsletter soon.`);
                newsletterForm.reset();
            }
        });

        // Privacy buttons functionality
        document.getElementById('acceptCookies').addEventListener('click', () => {
            alert('Cookie preferences accepted. Thank you!');
            document.querySelector('.privacy-bar').style.display = 'none';
        });

        document.getElementById('manageCookies').addEventListener('click', () => {
            alert('Cookie management settings would open here.');
        });

        document.getElementById('rejectCookies').addEventListener('click', () => {
            alert('Non-essential cookies have been rejected.');
            document.querySelector('.privacy-bar').style.display = 'none';
        });

        // Initialize back to top button
        backToTop.style.opacity = '0';
        backToTop.style.visibility = 'hidden';
        backToTop.style.transition = 'opacity 0.3s ease, visibility 0.3s ease';
