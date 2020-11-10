<?php

  header('Content-Type:application/json');

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";

  # Get the instance ID from meta-data and print to the screen
  $myInstanceID=file_get_contents($urlRoot . 'instance-id');
  $myarray=array('InstanceID'=>$myInstanceID);
  echo json_encode($myarray);
?>