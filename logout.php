<?php
session_start();
unset($_SESSION["usertype"]);
session_destroy();
header("location:2login.php");