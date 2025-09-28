<?php
include("config.php");
include("firebaseRDB.php");

// Initialize Firebase connection
$db = new firebaseRDB($databaseURL);

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    // Retrieve existing data for the given ID in the 'user' table
    $userData = $db->retrieve("user/{$id}");

    $userData = json_decode($userData, true);

    if ($userData) {
        // Update 'status' key with value '0'
        $userData['status'] = '0';

        // Update the data back into the database with uniqueID
        $update = $db->update("user", $id, $userData);

        if ($update) {
            echo "<script>
                    alert('User has been disabled successfully!');
                    window.location.href = 'serusr.php';
                </script>";
        } else {
            echo "Failed to disable user with ID {$id}.";
        }
    } else {
        echo "No data found for ID {$id}.";
    }
} else {
    echo "ID not provided.";
}
?>
