<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  
  <title><?php echo $judul; ?>
  </title>
  <style>
    .navbar {
			background-image: url(<?php echo base_url()?>assets/img/header-api.png);
		}
  </style>
</head>

<body style ="  background-image: url(<?php echo base_url()?>assets/img/bg-api.png);
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" style="color: #15377C; font-family: 'Cabin', sans-serif; font-size: 35px" href="#">FORM MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa"></a>
        </div>
      </div>
    </div>
  </nav>
