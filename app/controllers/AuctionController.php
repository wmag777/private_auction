<?php
require_once __DIR__ . '/../db_config.php';
require_once __DIR__ . '/../models/Bid.php';
require_once __DIR__ . '/../models/EmailSender.php';
class AuctionController {
    public function show() {
        $bids = Bid::getAllBids();
        require_once '../app/views/auctionPage.php';
    }

    public function handleBidSubmission() {
        // Подключение к базе данных
        global $pdo;

        $bid = new Bid();
        $bid->save($pdo);

        $email = new EmailSender('alexerm777@gmail.com',
            'Принята ставка',
            'Здравствуйте, принята новая ставка!
            
'.print_r($_REQUEST,true));

        $email->send();

        // Перенаправление на страницу подтверждения
        header('Location: /index.php?step=bid_taken');
        exit();
    }



}
