$(document).ready(function(){
    displayLeftNav();

    $("#selectOptions").on("keyup change",function(){
        window.location = "/search/option/" + $(this).val();
    });

});
