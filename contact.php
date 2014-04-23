 
  <?php $page_id = 'contact'; ?>
  <?php require_once('includes/top.php'); ?>
  <?php require_once('includes/header.php'); ?>

  <form id="demo" action="/courses/imd315/form.php" method="post">
		<fieldset>
        <h2>Contact Support and Customer Service</h2>
        <h3>How Can We Help You?</h3>
        <p>Fill out all empty fields with your information and questions and we will contact you as soon as possible</p>
			<p>
				<label for="name">Name:</label>				<input type="text" id="name" name="name" value="" class="required" placeholder="please add you input here />
			</p>
			<p>
				<label for="email">Email:</label>				<input type="text" id="email" name="email" value="" class="email required" />
			</p>
			<p>
				<label for="message">Message:</label>				<textarea cols="45" rows="7" id="message" name="message" class="required"></textarea>
			</p>
			<input name="submitted" type="submit" value="Send" />
		</fieldset>
	</form>

    <section>
    	<h2>Contact</h2>
        <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </section>
   
  <?php require_once('includes/footer.php'); ?>
   
</body>
</html>