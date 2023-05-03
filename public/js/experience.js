$(document).ready(function() {
    $("#expform").validate({
        rules: {
            title: "required",
            desc:"required",
            image:"required"
        , }
    });
});