<?php include 'db_connection.php'; ?>
<?php include 'header.php'; ?>
<main>
    <form action="insert_user.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Add User</button>
    </form>
</main>
<?php include 'footer.php'; ?>