<?php
class AuctionController {
    public function show() {
        require_once '../app/views/auctionPage.php';
    }

    public function handleBidSubmission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bid = new Bid($_POST['name'], $_POST['email'], $_POST['bidAmount']);
            print_r($bid,true);die();
            $bid->save();
            header('Location: /index.php?step=bid_taken');
        }
    }
}
