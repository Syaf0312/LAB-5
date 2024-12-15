
<?php
include 'Database.php';
include 'User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

// Check data yang available 
if (isset($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role'])) {
    $userCreated = $user->createUser($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role']);

    // Check user successfully
    if ($userCreated) {
        echo "<p>User registered successfully!</p>";
        // direct list atau papar message
        echo "<a href='read.php'>Go to update</a>";
    } else {
        echo "<p>Failed to register user. Please try again.</p>";
    }
} else {
    echo "<p>All fields are required!</p>";
}

$db->close();
?>

