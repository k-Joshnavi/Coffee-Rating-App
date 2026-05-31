<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM coffee");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Coffee Rating App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Coffee Rating Application</h1>

<table>
<tr>
    <th>Coffee</th>
    <th>Votes</th>
    <th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['coffee_name']; ?></td>
    <td><?php echo $row['votes']; ?></td>
    <td>
        <a href="vote.php?id=<?php echo $row['id']; ?>">
            <button>Vote</button>
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>