<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Admin Login</title>

  <link rel="stylesheet" href="css/admin/loginreset.css">

    <link rel="stylesheet" href="css/admin/loginstyle.css" media="screen" type="text/css" />

</head>

<body>

  <div class="wrap">
		<div class="avatar">
      <img src="https://maxcdn.icons8.com/Share/icon/Users//administrator1600.png">
		</div>
		<form role="form" method="POST" action="#">
			{{ csrf_field() }}
			<input type="text" name="username" placeholder="username" required autofocus>
			<div class="bar">
				<i></i>
			</div>
			<input type="password" placeholder="password" required>
			<a  class="forgot_link" href="#">Forgot?</a>
			
			<button>Sign in</button>
		</form>
	</div>

  <script src="js/admin/login.js"></script>

</body>

</html>