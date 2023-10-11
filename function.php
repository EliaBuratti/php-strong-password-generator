<?php
session_start();


$limit = ceil((int)$_GET['limit']);
$repeat = boolval($_GET['repeat']);
$letter = boolval($_GET['letters']);
$number = boolval($_GET['number']);
$symbol = boolval($_GET['symbol']);
$character_list = '';
$passworGen = '';
$alertMessage = '';



//var_dump($limit, $repeat, $letter, $number, $symbol);

//var_dump($character_list);

if (isset($limit)) {

    $character_list = genCharacterList($letter, $number, $symbol);

    if ($limit > strlen($character_list) && !$repeat) {
        $limit = strlen($character_list);
        $alertMessage = 'You dont generate this password, please toggle "yes" on repeat characters.';
    } else {

        $passworGen = randomPassword($limit, $character_list, $repeat);
    }
};

function genCharacterList($letters, $numbers, $symbols)
{
    $character = '';
    $character_letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $character_number = '0123456789';
    $character_symbol = '!"$%&/()=?*-+;:._';


    if ($letters) {
        $character .= $character_letter;
    }

    if ($numbers) {
        $character .= $character_number;
    }

    if ($symbols) {
        $character .= $character_symbol;
    }

    if (!$letters && !$numbers && !$symbols) {
        $character .= $character_letter . $character_number . $character_symbol;
    }

    //var_dump($character);
    return $character;
};

function randomPassword($length, $characters, $repeated)
{
    $randomPassword = '';

    for ($i = 1; $i <= $length; $i++) {
        $random_character = $characters[rand(0, strlen($characters) - 1)];

        if ($repeated) {
            $randomPassword .= $random_character;
        } else {
            if (!str_contains($randomPassword, $random_character)) {
                //var_dump('non è gia scritta', $random_character);
                $randomPassword .= $random_character;
            } else {
                $i--;
            }
        }
    }

    //var_dump($randomPassword);
    return $randomPassword;
};

$_SESSION['password'] = $passworGen;
