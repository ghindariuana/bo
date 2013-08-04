<?php
function get_content($filename)
{
$array=scandir("$filename");
foreach($array as $value)
                        {
                        echo $value . "\n";
                        }
}

get_content('/home/ana/Ghindaroaica');
echo "\n";

?>
 
