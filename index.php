<?php
$host = "student-db.c1k4g2qcqvip.ap-south-1.rds.amazonaws.com";
$user = "admin";
$password = "YOUR_PASSWORD";
$db = "studentdb";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    $sql = "INSERT INTO students (name, department, email)
            VALUES ('$name','$department','$email')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>
<style>
body {font-family: Arial; margin:40px;}
table {border-collapse: collapse; width:70%;}
th,td {border:1px solid #000; padding:8px;}
th {background:#eee;}
</style>
</head>

<body>

<h2>Student Management System (AWS)</h2>

<h3>Add Student</h3>

<form method="POST">

Name:<br>
<input type="text" name="name" required><br><br>

Department:<br>
<input type="text" name="department" required><br><br>

Email:<br>
<input type="email" name="email" required><br><br>

<input type="submit" name="submit" value="Add Student">

</form>

<hr>

<h3>Student List</h3>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Email</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while($row = $result->fetch_assoc()){
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['department']."</td>
<td>".$row['email']."</td>
</tr>";
}
?>

</table>

</body>
</html>
