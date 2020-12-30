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


$classmateNames = array_map(function($classmate){
  extract($classmate);
  // $family_name = $classmate['family_name'];
  // $first_name = $classmate['first_name'];
  // $family_kana = $classmate['family_kana'];
  // $first_kana = $classmate['first_kana'];
  // var_dump($first_name); exit;

  // $classmateName = $family_name.$first_name."(".$family_kana.$first_kana.")";
  return sprintf('%s%s(%s%s)', $family_name, $first_name, $family_kana, $first_kana);

  // return $classmateName;
}, $classmates);


// foreach($classmates as $value){
//
// $family_name = $value['family_name'];
// $first_name = $value['first_name'];
// $family_kana = $value['family_kana'];
// $first_kana = $value['first_kana'];
//
// $classmateName = $family_name.$first_name."(".$family_kana.$first_kana.")";

// $classmateNames[] = "'".$classmateName."'";
//
// }

// $family_name = $classmates[0]['family_name'];
// $first_name = $classmates[0]['first_name'];
// $family_kana = $classmates[0]['family_kana'];
// $first_kana = $classmates[0]['first_kana'];

print_r($classmateNames);

// exit;

// foreach($classmateNames as $name){
// echo $name;
// echo PHP_EOL;

// echo '<br>';
// echo '<br>';
// echo '<br>';
echo PHP_EOL;

//ーーー【平均年齢を算出し、 $avarageAge 変数に代入してください。】ーーー

$classmateAges = array_map(function($classmate){

  return $classmate['age'];

}, $classmates);

$classmateAgeSum = array_sum($classmateAges);
$classmateCount = count($classmateAges);

$avarageAge = $classmateAgeSum / $classmateCount;

var_dump($avarageAge);



// foreach($classmates as $age){
//
// $classmateAge = $age['age'];
// $classmateAges[] = $classmateAge;
//
// }
//
// print_r($classmateAges);
//
// $classmateAgeSum = array_sum($classmateAges);
// $classmateCount = count($classmateAges);
//
// var_dump(array_sum($classmateAges));
// print_r(array_sum($classmateAges));
// echo $classmateAgeSum;
// echo $classmateCount;
//
// $avarageAge = $classmateAgeSum / $classmateCount;
//
// echo $avarageAge;

// echo '<br>';
// echo '<br>';
// echo '<br>';
echo PHP_EOL;


//ーーー【各配列の要素のキーの数を算出し、 $keys に代入してください。】ーーー

// $key = array();
//
// foreach($classmates as $i){
//
// $key = count($i);
// $keys[] = $key;
//
// }
//
// print_r($keys);


$classmateAges = array_map(function($classmate){
  // var_dump(array_keys($classmate));
  return count(array_keys($classmate));
}, $classmates);

var_dump($classmateAges);


// echo '<br>';
// echo '<br>';
// echo '<br>';
echo PHP_EOL;


//ーーー【男性 $males と女性 $females の配列に分割してください。】ーーー


// $males = array();
// $females = array();
//
// foreach($classmates as $value){
//   switch($value['gender']){
//   case('男性');
//   $males[] = $value;
//   break;
//   case('女性');
//   $females[] = $value;
//   break;
//   }
// }


$males = array_filter($classmates,function($classmate){
    return $classmate['gender'] == '男性';
  });

$females = array_filter($classmates,function($classmate){
    return $classmate['gender'] == '女性';
  });

var_dump($males);
// echo '<br>';
// echo '<br>';
echo PHP_EOL;
var_dump($females);
// print_r($males);
// print_r($females);



// echo '<br>';
// echo '<br>';
// echo '<br>';
echo PHP_EOL;

//ーーー【男性の人数 $numberOfMale と女性の人数 $numberOfFemale を算出し、それぞれ変数に代入してください。】ーーー

const STR_MALE = "男性は";
const STR_FEMALE = "女性は";
const STR_PEOPLE = "人です。";

$numberOfMale = count($males);
$numberOfFemale = count($females);

// echo "男性は".$numberOfMale."人です。";
// echo PHP_EOL;
// echo "女性は".$numberOfFemale."人です。";
// echo PHP_EOL;
echo STR_MALE.$numberOfMale.STR_PEOPLE;
echo PHP_EOL;
echo STR_FEMALE.$numberOfFemale.STR_PEOPLE;
echo PHP_EOL;
// exit;




//ーーー【年齢を低い順にソートしてください。】ーーー

// $classmatesAsc = array();
// $classmatesAsc = $classmates;
//
// foreach($classmatesAsc as $key => $value){
//   $sort[$key] = $value['age'];
// }
// print_r($sort);
// array_multisort($sort, SORT_ASC, $classmatesAsc);

// print_r($classmates);
// print_r($sort);
// print_r($classmatesAsc);
// print_r($classmates);

$classmatesAsc = array();
$classmatesAsc = $classmates;

$sortBase = array_map(function($classmate){
  return $classmate['age'];
}, $classmates);

print_r($sortBase);
array_multisort($sortBase, SORT_ASC, $classmatesAsc);

print_r($sortBase);
print_r($classmatesAsc);


// $ar1 = array(10, 1000, 100, 0);
// $ar2 = array(1, 3, 2, 4);
// array_multisort($ar1, $ar2);
//
// var_dump($ar1);
// var_dump($ar2);



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

// $classmatesChange = array();
//
// foreach($classmates as $key => $value){
//   $classmatesChange[] = array_flip($value);
// }

$classmatesChange = $classmates;

$classmatesChange = array_map(function($classmate){
  // array_flip($classmate);
  return array_flip($classmate);
}, $classmates);

print_r($classmatesChange);

exit;



?>