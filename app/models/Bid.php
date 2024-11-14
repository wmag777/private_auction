<?php
class Bid {

    private $name;
    private $email;
    private $company;
    private $position;
    private $amount;
    private $message;

    public function __construct() {
        $this->name = $_REQUEST['name'] ?? '';
        $this->email = $_REQUEST['email'] ?? '';
        $this->company = $_REQUEST['company'] ?? '';
        $this->position = $_REQUEST['position'] ?? '';
        $this->amount = $_REQUEST['amount'] ?? 0;
        $this->message = $_REQUEST['message'] ?? '';
    }

    public function save($pdo) {
        $stmt = $pdo->prepare("
            INSERT INTO bids (name, email, company, position, amount, message) 
            VALUES (:name, :email, :company, :position, :amount, :message)
        ");

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':company', $this->company);
        $stmt->bindParam(':position', $this->position);
        $stmt->bindParam(':amount', $this->amount);
        $stmt->bindParam(':message', $this->message);

        return $stmt->execute();
    }

    public static function getAllBids() {
        global $pdo;

        // Подготовка и выполнение запроса для получения всех ставок по убыванию суммы
        $stmt = $pdo->prepare("SELECT * FROM bids ORDER BY amount DESC");
        $stmt->execute();

        // Возвращаем все записи
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
