<?php 
  session_start();
  $current_url = $_SERVER['REQUEST_URI']; //request current url from server
  $cFile = pathinfo($current_url,PATHINFO_FILENAME); //get filename
  if ($cFile == 'php_assignment3') {
    $cFile = 'index';
  }
  echo $cFile;
  $total_count = 0;
  //if session not exist, create session 
  if(!isset($_SESSION['counter'][$cFile])) {
    $_SESSION['counter'][$cFile] = 1;
  } else {
    $_SESSION['counter'][$cFile]++;
  }
  $total = $_SESSION['counter'];
  foreach($total as $key => $value) {
    $total_count += $value;
  }
?>
<aside>
  <ul>
    <li>Total Visited Page</li>
    <li><?php if(isset($total)) { echo ($total_count); } ?></li>
    <li>Home <span class="number"><?php if(isset($_SESSION['counter']['index'])) { echo $_SESSION['counter']['index']; } ?><span></li>
    <li>Assignment1 <span class="number"><?php  if(isset($_SESSION['counter']['assignment1'])) { echo $_SESSION['counter']['assignment1']; } ?><span></li>
    <li>Assignment2 <span class="number"><?php if(isset($_SESSION['counter']['assignment2'])) { echo $_SESSION['counter']['assignment2']; } ?><span></li>
    <li>Assignment3 <span class="number"><?php if(isset($_SESSION['counter']['assignment3'])) { echo $_SESSION['counter']['assignment3']; } ?><span></li>
    <li>Assignment4 <span class="number"><?php if(isset($_SESSION['counter']['assignment4'])) { echo $_SESSION['counter']['assignment4']; } ?><span></li>
  </ul>
</aside>
