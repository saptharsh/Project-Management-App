$(document).ready(function(){
    //alert(1);
    /*
     * dashboard/xhrGetListings
     *      This function gets the value from the database when the page is refereshed without submit the data
     */
    $.get("dashboard/xhrGetListings", function( data ) {
        //alert( "Data Loaded: " + data );
        console.log(data);
        var jsonData = JSON.parse(data);
        /*
         * 
         * for loop: When we are pulling all the values from the database
         */
        for (var i = 0; i < jsonData.length; i++) {
            $('#showDbInsert').append('<div>' + jsonData[i].textdata + ' <a class="del" rel="'+ jsonData[i].id +'" href="#">Delete</a></div>');   
        }
        
        /*
         * If we just say, $('.del').onclick(finction(){
         *                  }); The recently posted data can't be deleted immidately from the page
         * The .on() function is similar to the live() function which was used jQuery versions < 1.7                  
         */
        
        $('body').on("click", '.del', function(e){
            delitem = $(this);
            var id = $(this).attr('rel');
            //alert(id);
           
            $.post('dashboard/xhrDeleteListing', {'id':id}, function( o ) {//function(o) is the callback function on SUCCESS
                //alert('check delete');
                delitem.parent().remove();
            });
           
           return false; 
        });
        
    });
    
    /*
     * url=dashboard/xhrInsert/
     *      On submitting the form, we POST the Data using an AJAX(or jQuery, not sure) to the url.
     *      When the url echo's the JSON response, the callback function(o) will be executed and the 
     *      sunmitted DATA would be displayed on the page immediately. 
     */
    $('#dbInsert').submit(function(){
        var url = $(this).attr('action');//Value of the action attr in the FORM 'dbInsert'
        var data = $(this).serialize();//Serializing the FORM, so that it is easier to POST
        //console.log(data);//Logs to the console, open the console using Firebug Chrome PlugIn
        
        $.post(url, data, function( o ) {//function(o) is the callback function on SUCCESS
            //alert('check immediate response');
            var jsonData = JSON.parse(o);//Response sent from RunXhrInsert() in dasdboard_model.php
            $('#showDbInsert').append('<div>' + jsonData.textdata + ' <a class="del" rel="'+ jsonData.id +'" href="#">Delete</a></div>');        
        });
        
        return false;//Because, I want JS to handle the FORM and not 'refresh the page'
    });
    
});
