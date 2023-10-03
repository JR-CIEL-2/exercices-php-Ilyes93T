<?php
$pair = array(1200,900,8000,4500,750,905);
sort($pair);
$impair = array(2200,555,7000,1000,999,444,888);
sort($impair);
print_r($impair);

function mediane($arg){
 $n=count($arg);
    if (($n%2)==0){
        return  ($arg[($n/2)-1]+$arg[$n/2])/2;
    }
    else{
        return $arg[($n -1)/2];
    }
}
echo "la mediane est de ".mediane($impair);