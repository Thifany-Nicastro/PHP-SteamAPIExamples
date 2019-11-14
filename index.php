<?php
    include("steamapi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <h1><?=$json["response"]["players"][0]["personaname"];?></h1>
        <img src="<?=$json["response"]["players"][0]["avatarfull"];?>">
        <ul>
            <li>SteamID64: <?=$json["response"]["players"][0]["steamid"];?></li>
            <li>Display Name: <?=$json["response"]["players"][0]["personaname"];?></li>
            <li>URL: <?=$json["response"]["players"][0]["profileurl"];?></li>
            <li>Small Avatar: <img src='<?=$json["response"]["players"][0]["avatar"];?>'></li>
            <li>Medium Avatar: <img src='<?=$json["response"]["players"][0]["avatarmedium"];?>'></li>
            <li>Full Avatar: <img src='<?=$json["response"]["players"][0]["avatarfull"];?>'></li>
            <li>Status: <?=personaState($json['response']['players'][0]['personastate']);?></li>
            <li>Real Name: <?=$json["response"]["players"][0]["realname"];?></li>
            <li>Joined: <?=$join_date;?></li>
        </ul>
        <ul>
            <li> Jogo: <?=$json2[$appid]["data"]["name"];?></li>
        </ul>
    </body>
</html>
