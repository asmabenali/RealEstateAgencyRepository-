jQuery(document).ready(function(){

/* Initial jQuery Validation */
   $("#contact-form").validate({

            rules: {
                name_field: { required: true },
                subject_field: { required: true },
                email_field: { required: true, email:true },
                message_field: { required: true }
            },
            messages: {
                name: "Please specify your name",
                subject: "Please specify subject line",
                message: "Please specify message",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                }
            }
   });

/* Server Side Validation */
    $(function(){
        var infotext = "<p style=\"font-size:20px; color:#A6A7AA;\">Email has been sent. Thank you.</p>";
        var errortext = "<p style=\"font-size:20px; color:#A6A7AA;\">Sorry there was a problem with your email. Pleae try again.</p>";
            $("#contact-form").submit(function(){
                $.post("contact.php", $("#contact-form").serialize(),
                function(data){
                    if(data.emailsent == 'yes'){
                        $('#contact-form').fadeOut(1000, function(){$("#form-info").html(infotext).fadeIn();});
                    } else {
                        $("#form-info").html(errortext);
                    }
                }, "json");
                return false;
            });
        });
});