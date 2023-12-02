<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    <style>
       body {
        margin: 0;
        color: #3a3a3a;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
            "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
            sans-serif;
        }
      th {
        background-color: rgb(255, 89, 0);
        color: #fff;
      }

      table,
      td,
      th {
        border: 1px solid #ddd;
        border-collapse: collapse;
      }<!DOCTYPE html>
<html>
<head>
    <title>WorkoutWonders.com</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#program">WorkOut Program</a></li>
        <li><a href="#Recipes">Food recipes</a></li>
        <li><a href="data.php">About Us</a></li>
      </ul>
</nav>
<body>
    <header>
        <!--memuat judul dan tagline web -->
        <h1>WorkoutWonders</h1>
        <p>Keep Your Body Healthy</p>
    </header>

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
        <iframe width="560" height="315" src="jumpingjack.mp4" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="audio-container">
        <!-- memasukkan audio pada "countainer" video yang telah dibuat -->
        <h2>COUNTDOWN</h2>
        <audio controls>
            <source src="20secondtimer.mp3" type="audio/mpeg">
            Maaf, browser Anda tidak mendukung pemutaran audio.
        </audio>
    </div>

    <footer>
        &copy; 2023 WorkoutWonders
    </footer>
</body>
</html>


      th,
      td {
        padding: 10px 25px;
        text-align: center;
      }

      tr {
        background-color: #f2f2f2;
      }
    </style>
</head>
<body>
  <h1 style="width: 100%; text-align: center">Data List</h1>
  <div style="display: flex; width: 100%; justify-content: center; margin-bottom: 5%">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Usia</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Telepon</th>
          <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data['users'] as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['firstName']}} {{$item['lastName']}}</td>
            <td>{{$item['age']}}</td>
            <td>{{$item['gender'] == 'male' ? 'Laki - Laki' : 'Wanita'}}</td>
            <td>{{$item['birthDate']}}</td>
            <td>{{$item['phone']}}</td>
            <td><img src="{{$item['image']}}" style="width: 80px; height: 80px" /></td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
</body>
</html>