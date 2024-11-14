<?php
require_once __DIR__ . '/../db_config.php';
require_once __DIR__ . '/../models/Bid.php';
class AuctionController {
    public function show() {
        require_once '../app/views/auctionPage.php';
    }

    public function handleBidSubmission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Подключение к базе данных
            global $pdo;

            $bid = new Bid();
            $bid->save($pdo);

            // Перенаправление на страницу подтверждения
            header('Location: /index.php?step=bid_taken');
            exit();
        }
    }

}
