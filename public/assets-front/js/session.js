document.querySelector(".search-btn").addEventListener("click", () => {
    let search = document.querySelector(".search").value;
    search = parseInt(search, 10); // Convert the search value to an integer

    if (!isNaN(search)) { // Ensure the value is a number
        if (search % 2 === 0 || search % 2 === 1) {
            console.log("⚠️Warning: This search engine is not connected to the website ❗️");
            alert("⚠️  This search engine is not connected to the website ❗️");
        }
    } else {
        console.log("⚠️Warning: The search value is not a valid number ❗️");
        alert("⚠️  The search value is not a valid number ❗️");
    }
});
    // Play and pause functionality for video
    document.addEventListener('DOMContentLoaded', function() {
      const videoContainers = document.querySelectorAll('.video-container');
  
      videoContainers.forEach(container => {
          const video = container.querySelector('video');
          const playIcon = container.querySelector('.play-icon');
  
          // Prevent default play/pause behavior
          video.addEventListener('click', function(event) {
              event.preventDefault();
          });
  
          // Add click event listener to the video container
          container.addEventListener('click', function() {
              const videoSrc = video.querySelector('source').src;
              displayVideoInCartonaa(videoSrc);
          });
      });
  
      function displayVideoInCartonaa(src) {
          const cartonaa = document.querySelector('.cartonaa');
          cartonaa.innerHTML = `
              <video controls autoplay>
                  <source src="${src}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          `;
      }
  });

  // paid videos
  document.addEventListener('DOMContentLoaded', function() {
    const videoContainers = document.querySelectorAll('.video-containers');

    videoContainers.forEach(container => {
        const video = container.querySelector('video');
        const playIcon = container.querySelector('.play-icons');

        // Add click event listener to the video container
        container.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the video element
            alert('This video is not free. Please pay to see this video.');
        });

        // Prevent video play when clicking directly on the video element
        video.addEventListener('click', function(event) {
            event.preventDefault();
        });

        // Prevent video play when clicking on the play icon
        playIcon.addEventListener('click', function(event) {
            event.preventDefault();
        });
    });
});
