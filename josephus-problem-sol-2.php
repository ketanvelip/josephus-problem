<?php 


/* Solution 1 */

$n = 100;    // total number of people
for ($i=1; $i <=$n ; $i++) { 
  $list[] = $i;
}

$survive = getLastElement($list,1);
echo "<br/>";
print_r($survive[0]);

function getLastElement($list,$j){
  foreach($list as $key => $value){
    if($j==4){
      unset($list[$key]);
      $j=1;
    }else{
      $j++;
    }
  }
  if(count($list)==1){
    return array_values($list);
  }
  print_r("<br/>".implode(",", $list)."<br/>");
  return getLastElement($list,$j);
}

?>