$('#myCarousel').on('slide.bs.carousel', function () {
   alert('hello');
});

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})