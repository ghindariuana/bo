<?php

# include class
require_once('./calea.php');

# instantiate object
$calea = new Calea();

# inform us about the class file
$calea->introduction();

# inform us about this file
$me = new Calea(__FILE__);
$me->introduction();


