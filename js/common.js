$(document).ready(
    function() {
        $("#nav a").click(
            function() {
                $("#slideshow").attr("class", $(this).data("classe"));
                return false;

            }
        );
        $("#nav a").click(
            function() {
                $(".page").removeClass("visible");
                $("#page-" + $(this).data("target")).addClass("visible");
                return false;
            }
        );
    }
);
