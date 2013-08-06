<?php 
class Calea{
    # instantiate private properties
    private $myname;
    private $mydir;
    private $content;

    # populate properties with data
    public function __construct($file = NULL){
        if(is_null($file)){
            $file= __FILE__;
        }
        $this->myname = basename($file);
        $this->mydir = dirname($file);
        $this->content = array_diff(scandir($this->mydir), array('..', '.'));
    }

    # introductory method, tells something about this file
    public function introduction(){
        echo "\nHello my filename is \t= " . $this->myname . "\n".
            "and I am located at \t= " . $this->mydir . "\n\n";
        printf("Files in " . $this->mydir . " : %s", implode("\n\t", $this->content));
        print("\n");
    }
}
