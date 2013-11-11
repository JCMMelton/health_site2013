<?php 
	if (isset($_POST['email']))
	{
		$email = mysql_real_escape_string($_POST['email']);
		$data = array();
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$data['message'] = "<a href='My Favorite Products.doc' download='My_favorite_products.doc'>Download</a>";
			//mail('tvillafane1990@gmail.com', 'who da man?', $email);
		}
		else
		{
			$data['message'] = "Please insert a valid email address";
		}
		echo json_encode($data);
	}

?>