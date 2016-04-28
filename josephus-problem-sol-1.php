<?php 




/* Solution 2 */
echo josephus( 100, 2);
function josephus( $n, $k){
  if ($n ==1){
    return 1;
  }
  else{
    return ((josephus($n-1,$k)+$k-1) % $n)+1;
  }
}

?>