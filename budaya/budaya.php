<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
  <style>
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

    .inicol2 {
      text-align: center;
      position: fixed;
      margin-left: 83%;
      margin-top: 40px;
    }

    .raw {
      background-color: black;
    }
    .inimodegelap{
    margin-left: 92%;
    position: fixed;
    margin-top: 24%;
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
  color: white;
}
  body {
    background-color: white;
    color: black;
    transition: 0.5s;
  }

    @media screen and (max-width: 440px) {
      .inimodegelap{
    margin-left: 70%;
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
        z-index: 999;
        width: 27%;
        height: 20%;
        margin-left: 220px;
        margin-top: 60PX;
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

      .card {
        display: block;

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
        width: 50px;
        height: 75px;
      }
    }


    @media screen and (min-width: 441px) {
      .container2 {
        display: none;
        text-align: center;

      }
    }
  </style>
</head>

<body>
  <div class="row">
    <div class="col-2 inicol2">
      <div id="list-example" class="list-group" data-aos="fade-left" data-aos-duration="2000">
        <a class="list-group-item list-group-item-action list-group-item-primary" href="#a">Budaya</a>
        <a class="list-group-item list-group-item-action list-group-item-warning" href="#b">Kesenian & Musik tradisional</a>
        <a class="list-group-item list-group-item-action list-group-item-danger" href="#c">Kesenian Modern</a>
        <a class="list-group-item list-group-item-action list-group-item-success" href="#d">Agama</a>
        <a class="list-group-item list-group-item-action list-group-item-primary" href="#e">Festival</a>
        <a class="list-group-item list-group-item-action list-group-item-warning" href="#f">Kuliner</a>
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
        <div class="container mt--2" data-aos="fade-down" data-aos-duration="2000">
          <div class=" p-3 raw waw object-fit-xxl-contain border rounded">

            <span style="color: red;">
              <h3>Budaya dari kota Jakarta</h3>
            </span>
          </div>
          <div class="container1">
            <div class="card " id="a" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">
              <div class="card-header a"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-1"><b>Budaya Betawi</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <div class="box"><img src="gambar/jkt.jpg" alt="" height="150px" width="200px">&nbsp;
                    <img src="gambar/th (2).jpeg" alt="" srcset="" height="150px" width="200px">&nbsp;
                    <img src="gambar/th (3).jpeg" alt="" srcset="" height="150px" width="200px">
                  </div>
                  <br>
                  <p> Betawi adalah suku asli Jakarta yang memiliki warisan budaya yang kaya.
                    Mereka memiliki berbagai kesenian tradisional seperti tari topeng Betawi,
                    ondel-ondel (boneka raksasa), lenong (teater komedi), dan gambang kromong
                    (musik tradisional Betawi). Makanan khas Betawi, seperti nasi uduk, soto Betawi,
                    ketoprak, dan kerak telor, juga menjadi bagian penting dari budaya kuliner.</p>
                </span>
              </div>

            </div>

            <br>

            <div class="card" id="b" data-aos="fade-right" data-aos-duration="750">
              <div class="card-header b"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-2"><b>Kesenian dan Musik Tradisional</b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>Jakarta menjadi tempat bagi berbagai jenis kesenian dan musik
                    tradisional dari berbagai daerah di Indonesia. Ada banyak tempat
                    di Jakarta, seperti Taman Ismail Marzuki
                    dan Balai Sarbini, yang menjadi pusat kegiatan seni dan pentas musik
                    tradisional. Seni seperti wayang kulit, gamelan, angklung, dan tarian
                    tradisional sering dipentaskan di acara-acara budaya.</p>
                  <img src="gambar/th (4).jpeg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px">

                </span>
              </div>
            </div>
            <br>

            <div class="card" id="c" data-aos="fade-left" data-aos-duration="750">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-3"><b>
                      Kesenian Modern
                    </b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <img src="gambar/th6.jpg" alt="" srcset="" height="150px" width="200px">
                  <img src="gambar/th7.jpg" alt="webdev" srcset="" height="150px" width="200px">
                  <img src="gambar/th8.jpg" alt="webdev" srcset="" height="150px" width="200px">
                  <p>Jakarta juga menjadi pusat perkembangan kesenian modern di
                    Indonesia. Teater, musik, tari kontemporer, seni rupa, dan fotografi
                    berkembang dengan pesat di kota ini. Ada berbagai galeri seni, teater,
                    dan tempat pertunjukan di Jakarta yang menjadi sarana bagi para seniman
                    dan pecinta seni untuk mengekspresikan diri dan mengapresiasi karya-karya seni modern.</p>
                </span>
              </div>
            </div>
            <div class="card" id="d" data-aos="fade-right" data-aos-duration="750">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-3"><b>
                      Keragaman agama
                    </b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
     
              <div class="box"><img src="gambar/islam kristen.jpeg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/hipwee-sampul2.jpg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px">&nbsp;
              </div>
            
                  <p>Jakarta adalah tempat yang menghormati dan mengakomodasi berbagai agama.
                    Ada berbagai tempat ibadah yang mewakili agama-agama seperti Islam,
                    Kristen, Katolik, Hindu, Buddha, dan Konghucu. Tempat-tempat ibadah
                    tersebut menjadi pusat spiritual dan kegiatan keagamaan yang berperan
                    penting dalam kehidupan masyarakat Jakarta.</p>
                </span>
              </div>
            </div>
            <div class="card" id="e" data-aos="fade-left" data-aos-duration="750">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-3"><b>
                      Festival Budaya
                    </b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <p>Jakarta menjadi tuan rumah berbagai festival budaya setiap tahunnya. Festival ini mencakup berbagai aspek budaya, seperti musik, tari, seni rupa, kuliner, dan kerajinan. Festival Jakarta International Java Jazz, Jakarta International Film Festival, Festival Kesenian Jakarta, dan Jakarta Fashion Week adalah contoh beberapa festival budaya yang populer di Jakarta.</p>
                  <img src="gambar/th9.jpeg" alt="" srcset="" height="150px" width="200px">
                  <img src="gambar/th10.jpeg" alt="webdev" srcset="" height="150px" width="200px">
                  <img src="gambar/th11.jpg" alt="webdev" srcset="" height="150px" width="200px">
                </span>
              </div>
            </div>
            <div class="card" id="f" data-aos="fade-right" data-aos-duration="750">
              <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <h4 id="list-item-3"><b>
                      Kuliner
                    </b></h4>
                </span>
              </div>
              <div class="card-body"><span style=" font-family: Georgia, Times New Roman, serif;">
                  <div class="box"> <img src="gambar/th12.jpeg" alt="" srcset="" height="150px" width="200px">&nbsp;
                    <img src="gambar/th13.jpeg" alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                    <img src="gambar/th14.jpg" alt="webdev" srcset="" height="150px" width="200px">
                  </div>
                  <p>Jakarta juga dikenal sebagai surganya kuliner. Makanan dan minuman dari berbagai daerah di Indonesia bisa ditemukan di berbagai restoran, kafe, dan warung makan di Jakarta. Dari makanan jalanan seperti sate, gado-gado, martabak, hingga hidangan khas seperti rendang dan nasi padang, Jakarta menawarkan beragam pilihan kuliner yang memikat lidah</p>
                </span>
              </div>
            </div>
          </div>

          <div class="container2">
            <br>

            <div class="card-header a"><span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
                <div data-aos="fade-left" data-aos-duration="2000">
                  <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                    <span style="color: red;" id="a">
                      <h4 id="a"><b>Budaya Betawi</b></h4>
                    </span>
                  </div>
                </div>
              </span>
            </div>
            <br>
            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500">
                <div class="box"><img src="gambar/jkt.jpg" alt="" height="150px" width="200px">&nbsp;
                  <img src="gambar/th (2).jpeg" alt="" srcset="" height="150px" width="200px">&nbsp;
                  <img src="gambar/th (3).jpeg" alt="" srcset="" height="150px" width="200px">
                </div>
              </div>
              <br>
              <div data-aos="fade-left" data-aos-duration="2000" data-aos-delay="750">
                <p> Betawi adalah suku asli Jakarta yang memiliki warisan budaya yang kaya.
                  Mereka memiliki berbagai kesenian tradisional seperti tari topeng Betawi,
                  ondel-ondel (boneka raksasa), lenong (teater komedi), dan gambang kromong
                  (musik tradisional Betawi). Makanan khas Betawi, seperti nasi uduk, soto Betawi,
                  ketoprak, dan kerak telor, juga menjadi bagian penting dari budaya kuliner.</p>
              </div>
            </span>
            <hr>



            <br>


            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-right" data-aos-duration="1000">
                <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                  <span style="color: red;" id="b">
                    <h4 id="b"><b>Kesenian dan Musik Tradisional</b></h4>
                  </span>
                </div>
              </div>
            </span>
            <br>
            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
                <p>Jakarta menjadi tempat bagi berbagai jenis kesenian dan musik
                  tradisional dari berbagai daerah di Indonesia. Ada banyak tempat
                  di Jakarta, seperti Taman Ismail Marzuki
                  dan Balai Sarbini, yang menjadi pusat kegiatan seni dan pentas musik
                  tradisional. Seni seperti wayang kulit, gamelan, angklung, dan tarian
                  tradisional sering dipentaskan di acara-acara budaya.</p>
              </div>
              <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="750"> <img src="gambar/th (4).jpeg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px"></div>

            </span>
            <hr>

            <br>


            <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-left" data-aos-duration="1000">
                <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                  <span style="color: red;">
                    <h4 id="c"><b>
                        Kesenian Modern
                      </b></h4>
                  </span>
                </div>
            </span>
          </div>
          <br>
          <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
              <div class="box"> <img src="gambar/th6.jpg" alt="" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th7.jpg" alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th8.jpg" alt="webdev" srcset="" height="150px" width="200px">
              </div>
            </div>
            <br>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">
              <p>Jakarta juga menjadi pusat perkembangan kesenian modern di
                Indonesia. Teater, musik, tari kontemporer, seni rupa, dan fotografi
                berkembang dengan pesat di kota ini. Ada berbagai galeri seni, teater,
                dan tempat pertunjukan di Jakarta yang menjadi sarana bagi para seniman
                dan pecinta seni untuk mengekspresikan diri dan mengapresiasi karya-karya seni modern.</p>
            </div>
          </span>
          <hr><br>


          <span style=" font-family: Georgia, Times New Roman, serif;  text-align: center;">
            <div data-aos="fade-right" data-aos-duration="1000">
              <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                <span style="color: red;">
                  <h4 id="d"><b>
                      Keragaman agama
                    </b></h4>
                </span>
              </div>
            </div>
          </span>
          <br>
          <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="750">
              <div class="box"><img src="gambar/islam kristen.jpeg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/hipwee-sampul2.jpg" class="rounded-float-end " alt="webdev" srcset="" height="150px" width="200px">&nbsp;
              </div>
            </div>
            <br>
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
              <p>Jakarta adalah tempat yang menghormati dan mengakomodasi berbagai agama.
                Ada berbagai tempat ibadah yang mewakili agama-agama seperti Islam,
                Kristen, Katolik, Hindu, Buddha, dan Konghucu. Tempat-tempat ibadah
                tersebut menjadi pusat spiritual dan kegiatan keagamaan yang berperan
                penting dalam kehidupan masyarakat Jakarta.</p>

            </div>
          </span>
          <hr>
          <br>


          <div class="card-header c"><span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
              <div data-aos="fade-left" data-aos-duration="1000">
                <h4 id="e"><b>
                    <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                      <span style="color: red;"> Festival Budaya
                  </b></h4>
              </div>
            </span>
            </span>
          </div>
          <br>
          <span style=" font-family: Georgia, Times New Roman, serif; text-align: center;">
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">
              <div class="box"><img src="gambar/th9.jpeg" alt="" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th10.jpeg" alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th11.jpg" alt="webdev" srcset="" height="150px" width="200px">
              </div>
            </div>
            <br>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
              <p>Jakarta menjadi tuan rumah berbagai festival budaya setiap tahunnya. Festival ini mencakup berbagai aspek budaya, seperti musik, tari, seni rupa, kuliner, dan kerajinan. Festival Jakarta International Java Jazz, Jakarta International Film Festival, Festival Kesenian Jakarta, dan Jakarta Fashion Week adalah contoh beberapa festival budaya yang populer di Jakarta.</p>
            </div>

          </span>
          <hr>
          <br>


          <span style=" font-family: Georgia, Times New Roman, serif; text-align: center; ">
            <div data-aos="fade-right" data-aos-duration="1000">
              <h4 id="f"><b>
                  <div class=" p-1 raw  object-fit-xxl-contain border rounded">

                    <span style="color: red;"> Kuliner
                </b></h4>
            </div>
          </span>
          </span>
          <br>
          <span style=" font-family: Georgia, Times New Roman, serif;text-align: center;">
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="750">
              <div class="box"> <img src="gambar/th12.jpeg" alt="" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th13.jpeg" alt="webdev" srcset="" height="150px" width="200px">&nbsp;
                <img src="gambar/th14.jpg" alt="webdev" srcset="" height="150px" width="200px">
              </div>
            </div>
            <br>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
              <p>Jakarta juga dikenal sebagai surganya kuliner. Makanan dan minuman dari berbagai daerah di Indonesia bisa ditemukan di berbagai restoran, kafe, dan warung makan di Jakarta. Dari makanan jalanan seperti sate, gado-gado, martabak, hingga hidangan khas seperti rendang dan nasi padang, Jakarta menawarkan beragam pilihan kuliner yang memikat lidah</p>
          </span>
          <hr>
        </div>

      </div>
    </div>
  </div>
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