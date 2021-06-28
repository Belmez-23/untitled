<?php

        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=MYDB08',
                'a1',
                '111111'
            );
            $s = $pdo->prepare("SELECT * FROM Users WHERE email = :e");
            $s->execute(['e' => "marina.bel2009@yandex.ru"]);
            $s->setFetchMode(PDO::FETCH_ASSOC);
            while ($row = $s->fetch()) {
                echo "<p>" . $row['email'] . "</p><br>";
                echo "<p>" . $row['password_hash'] . "</p><br>";
            }
            echo "Success";
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            exit;
        }




/*require_once "userclass.php";
$user = new \MyClass\User();
$user->email = "nxxmmxxd@mail.ru";
$user->password_hash = "xxxxxxxxxxxx";
$user->save();
 *
 * try {

    $pdo = new PDO(
        'mysql:host=localhost;dbname=MYDB08',
        'a1',
        '111111'
    );
    $query = $pdo->prepare("SELECT * FROM Users WHERE email = ? ");
    $query->execute(["marina.bel2009@yandex.ru"]);
    $query->fetch();
    print_r($query);
    echo "I'm in";
}
catch (Exception $t) {
    echo $t->getMessage();
}*/