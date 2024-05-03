const search = document.querySelector('.search');
const btn = document.querySelector('.btn');
const input = document.querySelector('.input');
const moviesConatainer = document.querySelector('.movies.movies-list')


btn.addEventListener('click', () => {
  search.classList.toggle('active');
  if (search.classList.contains('active')) {
    input.focus();
    const inputWidth = input.offsetWidth;
    const btnWidth = btn.offsetWidth;
    const translation = inputWidth + btnWidth + 10; 
    btn.style.transform = `translateX(calc(100% - ${translation}px))`; 
  } else {
    btn.style.transform = 'none'; 
  }
});






