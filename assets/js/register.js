$(document).ready(function(){
    var registerbtn = $("#registerbtn");
    var feedback = $(".feedback");

    registerbtn.click(function(){
        
        var msg = "";
        errors = [];

        feedback.empty();

        var username = $("#username").val();
        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var psw = $("#psw").val();
        var pswRe = $("#psw-repeat").val();

        var reUsername = /[a-zA-Z0-9._]{2,20}/;
        var reEmail = /[a-zA-Z0-9._]+[@]+[a-zA-Z0-9]+[.]+[a-zA-Z]{2,6}/;
        var reFirstname = /[A-Z][a-z]{2,14}/;
        var reLastname = /[A-Z][a-z]{2,24}/;
        var rePsw = /^[a-zA-Z0-9._@]{3,12}$/;

        if (!reUsername.test(username)) {
            errors.push("Username must be longer than 2 characters and only contain letters, numbers and .");
        }
        if (!reEmail.test(email)) {
            errors.push("Email must be longer than 4 characters and only contain letters, numbers and .");
        }
        if (!reFirstname.test(firstname)) {
            errors.push("First name must be between 2 and 15 characters long");
        }
        if (!reLastname.test(lastname)) {
            errors.push("Last name must be between 2 and 25 characters long");
        }
        if (!rePsw.test(psw)) {
            errors.push("Password must be between 3 and 12 characters and must not contain special characters except . _ @");
        }
        if (psw != pswRe) {
            errors.push("Passwords must match");
        }

        if (errors.length == 0) {
            
            $.ajax({
                type: "POST",  
                url: "modules/register.php", 
                data: { username:  username, email: email, firstname: firstname, lastname: lastname, psw: psw},
                success: function(response) {
                    feedback.html(response);
                },
                error: function(response) {
                    feedback.html(response);                    
                }
            });

            feedback.html("<div class='alert alert-success'> Account successfully created </div>");
        }
        else {
            msg = "";
            msg += "<div class='alert alert-warning'><ul>";
            for (var i = 0; i < errors.length; i++) {
                msg += "<li>" + errors[i] + "</li>";
            }
            msg += "</ul></div>";
            feedback.html(msg);
            msg = "";
        }

    });
});