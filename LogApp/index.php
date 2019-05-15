<?php
/**
 * Created by IntelliJ IDEA.
 * User: ANDY
 * Date: 23-Apr-19
 * Time: 11:29
 */
$text = "Hello friend  2!";
?>

<!DOCTYPE html>
<html>

<head>
    <title>LogApp</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script>
        function checkForm()
        {
            var email = document.forms["RegForm"]["EMail"];
            var password = document.forms["RegForm"]["Password"];
            var comment = document.forms["RegForm"]["Comment"];

            if (email.value == "" || email.value.indexOf("@", 0) < 2 || email.value.indexOf(".", 0) < 2)
            {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (password.value == "")
            {
                window.alert("Please enter your password");
                password.focus();
                return false;
            }

            if (comment.value == "" || comment.value == null  )
            {
                window.alert("Please enter your comments");
                comment.focus();
                return false;
            }

            return true;
        }</script>


</head>

<body>

<div id = "box1">
     <div id ="box2"> <br>L O G I N &nbsp; &nbsp;    F O R M
         <form name="RegForm" action="" onsubmit="return checkForm()" method="post">

             E-mail Address: <input type="text" size=20 name="EMail"><br>
             Password: <input type="password" size=20 name="Password"><br>

             Comments:  <textarea cols="30" name="Comment"></textarea>
             <p><input type="submit" value="send" name="Submit">
                 <input type="reset" value="Reset" name="Reset">
             </p>
         </form>

     </div>
</div>

</body>
</html>