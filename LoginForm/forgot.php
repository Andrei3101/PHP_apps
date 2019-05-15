<?php
include('dbcon.php');
/**
 * Created by IntelliJ IDEA.
 * User: ANDY
 * Date: 10-May-19
 * Time: 17:51
 */
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper">
    <h3> Enter Username Here : </h3>

    <form method="post" action="">

        <div class="form-item">
            <input type="text" name="forgotUser" required="required" placeholder="Username" autofocus required></input>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" title="forgot" name="forgotPass" value="Require HINT"></input>
        </div>

    </form>

    <?php
    if (isset($_POST['forgotPass'])) {
        $username = mysqli_real_escape_string($con, $_POST['forgotUser']);

        $query3 = mysqli_query($con, "SELECT * FROM users WHERE username='$username';");
        $row = mysqli_fetch_array($query3);
        $num_row = mysqli_num_rows($query3);
        if ($num_row == 1 ) {
            echo "User Already Exists ! Password Hint :" . $row['password'][0]. " <br>" ." Length: ". strlen( $row['password'] );
        } else {
            echo "There is no such User !";
        }
    }
    ?>

    <div class="reminder">
        <p><a href="index.php">Back to Login page -> </a></p>
    </div>
</div>

</body>
</html>

