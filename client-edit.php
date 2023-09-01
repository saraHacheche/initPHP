<?php
$id = $_GET['id'];

//echo $id;

$sql = "SELECT * FROM client where id = $id";
require_once("db/connex.php");
$stmt = $pdo->query($sql);
$client = $stmt->fetch();

//print_r($client);

//echo $client['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <a href="client-list.php">Clients</a>
        <a href="client-create.php">Add a Client</a>
    </nav>
    <main>
        <h2>Edit</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $client['id']; ?>" >
            <label>Name
                <input type="text" name="name" value="<?php echo $client['name']; ?>">
            </label>
            <label>Address
                <input type="text" name="address" value="<?php echo $client['address']; ?>">
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?php echo $client['phone']; ?>">
            </label>
            <label>Birthday
                <input type="date" name="birthday" value="<?php echo $client['birthday']; ?>">
            </label>
            <input type="submit">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>