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
        <h2>Create</h2>
        <form action="client-store.php" method="post">
            <label>Name
                <input type="text" name="name">
            </label>
            <label>Address
                <input type="text" name="address">
            </label>
            <label>Phone
                <input type="text" name="phone">
            </label>
            <label>Birthday
                <input type="date" name="birthday">
            </label>
            <input type="submit">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>