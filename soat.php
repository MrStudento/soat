<?php

if (!file_exists('madeline.php')) {

    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');

}

include 'madeline.php';

date_default_timezone_set('Asia/Tashkent');

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$ricon = array('01d'=>'🌞','02d'=>'🌤','03d'=>'☁️','04d'=>'🌥','09d'=>'🌦','10d'=>'🌧','11d'=>'⛈','13d'=>'❄️','50d'=>'💨','01n'=>'🌙','02n'=>'☁️','03n'=>'☁️','04n'=>'🌩','09n'=>'🌧','10n'=>'🌧','11n'=>'⛈','13n'=>'❄️','50n'=>'💨');

$obuhavo = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=Tashkent,UZ&units=metric&appid=a9d86a9dc54f8caf39ac424735ffc2e6"),true);

$temp = $obuhavo['main']['temp'];
$icon = $obuhavo['weather'][0]['icon'];

$time = date("H:i");
$soat = date("H:i");
$kun = date("d.m.y");
$kunm=date("d"); 
$yil = date("Y");
$kunlar = date("d"); 

$kun = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓪","⓵","⓶","⓷","⓸","⓹","⓺","⓻","⓼","⓽","⓵⓪","⓵⓵","⓵⓶","⓵⓷","⓵⓸","⓵⓹","⓵⓺","⓵⓻","⓵⓼","⓵⓽","⓶⓪","⓶⓵","⓶⓶","⓶⓷","⓶⓸","⓶⓹","⓶⓺","⓶⓻","⓶⓼","⓶⓽","⓷⓪","⓷⓵"], $kun);

$soat= str_replace('1', '⓵', $soat);
$soat = str_replace('2', '⓶', $soat);
$soat = str_replace('3', '⓷', $soat);
$soat = str_replace('4', '⓸', $soat);
$soat = str_replace('5', '⓹', $soat);
$soat = str_replace('6', '⓺', $soat);
$soat = str_replace('7', '⓻', $soat);
$soat = str_replace('8', '⓼', $soat);
$soat = str_replace('9', '⓽', $soat);
$soat = str_replace('0', 'ⓞ', $soat);

$kunr = date('z');  
$i = 440; 
$m2 = $i-$kunr; 

$yil = str_replace(["2020","2021","2022","2023","2024","2025"],["⓶ⓞ⓶ⓞ","⓶ⓞ⓶⓵","⓶ⓞ⓶⓶","⓶ⓞ⓶⓷","⓶ⓞ⓶⓹"], $yil);

$kunlar = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["⓪","⓵","⓶","⓷","⓸","⓹","⓺","⓻","⓼","⓽","⓵⓪","⓵⓵","⓵⓶","⓵⓷","⓵⓸","⓵⓹","⓵⓺","⓵⓻","⓵⓼","⓵⓽","⓶⓪","⓶⓵","⓶⓶","⓶⓷","⓶⓸","⓶⓹","⓶⓺","⓶⓻","⓶⓼","⓶⓽","⓷⓪","⓷⓵"], $kunlar);
$okun=date("n"); 
$oynoms = "1ʏꙷᴀⷽɴᷡᴠͮᴀⷽʀᷢ1 2ғᷫᴇⷷᴠͮʀᷢᴀⷽʟᷞ2 3ᴍᷟᴀⷽʀᷢᴛͭ3 4ᴀⷽᴘᷮʀᷢᴇⷷʟᷞ4 5ᴍᷟᴀⷽʏꙷ5 6ɪͥʏꙷᴜͧɴᷡ6 7ɪͥʏꙷᴜͧʟᷞ7 8ᴀⷽᴠͮɢᷛᴜͧsᷤᴛͭ8 9sᷤᴇⷷɴᷡᴛͭᴀⷽʙⷡʀᷢ9 10ᴏⷪᴋⷦᴛͭᴀⷽʙⷡʀᷢ10 11ɴᷡᴏⷪʏꙷᴀⷽʙⷡʀᷢ11 12ᴅͩᴇⷷᴋⷦᴀⷽʙⷡʀᷢ12"; 
$ex7 = explode("$okun",$oynoms); 
$oy = "$ex7[1]";

if(!file_exists("bio")){file_put_contents("bio","");}
if(!file_exists("nik")){file_put_contents("nik","");}

$input = ["🇺🇿 🆃🅾🆂🅷🅺🅴🅽🆃 : + $temp °C $ricon[$icon]","https://instagram.com/_mr_studento_👈","• O'zbekiston Milliy Universiteti","• Jizzakh vil.Bakhmal t.","Web Developer","https://github.com/MrStudento"]; 
$rand=array_rand($input); 
$bio="$input[$rand]";

$old_bio = file_get_contents("bio");

if($bio == $old_bio){

    $input = ["🇺🇿 🆃🅾🆂🅷🅺🅴🅽🆃 : + $temp °C $ricon[$icon]","https://instagram.com/_Mr_Studento_","• O'zbekiston Milliy Universiteti","• Jizzakh vil. Bakhmal t.","Web Developer","https://github.com/MrStudento"]; 
    $rand=array_rand($input); 
    $bio="$input[$rand]";

}

file_put_contents("bio","$bio");

$old_nik = file_get_contents("nik");

$nik = ["Esʜᴍᴀᴍᴀᴛᴏᴠ Dᴏɴɪʏᴏʀ ♫︎","𝐸𝑠ℎ𝑚𝑎𝑚𝑎𝑡𝑜𝑣 𝐷𝑜𝑛𝑖𝑦𝑜𝑟 ","✈︎Doniyor TM2102❤︎","𝙳𝚘𝚗𝚒𝚢𝚘𝚛 𝚃𝙼 2102","✌︎D●niy●R✌︎","+998940051147☏︎","➪シ︎𝐃𝐨𝐧𝐢𝐲𝐨𝐫シ︎⌫"];
$nikrand=array_rand($nik);
$niktxt="$nik[$nikrand]";

if($niktxt == $old_nik){

    $nik = ["Esʜᴍᴀᴍᴀᴛᴏᴠ Dᴏɴɪʏᴏʀ ♫︎","𝐸𝑠ℎ𝑚𝑎𝑚𝑎𝑡𝑜𝑣 𝐷𝑜𝑛𝑖𝑦𝑜𝑟 ","✈︎Doniyor TM2102❤︎","𝙳𝚘𝚗𝚒𝚢𝚘𝚛 𝚃𝙼 2102","✌︎D●niy●R✌︎","+998940051147☏︎","➪シ︎𝐃𝐨𝐧𝐢𝐲𝐨𝐫シ︎⌫"]; 
    $nikrand=array_rand($nik);
    $niktxt="$nik[$nikrand]";

}

file_put_contents("nik","$niktxt");

$MadelineProto->account->updateProfile(['first_name'=>"$niktxt | $soat",'about'=>"$bio "]);
$Bool = $MadelineProto->account->updateStatus(['offline' => false ]);

unlink("MadelineProto.log");
unlink("session.madeline");

?>