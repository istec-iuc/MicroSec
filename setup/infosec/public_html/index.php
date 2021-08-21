
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="CSS/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style type="text/css">
	body {
		margin: 0;
		padding: 0;
		background: url(https://wallpaper8k.com/inside/categories/36/31637_42277.jpg);
		background-size: cover; 
	}
	.card {
		position: absolute;
		top: 40%;
		left: 50%;
		width: 25rem;
		padding: 2.5rem;
		transform: translate(-50%, -50%);
		background: rgba(255, 255, 255, 0.5);
		border-radius: 0.625rem;
	}
	.card-title {
		font-size: 25px;
		font-family: 'Montserrat',sans-serif;
	}
	.input1 {
		background: rgba(255, 255, 255, 0.5);
		letter-spacing: 1px;
	}
	.form-group span{
		color: #222;
		position: relative;
		width: 40px;
		top: 27px;
		right: 27px;
	}
	.btn-info{
		letter-spacing: 3px;
		font-weight: 1000;
	}
  </style>
</head>
<body>
   <div class="container">
   	<div class="row">
   			<div class="card">
   				<div class="card-title"><strong>Welcome to MicroSec</strong></div>
   				<form action="login.php" method="post">
				   <br><br>
   						<div class=" form-group" >
   						<span><i class="fas fa-user"></i></span> 
   						<input type="text" style="width:100%;" name="name" placeholder="Username" class="input1">
   					   </div><br>
   					   <div class="form-group">
   						  <span><i class="fas fa-key"></i></span>
   						  <input type="password" style="width:100%;" name="pass" placeholder="Password" class="input1">
   					    </div>
   				    <button type="submit" style="width:100%;"class="btn btn-info">Login</button>
   				    <br><br>
					   
   			</form>
			   <a href="register.php" >
			   <button type="submit" style="width:100%;"class="btn btn-info">Create Account</button>
				</a>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>
</body>
</html>
