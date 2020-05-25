$(document).ready(function(){
    $("#next_post").click(function(){
        $("#post").load(document.URL + " #post");
    });
});