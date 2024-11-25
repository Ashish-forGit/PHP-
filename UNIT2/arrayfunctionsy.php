<?php

 $a=[1,2,3,4];
 $b=[2=>6, 3=>5];
 $d=[7,8];
//  $c= array_replace($a, $b);
//   echo "<pre>";
//   echo print_r($c);
//  echo "</pre>";
//  array_splice($a, 1, 2, $d);
//  echo "<pre>";
//    echo print_r($a);
//   echo "</pre>";

  // Default preferences for the user
  $default_preferences = [
      'theme' => 'light',
      'notifications' => [
          'email' => true,
          'push' => true
      ]
  ];
  
  // User's new preferences to update
  $user_preferences = [
      'theme' => 'dark',  // User wants to change theme to dark
      'notifications' => [
          'push' => false   // User wants to turn off push notifications
      ]
  ];
  
  // Use array_replace_recursive to merge preferences
  $final_preferences = array_replace_recursive($default_preferences, $user_preferences);
  
  // Print final preferences after merging
  echo "Final user preferences after update:\n";
  print_r($final_preferences);
  ?>


?>