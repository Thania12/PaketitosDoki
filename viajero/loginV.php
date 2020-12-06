<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.es/b16024689/crm/site_button/loader_1_0ci0vx.js');
</script>
<body>
	
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Template CSS -->
	<link rel="stylesheet" href="../assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>
<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
			<h1><a class="navbar-brand" href="../index.php" background-color= #ffffff ><span>P</span>aquetitos <span>D</span>oki</a></h1>
				</span></a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.php">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="fa icon-expand fa-bars"></span>
						<span class="fa icon-close fa-times"></span>
					</button>
	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
						</ul>
		</nav>
		<!--//nav-->
	</header>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1> Iniciar sesión (Viajero) </h1>
			</div>
			<form method = "POST" action="inicioViajero.php" name="signin-form">
			<div class="login-form">
				<div class="control-group">
				<input type="text" class="Correo" name="Correo" value="" placeholder="Correo" id="Correo">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" name="Contra" value="" placeholder="Contraseña" id="login-pass">
				<label class="login-field-icon fui-lock" for="Iniciar"></label>
				</div>

				<button type="submit" class="btn btn-primary btn-large btn-block" name="login" href="altaViajes.php"> Iniciar sesión </button>
				
			</div>
		</div>
    </div>
	</form>
    <!--Estilo del botton-->
    <style>
        * {
box-sizing: border-box;
}

*:focus {
	outline: none;
}
body {
font-family: Arial;

padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
background-image: url("assets/images/1.jpg");
}
.login-screen {
background-color: #FFF;
padding: 10px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;

}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
	margin-top: 12px;
}
    </style>
</body>