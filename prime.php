<?php
function isPrime($num){
    if($num <=1){
        return false;
    }
    for($i=2;$i<=sqrt($num);$i++){
        if($num % $i==0){
            return false;
        }
    }
   return true;
}
function generatePrimes($n){
    $primeNumbers=[];
    $count=0;
    $i=2;    

    while($count<$n){
        if(isPrime($i)){
            $primeNumbers[]=$i;
            $count++;
        }
        $i++;
    }
    return $primeNumbers;
}

function generateFibonacci($n){
    $fibonacciSeries=[];

    $first=0;
    $second=1;

    $fibonacciSeries[]=$first;
    $fibonacciSeries[]=$second;

    for($i=2;$i<$n;$i++){
        $next=$first+$second;
        $fibonacciSeries[]=$next;
        $first=$second;
        $second=$next;
    }
    return $fibonacciSeries;

}

$numberofPrimes=10;
$numberofTerms=10;

$primes=generatePrimes($numberofPrimes);
$fibonacci=generateFibonacci($numberofTerms);

echo"prime number:";
echo"<pre>".print_r($primes,true)."</pre>";

echo"fibonacci series:";
echo"<pre>".print_r($fibonacci,true)."</pre>";
?>