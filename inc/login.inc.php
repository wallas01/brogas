<?php

include("../inc/connection.php");
include("../inc/functions.php");

    $user_name = $_POST['user_name'];
	$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) )
		{

			$query = "select * from users where userName = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
                
				if($result && mysqli_num_rows($result) > 0)
				{
                    
					$user_data = mysqli_fetch_assoc($result);
                    if($user_data['userPwd'] == $password)
					{
                        session_start();
						$_SESSION['user_id'] = $user_data['userName'];
						header("Location: ../pages/backOffice.php");
						die;
					}
				}
			}
			
			header("Location: ../pages/backOfficeLogin.php");
		}else
		{
			echo "wrong username or password!";
		}
