$(document).ready(function () {
    $("li.item ol").hide();

    $("li.item").hover(
        function () {
            $("li.item ol").hide(); 
            $(this).children("ol").show(); 
        },
        function () {
            $(this).children("ol").hide(); 
        }
    );
});
