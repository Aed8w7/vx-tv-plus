<?php
$Transfer_Encoding = 'mypassword';

if (isset($_GET['Transfer_Encoding']) && $_GET['Transfer_Encoding'] === $Transfer_Encoding) {
    echo json_encode(array('data' => '[{"group_title":"ROTANA","youtube":"no","server":"no","name":"CLASSIC","logo":"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Rotana_Classic_New_Logo.png/280px-Rotana_Classic_New_Logo.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3178.m3u","user_agent":"CLASSIC"},{"group_title":"ROTANA","youtube":"no","server":"no","name":"CLIP","logo":"https://www.ethnicchannels.com/images/channeldetail/rotana-clip/rotana-clip.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/642.m3u","user_agent":"CLIP"},{"group_title":"ROTANA","youtube":"no","server":"no","name":"Gulf","logo":"https://upload.wikimedia.org/wikipedia/commons/b/b5/Rotana_khalijia_New.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3177.m3u","user_agent":"Gulf"},{"group_title":"ROTANA","youtube":"no","server":"no","name":"MUSIC","logo":"https://upload.wikimedia.org/wikipedia/commons/8/86/Rotana_Music_New_Logo.png","api":"","url":"http://iptv.ndasat.xyz:88/live/228584403986534/228584403986534/3175.m3u","user_agent":"MUSIC"}]'));
    } else {
        echo json_encode(array('error' => 'Incorrect password'));
        }