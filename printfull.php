<!DOCTYPE html>
<?php
$tooltype=$_POST['tooltype'];
$additional=$_POST['additional'];

require ('includes/head.php');
require ('lib.php');
echo '<div class="printfull">';
echo '<h2>Use your browser print option to print the list - each tool will appear on a separate sheet.</h2><h4>The number alongside the tool title will give you a guide if you only wish to print certain pages using the "Pages" option in your browser Print window.</h4>';
$count=0;

$printfiles = array();
foreach (new FilesystemIterator('tools') as $pfilename) {
	$printfiles[] = $pfilename;
}
usort($printfiles, strcasecmp);
foreach ($printfiles as $pfilename) {
	if ($pfilename != 'tools/title.php') {
		$count ++;
		echo '<div style="page-break-after:always;">';
		echo '<h2>'.$count.'  '.$pfilename.'</h2>';
		tooldetailprintlist($pfilename, $additional);
		echo '</div>';
	}
}

echo '</div>';
