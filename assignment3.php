<?php 
  $title = 'Assignment3';
  include_once("include/header.php");
?>
	<!--main contents-->
  <div class="container asign3">
	  <h2>Assignment 3</h2>
    <form action="mailform.php" method="POST">
	  <input type="hidden" name="recipient" value="php@localhost">
	  <input type="hidden" name="replyto" value="newuser@localhost">
  	<input type="hidden" name="from" value="newuser@localhost">
    <input type="hidden" name="redirect" value="thankyou.html">
	  <input type="hidden" name="redirecterror" value="emailerror.html">
    <input type="hidden" name="subject" value="Your Visited Page">
	  <p>Name: <input type="text" name="name" /></p>
	  <p>Email: <input type="text" name="email" /></p>

	  <input type="submit" name="submit" value="Send" />
	</form>
  </div>
<!--include footer-->
<?php include_once("include/footer.php"); ?>