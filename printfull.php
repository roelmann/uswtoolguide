<!DOCTYPE html>
<?php
$tooltype=$_POST['tooltype'];
$additional=$_POST['additional'];

require ('includes/head.php');
require ('lib.php');
$count=0;

foreach (new FilesystemIterator('tools') as $filename) {
	$toolname=substr($filename->getFilename(),0,strlen($filename->getFilename())-4);
	$count = $count+1;
	echo '<div style="page-break-after:always;">';
//	echo $filename.'-'.$toolname.'  '.$count;
    tooldetailprintlist($toolname, $additional);
    echo '</div>';
}
