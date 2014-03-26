<?php

$out = '';
if ($handle = opendir('.')) {
	while (false !== ($file = readdir($handle))) {
		if(preg_match("/\.xml$/", $file)){ 
			$out .= $file.';';
		}
  }
	closedir($handle);
}
echo substr($out, 0, strlen($out)-1);

?>

