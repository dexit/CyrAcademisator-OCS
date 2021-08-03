<?php
$text = json_encode($text);
$text = str_replace('\u0483', '[ ]', $text);
$text = str_replace('\u2de0', '[б]', $text);
$text = str_replace('\u2de1', '[в]', $text);
$text = str_replace('\u2de2', '[г]', $text);
$text = str_replace('\u2de3', '[д]', $text);
$text = str_replace('\u2de4', '[ж]', $text);
$text = str_replace('\u2de5', '[з]', $text);
$text = str_replace('\u2de6', '[к]', $text);
$text = str_replace('\u2de7', '[л]', $text);
$text = str_replace('\u2de8', '[м]', $text);
$text = str_replace('\u2de9', '[н]', $text);
$text = str_replace('\u2dea', '[о]', $text);
$text = str_replace('\u2deb', '[п]', $text);
$text = str_replace('\u2dec', '[р]', $text);
$text = str_replace('\u2ded', '[с]', $text);
$text = str_replace('\u2dee', '[т]', $text);
$text = str_replace('\u2def', '[х]', $text);
$text = str_replace('\u2df0', '[ц]', $text);
$text = str_replace('\u2df1', '[ч]', $text);
$text = str_replace('\u2df2', '[ш]', $text);
$text = str_replace('\u2df3', '[щ]', $text);
$text = str_replace('\u2df4', '[ѳ]', $text);
$text = str_replace('\u2df5', '[ст]', $text);
$text = str_replace('\u2df6', '[а]', $text);
$text = str_replace('\u2df7', '[е]', $text);
$text = str_replace('\u2df8', '[\ua649]', $text); //COMBINING CYRILLIC DJERV
$text = str_replace('\u2df9', '[ꙋ]', $text);
$text = str_replace('\u2dfa', '[ѣ]', $text);
$text = str_replace('\u2dfb', '[ю]', $text);
$text = str_replace('\u2dfc', '[ꙗ]', $text);
$text = str_replace('\u2dfd', '[ѧ]', $text);
$text = str_replace('\u2dfe', '[ѫ]', $text);
$text = str_replace('\u2dff', '[ѭ]', $text);
$text = str_replace('\ua674', '[є]', $text);
$text = str_replace('\ua675', '[и]', $text);
$text = str_replace('\ua676', '[ї]', $text);
$text = str_replace('\ua677', '[у]', $text);
$text = str_replace('\ua678', '[ъ]', $text);
$text = str_replace('\ua679', '[ы]', $text);
$text = str_replace('\ua67a', '[ь]', $text);
$text = str_replace('\ua67b', '[ѡ]', $text);
$text = json_decode($text);
?>
