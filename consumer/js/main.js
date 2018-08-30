$(document).ready(function () {
    _bindTestimonial();
    
    _bindService_Post();

});
//== Homepage Slider ==============
function _bindTestimonial() {
    
      $("#form_register").validate({
        submitHandler: function(form) {
          $(form).ajaxSubmit();
        }
      });
}
//Service Page Send User data to Service Lead Table
function _bindService_Post(){
    $('#send_service').click(function(event){
        event.preventDefault();
        $.ajax({
            url : "lead/service_post.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "text",
            success: function(strMessage){
                $('#message').text(strMessage);
                $(".service_lead")[0].reset();
            }

        })
    })
}

