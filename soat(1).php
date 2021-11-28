<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php'; #AsadKaj#

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("5 hour"));
$timu=date("H:i",strtotime("-5 hour"));
$timr=date("H:i",strtotime("3 hour"));
$timc=date("H:i",strtotime("8 hour"));
$data=date('d/m/y');
$MadelineProto->account->updateProfile(['first_name'=>'😉Doniyor Eshmamatov😁| '.$time.' |','about'=>'⌚️Vaqtlar:  🇺🇿 '.$time.' | 🇺🇸 '.$timu.' | 🇷🇺 '.$timr.' | 🇨🇳 '.$timc.' | 🗓 ' .$data]);
?>
///@PitnakPHP///