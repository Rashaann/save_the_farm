<?php
  
function pee(){

  global $location, $needs_to_pee;

  if (($location === "bathroom")||($location === "woods")) {
    echo "You relieved yourself.\n";
    $needs_to_pee = FALSE;
  } else {
    echo "Are you crazy? You can't pee here, ya filthy dawg!\n";
  }

}