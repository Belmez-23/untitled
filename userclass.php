<?php

namespace MyClass;

use \PDO;//<-не хватало этой детали чтобы регистр.пхп работал

class User
{
    public $email;
    public $password_hash;

    function findByEmail($email)
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=MYDB08',
                'a1',
                '111111'
            );
            //$user = new User();
            $query = $pdo->prepare("SELECT * FROM Users WHERE email = ? ");
            $query->execute([$email]);
            while ($row = $query->fetch()) {
                $this->email = $row['email'];
                $this->password_hash = $row['password_hash'];
            }
            return $this;
            /*$user = new User(); //нецелесообразно делать клон, если метод вызывается при создании нового объекта класса?
            $fp = fopen("usery.csv", "r");
            if($fp !== FALSE) {
                while ($data = fgetcsv($fp)) {
                    if ($data[0] == $email) {
                        $hash = $data[1];
                        break;
                    }
                }
                $user->email = $email;
                $user->password_hash = $hash;
                fclose($fp);}
                */

        } catch (Exception $t) {
            echo $t->getMessage();
            exit;
        }
    }

    function save()
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=MYDB08',
                'a1',
                '111111'
            );
            //сделать проверку на имеющийся мейл
            $findEmail = $pdo->prepare('SELECT email FROM Users WHERE email = :e');
            $findEmail->execute([':e' => $this->email]);
            // $findEmail = ;
            if ($findEmail->fetchAll() > 0) {
                echo "Пользователь уже зарегистрирован<br>";
                echo "<a href = '/untitled08/log in.html'>Выполнить вход?</a>";
            } else {
                $query = $pdo->prepare('INSERT INTO Users values (:e, :h)');
                $newUser = array(':e' => $this->email, ':h' => $this->password_hash);
                $query->execute($newUser);
                header('HTTP/1.1 302 Redirect');
                header('Location: /untitled08/log in.html');
            }
            /*$file = fopen('usery.csv', 'a');
            $newUser = array($this->email, $this->password_hash); //$this->password,
            fputcsv($file, $newUser);
            fclose($file);*/
        } catch (Exception $t) {
            echo $t->getMessage();
            exit;
        }
    }

    function saveHash()
    {
        try {
            $pdo = new PDO(
                'mysql:host=localhost;dbname=MYDB08',
                'a1',
                '111111'
            );
            $query = $pdo->prepare('UPDATE Users SET password_hash = :h WHERE email = :e');
            $query->execute([':e' => $this->email, ':h' => $this->password_hash]);
        } catch (Exception $t) {
            echo $t->getMessage();
            exit;
        }
    }
}

/*$test = new User();
$test->email = "my@mail";
echo $test->email;
$test->password_hash = rand(0, 99999999999999);
$test->save();*/