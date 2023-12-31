<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url();?>assets/css/qurankitastyle.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap"
      rel="stylesheet"
    />

    <title><?= $title; ?> </title>
  </head>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: none;
  text-decoration: none;
  font-family: 'Agbalumo';
  
}
    body {
    background: url('<?= base_url('assets/svg/bgblur.svg'); ?>');
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    backdrop-filter: blur(10px);
    background-size: cover;
    background-attachment: fixed;
    margin: 0;

}
</style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>">QURAN KITA</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url();?>asmaul_husna">Asmaul Husna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url();?>kumpulan_doa">Kumpulan Doa</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sholat
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url();?>jadwal">Jadwal Sholat</a></li>
            <li><a class="dropdown-item" href="<?= base_url();?>bacaan">Bacaan Sholat</a></li>
            <li><a class="dropdown-item" href="<?= base_url();?>sholat_sunnah">Sholat sunnah</a></li> 
          </ul>
        </ul>
        <!-- <div class="toggle-switch" >
<label class="switch-label">
<input type="checkbox" class="checkbox">
<span class="slider"></span>
</label>
</div>   -->
      
    </div>
    
  </div>
</nav>

<br><br><br>
  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>