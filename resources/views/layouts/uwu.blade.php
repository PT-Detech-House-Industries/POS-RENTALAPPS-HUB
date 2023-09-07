<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uwu template (nihonuwu-template)</title>
  <style>
    /* CSS untuk mengatur div yang mengandung gambar */
    .centered-container {
      display: flex;
      justify-content: center;
      /* Mengatur div ke tengah horizontal */
      align-items: center;
      /* Mengatur div ke tengah vertikal */
    }

    /* CSS untuk mengatur gambar di dalam div */
    .fixed-width-sreen {
      width: 420px;
      max-width: 100%;
      /* Gambar tidak akan melebihi lebar div */
      min-height: 915px;
      /* Gambar akan mengikuti rasio aspek asli */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      /* Atur shadow sesuai kebutuhan */
    }

  </style>
</head>

<body>
  <div class="centered-container">
    <div class="fixed-width-sreen">
      @yield('main')
    </div>
  </div>
</body>

</html>