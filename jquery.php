<html>
<body>
<form id="contact" name="contact" method="post" novalidate>
    <fieldset>
        <label for="name" id="name">Name<span class="required">*</span>
        </label>
        <input type="text" name="name" id="name" size="30" value="" required/>
        <label for="email" id="email">Email<span class="required">*</span>
        </label>
        <input type="text" name="email" id="email" size="30" value="" required/>
        <label for="Message" id="message">Message<span class="required">*</span>
        </label>
        <textarea name="message" id="message" required></textarea>
        <input id="submit" type="submit" name="submit" value="Send" />
    </fieldset>
</form>
<div id="success"> <span>
                    <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
                 </span>

</div>
<div id="error"> <span>
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                 </span>

</div>

<script type = "text/javascript" >
/*validate contact form*/
$(function () {
    $('#contact').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            },
        },
        messages: {
            name: {
                required: "come on, you have a name don't you?",
                minlength: "your name must consist of at least 2 characters"
            },
            email: {
                required: "no email, no message"
            },
            message: {
                required: "um...yea, you have to write something to send this form.",
                minlength: "thats all? really?"
            },
        },
        submitHandler: function (form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "contact_me.php",
                success: function () {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo("slow", 0.15, function () {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor', 'default');
                        $('#success').fadeIn();
                    });
                },
                error: function () {
                    $('#contact').fadeTo("slow", 0.15, function () {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
}); 
</script>
</body>
</html>