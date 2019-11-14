<?php
    include("steamapi.php"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles/main.css">
    
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    
        <title>Inicio</title>
    </head>
    <body>
        <main id="content" class="flex-grow-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="box-content">
                            <h1><?=$json["response"]["players"][0]["personaname"];?></h1>
                            <img src="<?=$json["response"]["players"][0]["avatarfull"];?>">
                            <table class="table table-striped">
                              <tbody>
                                <tr>
                                  <th scope="row">SteamID64</th>
                                  <td><?=$json["response"]["players"][0]["steamid"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Display Name</th>
                                  <td><?=$json["response"]["players"][0]["personaname"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">URL</th>
                                  <td><a href='<?=$json["response"]["players"][0]["profileurl"];?>'>
                                      <?=$json["response"]["players"][0]["profileurl"];?></a></td>
                                </tr>
                                <tr>
                                  <th scope="row">Avatar</th>
                                  <td><img src='<?=$json["response"]["players"][0]["avatar"];?>'></td>
                                </tr>
                                <tr>
                                  <th scope="row">Status</th>
                                  <td><?=personaState($json['response']['players'][0]['personastate']);?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Real Name</th>
                                  <td><?=$json["response"]["players"][0]["realname"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Joined</th>
                                  <td><?=$join_date;?></td>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="box-content">
                            <table class="table table-striped">
                              <tbody>
                                <tr>
                                  <th scope="row">URL API</th>
                                  <td><a href='<?=$api_url2;?>'><?=$api_url2;?></a></td>
                                </tr>
                                <tr>
                                  <th scope="row">URL</th>
                                  <td><a href='https://store.steampowered.com/app/<?=$appid;?>'>https://store.steampowered.com/app/<?=$appid;?></a></td>
                                </tr>
                                <tr>
                                  <th scope="row">ID</th>
                                  <td><?=$appid;?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Jogo</th>
                                  <td><?=$json2[$appid]["data"]["name"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Descrição</th>
                                  <td><?=$json2[$appid]["data"]["short_description"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Moeda</th>
                                  <td><?=$json2[$appid]["data"]["price_overview"]["currency"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Preço original</th>
                                  <td><?=$json2[$appid]["data"]["price_overview"]["initial"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Preço atual</th>
                                  <td><?=$json2[$appid]["data"]["price_overview"]["final"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Preço atual formatado</th>
                                  <td><?=$json2[$appid]["data"]["price_overview"]["final_formatted"];?></td>
                                </tr>
                                <tr>
                                  <th scope="row">Desconto atual</th>
                                  <td><?=$json2[$appid]["data"]["price_overview"]["discount_percent"];?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
