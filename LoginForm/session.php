<?php
/**
 * Created by IntelliJ IDEA.
 * User: ANDY
 * Date: 10-May-19
 * Time: 16:07
 */

//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id2']) || (trim($_SESSION['user_id2']) == '')) {
    header("location: index.php");
    exit();
}
$session_id=$_SESSION['user_id2'];

?>