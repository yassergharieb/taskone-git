<?php


// task 1

function gitThenextchar($char){

  
   $alphabet= "abcdefghigklmnopqrstuvwxyz";
for ( $i=0;  $i<strlen($alphabet) ;  $i++) {
  
   
   if ($char === $alphabet[$i]) {
   
  echo $alphabet[$i+1];

   } elseif ($char === stristr($alphabet ,"z") ) {

     echo $alphabet[0];  }
   }
   }

   gitThenextchar("s");



// task 2

function extractnum($url) {

$output = preg_replace('/[^0-9]/', '', $url);  
echo $output; 
}

extractnum('http://www.example.com/5478631')

?>
