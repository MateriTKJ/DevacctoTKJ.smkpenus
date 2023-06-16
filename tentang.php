<!DOCTYPE html>
<html>
<head>
  <title>Devaccto TKJ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Devaccto TKJ</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Project <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Smart Home</a></li>
          <li><a href="#">Kultur Tanah</a></li>
          <li><a href="#">Absen RFID</a></li>
        </ul>
      </li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>
</nav>
  
  <title>About Us</title>
  <style>
    /* CSS styling for the about section */
    .about-section {
      background-color: #f1f1f1;
      padding: 50px;
      text-align: center;
      opacity: 0; /* Set the initial opacity to 0 */
      animation: fade-in 1s ease-in-out forwards; /* Apply the fade-in animation */
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    
    .about-section h2 {
      font-size: 30px;
      color: #333;
    }
    
    .about-section p {
      font-size: 18px;
      color: #666;
      margin-top: 20px;
    }

    /* CSS styling for the images and animations */
    .about-section .image-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 30px;
    }

    .about-section .image-container img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      margin: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease-in-out;
    }

    .about-section .image-container img:hover {
      transform: scale(1.1);
    }

    .about-section .image-container span {
      display: block;
      margin-top: 10px;
      font-size: 16px;
      color: #999;
    }

    .about-section .social-links {
      margin-top: 30px;
    }

    .about-section .social-links a {
      display: inline-block;
      margin-right: 10px;
      color: #666;
      text-decoration: none;
      font-size: 20px;
      transition: color 0.3s ease-in-out;
    }

    .about-section .social-links a:hover {
      color: #333;
    }

    .about-section .social-links img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
    }

    /* CSS styling for the Beranda text */
    .about-section .beranda-text {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 18px;
      color: #666;
    }

    /* CSS styling for the loading animation */
    .loader {
      border: 8px solid #f3f3f3;
      border-radius: 50%;
      border-top: 8px solid #3498db;
      width: 60px;
      height: 60px;
      animation: spin 1s linear infinite;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <div class="loader"></div> <!-- Add the loader element -->
  <section class="about-section">
    <div class="container">
      <h2>About Us</h2>
      <p>"Selamat datang di halaman resmi Teknik Komputer dan Jaringan (TKJ)! Kami adalah tim yang berdedikasi dalam menghadirkan pengetahuan dan keterampilan di bidang teknologi komputer dan jaringan. Kami percaya bahwa dunia digital semakin berkembang pesat dan TKJ memiliki peran penting dalam menghadapi tantangan tersebut.</p>
      <p>Dengan fokus pada pemahaman mendalam tentang komputer dan jaringan, kami membekali siswa dengan keterampilan yang dibutuhkan untuk sukses di era digital ini. Kami menyediakan kurikulum yang komprehensif, dengan fokus pada pemrograman, jaringan komputer, keamanan, dan manajemen sistem.</p>

      <div class="image-container">
        <div>
          <img src="photo1.jpg" alt="Photo 1">
          <span>Riyan Syahrul</span>
        </div>
        <div>
          <img src="photo2.jpg" alt="Photo 2">
          <span>rohajon</span>
        </div>
        <div>
          <img src="photo3.jpg" alt="Photo 3">
          <span>suci romadhini</span>
        </div>
        <div>
          <img src="photo4.jpg" alt="Photo 4">
          <span>mieke rahmawati</span>
        </div>
      </div>

      <div class="social-links">
        <a href="https://www.youtube.com/@devacctotkj3490" target="_blank"><img src="YT.jpg" alt="YouTube Logo"></a>
        <a href="https://instagram.com/dvct_official?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><img src="IG.jpg" alt="Instagram Logo"></a>
      </div>
    </div>
  </section>

  <script>
    // Hide the loader and show the content after the page has loaded
    window.addEventListener('load', function() {
      var loader = document.querySelector('.loader');
      var aboutSection = document.querySelector('.about-section');
      loader.style.display = 'none';
      aboutSection.style.opacity = '1';
    });
  </script>
</body>
</html>
