<?php
$text = str_replace('ъі', 'ы', $text);
$text = str_replace('ЪІ', 'Ы', $text);
$text = str_replace('Ꙍ', 'Ѡ', $text);
$text = str_replace('ꙍ', 'ѡ', $text);
$text = str_replace('Ꙕ', 'Ю', $text);
$text = str_replace('ꙕ', 'ю', $text);
$text = str_replace('Ꙙ', 'Ѧ', $text);
$text = str_replace('ꙙ', 'ѧ', $text);
$text = str_replace('Ꙝ', 'Ѩ', $text);
$text = str_replace('ꙝ', 'ѩ', $text);
$text = str_replace('Ꙛ', '[Ѧ/Ѫ]', $text); //
$text = str_replace('ꙛ', '[ѧ/ѫ]', $text);
$text = str_replace('Ꙏ ', '[Ъ/ъ]', $text);
$text = str_replace('ꙏ', '[ъ/ь]', $text);
$text = str_replace('Ꙡ', 'Ц', $text);
$text = str_replace('ꙡ', 'ц', $text);
$text = str_replace('џ', 'ц', $text);
$text = str_replace('Џ', 'Ц', $text);
$text = str_replace('Ѝ', 'ѝ', $text);  // mache statischen Buchstaben zu Kompositum, damit Akzente entfernt werden können
$text = str_replace('Ѝ', 'ѝ', $text);
$text = str_replace('Ў', 'Ў', $text);
$text = str_replace('ў', 'ў', $text);
$text = str_replace('Ѐ', 'Ѐ', $text);
$text = str_replace('ѐ', 'ѐ', $text);
$text = str_replace('Ꙣ', 'Дь', $text);
$text = str_replace('ꙣ', 'дь', $text);
$text = str_replace('Ꙥ', 'Л҄', $text);
$text = str_replace('ꙥ', 'л҄', $text);
$text = str_replace('Ꙧ', 'Мь', $text);
$text = str_replace('ꙧ', 'мь', $text);
$text = str_replace('Ҥ', 'Н҄', $text);
$text = str_replace('ҥ', 'н҄', $text);
$text = str_replace('Ꙅ', 'Ѕ', $text);
$text = str_replace('ꙅ', 'ѕ', $text);
?>
