<?php
include ('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MUSHROOM HOME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="home.css">
	<style type="text/css">
		/* ====== Global Style ====== */
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: #f5f2ec;
  color: #333;
}

/* ====== Button ====== */
.btn {
  display: inline-block;
  padding: 12px 25px;
  border-radius: 25px;
  background: linear-gradient(135deg, #c0392b, #e74c3c);
  color: white;
  font-weight: bold;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.btn:hover {
  background: linear-gradient(135deg, #27ae60, #2ecc71);
  transform: scale(1.05);
}

/* ====== Home Section ====== */
.home {
  height: 100vh;
  background: url('https://i.ibb.co/NVnYXtk/mushroom-bg.jpg') no-repeat center center/cover;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  position: relative;
}

.home::after {
  content: "";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.55);
}

.home .content {
  position: relative;
  z-index: 2;
}

.home h3 {
  font-size: 3.2rem;
  margin-bottom: 10px;
  text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
}

.home p {
  font-size: 1.3rem;
  margin-bottom: 25px;
}

/* ====== Marquee ====== */
marquee h1 {
  color: #c0392b;
  text-shadow: 2px 2px 5px #fff;
}

/* ====== Slider ====== */
.slider {
  max-width: 800px;
  margin: auto;
  position: relative;
  overflow: hidden;
  border-radius: 20px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.25);
}

.slides img {
  width: 100%;
  display: none;
  border-radius: 20px;
}

.slides img.active {
  display: block;
  animation: fade 1.2s ease-in-out;
}

@keyframes fade {
  from {opacity: 0.4;}
  to {opacity: 1;}
}

.prev, .next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(44,62,80,0.7);
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.3s;
}

.prev:hover, .next:hover {
  background: #27ae60;
}

.prev { left: 10px; }
.next { right: 10px; }

/* ====== About Us Section ====== */
.about-us-section {
  padding: 60px 20px;
  background: #fffaf3;
  border-top: 5px solid #c0392b;
  text-align: center;
}

.about-us-title {
  font-size: 2.2rem;
  color: #c0392b;
  margin-bottom: 30px;
}

.about-us-container {
  display: flex;
  justify-content: center;
}

.about-us-text {
  max-width: 800px;
  background: #ffffff;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
  font-size: 1.1rem;
  line-height: 1.8;
  color: #444;
  text-align: justify;
}

.about-us-text p {
  margin-bottom: 15px;
}

.highlight {
  color: #27ae60;
  font-weight: bold;
}


/* ====== Question Section ====== */
.question-section {
  background: linear-gradient(130deg, #0000, #f05454, #3b3b3b);
  padding: 70px 20px;
  text-align: center;
  color: white;
}

.question-section h3 {
  font-size: 2rem;
  margin-bottom: 15px;
}

/* ====== Footer ====== */
.main-footer {
  background: #2c3e50;
  color: white;
  padding: 40px 20px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.footer-section {
  flex: 1;
  margin: 15px;
}

.footer-section h3 {
  margin-bottom: 15px;
  color: #e74c3c;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
  transition: 0.3s;
}

.footer-section ul li a:hover {
  color: #27ae60;
}

.footer-bottom {
  text-align: center;
  padding: 15px;
  margin-top: 20px;
  border-top: 1px solid #444;
  font-size: 0.9rem;
}

	</style>
</head>
<body>
	<center>
	<section class="home">
      <div class="content">
         <h3>MUSHROOM'S HOME</h3>
         <p>GALLERY PHOTO'S</p>
         <a href="gallery.php" class="btn">Gallery</a>
      </div>
   </section>
   <br><br>
   <marquee><h1>SELAMAT DATANG KE LAMAN MUSH GALLERY</h1></marquee>
   <br><br><br><br>
   <section class="content-wrapper">
   <!-- Slider-->
   <div class="slider">
      <div class="slides">
         <img src="" class="slide active" alt="Image 1">
         <img src="" class="slide" alt="Image 2">
         <img src="" class="slide" alt="Image 3">
      </div>
      <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
      <button class="next" onclick="changeSlide(1)">&#10095;</button>
   </div>

   <!--about us-->
   <div class="about-us-section">
      <h1 class="about-us-title">ABOUT US</h1>
      <div class="about-us-container">
         <div class="about-us-text">
            <p>Selamat datang ke Mushroom Gallery!</p>  
            <p>Kami menampilkan pelbagai koleksi gambar cendawan yang menarik, unik dan penuh keindahan alam.</p> 
            <p>Laman ini dibangunkan untuk berkongsi kecantikan dan kepelbagaian spesies cendawan, sama ada untuk tujuan pendidikan, hobi fotografi, mahupun sekadar menikmati seni alam semula jadi.</p>
            <p>Visi kami adalah untuk menjadi sebuah galeri maya yang memberi inspirasi dan menambah pengetahuan mengenai dunia cendawan.  
            <p>Setiap gambar yang dipaparkan adalah hasil usaha mengabadikan momen alam yang istimewa.</p>
            <p>Terima kasih kerana melawat <span class="highlight">Mushroom Gallery</span>.  
             Semoga pengalaman anda di sini memberi kepuasan dan menambah rasa cinta terhadap keindahan alam.</p>
         </div>
      </div>
   </div>
</section>

   <script>
     let currentSlide = 0;

function showSlide(index) {
   const slides = document.querySelectorAll(".slide");
   slides[currentSlide].classList.remove("active");
   currentSlide = (index + slides.length) % slides.length;
   slides[currentSlide].classList.add("active");
}

function changeSlide(direction) {
   showSlide(currentSlide + direction);
}

// Auto slide
setInterval(() => {
   changeSlide(1);
}, 3000);

//first slide as active
showSlide(currentSlide);
   </script>

<section class="comment-section">
   <h3>Apa Kata Mereka?</h3>
   <div class="comment-cards">
      <div class="comment-card">
         <p>“Sistem gallery ini memudahkan saya untuk mengambil gambar yang diupload oleh KV”</p>
         <h4>- qoca, Pelajar KVKS</h4>
      </div>
      <div class="comment-card">
         <p>“Perkhidmatan yang disediakan amat membantu dan memudahkan warga KVKS”</p>
         <h4>- Encik Nuriman, Pensyarah KVKS</h4>
      </div>
   </div>
</section>

<section class="question-section">
   <div class="content">
      <h3>ANY QUESTION?</h3>
      <p>Jika gambar yang anda inginkan tiada disini, sila hubungi kami</p>
      <a href="contact.php" class="btn">Hubungi kami</a>
   </div>
</section>


<footer class="main-footer">
   <div class="footer-content">
      <div class="footer-section about">
         <h3>Tentang Kami</h3>
         <p>Kolej Vokasional Kuala Selangor (KVKS) berdedikasi untuk menyediakan pendidikan vokasional berkualiti tinggi untuk generasi muda, membantu mereka mencapai potensi sepenuhnya dalam industri teknikal dan vokasional.</p>
      </div>
      <div class="footer-section links">
         <h3>Pautan Berguna</h3>
         <ul>
            <li><a href="home.php">Mush Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
         </ul>
      </div>
      <div class="footer-section contact-info">
         <h3>Gallery</h3>
         <p><i class="fas fa-phone"></i>03-1234 5678</p>
         <p><i class="fas fa-envelope"></i> info@kvks.edu.my</p>
      </div>
   </div>
   <div class="footer-bottom">
      &copy; 2025 KV Kuala Selangor | All Rights Reserved.
   </div>
</footer>
<center>

</body>
</html>