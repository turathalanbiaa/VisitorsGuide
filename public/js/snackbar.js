function snackbar(text , timeout , cssClass)
{
    $("#my-custom-snackbar").remove();
    cssClass = typeof  cssClass !== 'undefined' ? cssClass : "";
    var html = "<div id='my-custom-snackbar' class='snackbar " + cssClass + "'>"+text+"</div>";
    $("body").append(html);
    $("#my-custom-snackbar").addClass("show");
    // After 3 seconds, remove the show class from DIV
    setTimeout(function() {$("#my-custom-snackbar").removeClass("show")}, timeout);
}