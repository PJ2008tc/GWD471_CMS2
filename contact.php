<style>
  body {
 background:url(images/fabric_of_squares_gray.png) repeat;
  }
  section {
    background:#999;
    width:60%;
    margin-left:auto;
    margin-right:auto;
    border-radius:10%;
    padding:30px;
    position:relative;
    top:-300px;
  }
  label{
    font-family:Arial;
    color:white;
  }
  section h2{
    font-family:Arial;
    color:white;
  }
  legend{
   font-family:Arial;
    color:white;
  }
input, textarea {
    width:439px;
    height:27px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
  </style>
  

<?php

      if(@$_POST['submit'])
      {
        require_once('includes/validation.php');
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $comments = trim($_POST['comments']);
        $errors = array();
        
        //test user info for non-valid data
        $valid = verifyAlphaNum($name);
        if(!$valid)
        {
           $errors['name'] = "Name must be letters, numbers, or spaces"; 
        }
        
        $valid = verifyEmail($email);
        if(!$valid)
        {
           $errors['email'] = "Please provide a valid email address - test@test.com"; 
        }
        
        $message = verifyText($comments);
	
	//if any errors, don't send email - else send email
	if(count($errors) === 0)
	{
		//prepare for sending email
		$destination = 'PJ2008tc@stu.aii.edu';
		$subject = 'Comments from my website';
		$body = "$name \n $email \n $comments";
		
		if(mail($destination, $subject, $body))
		{
			echo 'Your message has been sent. Below is the info you provided:';
			
			//test to see if form data is recieved.
			echo '<h1>Thanks for providing feedback</h1>';
			echo '<ul>';
			echo '<li>' . $_POST['name'] . '</li>';
			echo '<li>' . $_POST['email'] . '</li>';
			echo '<li>' . $_POST['comments'] . '</li>';
			echo '</ul>';
		}
		else
		{
			echo 'There was an error. Your message has NOT been sent.';
		}
	}//if count end

        }
        //else //form not submitted
        {
          echo 'Just view form';
        }
   ?>

  <?php $page_id = 'contact'; ?>
  <?php require_once('includes/top.php'); ?>
  <?php require_once('includes/header.php'); ?>

   <section>
    	<h2>Contact</h2>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <fieldset>
           <legend>Contact Us</legend>
           <p>
           <label for="name">Name: </label>
           <span class="error"><?php echo @$errors['name']; ?></span>
           <input type="text" name="name" placeholder="Type your name here" value="<?php echo @$_POST['name']; ?>" />
           </p>
           
           <p>
           <label for="email">Email: </label>
           <span class="error"><?php echo @$errors['email']; ?></span>
           <input type="text" name="email" placeholder="Email" value="<?php echo @$_POST['email']; ?>" />
           </p>
           
           <p>
           <label for="email">Comments: </label>
           <textarea name="comments" placeholder="type your message here"><?php echo @$_POST['comments']; ?>"</textarea>
           </p>
           
           <p>
           <input type="submit" value="send feedback now" name="submit" />
           </p>
         </fieldset>
    </section>  

   
   
   
  <?php require_once('includes/footer.php'); ?>
   
</body>
</html>