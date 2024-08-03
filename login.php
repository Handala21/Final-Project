<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bulin Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
        body {
            background-color: #AE1611;
            justify-content:space-around;
        }

        .outer {
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .formcontainer {
            background-color: white;
            width: 200px;
            height: 350px;
            text-align: center;
            padding: 50px 20px 0px 20px;
        }


        .form_header {
            font-size: 18px;
            font-family: 'Arial';
            color: #383D4A;
            font-weight: bolder;
            padding-bottom: 30px;
        }

        .form{
            widht:50%;
            position:relative;
            overflow:hidden;
            margin-bottom:10px;
        }
        .form input{
            width:100%;
            height:100%;
            padding-top:15px;
            border:none;
            outline:none;
            color: #AE1611;
            font-size: 14px;
        }
        .form label {
            position: absolute;
            width:100%;
            height:100%;
            bottom:0px;
            left:0%;
            pointer-events:none;
            border-bottom:2px solid #D8D8D8;
        }
        .form label::after{
            content:"";
            position:absolute;
            width:100%;
            height:100%;
            border-bottom:3px solid #AE1611;
            bottom:-1px;
            left:0px;
            transform:translateX(-100%);
            transition:all 0.3s ease;
        }
        .content-name{
            position:absolute;
            bottom:5px;
            left:0px;
            transition:all .3s ease;
            color: #D8D8D8;
            font-family: Arial;
            font-size: 12px;
        }
        .form input:focus + .label-name .content-name ,
        .form input:valid+ .label-name .content-name{
            font-size:0px;
            color:white;
        }
            .form input:focus+ .label-name::after, 
            .form input:valid+ .label-name::after {
            transform:translateX(0%);
            
        }

        .submit {
			background-color: #AE1611;
			color: white;
			border: none;
			border-radius: 30px;
			cursor: pointer;
			width: 70%;
			font-size: 11px;
            font-family: 'Arial';
            font-weight: bold;
            padding: 5px 0px 5px 0px;
            margin-top: 15px;
		}

        .footer {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
            margin-top: 50px;
        }

        .footer_text {
            padding-left: 40px;
        }

        a:link {
            text-decoration: none;
            color: #AE1611;
            font-weight: 550;
        }
        a:hover {
            font-weight: bold;
            text-decoration: none;
            color: #AE1611;
        }
        a:visited {
            text-decoration: none;
            color: #AE1611;
            font-weight: 550;
        }

    </style>
</head>
<body>
    <div class="outer">
        <div class="formcontainer">
            <form action="user.php" method="post">
                <p class="form_header">MEMBER LOGIN</p>
                <div class="form">
                    <input type="text" name="username" required>
                    <label for="username" class="label-name">
                        <span class="content-name">Type Your Username</span>
                    </label>
                </div>
                <div class="form">
                    <input type="password" name="password" required>
                    <label for="password" class="label-name">
                        <span class="content-name">Type Your Password</span>
                    </label>
                </div>
                <input class="submit" type="submit" value="LOGIN" name="login">
                <div class="footer">
                    <div>
                        <a href="register.php">Forgot Password?</a>
                    </div>
                    <div class="footer_text">
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <img src="burger.jpg" alt="">
        </div>
    </div>
</body>
</html>