<?php

function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "select * from users where userName = '$id' limit 1";

		$result = mysqli_query($con,$query);

		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
      if($user_data["userName"] != $_SESSION['user_id']){
        header("Location: ../pages/backOfficeLogin.php");
      die;
      }
		}
	}else{
    header("Location: ../pages/backOfficeLogin.php");
    die;
  }
}
