<?php 
  $title = 'Assignment3';
  include_once("include/header.php");
?>
	<!--main contents-->
  <div class="container asign3">
    <h2>Assignment 3</h2>
  <?php
    $name = '';
    $email = '';
    $validated = true;
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
      $name = trim(filter_input(INPUT_POST, "name"));
      $email = trim(filter_input(INPUT_POST, "email"));
      
      //valiedate
      if(empty($name)) {
        $validated = false;
        $nameError = 'Group name is required';
      }
      if(empty($email)) {
        $validated = false;
        $emailError = 'subject is required';
      }
    }
    if (($_SERVER["REQUEST_METHOD"] != 'POST') || $validated == false) { //start form block
      if ($validated == false) {
        echo '<h3>Please Enter require field!</h3>';
      }
      else {
        echo '<h3>Please submit your email</h3>';
      }
  ?>  
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
    <table>
      <!--textbox : Group Name-->
      <tr>
        <th><label for="name">Name</label></th>
        <td><input type="text" id="name" name="name" value="<?php if (isset($name)) echo $name; ?>"/></td>
        <td><span class="error"><?php if (isset($NameError)) echo $NameError; ?></span></td>
      </tr>
      <tr>
        <th><label for="email">Email</label></th>
        <td><input type="email" id="email" name="email" value="<?php if (isset($email)) echo $email; ?>"/></td>
        <td><span class="error"><?php if (isset($emailError)) echo $emailError; ?></span></td>
      </tr>
    </table>

    <input type="submit" value="Send"/>
  </form>
  <?php 
    } //close else block
    else {
      //display result
      echo "<h3>Thanks for your submission!</h3>";
      $userInput = '';
      $userInput .= 'Name : ' .$name .'<br />';
      $userInput .= 'Email : ' .$email .'<br />';
      echo $userInput;

      //php mail form

      require_once 'Mail.php';
      //simple smtp server
      $options = array();
      $options['host'] = 'smtp.gmail.com';
      $options['port'] = '465';
      $options['auth'] = 'true';
      $options['username'] = 'hannabeasiam@gmail.com';
      $options['password'] = 'XXXXX';
      //create mailer object
      $mailer = Mail::factory('smtp',$options);
      //send message
      $headers = array();
      $headers['From'] = "Hanna Lee <hannabeasiam@gmail.com>";
      $headers['To'] = $_POST['email'];
      $headers['Subject'] = 'Your Visited Page';
      //set recipient list
      $recipients =  $_POST['email'];
      $body = 'This is a visited pages from PHP study site';
      //$message = include_once("include/tracker.php");
      $result = $mailer->send($recipients,$headers,$body);
      //check result and display error if exit
      if (PEAR::isError($result)) {
        $result->getMessage();
        
      }
      $headers['Content-type'] = 'text/html';


    }
    /*
        } //close else block
    else {
      //display result
      echo "<h3>Thanks for your submission!</h3>";
      $userInput = '';
      $userInput .= 'Name : ' .$name .'<br />';
      $userInput .= 'Email : ' .$email .'<br />';
      echo $userInput;

      //php mail form
      $to = $email;
      $subject = 'Your Visited Page';
      $message = 'This is a visited pages from PHP study site';
      //$message = include_once("include/tracker.php");

      $additional_headers = 'From: php@localhost';

      if (mail($to, $subject, $message, $additional_headers)) {
        echo 'Email has been sent';
      } else {
        echo 'There was an error sending the email';
      }
    }
    */
  ?>
  </div>
<!--include footer-->
<?php include_once("include/footer.php"); ?>