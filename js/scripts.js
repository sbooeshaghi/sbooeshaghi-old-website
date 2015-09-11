$(function() {
    $("#submit").click(function() {
        _inputName = $("#inputName").val();
        _inputEmail = $("#inputEmail").val();
        _inputHuman = $("#inputHuman").val();
        _inputMessage = $("#inputMessage").val();
        
        form = $("#contactform");
        elements = form.find(":input");
        elements.val("");
        
        if(_inputName && _inputEmail && _inputMessage && _inputHuman == 4) {
            alert("Thank you for submitting! I will get back to you soon :)")
            $.post("http://alisina.scripts.mit.edu/contact.php", { 
                inputName: _inputName, inputEmail: _inputEmail, inputHuman: _inputHuman, inputMessage: _inputMessage 
            }, function(data) {
                alert(data);
            });
        }
    });
});

// Nikita Samsonov wrote this, he helped and is a badass
// samsonov@mit.edu https://www.facebook.com/borggrown