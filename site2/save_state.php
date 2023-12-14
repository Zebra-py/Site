<?php
session_start();

// Проверяем наличие данных в POST-запросе
if (isset($_POST['addedBlockContent'])) {
    // Добавляем только содержимое добавленного блока в сессию
    if (!isset($_SESSION['blocks'])) {
        $_SESSION['blocks'] = '';
    }
    $_SESSION['blocks'] .= $_POST['addedBlockContent'];
}
?>