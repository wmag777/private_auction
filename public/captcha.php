<?php
require_once '../app/controllers/AuctionController.php';
$controller = new AuctionController();
$controller->showCaptcha();
exit;