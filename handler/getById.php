<?php
require "dbBroker.php";
require "model/prijava.php";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $result = Prijava::getById($id, $conn);
    
    if ($result->num_rows > 0) {
        $prijava = $result->fetch_assoc();
        echo json_encode($prijava);
    } else {
        echo json_encode([]);
    }
}
?>
