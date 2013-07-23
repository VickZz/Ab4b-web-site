<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title> <?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="./bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./bootstrap/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://www.ab4b.it/">Ab4B</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<?php echo $home_button; ?>"><a href="http://www.ab4b.it">Home</a></li>
              <li class="<?php echo $contact_button; ?>"><a href="contact.php">Contact</a></li>
              <li class="dropdown">
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>