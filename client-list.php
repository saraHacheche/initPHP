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
        <h2>Clients</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Birthday</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM client ORDER BY name";
                    require_once("db/connex.php");
                    $stmt = $pdo->query($sql);
                    foreach($stmt as $row){
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['birthday']; ?></td>
                    <td><a href="client-edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
                    <td>
                        <form action="client-delete.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>