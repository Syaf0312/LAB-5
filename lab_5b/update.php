<?php
include 'Database.php';
include 'User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matric = $_POST['matric'];  // Nombor Matric dari form
    $name = $_POST['name'];      // nama dari form
    $role = $_POST['role'];      // role dari form
    
    // Database class
    $database = new Database();
    $db = $database->getConnection();

    // User class
    $user = new User($db);

    // Untuk update user data
    $isUpdated = $user->updateUser($matric, $name, $role);

    // Semak update success
    if ($isUpdated) {
        // If update success, direct atau display success message
        echo "<p>User updated successfully!</p>";
        echo "<a href='read.php'>Go back to user list</a>";
    } else {
        // If update failed, akan display error message
        echo "<p>Error: User could not be updated.</p>";
    }

    $db->close();
}
?>
