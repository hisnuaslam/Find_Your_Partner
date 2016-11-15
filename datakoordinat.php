<!DOCTYPE html>
<html>
<head>
<style>
.data_table
{
  margin:auto;
  border: 1px #333 solid;
  width: 100%;
}
.data_table #tr
{
  font-face: segwpl_font;
  background-color:#a2c4ff;
  font-size:14px;
  color:black;
  text-align:center;
  
}
.data_table #tr2
{
  font-face: segwpl_font;
  font-size:14px;
  color:black;
  text-align:center;
  
}
.data_table td
{
  text-align:center;
border-bottom: 1px solid #999;
}
</style>
</head>
<body>

<?php
require 'koneksiall.php';
// $q = mysqli_real_escape_string($koneksi, $_GET['q']);

$sql="SELECT * FROM lokasi";
$result = mysqli_query($koneksi,$sql);

echo "<div class='table-responsive'><table cellpadding='2' cellspacing='2' class='data_table'>
<tr id='tr'>
     <td>ID</td>
     <td> Latitude</td>
   <td>Longitude</td>
      
</tr>";


while($row = mysqli_fetch_array($result)) {
//   if (!$check1_res) {
//     printf("Error: %s\n", mysqli_error($koneksi));
//     exit();
// }
    echo "<tr id='tr2'>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['latitude'] . "</td>";
    echo "<td>" . $row['longitude'] . "</td>";
    
  // echo "<td><a href='deletecucian.php?ID=" . $row['ID'] . "'>delete</a> | <a href='editcucian.php?ID=" . $row['ID'] . "'>edit</a> | <a href='kuitansi.php?ID=" . $row['ID'] . "'>print</a></td>";
    echo "</tr>";
}
echo "</table></div>";
mysqli_close($koneksi);
?>
</body>
</html>