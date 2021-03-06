<?php
$username='';
$password = "";

function drawTable($rows) {
    if(empty($rows)) {echo "<p>No results found.</p>";}
    else {
      echo"\n";
      echo"<table border=1 cellspacing=1>";
          echo"<tr>";
          foreach($rows[0] as $key => $item ) {
          echo"<th>$key</th>";
          }
          echo"</tr>";

          foreach($rows as $row) {
              echo "<tr>";
              foreach($row as $item) {
                  echo "<td>$item</td>\n";
              }
              echo "</tr>";
              echo "\n";
          }
          echo "<br>";
    }
}



?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Select</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="http://students.cs.niu.edu/~z1910087/assignment8.php">Home</a>
    <a href="http://students.cs.niu.edu/~z1910087/everything.php"> Everything</a>
    <a href="http://students.cs.niu.edu/~z1910087/parts.php">Parts</a>
    <a href="http://students.cs.niu.edu/~z1910087/buy.php">Buy Parts</a>
    <a href="http://students.cs.niu.edu/~z1910087/suppliers.php">Suppliers</a>
    <a href="http://students.cs.niu.edu/~z1910087/addSupplier.php"> Add Supplier</a>
    <a href="http://students.cs.niu.edu/~z1910087/addPart.php"> Add Part</a>
  </div>
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
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
<br>

</body>
</html>
