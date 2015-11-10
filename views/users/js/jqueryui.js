
$(document).ready(function () {

/* window.onload = function() {
            if (window.jQuery) {  
                // jQuery is loaded  
                alert("Yeah!");
            } else {
                // jQuery is not loaded
                alert("Doesn't Work");
                }
                }*/

 $("p").click(function(){
        alert("The paragraph was clicked.");
    });

    $('#jQueryUItest').on('click',datepicker());
    alert(1);
});
