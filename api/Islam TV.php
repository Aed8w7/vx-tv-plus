<?php
$Transfer_Encoding = 'mypassword';

if (isset($_GET['Transfer_Encoding']) && $_GET['Transfer_Encoding'] === $Transfer_Encoding) {
    echo json_encode(array('data' => '[{"group_title":"Islam TV","name":"السادسة","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcSRUMxzwBcWJyBDvbDpvnDtsbtgBbwk1LZG7Q\u0026usqp\u003dCAU","url":"https://cdnamd-hls-globecast.akamaized.net/live/ramdisk/assadissa/hls_snrt/assadissa-avc1_1000000\u003d3-mp4a_130400_qad\u003d1.m3u8"},{"group_title":"Islam TV","name":"السنة النبوية","logo":"https://encrypted-tbn0.gstatic.com/images?q\u003dtbn:ANd9GcRK4_8acF9CZDouRBJ3O8eK9UGGfchEW5AmGA\u0026usqp\u003dCAU","url":"http://m.live.net.sa:1935/live/sunnah/playlist.m3u8"}]'));
    } else {
        echo json_encode(array('error' => 'Incorrect password'));
        }