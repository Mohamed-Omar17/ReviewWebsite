document.querySelectorAll('.container').forEach((container) => {
    const backBtn = container.querySelector('.backBtn');
    const frontBtn = container.querySelector('.frontBtn');
    const carousel = container.querySelector('.carousel .card-list');

    backBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: -200, behavior: 'smooth' });
    });

    frontBtn.addEventListener('click', () => {
        carousel.scrollBy({ left: 200, behavior: 'smooth' });
    });
});
