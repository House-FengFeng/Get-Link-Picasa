<?php
include 'ClassPicasa.php';

$Url_1 = 'https://picasaweb.google.com/lh/photo/8ZZnCemRJfb4QjJsJtwQXNOydrU-8nQfVWbvDyT43k8?feat=directlink';
$Url_2 = 'https://picasaweb.google.com/103219276718020854069/Op?authkey=Gv1sRgCPih7_WYnbGKtAE#6038015163887814978';
$Url_3 = 'https://picasaweb.google.com/106600393574771987734/FT?authkey=Gv1sRgCKnRhK_ti4LgnQE#6170462589846807330';

// Bạn có thể ngẫu nhiên chọn một trong ba đường dẫn trên để gán vào biến $Picasa

$Picasa = new Picasa($Url_1);
Echo $Picasa->get_480p_mp4() . '<br />';
Echo $Picasa->get_720p_mp4() . '<br />';
?>
