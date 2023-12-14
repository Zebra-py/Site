<?php
session_start();

if (isset($_POST['addedBlockContent'])) {

    if (!isset($_SESSION['blocks'])) {
        $_SESSION['blocks'] = '';
    }
    $_SESSION['blocks'] .= $_POST['addedBlockContent'];
}
?>