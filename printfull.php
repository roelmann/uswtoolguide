<!DOCTYPE html>
<?php
$tooltype=$_POST['tooltype'];
$additional=$_POST['additional'];

require ('includes/head.php');
require ('lib.php');
echo '<div class="printfull">';
echo '<h2>Use your browser print option to print the list - each tool will appear on a separate sheet.</h2><h4>The number alongside the tool title will give you a guide if you only wish to print certain pages using the "Pages" option in your browser Print window.</h4>';
$count=0;
foreach (new FilesystemIterator('tools') as $filename) {
	$toolname=substr($filename->getFilename(),0,strlen($filename->getFilename())-4);
	$count = $count+1;
	echo '<div style="page-break-after:always;">';
	echo '<h2>'.$count.'  '.$toolname.'</h2>';
    tooldetailprintlist($toolname, $additional);
    echo '</div>';
}
echo '</div>';
