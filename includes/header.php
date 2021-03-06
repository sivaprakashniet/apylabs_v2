<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Apylabs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Palanquin:wght@200;300;400;500;600;700&display=swap">
		<link rel="stylesheet" href="style/bootstrap.css">
        <link rel="stylesheet" href="style/style.css">
    </head>
   <body>
	   <!-- Wrapper -->
	   <div class="wrapper">
            <!--Header-->
            <nav class="navbar navbar-expand-lg header">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo-2x.png" alt="Apylabs"> 
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse flex-md-grow-0" id="mobileMenu">
                        <ul class="navbar-nav mr-auto main-nav">
                            <li class="nav-item"><a href="team.php">About</a></li>
                            <li class="nav-item"><a href="team.php">Services</a></li>
                            <li class="nav-item<?php echo (isset($active_menu) && $active_menu == 'works')?' active':''; ?>"><a href="works.php">Works</a></li>
                            <li class="nav-item<?php echo (isset($active_menu) && $active_menu == 'Blog')?' active':''; ?>"><a href="blog.php">Blog</a></li>
                            <li class="nav-item<?php echo (isset($active_menu) && $active_menu == 'contact')?' active':''; ?>"><a href="contact.php">Contact US</a></li>
                        </ul>
                    </div>
                </div>
            </nav><!--/Header-->