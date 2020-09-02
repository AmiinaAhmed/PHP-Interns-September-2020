document.addEventListener('DOMContentLoaded', () => {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("ModalImg");


// Have each lightbox image open modal with image
    document.querySelectorAll('.lightbox').forEach(image => {
        image.onclick = () => {
        let src = image.dataset.src;
        modal.style.display = "block";
        modalImg.src = src;
        };
    });
    
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = () => {
  modal.style.display = "none";
};
});
