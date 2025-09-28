<?php
// Include your database connection or Firebase connection class
include 'firebaseRDB.php'; // Misalnya Anda menggunakan kelas ini untuk koneksi Firebase
$db = new firebaseRDB("https://exam-1764d-default-rtdb.asia-southeast1.firebasedatabase.app/");

if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    
    // Retrieve existing data for the given ID
    $cheatingData = $db->retrieve("user/{$id}");


    $cheatingData = json_decode($cheatingData, true);
    
    if ($cheatingData) {
        // Add/Update 'status' key with value 'disable'
        $cheatingData['status'] = '0';

        // Update the data back into the database with uniqueID
        $update = $db->update("user", $id, $cheatingData);  // Perbaiki dengan menambahkan $id sebagai uniqueID

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
