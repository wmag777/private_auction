<?php
require_once '../app/controllers/AuctionController.php';

$controller = new AuctionController();
if (isset($_POST['action']) && $_POST['action'] === 'submitBid') {
    $controller->handleBidSubmission();
} else {
    $controller->show();
}
