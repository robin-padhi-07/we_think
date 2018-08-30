$(document).ready(function () {
    _bindServiceLead();
    _bindDisplay();
});


function _bindServiceLead(){
    $("#service_lead").click(function(){
        $.post("service_lead.php", function(result){
            $("#content_data").html(result);
        });
    });
}

function _bindDisplay(){
    /* Get from elements values */
 var values = $(this).serialize();

 $.ajax({
        url: "test.php",
        type: "post",
        data: values ,
        success: function (response) {
           // you will get response from your php page (what you echo or print)                 

        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }


    });
}