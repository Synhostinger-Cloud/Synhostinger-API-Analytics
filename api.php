<?php
//   _____             _               _   _                       		
//  / ____|           | |             | | (_)                      	
// | (___  _   _ _ __ | |__   ___  ___| |_ _ _ __   __ _  ___ _ __ 		
//  \___ \| | | | '_ \| '_ \ / _ \/ __| __| | '_ \ / _` |/ _ \ '__|		
//  ____) | |_| | | | | | | | (_) \__ \ |_| | | | | (_| |  __/ |   		
// |_____/ \__, |_| |_|_| |_|\___/|___/\__|_|_| |_|\__, |\___|_|   		
//          __/ |                                   __/ |          		
//         |___/      www.synhostinger.com         |___/ 
//                     Hébergeur Web / VPS

/////////////////////////   CONFIG API  //////////////////////////////////////////////////////
$token_auth = 'TOKEN'; // API de analytics.synhostinger.com
$SITEID = 'ID'; // SiteID de analytics.synhostinger.com
$url = "https://analytics.synhostinger.com";// URL de l'analytics
$url .= "?module=API&method=UserCountry.getCountry"; //APPEL 
$url .= "&idSite=$SITEID&period=month&date=today"; //APPEL 
$url .= "&format=JSON&filter_limit=10"; // Filtrage
$url .= "&token_auth=$token_auth"; // Appel à $token_auth
/////////////////////////   END  //////////////////////////////////////////////////////

