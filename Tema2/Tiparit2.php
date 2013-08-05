<?php
//Check for the content of the "$filename" directory, which is located in "$filepath";

function get_content($filename)
				{
				$array=scandir("$filename");				;
				foreach($array as $value)
                       					 {
							  echo $value . " >> ";          							  }
				}

//Echo the path;

echo "Tha path is:\n";
$filepath=include('Path2.php');

//Echo the content of the directory, using the path above;

echo $filepath . "\n";
echo "The files included in the same document are: \n";
get_content("$filepath");
echo "\n";
?>

