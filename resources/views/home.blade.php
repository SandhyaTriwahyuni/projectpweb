<!DOCTYPE html>
<html>
<head>
    <title>WorkoutWonders.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WorkoutWonders</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<body>
    <header>
        <!--memuat judul dan tagline web -->
        <h1>WorkoutWonders</h1>
        <p>Keep Your Body Healthy</p>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container">
        <!--mengisi teks pada container yang telah dibuat-->
        <div class="text-container">
            <H2>LETS START UR JOURNEY</H2>
            <h3>WAIST TRAINING LEVEL 1</h3>
            <p><a href="javascript:void(0);" onclick="changeVideo('https://www.youtube.com/embed/VIDEO_ID_1')">JUMPING JACK</a></p>
            <p><a href="javascript:void(0);" onclick="changeVideo('https://www.youtube.com/embed/VIDEO_ID_2')">WAIST CRUNCH</a></p>
           
            <h3>WAIST TRAINING LEVEL 1</h3>
            <p><a href="javascript:void(0);" onclick="changeVideo('https://www.youtube.com/embed/VIDEO_ID_1')">COBRA STRECHTING</a></p>
            <p><a href="javascript:void(0);" onclick="changeVideo('https://www.youtube.com/embed/VIDEO_ID_2')">MOUNT HIKING</a></p>
        </div>
    </div>

    <div class="outside-video">
        <!-- memasukkan video pada "countainer" video yang telah dibuat -->
        <iframe width="560" height="315" src="Asset/jumpingjack.mp4" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="audio-container">
        <!-- memasukkan audio pada "countainer" video yang telah dibuat -->
        <h2>COUNTDOWN</h2>
        <audio controls>
            <source src="Asset/20secondtimer.mp3" type="audio/mpeg">
            Maaf, browser Anda tidak mendukung pemutaran audio.
        </audio>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <footer>
        &copy; 2023 WorkoutWonders
    </footer>
</body>
</html>
