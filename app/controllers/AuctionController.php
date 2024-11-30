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

        $email = new EmailSender('info@sky.vision',
            'Принята ставка',
            'Здравствуйте, принята новая ставка!
'.print_r($_REQUEST,true));
        $email->send();

        // Перенаправление на страницу подтверждения
        header('Location: /index.php?step=bid_taken');
        exit();
    }

    public function showCaptcha()
    {
        session_start();
        require_once __DIR__ . '/../models/Captcha.php';

        $captcha = new Captcha();
        $code = $captcha->generateCode();
        $_SESSION['captcha_code'] = $code;
        $captcha->generateImage($code);
    }

    public function validateCaptcha(string $input): bool
    {
        return isset($_SESSION['captcha_code']) && $input === $_SESSION['captcha_code'];
    }
}
