function toggleGallery() {
    const gallery = document.querySelector('.gallery');

    if (gallery.style.display === 'none') {
        gallery.style.display = 'flex';
    } else {
        gallery.style.display = 'none';
    }
}
