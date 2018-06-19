<?php
  function calc($array)
  {
    $array = array_count_values(array_map('strtolower',$array));
    foreach ($array as $value)
      {
        if($value%2==0)
        return true;
      }       
    return false;      
  }
?>