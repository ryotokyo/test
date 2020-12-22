<?php
$classmates = [
    [
        'family_name' => '相川',
        'first_name'  => '裕滋',
        'family_kana' => 'アイカワ',
        'first_kana'  => 'ユウジ',
        'gender'      => '男性',
        'age'         => 22,
    ],
    [
        'family_name' => '阿部',
        'first_name'  => '光浩',
        'family_kana' => 'アベ',
        'first_kana'  => 'ミツヒロ',
        'gender'      => '男性',
        'age'         => 26,
    ],
    [
        'family_name' => '池田',
        'first_name'  => '政典',
        'family_kana' => 'イケダ',
        'first_kana'  => 'マサノリ',
        'gender'      => '男性',
        'age'         => 43,
    ],
    [
        'family_name' => '石川',
        'first_name'  => 'れいか',
        'family_kana' => 'イシカワ',
        'first_kana'  => 'レイカ',
        'gender'      => '女性',
        'age'         => 52,
    ],
    [
        'family_name' => '稲村',
        'first_name'  => '梓',
        'family_kana' => 'イナムラ',
        'first_kana'  => 'アズサ',
        'gender'      => '女性',
        'age'         => 34,
    ],
    [
        'family_name' => '江口',
        'first_name'  => '信',
        'family_kana' => 'エグチ',
        'first_kana'  => 'シン',
        'gender'      => '男性',
        'age'         => 29,
    ],
    [
        'family_name' => '大内',
        'first_name'  => 'サキ',
        'family_kana' => 'オオウチ',
        'first_kana'  => 'サキ',
        'gender'      => '女性',
        'age'         => 19,
    ],
    [
        'family_name' => '大内',
        'first_name'  => 'ミサト',
        'family_kana' => 'オオウチ',
        'first_kana'  => 'ミサト',
        'gender'      => '女性',
        'age'         => 12,
    ],
    [
        'family_name' => '梶',
        'first_name'  => '三和子',
        'family_kana' => 'カジ',
        'first_kana'  => 'ミワコ',
        'gender'      => '女性',
        'age'         => 45,
    ],
];


// var_dump($classmates);
// print_r($classmates[0]);
// echo $classmates[0]['age'];
// echo $classmates[0]['age'];


//ーーーーー【下記の配列を生成してください。】ーーーーー


$classmateNames = array();

foreach($classmates as $value){

$family_name = $value['family_name'];
$first_name = $value['first_name'];
$family_kana = $value['family_kana'];
$first_kana = $value['first_kana'];

$classmateName = $family_name.$first_name."(".$family_kana.$first_kana.")";

$classmateNames[] = "'".$classmateName."'";

}

// $family_name = $classmates[0]['family_name'];
// $first_name = $classmates[0]['first_name'];
// $family_kana = $classmates[0]['family_kana'];
// $first_kana = $classmates[0]['first_kana'];


print_r($classmateNames);

// foreach($classmateNames as $name){
// echo $name;
// echo PHP_EOL;
}


//ーーー【平均年齢を算出し、 $avarageAge 変数に代入してください。】ーーー

$classmateAges = array();

foreach($classmates as $age){

$classmateAge = $age['age'];
$classmateAges[] = $classmateAge;

}

print_r($classmateAges);

$classmateAgeSum = array_sum($classmateAges);
$classmateCount = count($classmateAges);

// var_dump(array_sum($classmateAges));
// print_r(array_sum($classmateAges));
// echo $classmateAgeSum;
// echo $classmateCount;

$avarageAge = $classmateAgeSum / $classmateCount;

echo $avarageAge;


//ーーー【各配列の要素のキーの数を算出し、 $keys に代入してください。】ーーー

$key = array();

foreach($classmates as $i){

$key = count($i);
$keys[] = $key;

}

print_r($keys);



//ーーー【男性 $males と女性 $females の配列に分割してください。】ーーー


$$males = array();
$females = array();

foreach($classmates as $value){
  switch($value['gender']){
  case('男性');
  $males[] = $value;
  break;
  case('女性');
  $females[] = $value;
  break;
  }
}

print_r($males);
print_r($females);



//ーーー【男性の人数 $numberOfMale と女性の人数 $numberOfFemale を算出し、
//それぞれ変数に代入してください。】ーーー


$numberOfMale = count($males);
$numberOfFemales = count($females);
echo $numberOfMale;
echo $numberOfFemales;

// array_count_values



//ーーー【年齢を低い順にソートしてください。】ーーー

$classmatesAsc = array();
$classmatesAsc = $classmates;

foreach($classmatesAsc as $key => $value){
  $sort[$key] = $value['age'];
}
print_r($sort);
array_multisort($sort, SORT_ASC, $classmatesAsc);

// print_r($classmates);
print_r($sort);
print_r($classmatesAsc);
// print_r($classmates);



//ーーー【配列の先頭に 山田太郎(ヤマダタロウ)さん(男性：28歳)を追加してください。】ーーー

$classmatesAdd = array();
$classmatesAdd = $classmates;
$classmateTaro = [
'family_name' => '山田',
'first_name'  => '太郎',
'family_kana' => 'ヤマダ',
'first_kana'  => 'タロウ',
'gender'      => '男性',
'age'         => 28,
];
array_unshift($classmatesAdd, $classmateTaro);

print_r($classmatesAdd);




//ーーー【配列の各要素のkeyとvalueを入れ替えた配列を新しく作成してください。】ーーー

$classmatesChange = array();

foreach($classmates as $key => $value){
  $classmatesChange[] = array_flip($value);
}

print_r($classmatesChange);





?>