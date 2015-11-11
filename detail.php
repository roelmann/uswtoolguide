<!DOCTYPE html>
<?php
$tooltype=$_POST['tooltype'];
$additional=$_POST['additional'];

require ('includes/head.php');
require ('lib.php');

tooldetail($tooltype, $additional);
