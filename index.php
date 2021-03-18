<?php

$str = '       Потеряла девчонка башмак
       У дурацкого принца на бале
       Вы её башмака не видали
       Или что нибудь в сказке не так
       Понимаю пока не нашли.
       Может, после дворцового вальса
       Он под лестницей тёмной валялся
       В золотой ядовитой пыли.
       И старьёвщик  весёлый чудак,
       Завернул его чинно в газету
       Или что-нибудь в сказке не так
       Или вовсе волшебников нету';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);
$count = count($words);
$words_count = [];

foreach ($words as $word) {
    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}

foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . PHP_EOL;
}
echo "Всего слов: {$count}";