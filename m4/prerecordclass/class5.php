<?php
/* $foods = [
    "vegetables" => explode(", ","Carrot, Capsicum, Brinjal, Brocolli"),
    "fruits" => explode(", ","Orange, apple, banana, mango"),
    "drinks" => explode(", ","water, cocacolla, 7up, pepsi"),
];
print_r($foods); */

/* echo PHP_EOL;
$food = [
    "vegetables" => preg_split('/(, |,)/' ,"Chili, Capsicum, Brinjal, Brocolli"),
    "fruits" => preg_split('/(, |,)/' ,"Orange, apple, banana, mango"),
    "drinks" => preg_split('/(, |,)/' ,"water, cocacolla, 7up, pepsi"),
];
array_push($food['drinks'], 'orange juice');
print_r($food);
echo $food['vegetables'][0];
echo PHP_EOL;
echo $food['vegetables'][3];

$sample = [
    'test' => [
        'test_again' => [
            'a',
            'b',
            'c',
            'd'
        ],
    ],
    'test2' => [
        'test2_again' => [
            1,
            2,
            3,
            4,
        ],
    ],
];
print_r($sample);
echo $sample['test']['test_again'][0];
echo PHP_EOL;
echo $sample['test2']['test2_again'][3]; */
$sample2 = [
    1 => [1, 2, 3, 4],
    2 => [11, 22, 33, 44],
    3 => [111, 222, 333, 444],
    4 => [
        1111,
        2222,
        3333,
        4444 => [4, 5, 6, 7],
    ],
];
//print_r($sample2);
echo $sample2[4][4444][2];