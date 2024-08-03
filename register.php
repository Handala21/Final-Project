<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizza Palace - Homepage</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url("yellow.jpg");
			background-repeat: no-repeat;
			background-size: cover;

		}

		.textcontainer {
			width: 420px;
			height: 450px;
			border-radius: 5px;

			background-image: url("pizza.jpg");
			background-repeat: no-repeat;
			background-size: cover;


			font-family: Helvetica;
			color: white;

			position: absolute;
			bottom: 200px;
			left: 400px;

			box-shadow: 20px 20px 30px 5px rgba(0,0,0,0.3);
		}

		.text {
			position: absolute;
			bottom: 50px;
			left: 50px;
		}

		.formcontainer {
			width: 400px;
			padding: 20px 0 60px;

			background-color: #fff;

			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 20px 20px 30px 5px rgba(0,0,0,0.2);

			position: absolute;
			bottom: 260px;
			left: 720px;
		}

		.form {
			margin-top: 20px;
			margin-left: 60px;
		}

		.form__group {
			position: relative;
			padding: 15px 0 0;
			margin-top: 10px;
			width: 80%;
		}

		.form__field {
			width: 100%;
			border: 0;
			border-bottom: 1px solid #C2BA81;
			outline: 0;
			font-size: 15px;
			padding: 7px 0;
			background: transparent;
			transition: border-color 0.2s;

			&::placeholder {
				color: transparent;
			}

			&:placeholder-shown ~ .form__label {
				font-size: 15px;
				cursor: text;
				top: 20px;
			}
		}

		.form__label {
			position: absolute;
			top: 0;
			display: block;
			transition: 0.2s;
			font-size: 15px;
			color: grey;
		}

		.form__field:focus {
			~ .form__label {
				position: absolute;
				top: 0;
				display: block;
				transition: 0.2s;
				font-size: 15px;   
		}
		padding-bottom: 6px;  
		font-weight: 700;
		border-width: 3px;
		border-image: linear-gradient(to right, $primary,$secondary);
		border-image-slice: 1;
		}
		/* reset input */
		.form__field{
		&:required,&:invalid { box-shadow:none; }
		}

		.form input[type="submit"] {
			background-color: #EC452E;
			color: #fff;
			padding: 10px 15px 15px 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin: 20px 70px 0 0;
			width: 80%;
			box-shadow: 0px 10px 30px 5px rgba(0,0,0,0.3);
			font-size: 15px;
		}

		.form input[type="submit"]:hover {
			background-color: lightcoral;
		}
	</style>
</head>

<body>
	<div class="textcontainer">
		<div class="text">
			<h2>Need some <br> Pizza, yo?</h2>
			<p>C'mon and order from nearby Pizza <br> delivery and pickup restaurants</p>
		</div>
	</div>
	<div class="formcontainer">
		<form class="form" action="user.php" method="post">
			<div class="form__group field">
  				<input type="input" class="form__field" placeholder="Username" name="username" id='username' required />
  				<label for="username" class="form__label">Username</label>
			</div>
			<div class="form__group field">
  				<input type="input" class="form__field" placeholder="E-mail" name="email" id='email' required />
  				<label for="email" class="form__label">E-mail</label>
			</div>
			<div class="form__group field">
  				<input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
  				<label for="password" class="form__label">Password</label>
			</div>
			
			<input type="submit" value="Sign Up" name="register">
		</form>
	</div>
</body>

</html>