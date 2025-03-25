// Handle collapse toggle for expandable content
document.addEventListener('DOMContentLoaded', function() {
    const collapseToggle = document.querySelector('[data-bs-toggle="collapse"]');
    if (collapseToggle) {
        collapseToggle.addEventListener('click', function() {
            const collapsedText = this.querySelector('.collapsed-text');
            const expandedText = this.querySelector('.expanded-text');
            if (this.getAttribute('aria-expanded') === 'false') {
                collapsedText.classList.add('d-none');
                expandedText.classList.remove('d-none');
            } else {
                collapsedText.classList.remove('d-none');
                expandedText.classList.add('d-none');
            }
        });
    }

    // Form Validation
    const forms = document.querySelectorAll('.custom-form');
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            let isValid = true;
            const inputs = form.querySelectorAll('input[required]');
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });

            // Password match validation for register form
            const password = form.querySelector('#password');
            const confirmPassword = form.querySelector('#confirmPassword');
            if (password && confirmPassword) {
                if (password.value !== confirmPassword.value) {
                    isValid = false;
                    confirmPassword.classList.add('is-invalid');
                    alert('Passwords do not match!');
                }
            }

            if (isValid) {
                // Here you would typically send the form data to a server
                console.log('Form submitted successfully');
                // Simulate successful submission
                alert('Form submitted successfully!');
            }
        });
    });

    // Property Favoriting System
    const favoriteButtons = document.querySelectorAll('.btn .fa-heart');
    favoriteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.toggle('far');
            this.classList.toggle('fas');
            this.classList.toggle('text-danger');
            
            // Here you would typically update the favorite status in your backend
            const propertyId = this.closest('.card').dataset.propertyId;
            console.log(`Property ${propertyId} favorite status toggled`);
        });
    });

    // Price Range Filter
    const minPrice = document.querySelector('input[placeholder="Min"]');
    const maxPrice = document.querySelector('input[placeholder="Max"]');
    if (minPrice && maxPrice) {
        minPrice.addEventListener('change', validatePriceRange);
        maxPrice.addEventListener('change', validatePriceRange);
    }

    function validatePriceRange() {
        const min = Number(minPrice.value);
        const max = Number(maxPrice.value);
        
        if (min && max && min > max) {
            alert('Minimum price cannot be greater than maximum price');
            minPrice.value = '';
            maxPrice.value = '';
        }
    }

    // Property Image Gallery
    const galleryImg = document.querySelector('.gallery-img');
    const thumbnails = document.querySelectorAll('.thumbnail');
    if (galleryImg && thumbnails.length) {
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                galleryImg.src = this.src;
                thumbnails.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }

    // Smooth Scroll for Navigation Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Language Toggle
    const langToggle = document.querySelector('a[href="#"].text-dark');
    if (langToggle) {
        langToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const currentLang = this.textContent;
            this.textContent = currentLang === 'Fr' ? 'En' : 'Fr';
            // Here you would typically implement language switching logic
        });
    }

    // Property Search Filter
    const filterForm = document.querySelector('.filter-sidebar form');
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Collect all filter values
            const formData = new FormData(this);
            const filters = Object.fromEntries(formData);
            console.log('Applying filters:', filters);
            // Here you would typically implement the filtering logic
        });

        // Reset filters
        const resetButton = filterForm.querySelector('button[type="reset"]');
        if (resetButton) {
            resetButton.addEventListener('click', function() {
                setTimeout(() => {
                    // Additional reset logic if needed
                    console.log('Filters reset');
                }, 0);
            });
        }
    }

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
