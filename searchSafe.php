<?php

function searchSafe(){

  global $location, $moved_cupboard, $rounds_left, $winning_status;

  if(($location !== "kitchen") || (!$moved_cupboard)) {
    echo "You don't see any safe here!\n";
  } else {
    echo "You search through the safe (the passcode is \"1234\"). With bated breath, you pull out the contents! It's a chocolate Mickey Mouse, wrapped in gold foil. Delicious!\nYOU WIN THE GAME!!!!\n\n";
    $winning_status = TRUE;
    $rounds_left = 1;
  }

}  