//Code to check string is in palindrome or not
<?php
$strrev=0;
$string = readline("Enter the string to check palindrome: ");
$strrev = strrev($string);
if($strrev != $string)
{
    echo "it is not a palindrome";
} else
{ 
    echo "it is a palindrome";
}
?>

