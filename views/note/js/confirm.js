$(document).ready(function () {
    
    $('.delete').click(function(){
        // prevents from going to the Href link
        //e.preventDefault();
        
        var c = confirm("Are you sure you want to delete?");
        
        if (c == false){
            return false;
        } 
        
    });

});


