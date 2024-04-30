// const searchInput = document.getElementById('searchInput');

// searchInput.addEventListener('input', function() {
//   const searchTerm = this.value.trim();

//   // Fetch matching titles from the server
//   fetch(`/search?term=${searchTerm}`)
//     .then(response => response.json())
//     .then(data => {
//       // Update the displayed titles based on the response
//       updateDisplayedTitles(data);
//     })
//     .catch(error => console.error('Error fetching data:', error));
// });

// function updateDisplayedTitles(titles) {
//   // Assuming you have a container for displaying titles with the class "movie-grid"
//   const movieGrid = document.querySelector('.movie-grid');
//   movieGrid.innerHTML = ''; // Clear previous titles

//   // Create and append new title elements
//   titles.forEach(title => {
//     const movieElement = document.createElement('div');
//     movieElement.classList.add('movie');
//     movieElement.innerHTML = `<img src="${title.img_path}" alt="${title.title}"> <h3>${title.title}</h3>`;
//     movieGrid.appendChild(movieElement);
//   });
// }