<?php
$lang = 'zh_CN';
putenv('LANG=' . $lang);
setlocale(LC_ALL, $lang);

$domain = 'messages';
bindtextdomain($domain , "locale/");
bind_textdomain_codeset($domain , 'UTF-8');
textdomain($domain);