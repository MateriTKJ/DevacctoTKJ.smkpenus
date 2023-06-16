<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="subnav">
    <button class="subnavbtn">Dropdown <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#subnav1">Subnav 1</a>
      <a href="#subnav2">Subnav 2</a>
      <a href="#subnav3">Subnav 3</a>
    </div>
  </div> 
  <a href="#contact">Contact</a>
</div>

<h3>Navbar with Subnavigation</h3>
<p>Hover over the "Dropdown" link to see the subnavigation menu.</p>

</body>
</html>
