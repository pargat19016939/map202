<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <title>MAP 202</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
        <style>
            body>.container {
                padding: 60px 15px 0;
            }
        </style>
    </head>

    <body>
		<header>
            <!-- Fixed navbar -->
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
                <a class="navbar-brand" href="#">MAP 202</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                            </a>
                        </li>
						<!--<li class="nav-item">
                            <a class="nav-link" href="form">Form
                            </a>
                        </li>-->
                    </ul>
					<ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a class="nav-link" href="logout/pargat">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>
