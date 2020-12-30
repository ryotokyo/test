
<?php

class FizzBuzz {

  const MESSAGE_FIZZBUZZ = 'FizzBuzz';
  const MESSAGE_FIZZ = 'Fizz';
  const MESSAGE_BUZZ = 'Buzz';

public function __construct(){

}

public function start(){
  for($i=1; $i<=100; $i++){
    // $this->echoMessage($i);
    $this->caseMessage($i);
  }
}

// private function echoMessage($i){
//   if(($i % 3 === 0) && ($i % 5 === 0)){
//     echo self::MESSAGE_FIZZBUZZ;
//   } elseif($i % 3 === 0) {
//     echo self::MESSAGE_FIZZ;
//   } elseif($i % 5 === 0) {
//     echo self::MESSAGE_BUZZ;
//   } else {
//     echo $i;
//   }
//   echo PHP_EOL;
// }

private function caseMessage($i){
  switch($i){
    case (($i % 3 === 0) && ($i % 5 === 0));
    echo self::MESSAGE_FIZZBUZZ;
    break;
    case ($i % 3 === 0);
    echo self::MESSAGE_FIZZ;
    break;
    case ($i % 5 === 0);
    echo self::MESSAGE_BUZZ;
    break;
    default;
    echo $i;
  }
  echo PHP_EOL;
  // echo "\n";
  // print_r('<br>');
}
}

$fizzbuzz = new FizzBuzz;
$fizzbuzz->start();


 ?>


