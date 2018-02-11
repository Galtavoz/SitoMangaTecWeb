<?php
	require("config.php");
	session_start();
	$user = $_SESSION['username'];	
	$nome = $_SESSION['nome'];	
	if(!isset($_SESSION['nome'])) die();
?>
	<!DOCTYPE html><html lang="it">
	<head>    
	<meta charset="utf-8">    
	<title>Admin Area - Apremidi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/css2.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
	</head>  
	<body>    
		<nav class="navbar navbar-fixed-top">   
			<div class="navbar-inner"> 
				<div class="container-fluid">  
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span>  <span class="icon-bar"></span> <span class="icon-bar"></span></a>
					<a class="brand" href="home.php" title="Home">Admin Area - Sharinmanga</a> 
					<div class="nav-collapse collapse navbar-responsive-collapse">      
						<ul class="nav pull-right">      
							<li class="dropdown">           
								<div class="dropdown-menu">
									<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>      
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>    
	<div class="container-fluid"> 
		<div class="row-fluid">
			<div class="span3">  
				<div class="well sidebar-nav">   
					<ul class="nav nav-list">
						<?php     
							$arrStr = explode("/", $_SERVER['SCRIPT_NAME'] );
							$arrStr = array_reverse($arrStr); 
						?>
						<li class="nav-header">Home</li> 
						<li <?php if($arrStr[0]=="home.php"){echo "class=\"active\"";}?>><a href="home.php"><i class="icon-home"></i> Home</a></li>   
						<li class="nav-header">Manga</li>         
						<li <?php if($arrStr[0]=="inserisci-avviso.php"){echo "class=\"active\"";}?>><a href="inserisci-avviso.php"><i class="icon-plus"></i> Nuovo Manga</a></li>   
						<li <?php if($arrStr[0]=="avvisi.php"){echo "class=\"active\"";}?>><a href="avvisi.php"><i class="icon-file"></i> Gestione Manga</a></li>	
						<li class="nav-header">Capitoli</li>         
						<li <?php if($arrStr[0]=="inserisci-capitolo.php"){echo "class=\"active\"";}?>><a href="inserisci-capitolo.php"><i class="icon-plus"></i> Nuovo Capitolo</a></li>   
						<li <?php if($arrStr[0]=="capitoli.php"){echo "class=\"active\"";}?>><a href="capitoli.php"><i class="icon-file"></i> Gestione Capitoli</a></li>	
						<li class="nav-header">Chi Siamo</li>          
						<li <?php if($arrStr[0]=="chisiamo.php"){echo "class=\"active\"";}?>><a href="chisiamo.php"><i class="icon-file"></i>About Us</a></li>	          
						<li class="nav-header">Admin</li>          
						<li <?php if($arrStr[0]=="inserisci-admin.php"){echo "class=\"active\"";}?>><a href="inserisci-admin.php"><i class="icon-plus"></i> Nuovo admin</a></li>    
						<li <?php if($arrStr[0]=="admin.php"){echo "class=\"active\"";}?>><a href="admin.php"><i class="icon-user"></i> Gestione admin</a></li> 
						<li class="nav-header">File</li>      
						<li <?php if($arrStr[0]=="finder.php"){echo "class=\"active\"";}?>><a href="finder.php"><i class="icon-folder-open"></i> Gestione file</a></li>    
					</ul> 
				</div> 
			</div>
		</div>
	</div>