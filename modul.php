<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px; /* Menentukan lebar minimum kolom dropdown */
  width: 110px; /* Mengatur lebar sesuai kontennya */
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
</style>
</head>
<body>

<div class="dropdown">
  <a href="index.php" style="color: black; background-color: white; font-size: 15px;">Home</a>
  <a href="tentang.php" style="color: black; background-color: white; font-size: 15px;">About Us</a>
  <button onclick="myFunction()" class="dropbtn">Project</button>
  <div id="myDropdown" class="dropdown-content">
    <div class="dropdown">
      <button onclick="projectFunction()" class="dropbtn">Hasil Karya</button>
      <div id="projectDropdown" class="dropdown-content">
        <a href="KOMPETENSI.php">Smart Home</a>
        <a href="project2.php">Kultur Tanah</a>
        <a href="project3.php">Absensi RFID</a>
      </div>
    </div>
  </div>
</div>




<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function projectFunction() {
  document.getElementById("projectDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
