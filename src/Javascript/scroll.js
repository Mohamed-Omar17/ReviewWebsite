const backBtn = document.querySelector('.backBtn');
const frontBtn = document.querySelector('.frontBtn');
const carousel = document.querySelector('.carousel .card-list');

backBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: -200, behavior: 'smooth' });
});

frontBtn.addEventListener('click', () => {
    carousel.scrollBy({ left: 200, behavior: 'smooth' });
});
