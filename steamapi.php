<?php

    $api_key = "D9B28B0E090CF73A6DF74AA4ED689AF2";
    $steamid = "76561198276503054";

    $api_url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$api_key&steamids=$steamid";

    $json = json_decode(file_get_contents($api_url), true);

    $join_date = date("D, M j, Y", $json["response"]["players"][0]["timecreated"]);

    function personaState($state)
    {
        if ($state == 1)
        {
            return "Online";
        }
        elseif ($state == 2)
        {
            return "Busy";
        }
        elseif ($state == 3)
        {
            return "Away";
        }
        elseif ($state == 4)
        {
            return "Snooze";
        }
        elseif ($state == 5)
        {
            return "Looking to trade";
        }
        elseif ($state == 6)
        {
            return "Looking to play";
        }
        else
        {
            return "Offline";
        }
    }
    
    $appid = "57690";
    
    $api_url2 = "http://store.steampowered.com/api/appdetails?appids=$appid";
    
    echo $api_url2;
    
    $json2 = json_decode(file_get_contents($api_url2), true);

?>
