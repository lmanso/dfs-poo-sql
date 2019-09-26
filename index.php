<?php
spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$header = require_once 'public/layouts/header.php';
$footer = require_once 'public/layouts/footer.php';
// Routes
switch ($request_uri[0]) {
        // VIEW
    case '/':
        $header;
        require 'public/views/home.php';
        $footer;
        break;

    case '/characters':
        $header;
        require 'public/views/characters.php';
        $footer;
        break;

        //INSERT
    case '/insertCharacters';
        // var_dump($c);

        //IMG    
        if (empty($_POST['image'])) {
            $img = 'https://picsum.photos/200/100';
        } else {
            $img = $_POST['image'];
        }
        //GENDER
        if ($_POST['gender'] == 1) {
            $gender = 'femme';
        } else {
            $gender = 'homme';
        }
        $name = $_POST['name'];
        $health = intval($_POST['health']);
        $mana = intval($_POST['mana']);
        $energy = intval($_POST['energy']);
        $power = intval($_POST['power']);
        $speed = intval($_POST['speed']);
        $weapon = $_POST['weapon'];
        $race = intval($_POST['race']);
        $role = intval($_POST['role']);
        $characters = new Character($img, $gender, $name, $health, $mana, $energy, $power, $speed, $weapon, $race, $role);
        header('Location: /characters');
        break;

        //DELETE
    case '/deleteCharacter';
        // Recupere l'id du personnage dans l'uri
        Character::deleteCharacter($request_uri[1]);
        header('Location: /characters');
        break;
    case '/updateCharacter';
        $name = $_POST['name'];
        //IMG    
        $img = $_POST['image'];
        // var_dump($request_uri[1]);die;

        // if (isset($request_uri[1])) {
            // } else {
                Character::updateCharacter($request_uri[1], $name, $img);
                header('Location: /characters');
        // }
        break;
    default:
        echo '404';
        break;
}
//
