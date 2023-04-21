
$(document).ready(function() {
    $("#portfolioimg").validate({
        rules: {
            port_id: "required",
            image:"required"
        , }
    });
});