<?php
require('model/frontend.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $community= getCommunity($_GET['title']);
    require('view/postView.php');
}