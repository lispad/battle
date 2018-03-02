<?php
$contacts = [
    'Рома Игнатик',
    'Много Юриев',
    'Немножко Вовчиков',
];
$contacts += array_fill(3, 1000, 'Неведомая Херня');
$input = '655';
$table = array_map(function($contact) {
    $map = [
        '+' => 0,
        '.' => 0,
        ' ' => 1,
        'а' => 2,
        'б' => 2,
        'в' => 2,
        'г' => 2,
        'д' => 3,
        'е' => 3,
        'ё' => 3,
        'ж' => 3,
        'з' => 3,
        'и' => 4,
        'й' => 4,
        'к' => 4,
        'л' => 4,
        'м' => 5,
        'н' => 5,
        'о' => 5,
        'п' => 5,
        'р' => 6,
        'с' => 6,
        'т' => 6,
        'у' => 6,
        'ф' => 7,
        'х' => 7,
        'ц' => 7,
        'ч' => 7,
        'ш' => 8,
        'щ' => 8,
        'ъ' => 8,
        'ы' => 8,
        'ь' => 9,
        'э' => 9,
        'ю' => 9,
        'я' => 9,
    ];
    return array_reduce(preg_split('//u', $contact, null, PREG_SPLIT_NO_EMPTY), function($carry, $item) use($map) {
        return $carry . $map[mb_strtolower($item)];
    });
}, $contacts);
