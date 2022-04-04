<?php
function my_create_map(...$arrays)
{
  foreach($arrays as $key => $value)
  {
    if ((count($value)) < 2)
    {
      echo "The given arguments aren’t valid." . "\n";
      return NULL;
    }
    $biga[$value[0]] = $value[1];
  }
  return $biga;

}
