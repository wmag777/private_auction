<?php
// Функция для загрузки переменных из файла .env
function loadEnv($filePath) {
    if (!file_exists($filePath)) {
        return false;
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Игнорируем комментарии
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Разделяем ключ и значение
        list($key, $value) = explode('=', $line, 2);
        // Удаляем пробелы и кавычки
        $key = trim($key);
        $value = trim($value, " \t\n\r\0\x0B");

        // Устанавливаем переменную окружения
        putenv("$key=$value");
    }
    return true;
}

// Загружаем переменные окружения из .env на одну директорию выше
loadEnv(__DIR__ . '/../.env');

// Получение данных подключения из переменных окружения
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

try {
    // Создание строки DSN для PDO
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    // Создание объекта PDO
    $pdo = new PDO($dsn, $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Создание таблиц, если они не существуют
$pdo->exec("
    CREATE TABLE IF NOT EXISTS bids (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        company VARCHAR(255),
        position VARCHAR(255),
        amount DECIMAL(10, 2) NOT NULL,
        message TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
");

?>
