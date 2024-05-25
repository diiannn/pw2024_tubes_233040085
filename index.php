<?php
session_start();
if (isset($_SESSION["status"]) && $_SESSION["status"] == 1) {
    require 'views/admin_pages.php';
} else {
    require 'views/guest_pages.php';
}