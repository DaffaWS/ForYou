<!DOCTYPE html>
<html lang="en">
  <!-- 
  Mau custom web ucapan online? Order di Dika Tutorial aja!
  Youtube: Deka Tutorial
  Tiktok: @deka_tutorial 
  Instagram: @deka_tutorial
  -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/1280px-YouTube_full-color_icon_%282017%29.svg.png" type="image/svg+xml" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <title>Daffa W S</title>
    <script src="https://dekatutorial.github.io/sweetalert2.all.min.js"></script> 
    <link rel="stylesheet" href="https://dekatutorial.github.io/18nembak/style.css" />
  </head> 
  <body> 
    <script> 
      function popupku() {
        Swal.fire({
          title: 'Hai!',
          text: 'Aku punya sesuatu nih buat kamu',
          icon: 'info',
          confirmButtonText: 'Lanjut'
        });
      }
      
      popupku(); 
    </script> 
    <div class="preload"> 
      <p>Loading dulu . . .</p> 
    </div> 
    <div class="open"> 
      <div> 
        <div class="lope" onclick="ilang()"><i class="love material-icons-sharp"> favorite </i></div> 
        <h3>Pencet Love nya</h3> 
      </div> 
    </div> 
    <div class="bg"></div> 
    <div class="lopeBg"></div>
    <div class="top stiker">
      <img src="stiker1.gif" />
      <img src="stiker2.gif" />
      <img src="stiker3.gif" />
    </div>
    <div class="ucapan">
      <div id="slider">
        <!-- Ucapan awal -->
        <p>Haloo Almiraa </p>
        <p>Minta Waktunya Sedikit Dong</p>
        <p>Aku Kan Sudah Bilang</p>
        <p>Aku Suka Kamu jadi..</p>
    
        <!-- Pertanyaan -->
        <p>Kamu mau kan jadi pacar aku🥰</p>
      </div>
      <div id="slider2" style="display:none;">
        <!-- Ucapan diterima -->
        <p>Yeyy😆 Makasih ya udah mau nerima aku😘</p>
      </div>
    </div>
    <script>
      // Definisi musik dan gambar
      var musik = "musik.mp3";
      var background = "background.jpg";
      var gambarStiker1 = "stiker1.gif";
      var gambarStiker2 = "stiker2.gif";
      var gambarStiker3 = "stiker3.gif";
      
      // Fungsi untuk slider
      var currentSlide = 0;
      var totalSlides = $("#slider p").length;
      
      function showSlide(n) {
        $("#slider p").hide();
        $("#slider p").eq(n).show();
      }
      
      function nextSlider() {
        currentSlide++;
        if (currentSlide >= totalSlides) {
          currentSlide = totalSlides - 1;
        }
        showSlide(currentSlide);
      }
      
      function backSlider() {
        currentSlide--;
        if (currentSlide < 0) {
          currentSlide = 0;
        }
        showSlide(currentSlide);
      }
      
      function terima() {
        $("#slider").hide();
        $("#slider2").show();
        $(".button div:nth-child(1), .button div:nth-child(2)").hide();
      }
      
      function tolak() {
        Swal.fire({
          title: 'Yakin nggak mau?',
          text: 'Pikir lagi deh...',
          icon: 'question',
          confirmButtonText: 'Iya deh mau'
        }).then((result) => {
          if (result.isConfirmed) {
            terima();
          }
        });
      }
      
      function showPesan() {
        $(".container-pesan").show();
      }
      
      // Inisialisasi
      $(document).ready(function() {
        showSlide(0);
        
        // Form handling
        $("#pesanForm").submit(function(e) {
          e.preventDefault();
          var pesan = $("textarea[name='Pesan']").val();
          var status = $(".jawaban").val();
          
          // Simpan ke localStorage
          localStorage.setItem("pesan", pesan);
          localStorage.setItem("status", status);
          
          Swal.fire({
            title: 'Terima kasih!',
            text: 'Pesan kamu sudah tersimpan',
            icon: 'success',
            confirmButtonText: 'OK'
          });
          
          $(".container-pesan").hide();
        });
      });
      
      function ilang() {
        $(".open").fadeOut();
        var audio = new Audio(musik);
        audio.loop = true;
        audio.play();
      }
    </script>
    <div class="button">
      <div>
        <button onclick="backSlider()">Back</button>
        <button onclick="nextSlider()">Next</button>
      </div>
      <div>
        <button onclick="tolak()">Nggak Mau</button>
        <button onclick="terima()">Mau</button>
      </div>
      <div>
        <button onclick="showPesan()">Kirim Pesan</button>
      </div>
    </div>
    <div class="container-pesan" style="display: none"> 
      <div class="kirim-pesan"> 
        <p>Kirim Pesan</p> 
        <form id="pesanForm"> 
          <input name="Status" hidden class="jawaban" type="text" value="" /> 
          <textarea required name="Pesan" cols="30" rows="10" placeholder="Tulis pesan..."></textarea> 
          <button type="submit">Kirim</button> 
        </form> 
      </div> 
    </div>
  </body>
</html>
