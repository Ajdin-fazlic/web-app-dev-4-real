  function validateContactForm() {
        var valid = true;

        $(".label").html("");
        $(".userInput").css('border', '#e0dfdf 1px solid');
        var userName = $("#name").val();
        var userLastName = $("#surname").val();
        var userEmail = $("#mail").val();
        var userMessage = $("#message").val();

        if (userName == "") {
            $("#userFirstName").html(" First name is Required!");
            $("#name").css('border', '#e66262 1px solid');
            valid = false;
        }
        if (userLastName == "") {
            $("#userLastName").html(" Last name is Required!");
            $("#surname").css('border', '#e66262 1px solid');
            valid = false;
        }

        if (userEmail == "") {
            $("#userMail").html(" E mail is Required!");
            $("#mail").css('border', '#e66262 1px solid');
            valid = false;
        }
     
        if (userMessage == "") {
            $("#userComment").html(" Message is Required!");
            $("#message").css('border', '#e66262 1px solid');
            valid = false;
        }
        return valid;
    }