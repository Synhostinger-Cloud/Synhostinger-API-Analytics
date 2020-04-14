<?php
//   _____             _               _   _                       		
//  / ____|           | |             | | (_)                      	
// | (___  _   _ _ __ | |__   ___  ___| |_ _ _ __   __ _  ___ _ __ 		
//  \___ \| | | | '_ \| '_ \ / _ \/ __| __| | '_ \ / _` |/ _ \ '__|		
//  ____) | |_| | | | | | | | (_) \__ \ |_| | | | | (_| |  __/ |   		
// |_____/ \__, |_| |_|_| |_|\___/|___/\__|_|_| |_|\__, |\___|_|   		
//          __/ |                                   __/ |          		
//         |___/      www.synhostinger.com         |___/           		
//                    Hébergeur Web / VPS

/////////////////////////   Exécution  //////////////////////////////////////////////////////
include 'api.php';
$fetched = file_get_contents($url);
$content = json_decode($fetched,true);
print("<h1>Visiteur / Pays</h1>\n");
foreach ($content as $row) {
    $countryName = htmlspecialchars($row["label"], ENT_QUOTES, 'UTF-8');
    $hits = $row['nb_visits'];
    print("<b>$countryName</b> ($hits visits)<br>\n");
}
?>