<?php
$retval = scandir("data");
foreach($retval as $file_name)
{
	preg_match("/\d+/", $file_name, $matches);
	$cmd = "cat exec.R | R --slave --args " . $matches[0];
	echo $file_name . " ---> " .  $cmd . "\n";
//	echo $cmd . "\n";
	system($cmd);
}

?>
