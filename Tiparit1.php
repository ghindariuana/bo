<?php
function incl($filename)
                {
                       
                        include_once("$filename");
                       

                }
echo "Tha path is:\n";
incl('Path1.php');
echo "The files included in the same document are: \n";
incl('Continut1.php');
echo "\n";
?>

