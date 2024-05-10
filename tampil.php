<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ICT XU5</title>
  <link rel="shortcut icon" href="gambar/zai logo1.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="https://fonts.googleapis.com/css2?family=Damion&family=Gelasio:ital
,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Kavivanar&family=Lalezar&family=Ramaraja&
family=Rubik+Gemstones&family=Titan+One&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0
,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Lalezar", system-ui;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      min-height: 100vh;


    }

    .content {
      padding: 20px;
      margin-top: 50px;
      /* Adjusted to accommodate the fixed navbar */
      flex: 1;
    }

    .navbar {

      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      transition: top 0.8s;
      background-image: url('gambar/Jakarta\,\ Indonesia\ 🇮🇩.jpeg');
      /* Mengatur gambar sebagai latar belakang */
      background-size: cover;
      /* Menyesuaikan ukuran gambar agar sesuai dengan ukuran navbar */
      background-position: 0px -1348px;
      /* Menyusun gambar ke tengah navbar */
      z-index: 900;

    }

    .navbar.closed {
      top: -200px;
    }

    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;

    }

    .navbar a:hover {
      color: red;
      transition: 0.5s;


    }


    footer {
      margin-top: auto;

    }

    .btn1 {
      color: white;
      margin-right: 200px;
      z-index: 999;


      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
    }

    li {
      text-decoration: white;
      z-index: 999;
    }

    /* Style utama untuk dropdown */
    .dropdown {
      position: relative;
      background-color: transparent;
    }

    /* Tombol dropdown */
    .dropbtn {
      background-color: transparent;


      padding: 10px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    /* Konten dropdown */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    /* Menampilkan konten dropdown saat tombol di-hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Konten dropdown kedua */
    .sub-dropdown {
      position: relative;

    }

    /* Tombol dropdown kedua */
    .sub-dropdown .dropbtn {
      background-color: white;
      color: black;
    }

    /* Konten dropdown kedua */
    .sub-dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      left: -100%;
      top: 0;
    }

    /* Menampilkan konten dropdown kedua saat tombol di-hover */
    .sub-dropdown:hover .sub-dropdown-content {
      display: block;
    }
.dropbtn h5:hover{
  color: red;
}


    @media screen and (max-width: 440px) {
      .container1 {
        display: none;
      }

      .navbar {
        background-position: center;
        width: 100%;

      }

      .navbar a {
        padding: 3px;
        margin: 3px;
      }

      .navbar.closed {
        top: -200px;
      }

      .btn1 {
        color: white;
        margin-right: 200px;
        z-index: 999;


        font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
      }

      .content {
        margin-top: 20px;
        /* Adjust margin on content for smaller screens */
        justify-content: center;
      }

      .material-symbols-outlined {
        margin-right: 20px;
        color: white;
        /* Mengubah margin untuk ikon dropdown */
      }

      li {
        text-decoration: none;
        /* Menghilangkan dekorasi pada list item */
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: 12px;
        /* Adjust font size for headings */
      }

      p {
        font-size: 3px;
        /* Adjust font size for paragraphs */

      }

      .gede {
        font-size: large;
      }
    
/* Style utama untuk dropdown */
.dropdown {
      position: relative;
      background-color: transparent;
    }

    /* Tombol dropdown */
    .dropbtn {
      background-color: transparent;


      padding: 3px;
      font-size: 10px;
      border: none;
      cursor: pointer;
    }

    /* Konten dropdown */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      left: -80%;
      
    }

    /* Menampilkan konten dropdown saat tombol di-hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Konten dropdown kedua */
    .sub-dropdown {
      position: relative;

    }

    /* Tombol dropdown kedua */
    .sub-dropdown .dropbtn {
      background-color: white;
      color: black;
    }

    /* Konten dropdown kedua */
    .sub-dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 120px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      left: -100%;
      top: 0;
    }

    /* Menampilkan konten dropdown kedua saat tombol di-hover */
    .sub-dropdown:hover .sub-dropdown-content {
      display: block;
    }
  }
    @media screen and (min-width: 440px) {
      .container2 {
        display: none;
      }
    }
  </style>

</head>

