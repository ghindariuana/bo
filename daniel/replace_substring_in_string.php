<?php
/**
 * Am un link care ia ca parametru un numar x pentru a-mi returna x produse
 * De facut script care manipuleaza linkul
 * */

# il fac constanta pentru a nu putea fi modificat in program
define('LINK', 'https://user.infinity-best.com/accounts/index.php?records=FFFF&rfirst=0&status=0');

# print LINK
print(LINK . "\n");

# folsim un numar fix
$x = 723;

# printam linkul inlocuind FFFF cu numarul $x
// folosim str replace
print("\ttest using str_replace\n");
print(str_replace('FFFF', $x, LINK) . "\n");

// folosim preg_replace
print("\ttest using preg_replace\n");
print(preg_replace('/(FFFF)/', $x, LINK) . "\n");




