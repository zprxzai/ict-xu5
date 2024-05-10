<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    .inicol2 {
      text-align: center;
      position: fixed;
      margin-left: 83%;
      margin-top: -10px;
    }

    .card {
      position: static;
      margin-right: 0%;
      margin-left: 0%;
      margin-top: 40px;
      padding: 0px 0px 0px 0px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    .waw {
      background-color: black;
      text-align: center;
      text-shadow: 2px 2px 4px red;
      /* Mengatur shadow dengan offset-x 2px, offset-y 2px, blur radius 4px, dan warna merah */
    }

    .box {
      display: flex;
      justify-content: center;
    }

    p {
      font-size: larger;
    }

    model-viewer {
      width: 800px;
      height: 450px;
    }

    .a {
      background-color: lightblue;
    }

    .b {
      background-color: lightgreen;
    }

    .c {
      background-color: lightpink;
    }

    .d {
      background-color: lightsalmon;
    }

    .e {
      background-color: lightgray;
    }

    .f {
      background-color: lightseagreen;
    }
    body {
    background-color: white;
    color: black;
    transition: 0.5s;
  }

    .inimodegelap{
    margin-left: 93%;
    position: fixed;
    margin-top: 23%;
  }
  .tombol3 {
  
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
  .dark-mode {
    transition: 0.5s;
  background-color: black;
  color: white;}
    @media screen and (max-width: 440px) {
      .inimodegelap{
    margin-left: 77%;
    position: fixed;
    margin-top: 100%;
  
  }
  .tombol3 {
    margin-left: 30%;
  color: black;
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}
    
      .inicol2 {
        width: 27%;
        height: 20%;
        margin-left: 232px;
      }

      .inicol2 a {
        font-size: 10px;
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
        font-size: 12px;
      }

      video {
        margin-top: -50px;
        width: 180px;
        height: 400px;
      }



      .waw {
        margin-top: -10px;
      }

      .container1 {
        display: none;
      }

      model-viewer {
        width: 130px;
        height: 100px;
      }

      img {
        width: 75px;
        height: 75px;
      }
    }


    @media screen and (min-width: 441px) {
      .container2 {
        display: none;


      }
    }
  </style>
</head>

<body>

  <div class="row">
    <div class="col-2 inicol2">
      <div id="list-example" class="list-group" data-aos="fade-left" data-aos-duration="2000">
        <a class="list-group-item list-group-item-action list-group-item-primary" href="#a">Monas</a>
        <a class="list-group-item list-group-item-action list-group-item-warning" href="#b">Istana merdeka</a>
        <a class="list-group-item list-group-item-action list-group-item-danger" href="#c">Museum Kota Tua</a>
        <a class="list-group-item list-group-item-action list-group-item-success" href="#d"> Museum Kesenian</a>
        <a class="list-group-item list-group-item-action list-group-item-primary" href="#e">Museum Wayang</a>
        <a class="list-group-item list-group-item-action list-group-item-warning" href="#f">stasiun Kota</a>
      </div>
    </div>
  </div>
  <div class="col-2 inimodegelap">   <div data-aos="fade-left" data-aos-duration="2000"><button onclick="myFunction()"><span class="material-symbols-outlined tombol3">
<h1>routine</h1>
</span></button></div></div>
  <div class="row justify-content-center">
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <br>
        <div class="container mt--2" data-aos="fade-up" data-aos-duration="2000">
          <div class=" p-3 raw waw object-fit-xxl-contain border rounded">

            <span style="color: red;">
              <h3>Bangunan Bersejarah Kota Jakarta</h3>
            </span>
          </div>
          <div class="container1">
            <div class="card " id="a" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
              <div class="card-header a"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-1"><b>Monas</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <div class="box">
                    <model-viewer src="gambar/monas.glb" camera-controls auto-rotate></model-viewer>
                  </div>
                </span>
              </div>
              <div class="card-footer a" id="list-item-5">
                <span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>Monumen Nasional atau yang disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter (433 kaki) yang terletak tepat di tengah Lapangan Medan Merdeka, Jakarta Pusat. Monas didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia dalam merebut kemerdekaan dari pemerintahan kolonial Kekaisaran Belanda. Pembangunan dimulai pada 17 Agustus 1961 di bawah perintah presiden Soekarno dan diresmikan hingga dibuka untuk umum pada 12 Juli 1975 oleh Presiden Soeharto. Tugu ini dimahkotai lidah api yang dilapisi lembaran emas yang melambangkan semangat perjuangan yang menyala-nyala dari rakyat Indonesia.</p>
                </span>
              </div>
            </div>

            <br>

            <div class="card" id="b" data-aos="fade-up" data-aos-duration="1000">
              <div class="card-header b"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-2"><b>Istana Merdeka</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <div class="box"> <model-viewer src="gambar/istana_merdeka_finalll.glb" camera-controls auto-rotate></model-viewer>
                  </div>

                </span>
              </div>
              <div class="card-footer b" id="list-item-5">
                <span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>
                    Istana Merdeka di Jakarta adalah sebuah bangunan bersejarah yang memiliki peran penting dalam sejarah Indonesia. Dibangun pada tahun 1873 oleh pemerintah Hindia Belanda sebagai kediaman resmi Gubernur Jenderal, bangunan ini kemudian menjadi markas resmi Presiden Indonesia setelah kemerdekaan pada tahun 1945. Istana Merdeka menyaksikan berbagai peristiwa penting, termasuk proklamasi kemerdekaan Indonesia pada 17 Agustus 1945 yang dibacakan oleh Soekarno dan Mohammad Hatta di halaman belakangnya. Seiring berjalannya waktu, Istana Merdeka mengalami transformasi dan menjadi simbol kekuasaan dan kedaulatan Indonesia. Meskipun aksesnya terbatas, bangunan ini tetap menjadi salah satu landmark bersejarah di Jakarta</p>
                </span>
              </div>
            </div>

            <br>

            <div class="card" id="c" data-aos="fade-up" data-aos-duration="1000">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-3"><b>
                      Museum Kota Tua
                    </b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <div class="box"> <model-viewer src="gambar/museum_kota_tua_jakarta.glb" camera-controls auto-rotate></model-viewer>
                </span>
              </div>
            </div>
            <div class="card-footer c" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <p>
                <p>Museum Sejarah Jakarta adalah museum yang terletak di kawasan Kota Tua. Museum ini juga dikenal sebagai Museum Fatahillah karena letaknya di Jalan Taman Fatahillah. Tentunya tempat ini sangat cocok untuk kamu yang ingin belajar tentang sejarah Kota Jakarta.

                  Bangunan Museum Sejarah Jakarta dahulu merupakan Balai Kota Batavia atau dalam Bahasa Belanda disebut Stadhuis van Batavia. Bangunan ini didirikan pada tahun 1707-1710 atas perintah Gubernur Jenderal Joan van Hoorn dengan gaya arsitektur menyerupai Istana Dam di Amsterdam.

                  Di museum ini kamu bisa melihat berbagai koleksi seperti peninggalan masa Tarumanegara, Pajajaran, mebel antik dari Eropa dan Tiongkok, gerabah, keramik, dan lain-lain.</p>
              </span>
            </div>

          </div>

          <div class="card" id="d" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header d"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-3"><b>
                    Museum Kesenian Jakarta
                  </b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box"> <model-viewer src="gambar/museum_seni_rupa_dan_keramik.glb" camera-controls auto-rotate></model-viewer></div>
              </span>
            </div>
            <div class="card-footer d" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <p>
                <p>Gedung Kesenian Jakarta adalah tempat bersejarah di Jakarta yang berasal dari masa kolonial Belanda. Bangunan tua ini memiliki gaya neo-renaisans yang didirikan pada tahun 1821 sebagai Theater Schouwburg Weltevreden atau gedung pertunjukkan.

                  Saat masa perjuangan Kemerdekaan Indonesia, Gedung Kesenian Jakarta juga memiliki peran yang cukup krusial. Tepatnya gedung ini menjadi tempat Kongres Pemoeda pertama pada tahun 1926. Kemudian pada tanggal 29 Agustus 1945 di gedung ini, Presiden Soekarno meresmikan Komite Nasional Indonesia Pusat (KNIP).</p>
              </span>
            </div>
          </div>


          <div class="card" id="e" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header e"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-3"><b>
                    Museum Wayang Jakarta
                  </b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box"> <model-viewer src="gambar/museum_wayang_dan_alun-alun.glb" camera-controls auto-rotate></model-viewer></div>
              </span>
            </div>
            <div class="card-footer e" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <p>
                <p>Museum Wayang merupakan museum yang juga terletak di Kawasan Kota Tua Jakarta. Awalnya, bangunan museum ini merupakan bangunan gereja bernama De Oude Hollandsche Kerk atau Gereja Lama Belanda yang dibangun pada tahun 1640. Kemudian pada tahun 1732, bangunan ini direnovasi dan namanya berubah menjadi De Nieuwe Hollandse Kerk.

                  Seperti namanya, di Museum Wayang kamu bisa melihat berbagai koleksi wayang, seperti wayang kulit dan wayang golek. Tak hanya itu, di sini juga dipamerkan beberapa koleksi boneka dari negara-negara lain seperti Malaysia, Thailand, Suriname, Cina, Vietnam, Prancis, India, dan Kamboja.</p>
              </span>
            </div>
          </div>

          <div class="card" id="f" data-aos="fade-up" data-aos-duration="1000">
            <div class="card-header f"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-3"><b>
                    Stasiun Jakarta Kota
                  </b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box"> <model-viewer src="gambar/stasiun_jakarta_kota.glb" camera-controls auto-rotate></model-viewer></div>
              </span>
            </div>
            <div class="card-footer f" id="f">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <p>
                <p>Stasiun ini menjadi salah satu stasiun tertua di Jakarta yang masih aktif beroperasi sampai sekarang, loh. Selain itu, Stasiun Jakarta Kota juga sudah menjadi cagar budaya berdasarkan Surat Keputusan Gubernur DKI Jakarta NO.475 tahun 1993.

                  Stasiun Jakarta Kota dirancang oleh seorang arsitek bernama Frans Johan Louwrens Ghijsels dengan memadukan struktur teknik modern barat ala art deco dengan bentuk tradisional khas Indonesia.

                  Dahulu, Stasiun Jakarta Kota berfungsi menjadi penguhung kota-kota di Batavia dengan kota-kota lain seperti Bekassie (Bekasi), Buitenzorg (Bogor), Parijs van Java (Bandung), Karavam (Karawang), dan lain-lain.

                </p>
              </span>
            </div>
          </div>
        </div>

        <div class="container2">

          <div class="card " id="a" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header a"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-1"><b>Monas</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/monas.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer a" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=monas"> <button type="button" class="btn btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
          <br>

          <div class="card " id="b" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header b"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-2"><b>Istana Merdeka</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/istana_merdeka_finalll.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer b" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=istana"> <button type="button" class="btn btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
          <br>
          <div class="card " id="c" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-3"><b>Museum Kota Tua</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/museum_kota_tua_jakarta.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer c" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=kotatua"> <button type="button" class="btn btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
          <br>

          <br>
          <div class="card " id="d" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header d"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-4"><b>Museum Kesenian Jakarta</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/museum_seni_rupa_dan_keramik.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer d" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=kesenian"><button type="button" class="btn  btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
          <br>
          <div class="card " id="e" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header e"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-5"><b>Museum Wayang</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/museum_wayang_dan_alun-alun.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer e" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=wayang"> <button type="button" class="btn  btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
          <br>
          <div class="card " id="f" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div class="card-header f"><span style=" font-family: Georgia, Times New Roman, serif;">
                <h4 id="list-item-6"><b>Stasiun Jakarta Kota</b></h4>
              </span>
            </div>
            <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                <div class="box">
                  <model-viewer src="gambar/stasiun_jakarta_kota.glb" camera-controls auto-rotate></model-viewer>
                </div>
              </span>
            </div>
            <div class="card-footer f" id="list-item-5">
              <span style=" font-family: Georgia, Times New Roman, serif;">
                <a href="?u=stasiun"><button type="button" class="btn btn-outline-light">Penjelasan</button></a>
              </span>
            </div>
          </div>
        </div>

        </span>

      </div>
    </div>
    <script>
    function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}</script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>