<?php
function incl($filename)
                {
                       
                        include_once("$filename");
                       

                }
echo "Tha path is:\n";
incl('gitscript.php');
echo "The files included in the same document are: \n";
incl('giscript1gen.php');
echo "\n";
?>

