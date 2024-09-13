// JavaScript for handling click events to show/hide experience details

document.querySelectorAll('.portfolio-item').forEach(item => {
    item.addEventListener('click', () => {
        const currentlyActive = document.querySelector('.portfolio-item.active');
        if (currentlyActive && currentlyActive !== item) {
            currentlyActive.classList.remove('active');
        }
        item.classList.toggle('active');
    });
});


function scrollBlog(amount) {
    const container = document.querySelector('.blog-links');
    container.scrollBy({
        left: amount,
        behavior: 'smooth'
    });
}
