<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
	
{
echo "<p style='color:blue'>Form has been submitted</p>";
die;
}
?>

<!DOCTYPE html>
<html>
<body>

<form method='post'><label>student id</label>
<input type="text" name="f_name" required placeholder="Student id"><br><br>
<label>course name</label>

	
	<input type="text" name="course" required placeholder="course name"><br><br>
<label for="job">Favourite color:</label>
<select id="job" name="field4"><br>
<?php
$dbhost = "remotemysql.com";
    $dbname = 'Bj4qIbE1Md';
    $dbuser = 'Bj4qIbE1Md';
    $dbpass = 'Pxkv4c2W2Ts';
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$query = "SELECT * FROM color";
     $stmt = $conn->prepare($query);
     $stmt->execute();
     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $child)

{
echo "<option value='".$child["color name"]."'>".$child["color name"]."</option>";
}
?>
</select>
  
<br><br>
<input type="submit" value="Save"/>
</form>
</body>
</html>