<body style=" font-family: Lalezar, system-ui">
  <div class="container1">
    <nav class="navbar" id="myNavbar">

      <span style="font-family:damion,cursive; color:red" class="wixui-rich-text__text">
        <h1 class="gede"><img src="gambar/indo-removebg-preview.png" alt="" height="50px" srcset="">ICT
      </span> <br>
      <span style="font-family:damion,cursive; color:white">&nbsp;XU5</h1></span>


      <a href="?u=tampil">
        <h3>Beranda</h3>
      </a>
      <a href="?u=budaya">
        <h3>Budaya jakarta</h3>
      </a>
      <a href="?u=produk">
        <h3>Arsitektur Jakarta</h3>
      </a>

      <div class="dropdown">
        <button class="dropbtn"><span class="material-symbols-outlined btn1">
            <h1>menu</h1> </span></button>
        <div class="dropdown-content">

          <div class="sub-dropdown">
            <button class="dropbtn"><h5>Tim Inti Kami</h5></button>
            <div class="sub-dropdown-content">
              <a href="#"><span style="color: black;">- Zaidan</span></a><br>
              <a href="#"><span style="color: black;">- Bahtiar</span></a><br>
              <a href="#"><span style="color: black;">- Syakira</span></a><br>
              <a href="#"><span style="color: black;">- Gerald</span></a><br>
            </div>
          </div>
          <div class="sub-dropdown">
            <button class="dropbtn"><h5>konten</h5></button>
            <div class="sub-dropdown-content">
              <a href="?u=budaya"><span style="color: black;">Budaya</span></a><br>
              <a href="?u=Bangunan"><span style="color: black;">Bangunan</span></a>
            </div>
          </div>
        </div>
      </div>


  </div>
  <div class="container2">
    <nav class="navbar" id="myNavbar">

      <span style="font-family:damion,cursive; color:red" class="wixui-rich-text__text">
        <h1 class="gede">ICT
      </span> <br>
      <span style="font-family:damion,cursive; color:white">&nbsp;XU5</h1></span>


      <a href="?u=tampil">
        <h3>Beranda</h3>
      </a>
      <a href="?u=budaya">
        <h3>Budaya</h3>
      </a>
      <a href="?u=produk">
        <h3>Arsitektur</h3>
      </a>

      <div class="dropdown">
        <button class="dropbtn"><span class="material-symbols-outlined btn1">
            menu </span></button>
        <div class="dropdown-content">

          <div class="sub-dropdown">
            <button class="dropbtn">Tim Inti Kami</button>
            <div class="sub-dropdown-content">
              <a href="#"><span style="color: black;">- Zaidan</span></a><br>
              <a href="#"><span style="color: black;">- Bahtiar</span></a><br>
              <a href="#"><span style="color: black;">- Syakira</span></a><br>
              <a href="#"><span style="color: black;">- Gerald</span></a><br>
            </div>
          </div>
          <div class="sub-dropdown">
            <button class="dropbtn">Konten</button>
            <div class="sub-dropdown-content">
            <a href="?u=budaya"><span style="color: black;">Budaya</span></a><br>
              <a href="?u=Bangunan"><span style="color: black;">Bangunan</span></a>
            </div>
          </div>
        </div>
      </div>
      </div>

  </div>




  </nav>
  <div class="content">



  </div>
  <div class="content">
    <?php include_once('operator.php') ?>
  </div>
  <footer>

    <div class="card text-center " data-bs-theme="dark">


      <div class="card-body">
        <h5 class="card-title">Sekian dan Terima Kasih</h5>

        <p class="card-text"></p>

      </div>
      <div class="card-footer text-body-secondary">
        <h6> &copy; 2024 - <?= date("Y") ?> - <?= date("m") ?> - <?= date("d") ?></h6>
      </div>

  </footer>

  </div>
  </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  let prevScrollPos = window.pageYOffset;
  window.addEventListener('scroll', () => {
    const currentScrollPos = window.pageYOffset;
    const navbar = document.querySelector('.navbar');
    if (prevScrollPos > currentScrollPos) {
      navbar.classList.remove('closed');
    } else {
      navbar.classList.add('closed');
    }
    prevScrollPos = currentScrollPos <= 200 ? 200 : currentScrollPos;
  });
</script>

</script>

</html>