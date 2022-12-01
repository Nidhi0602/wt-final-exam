<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi, I am Nidhi Agrawal, A067, from Batch 3 & currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
fclose($myfile);
?>