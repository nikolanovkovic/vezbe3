<?php
    require "dbBroker.php";
    require "model/prijava.php";
    require "handler/delete.php";
    require "handler/add.php";

    // echo "obrada..";

    header("Location: home.php");


    if (isset($_POST['submit']) && $_POST['submit'] == 'izmeni') {
        $id = $_POST['id_predmeta'];
        $predmet = $_POST['predmet'];
        $katedra = $_POST['katedra'];
        $sala = $_POST['sala'];
        $datum = $_POST['datum'];
    
        $status = Prijava::update($id, $katedra, $predmet, $sala, $datum, $conn);
    
        if ($status) {
            header('Location: home.php?message=Uspesno ste izmenili prijavu');
            exit();
        } else {
            echo "Došlo je do greške prilikom ažuriranja.";
        }
    }
    


?>