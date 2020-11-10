<?php
  # Start PHP Session to keep track of whether or not load is getting generated
  session_start();
  echo "<meta http-equiv=\"refresh\" content=\"5,URL=/load-end.php\" />";
  $idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');


    
  echo exec('sudo kill -s 9 `ps -aux | grep dd|grep if=/dev/zero | awk \'{print \$2}\'`');
  echo "We have ended the load test.";

?>
