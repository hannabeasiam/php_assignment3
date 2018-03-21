<?php 
  //get id
  session_start();
  $total_count = 0;
  $page_count = array();
  //if session id not exist, create session id
  if(!isset($_SESSION['id'])) {
    $_SESSION['id'] = session_id();
  } else {
    $total_count = 1;
    $visited_page = array();
    $page_count = array();
    $last_page = end($visited_page);
    $current_url = $_SERVER['REQUEST_URI']; //request current url from server
    $current_filename = pathinfo($current_url,PATHINFO_FILENAME); //get filename
    echo($current_filename);
    if ($last_page !== $current_filename) {
      array_push($visited_page, $current_filename);
    } else {
      echo 'refresh';
    } 
    echo "<br/>";
    var_dump($visited_page);

  } 
  
  


  
  
 
  //
  /*
  function tracker(&$total_count, &$page_count, $title) {
    $total_count = $GLOBALS['total_count'];
    $page_count = $GLOBALS['page_count'];
    $total_count = $total_count + 1;
    if(isset($title)) {
      $i = 0;
      switch ($title) {
        case 'Home':
          $page_count[$title]['count'] = $i++;

      }

    } else {echo 'check title';}
    
  }
  
tracker class
class tracker {
  private $id;
  private $total_count;
  private $page_path;

  public function __construct($id, $total_count, $page_path) {
    $this-> id = $id;
    $this-> total_count = $total_count;
    $this-> page_path = $page_path;
  }

}*/
?>
<aside>
  <ul>
    <li>Total Visited Page</li>
    <li>XX</li>
    <li>Home <span> <?php ?><span></li>
    <li>Assignment1 <span><?php ?><span></li>
    <li>Assignment2 <span>XX<span></li>
    <li>Assignment3 <span>XX<span></li>
    <li>Assignment4 <span>XX<span></li>
  </ul>
</aside>
