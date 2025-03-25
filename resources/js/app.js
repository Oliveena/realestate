import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
  // Get the carousel element
  const propertyCarousel = document.getElementById('propertyCarousel');
  
  // Add event listener for when the carousel slide changes
  propertyCarousel.addEventListener('slide.bs.carousel', function(event) {
      // Get the slide index that is about to be shown
      const slideIndex = event.to;
      
      // Remove 'active' and 'border-primary' classes from all thumbnails
      const thumbnails = document.querySelectorAll('[data-bs-target="#propertyCarousel"][data-bs-slide-to]');
      thumbnails.forEach(thumbnail => {
          thumbnail.classList.remove('active', 'border-primary');
          thumbnail.classList.remove('border');
      });
      
      // Add 'active' and 'border-primary' classes to the thumbnail corresponding to the active slide
      const activeThumb = document.querySelector(`[data-bs-target="#propertyCarousel"][data-bs-slide-to="${slideIndex}"]`);
      if (activeThumb) {
          activeThumb.classList.add('active', 'border', 'border-primary');
      }
  });
});