<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>



<!--AOS-->


<style>
  * {
    margin: 0;
    padding: 0;
  }

  .content {

    margin-top: 50px;
    /* Adjusted to accommodate the fixed navbar */
  }

  .inicol2 {
    text-align: center;
    position: fixed;
    margin-left: 83%;
    margin-top: 90px;
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

  .box {
    display: flex;
    justify-content: center;
    }

  

  .waw {
    background-color: black;
    text-align: center;
    text-shadow: 2px 2px 4px red;
    /* Mengatur shadow dengan offset-x 2px, offset-y 2px, blur radius 4px, dan warna merah */

  }

  video {
    float: center;
    margin-top: 50px;
    margin-bottom: 100px;
    width: 868px;
  }


  p {
    font-size: larger;
  }




  /* Light mode styles */
  body {
    background-color: white;
    color: black;
    transition: 0.5s;
  }


  model-viewer {
    width: 400px;
    height: 300px;
  }

  .a {
    background-color: red;
  }

  .b {
    background-color: blue;
  }

  .c {
    background-color: purple;
  }

  .d {
    background-color: green;
  }

  .raw {
    background-color: black;
  }

  .inimodegelap{
    margin-left: 95%;
    position: fixed;
    margin-top: 35%;
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
    margin-left: 83%;
    position: fixed;
    margin-top: 130%;
  
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
      margin-top: -100px;
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

<body>
  <div class="row">
    <div class="col-2 inicol2">
      <div id="list-example" class="list-group" data-aos="fade-left" data-aos-duration="2000">
        <a class="list-group-item list-group-item-action list-group-item-primary" href="#list-item-1">Jakarta</a>
        <a class="list-group-item list-group-item-action list-group-item-warning" href="#list-item-2">Nama jakarta</a>
        <a class="list-group-item list-group-item-action list-group-item-danger" href="#list-item-3">Sejarah</a>
        <a class="list-group-item list-group-item-action list-group-item-success" href="#list-item-4">Arsitektur</a>
      </div>
    </div>
  </div>
  </div>
  <div class="col-2 inimodegelap">   <div data-aos="fade-left" data-aos-duration="2000"><button onclick="myFunction()"><span class="material-symbols-outlined tombol3">
<h1>routine</h1>
</span></button></div></div>
  <div>
  </div>
  <div class="row justify-content-center">
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <br>
        <div class="container mt--2" data-aos="fade-up" data-aos-duration="2000">
          <br>
          <div class=" p-3 raw waw object-fit-xxl-contain border rounded">

            <span style="color: red;">
              <h3>Sejarah Kota Jakarta</h3>
            </span>
          </div>

          <div class="vidio1">
            <video controls src="gambar/jakarta.mp4" autoplay loop></video>
          </div>

          <div class="container1">
            <div class="card " id="list-item-1" data-aos="fade-up" data-aos-duration="500">
              <div class="card-header a"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 ><b>Jakarta</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <img src="gambar/th (5).jpeg" alt="" height="250px" width="400px">
                  <img src="gambar/jkt.jpg" alt="" height="250px" width="400px">
                  <br>
                  <br>
                  <p> Jakarta, sebagai ibukota Negara Kesatuan Republik Indonesia, adalah sebuah kota
                    yang kaya akan sejarah, budaya, dan perjuangan. Berbagai peristiwa bersejarah
                    dan perubahan penting telah membentuk wajah kota ini menjadi apa yang kita lihat
                    saat ini. Dalam artikel ini, kita akan menjelajahi jejak budaya dan perjuangan
                    yang telah melandasi Jakarta sepanjang sejarahnya</p>
                </span>
              </div>

            </div>

            <br>

            <div class="card" id="list-item-2" data-aos="fade-up" data-aos-duration="500">
              <div class="card-header b"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-2"><b>Asal-usul nama jakarta</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>Antara tahun 397-1527, wilayah yang saat ini disebut Jakarta masih bernama Sunda Kelapa dan berada di bawah kekuasaan kerajaan Hindu. Pada 1527, Pangeran Fatahillah dari Demak berhasil merebut Sunda Kelapa dan mengubah namanya menjadi Jayakarta. Pergantian nama tersebut diperkirakan terjadi pada 22 Juni, yang kemudian diperingati setiap tahunnya sebagai hari jadi Kota Jakarta.</p>
                  <p> Jayakarta mengalami perubahan nama menjadi Batavia saat VOC menguasai wilayah ini pada 1619. Dalam sejarahnya, nama Batavia mempunyai masa hidup yang sangat lama, yakni hingga tiga abad lebih (1619-1942). Saat pendudukan Jepang di Indonesia dimulai pada 1942, nama Batavia diganti menjadi Djakarta atau Djakarta Tokubetsu Shi. Barulah setelah Indonesia merdeka pada 17 Agustus 1945, nama Jakarta tetap dipakai dengan meninggalkan nama Jepangnya.</p>

                </span>
              </div>
            </div>
            <br>

            <div class="card"  id="list-item-3" data-aos="fade-up" data-aos-duration="1000">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4><b>Sejarah singkat kota jakarta</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <p> Sejarah Awal Jejak sejarah Jakarta dimulai jauh sebelum kota ini dikenal dengan namanya saat ini. Pada abad ke-5, daerah ini dihuni oleh kerajaan-kerajaan maritim seperti Tarumanagara dan Sunda. Pada abad ke-13, kerajaan Hindu-Buddha Sriwijaya di Sumatera mempengaruhi wilayah ini secara budaya dan ekonomi.</p>
                  <p>Kedatangan Bangsa Eropa Pada abad ke-16, kedatangan bangsa Eropa ke wilayah ini mengubah peta sejarah Jakarta secara signifikan. Pada tahun 1527, Fatahillah, seorang prajurit dari Kerajaan Demak, merebut kota ini dari kekuasaan Kerajaan Sunda Kelapa yang saat itu dikuasai oleh Kerajaan Pajajaran. Fatahillah kemudian mengganti nama kota ini menjadi Jayakarta, yang berarti “kemenangan yang gemilang”.</p>
                  <p>Namun, dominasi Portugis terhadap Jayakarta tidak bertahan lama. Pada tahun 1619, VOC (Vereenigde Oost-Indische Compagnie), perusahaan dagang Belanda, merebut kota ini dari tangan Portugis dan mendirikan Batavia. Batavia menjadi pusat perdagangan dan administrasi Hindia Belanda.</p>
                  <img src="gambar/th.jpeg" alt="" srcset="">
                  <p>Pergantian Nama dan Pembangunan Kota Setelah kemerdekaan, Jakarta mengalami sejumlah perubahan penting. Pada tahun 1949, nama kota ini diubah menjadi Djakarta untuk menyesuaikan dengan ejaan Belanda. Namun, pada tahun 1972, nama kota ini kembali diubah menjadi Jakarta untuk merefleksikan penggunaan bahasa Indonesia yang lebih murni.</p>
                  <P>Sejak itu, Jakarta mengalami pertumbuhan yang pesat dan menjadi pusat politik</P>
                </span>
              </div>
            </div>

            <br>

            <div class="card"id="list-item-4" data-aos="fade-up" data-aos-duration="1000">
              <div class="card-header d"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 ><b>Arsitektur kota jakarta</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>Pengaruh Budaya dan Perkembangan Kota Kehadiran bangsa Eropa, terutama Belanda, membawa pengaruh budaya yang kuat ke Jakarta. Arsitektur kota ini menjadi campuran dari gaya Belanda kolonial, Tionghoa, dan Indonesia. Struktur bangunan tua seperti Gereja Katedral, Kota Tua, dan Istana Merdeka adalah saksi bisu dari masa kolonial Belanda.</p>
                  <div class="box"> <model-viewer src="gambar/museum_kota_tua_jakarta.glb" camera-controls auto-rotate></model-viewer>
                    <model-viewer src="gambar/istana_merdeka_finalll.glb" camera-controls auto-rotate></model-viewer>
                    <model-viewer src="gambar/monas.glb" camera-controls auto-rotate></model-viewer>
                  </div>
                  <P>Perjuangan Kemerdekaan Pada tanggal 17 Agustus 1945, Indonesia memproklamasikan kemerdekaannya dari penjajahan Belanda. Jakarta menjadi saksi utama perjuangan panjang dan gigih para pahlawan dalam merebut kemerdekaan. Monumen Nasional (Monas) yang megah dan setinggi 137 meter di tengah kota adalah simbol penting dari semangat perjuangan tersebut.</P>

              </div>


            </div>
          </div>
          <!--!>batas<!-->
          <div class="container2">
            <br>
<hr>
           <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
                <div data-aos="fade-up" data-aos-duration="2000">
                  <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                    <span style="color: red;">
                      <h4 id="list-item-1"><b>Jakarta</b></h4>
                    </span>
                  </div>
                </div>
              </span>
            
            <br>
            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
              <img src="gambar/jkt.jpg" alt="" height="250px" width="400px">
              </div>
              <br>
              <div data-aos="fade-up" data-aos-duration="2000" data-aos-delay="750">
              <p> Jakarta, sebagai ibukota Negara Kesatuan Republik Indonesia, adalah sebuah kota
            yang kaya akan sejarah, budaya, dan perjuangan.</p>
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <p> Berbagai peristiwa bersejarah
              dan perubahan penting telah membentuk wajah kota ini menjadi apa yang kita lihat
              saat ini. Dalam artikel ini, kita akan menjelajahi jejak budaya dan perjuangan
              yang telah melandasi Jakarta sepanjang sejarahnya</p>
          </div>
              </div>
            </span>
            <hr>



            <br>


            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-up" data-aos-duration="1000">
                <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                  <span style="color: red;">
                    <h4 id="list-item-2"><b>Asal-usul nama jakarta</b></h4>
                  </span>
                </div>
              </div>
            </span>
            <br>
            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        <p>Antara tahun 397-1527, wilayah yang saat ini disebut Jakarta masih bernama Sunda Kelapa dan berada di bawah kekuasaan kerajaan Hindu. Pada 1527, Pangeran Fatahillah dari Demak berhasil merebut Sunda Kelapa dan mengubah namanya menjadi Jayakarta. Pergantian nama tersebut diperkirakan terjadi pada 22 Juni, yang kemudian diperingati setiap tahunnya sebagai hari jadi Kota Jakarta.</p>
      </div>
      <div data-aos="fade-up" data-aos-duration="1000">
        <p> Jayakarta mengalami perubahan nama menjadi Batavia saat VOC menguasai wilayah ini pada 1619. Dalam sejarahnya, nama Batavia mempunyai masa hidup yang sangat lama, yakni hingga tiga abad lebih (1619-1942). Saat pendudukan Jepang di Indonesia dimulai pada 1942, nama Batavia diganti menjadi Djakarta atau Djakarta Tokubetsu Shi. Barulah setelah Indonesia merdeka pada 17 Agustus 1945, nama Jakarta tetap dipakai dengan meninggalkan nama Jepangnya.</p>
      </div>
    </span>


            </span>
            <hr>

            <br>


            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-up" data-aos-duration="1000">
                <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                  <span style="color: red;">
                    <h4 id="list-item-3"><b>
                    Sejarah singkat kota jakarta
                      </b></h4>
                  </span>
                </div>


            </span>
          </div>
          <br>
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
        <p> Sejarah Awal Jejak sejarah Jakarta dimulai jauh sebelum kota ini dikenal dengan namanya saat ini. Pada abad ke-5, daerah ini dihuni oleh kerajaan-kerajaan maritim seperti Tarumanagara dan Sunda. Pada abad ke-13, kerajaan Hindu-Buddha Sriwijaya di Sumatera mempengaruhi wilayah ini secara budaya dan ekonomi.</p>
        <div data-aos="fade-up" data-aos-duration="1000">
          <p>Kedatangan Bangsa Eropa Pada abad ke-16, kedatangan bangsa Eropa ke wilayah ini mengubah peta sejarah Jakarta secara signifikan. Pada tahun 1527, Fatahillah, seorang prajurit dari Kerajaan Demak, merebut kota ini dari kekuasaan Kerajaan Sunda Kelapa yang saat itu dikuasai oleh Kerajaan Pajajaran. Fatahillah kemudian mengganti nama kota ini menjadi Jayakarta, yang berarti “kemenangan yang gemilang”.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000">
          <p>Namun, dominasi Portugis terhadap Jayakarta tidak bertahan lama. Pada tahun 1619, VOC (Vereenigde Oost-Indische Compagnie), perusahaan dagang Belanda, merebut kota ini dari tangan Portugis dan mendirikan Batavia. Batavia menjadi pusat perdagangan dan administrasi Hindia Belanda.</p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000">
          <center> <img src="gambar/th.jpeg" alt="" srcset=""></center>
        </div><br>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <p>Pergantian Nama dan Pembangunan Kota Setelah kemerdekaan, Jakarta mengalami sejumlah perubahan penting. Pada tahun 1949, nama kota ini diubah menjadi Djakarta untuk menyesuaikan dengan ejaan Belanda. Namun, pada tahun 1972, nama kota ini kembali diubah menjadi Jakarta untuk merefleksikan penggunaan bahasa Indonesia yang lebih murni.</p>
        </div>
          <hr><br>


          <span style=" font-family: Georgia, Times New Roman, serif;  text-align: center;">
            <div data-aos="fade-up" data-aos-duration="1000">
              <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                <span style="color: red;">
                  <h4 id="list-item-4"><b>
                      Arsitektur Kota Jakarta
                    </b></h4>
                </span>
              </div>
            </div>
          </span>
          <br>
          <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
           
            <div data-aos="fade-up" data-aos-duration="1000">
          <div class="card">
          <div class="box"></div> <div class="box"><model-viewer src="gambar/museum_kota_tua_jakarta.glb" camera-controls auto-rotate></model-viewer>
              <model-viewer src="gambar/istana_merdeka_finalll.glb" camera-controls auto-rotate></model-viewer>
              <model-viewer src="gambar/monas.glb" camera-controls auto-rotate></model-viewer></div> <br>
            </div>
          </div>
          <br>
          <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <P>Perjuangan Kemerdekaan Pada tanggal 17 Agustus 1945, Indonesia memproklamasikan kemerdekaannya dari penjajahan Belanda. Jakarta menjadi saksi utama perjuangan panjang dan gigih para pahlawan dalam merebut kemerdekaan. Monumen Nasional (Monas) yang megah dan setinggi 137 meter di tengah kota adalah simbol penting dari semangat perjuangan tersebut.</P>
          </div>
            </div>
          </span>
             <hr>
          <br>


         
       
          </span>
          
          <br>


         
        </div>

      </div>
        </div>
      </div>
    </div><script>
    function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}</script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>