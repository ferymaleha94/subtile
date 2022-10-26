<?php

echo '#EXTM3U
#EXT-X-VERSION:3
#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1500000,NAME=720p,RESOLUTION=1280x720'."\n";
echo jembuwt('https://app-etslive-2.vidio.com/live/' ,'204')."\n";

function jembuwt($url, $aw){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://www.vidio.com/live/'.$aw.'/tokens');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	$headers = array();
	$headers[] = 'Authority: www.vidio.com';
	$headers[] = 'Content-Length: 0';
	$headers[] = 'Origin: https://www.vidio.com';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36';
	$headers[] = 'Dnt: 1';
	$headers[] = 'Accept: */*';
	$headers[] = 'Sec-Fetch-Site: same-origin';
	$headers[] = 'Sec-Fetch-Mode: cors';
	$headers[] = 'Referer: https://www.vidio.com/live/205-live-streaming-indosiar-tv-online-indonesia-vidio-com';
	$headers[] = 'Accept-Encoding: gzip, deflate, br';
	$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	$headers [] ='cookie: ahoy_visitor=a45cc3da-70a7-48a1-96ad-9d9b2d16f5d9; _vidio=true; _gcl_au=1.1.540530885.1653496866; _ga=GA1.3.1897166308.1650124206; _pbjs_userid_consent_data=3524755945110770; _fbp=fb.1.1653496867219.951526398; _CEFT=Q===; _tt_enable_cookie=1; _ttp=32df67c0-ec82-47f9-ba0a-d0326bdf3a1b; _cc_id=7ae17a88fcb6660f2a420b9943e53352; sp=b6e95c29-c3df-4dcd-9894-25b2813ec045; _lr_env_src_ats=false; _gaexp=GAX1.2.hCiH6N4JScqmtowtH2DLRw.19201.2; ahoy_visit=9123e38f-ea68-439b-b6b3-e7b0d58c3ef1; _gid=GA1.2.26795540.1653847795; _gid=GA1.3.26795540.1653847795; _lr_retry_request=true; _iat_ses=E7F71A0663F1F6B2; _sp_ses.5952=*; visitor_fp_id=a7a5deacbbf57645f2c7c8862fc8ee0e; cebs=1; _ce.s=v~3f78078e397bbff0ff400d84c9040abbc89add8d~vpv~7~v11.rlc~1653847801263; _dc_gtm_UA-47200845-12=1; shva=1; remember_user_token=eyJfcmFpbHMiOnsibWVzc2FnZSI6IlcxczBOalk1T0RNMk5sMHNJaVF5WVNReE1DUnVTMmxsUjFGWEwwWldVVkJXZFVJMGFrbHpORFZQSWl3aU1UWTFNemcwT1RFME9DNDVNekF4TlRNMElsMD0iLCJleHAiOiIyMDI0LTA1LTI5VDE4OjMyOjI4LjkzMFoiLCJwdXIiOiJjb29raWUucmVtZW1iZXJfdXNlcl90b2tlbiJ9fQ==--1c0d82c8db54866b0683746deab05f91028fd87b; plenty_id=46698366; panoramaId_expiry=1654453952661; panoramaId=9ef1e0c8b0c50a38c8b8388a644916d53938a30ff65777443c003b3a8ca62e43; _ga_JBTBSESXVN=GS1.1.1653847795.6.1.1653849160.9; _ga=GA1.1.1897166308.1650124206; luws=892e80d906a7e4f0b2e3f0a4_46698366; _vidio_session=dCtDcWVuUWYxSElyL2hIREtDMW5XZ1h0ZXlldkRyaHM4S3VpL21WOEJCREE4d011cWlYUWxHV0p2aTVQdjBUT1pFZUdqL1k0SVQ0THRiT3lxcWhOM05sVGpkb2JsRW9CcG9oZDkvZGtlakNnKzdOQ2tUbWNJOGs0a1RGZGZKdWMxdG1FdmREeE1SNnJuMDc2dTFiaG5sUURMUXMxWHJaN1VXR0JOdGZvaW9jSUY3VUJCN1NYUERERTlUQVk2RGRyWjI4MEVMbjcra2tiL0JWRUVqUUFDYXhDWWduY2pheEZ4U1lZSkZBWlJOQ3RmK0c3K3FWNGxYQVgxaThjbC9kbEJINkZQS0lDeVdZYVJ3S3R5UW1UV2djUExmcVdKeWZvbUJpSHJvNmxLeExJVmxGdy9vSnVJZXRXWWZNRWpnQ05DSVN6b1c0RGVxTDlhUTNJLzZDVTRodGdpNnJISTdSR3pKT3VqNkhYU1JKRTFLdEtiNmJWZWc0SEdzdXgwMVB5aUo1U0ppTHR5UFljd3NIb2NjTVRUaXJCRFVjQmhoekN0UEZTSVFUYlRvN0RRNmhLekdmWjNkazdBdjRKcUJUR3d0aVg2U0dURUxpWi9KMUREQnhOUzl1SHMrMVVRUjQ1TzEvMzllL05WRlZndC9rZEljTm15aE1HS0Q5VUNOaGNpaXphYzAzNmRpaDJId2g3V0VwcXIxZWVjTlFxWDlFRHN5U3lpbUd5UGhFPS0tQWtvQTR1cWVneXNmZE5PYlpIR1Rudz09--652d0bf3e3edf5428e4f4ce028f2dd0d4f285ba6; cebsp=8; _sp_id.5952=e71ccdd5-dbcd-4e21-a39a-9ab741dfad12.1653496915.6.1653849164.1653594434.08b641a6-1b82-45bd-8724-e68d4b4c784c; _iat_vis=E7F71A0663F1F6B2.e940ee37082833c142882f05144d9d20.1653849165463.bb41f5321a1ff3f753654690345ebd81.IZUBAJJREB.11111111.1.0';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}

	$result = json_decode($result, true);
	$token = $result['token'];
	curl_close($ch);
	
	if (preg_match("/@/", $url)) {
		$urlreq = $url.'/master.m3u8?'.$token;
	}else{
		$urlreq = $url.$aw.'/master.m3u8?'.$token;
	}
	// echo $urlreq;
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $urlreq);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

	$headers = array();
	$headers[] = 'Authority: app-etslive-2.vidio.com';
	$headers[] = 'Origin: https://www.vidio.com';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36';
	$headers[] = 'Dnt: 1';
	$headers[] = 'Accept: */*';
	$headers[] = 'Sec-Fetch-Site: same-site';
	$headers[] = 'Sec-Fetch-Mode: cors';
	$headers[] = 'Referer: https://www.vidio.com/';
	$headers[] = 'Accept-Encoding: gzip, deflate, br';
	$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	    $result = preg_replace('/#(.*?)\n/', '', $result);
    // $result = explode("\n", );
    $result = preg_replace('/#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=(.*?)RESOLUTION(.*?)\n/', '', $result);
    $tot = count(explode("\n", $result));
    if ($tot <= 2) {
        header("Refresh: 0");
    }else{
        $dat = explode("\n", $result);
        echo $dat[0];
        
    echo '
#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=1200000,NAME=480p,RESOLUTION=854x480'."\n";
         $dat = explode("\n", $result);
        echo $dat[1];
echo '
#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=625000,NAME=360p,RESOLUTION=640x360'."\n";
         $dat = explode("\n", $result);
        echo $dat[2];
echo '
#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=375000,NAME=240p,RESOLUTION=426x240'."\n";
         $dat = explode("\n", $result);
        echo $dat[3];
               
        preg_match_all('/(.*?)_720(.*?)\n/', $result, $match);
         preg_match_all('/(.*?)_480(.*?)\n/', $result, $match);
          preg_match_all('/(.*?)_360(.*?)\n/', $result, $match);
          preg_match_all('/(.*?)_240(.*?)\n/', $result, $match);
        // preg_match_all('/(.*?)_720(.*?)\n/', $result, $match);
        if (count($match[0])<=1) {
            preg_match_all('/(.*?)_720(.*?)\n/', $result, $match);
                if (count($match[0])<=1) {
                preg_match_all('/(.*?)_720(.*?)\n/', $result, $match);
            }
        }
        // var_dump($match[0]); //ini buat manggil result cuman resolusi 720p
        // var_dump(explode("\n", $result)); // Ini buat liat semua resolusi
        // echo $result[5]; // ini buat manggil result index ke 5 /hls-b/ ingest_205_720p
    }
 
    curl_close($ch);
    
}
?>