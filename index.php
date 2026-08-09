<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";



// إضافة مستخدم جديد
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$age = $_POST['age'];

$stmt = $conn->prepare("INSERT INTO users (name, age, status) VALUES (?, ?, 0)");
$stmt->bind_param("si", $name, $age);
$stmt->execute();

header("Location: index.php");
exit();
}

// تغيير الحالة
if (isset($_POST['toggle'])) {
$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE users SET status = 1 - status WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit();
}

// جلب جميع المستخدمين
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Users Management</title>

<style>
body {
font-family: Arial, sans-serif;
background: #f5f5f5;
padding: 40px;
}

.container {
max-width: 700px;
margin: auto;
background: white;
padding: 30px;
border-radius: 10px;
}

h1 {
text-align: center;
}

.form {
display: flex;
gap: 10px;
margin-bottom: 30px;
}

input {
padding: 10px;
flex: 1;
}

button {
padding: 10px 18px;
cursor: pointer;
}

table {
width: 100%;
border-collapse: collapse;
}

th, td {
border: 1px solid #ddd;
padding: 12px;
text-align: center;
}

th {
background: #eee;
}

.status {
font-weight: bold;
}
</style>
</head>

<body>

<div class="container">

<h1>Users</h1>

<!-- Form -->
<form method="POST" class="form" onsubmit="return validateForm()">

<input
type="text"
name="name"
id="name"
placeholder="Name"
>

<input
type="number"
name="age"
id="age"
placeholder="Age"
>

<button type="submit" name="submit">
Submit
</button>

</form>


<!-- Users Table -->
<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>

<tr>

<td>
<?php echo $row['id']; ?>
</td>

<td>
<?php echo htmlspecialchars($row['name']); ?>
</td>

<td>
<?php echo $row['age']; ?>
</td>

<td class="status">
<?php echo $row['status']; ?>
</td>

<td>

<form method="POST">

<input
type="hidden"
name="id"
value="<?php echo $row['id']; ?>"
>

<button type="submit" name="toggle">
Toggle
</button>

</form>

</td>

</tr>

<?php } ?>

</table>

</div>


<script>

function validateForm() {

let name = document.getElementById("name").value;
let age = document.getElementById("age").value;

if (name === "" || age === "") {
alert("Please enter name and age");
return false;
}

return true;
}

</script>

</body>
</html>
