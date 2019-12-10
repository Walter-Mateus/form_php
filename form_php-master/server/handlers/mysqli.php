 <?php

function getUsers() {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение");
    }

    $dataUsers = $DB->query('SELECT id, username, phone, email from users');


    $users = $dataUsers->fetch_all(MYSQLI_ASSOC);

    //var_dump($users);


    mysqli_close($DB);

    return $users;
}

function addUser($data) {
    $DB = mysqli_connect("127.0.0.1", "root", "root", "website");

    if (!$DB) {
        die("Ошибка: Невозможно установить соединение");
    }
    
    $sql = "INSERT INTO users (username, email, password, phone, age)"; 
    $sql .= "VALUES('{$data['name']}', '{$data['email']}', '{$data['password']}', '{$data['phone']}', '{$data['age']}')";

    $resultQuery = $DB->query($sql);

    mysqli_close($DB);

    return $resultQuery;
}

//$user = [
 //   "username" => 'vasa-1',
 //   "email" => 'vasa-1@gmail.com',
//    "password" => '77777',
 //   "phone" => '+389674532',
 //   "age" => 25,
//];

//addUser($user);