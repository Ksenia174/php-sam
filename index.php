<pre>
<?php

//1
$arrRandom = array();
$len = 10;
$min = 35;
$max = 42;

for($i = 0; $i < $len; $i ++){
    $arrRandom[] = mt_rand($min, $max);
}
print_r($arrRandom);

//2
$str = implode(';', $arrRandom);
print_r($str);

//3
$uniq = array_unique($arrRandom);
$count = count($uniq);
print_r($uniq);
print_r($count);
echo '<br>';

//4
for($i=0; $i<count($arrRandom); $i++){
    $x3[$i] = $arrRandom[$i] * 3;
    }
    print_r($x3);
//5
$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

//6
$res = array_filter($arrRange, fn($item) => $item % 2 == 0 && $item > 0);
$sum = array_sum($res);
echo $sum;

//7
$arrRangeRes = array_filter($arrRange, function($item){
    if ($item%3==0 && $item%5==0){
    return $item;
        }
    },
);
    $product = array_product($arrRangeRes);
    print_r($arrRangeRes);


    //8
    $arr3 = array_merge($arrRandom, $arrRange);
    print_r($arr3);
    $arr4 = $arrRandom+$arrRange;
    print_r($arr4);
    //9
    sort($arr3);
    $arrResSplice = array_splice($arr3, 0, 5);
    echo(join('; ', $arrResSplice)); 

    //10
    array_splice($arrRandom, 5, 2, [1000, 2000, 3000]); 

    //11
    $str2 = 'А роза упала на лапу Азора';
    $arrRes2 = explode(' ', $str2);
    //12
    $arr5 = array_pop($arrRandom);
    print_r($arr5);

    //14
    
    $arr1 = [
        "white" => "белый",
        "yellow" => "желтый",
        "red" => "красный",
        "green" => "зеленый",
    ];

    $arr2 = ["white" => $whiteColor, "yellow" => $yellowColor, "red" => $redColor];
    $Color2 = $arr2['yellow'];
    
    // 15

    $product = [
        [
            "berry" => "виноград", 
            "color" => "зеленый", 
            "weight" => 1.5
        ],
        [
            "berry" => "земляника",
            "color" => "красный", 
            "weight" => 0.7
        ],
        [
            "berry" => "blueberry", 
            "color" => "фиолетовый", 
            "weight" => 0.3
        ],
    ];

    uasort($product, function ($a, $b)
    {
    if ($a['weight'] < $b['weight']) return 1;
    if ($a['weight'] == $b['weight']) return 0;
    if ($a['weight'] > $b['weight']) return -1;
    });
    print_r($product);

?>
