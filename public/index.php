<?php
require_once '../app/controllers/AuctionController.php';

$controller = new AuctionController();
if (isset($_GET['action']) && $_GET['action'] === 'submitBid') {
    $controller->handleBidSubmission();
} else {
    $controller->show();
}
