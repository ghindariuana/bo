<?php
function incl($filename) 
		{
			if(is_file("/home/ana/Ghindaroaica/$filename"))
			{

			include_once("/home/ana/Ghindaroaica/$filename");
			}
			else
		        {
			echo "There is no such file as: " . $filename . "\n";}
		}
echo "The path of the original <php> file: \n";
incl('gitscript.php');
echo "The files included are: \n";
incl('gitscript1.php');
?>
