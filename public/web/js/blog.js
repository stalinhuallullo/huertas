$(document).ready(function(){
    $(".btn-show-novelties").click(function() {

        var url = $(this).data("url");
        if(url.length){
            $(".image-view-novelties").prop("src", url);
            //$('.popup-novelties').modal('show');
            $(".popup-novelties").addClass('show');
        }
    });

    $(".popup-novelties .close-btn").click(function() {
        $(".image-view-novelties").prop("src", "");
        $(".popup-novelties").removeClass('show');
    });
});
