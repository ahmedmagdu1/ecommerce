


<?php
 
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','adsesta');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM categories WHERE parent = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<div class='checkbox' name='subcategory'>";
while($row = mysqli_fetch_array($result)) {


    echo "<label><input type='checkbox' value='"  . $row['ID'] . "'> " .$row['Name'] . "</label>  ";
}
echo "</div>";
mysqli_close($con);


?>
