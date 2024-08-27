window.addEventListener('scroll', function() {
    const footer = document.querySelector('footer');
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        footer.style.position = 'relative';
    } else {
        footer.style.position = 'absolute';
    }
});
