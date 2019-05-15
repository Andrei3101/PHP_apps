<?php
/**
 * Created by IntelliJ IDEA.
 * User: ANDY
 * Date: 10-May-19
 * Time: 16:06
 */

session_start();
session_destroy();
header('location:index.php');
?>