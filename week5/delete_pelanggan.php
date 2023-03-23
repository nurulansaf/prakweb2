<?php
    require_once 'dbkoneksi.php';

    if (isset($_GET['id'])) {
        if ($_GET['id']) {
            $query = "DELETE FROM pelanggan WHERE id = " . $_GET['id'];
            if ($query->execute()) {
                header('Location: list_pelanggan.php');
            }
        }
    }

    
?>