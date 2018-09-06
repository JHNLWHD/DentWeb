$( document ).ready(function() {
    console.log( "ready!" );
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});

$('#loginForm').validate({
    rules:{
    username:
            {

            required:true,
            
            },
    password:
            {
            required:true,
            minlength:6,
            maxlength:10
            },
    
          },

          highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');

        
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

})
});

