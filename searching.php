<?php
//same data array
$users=[
    ['id' =>1,'name' =>'sufiya', 'age' =>20,'email'=>'sufiya@gmail.com'],
    ['id' =>2,'name' =>'sulthana', 'age' =>20,'email'=>'sulthana@gmail.com'],
    ['id' =>3,'name' =>'noorain', 'age' =>19,'email'=>'noorain@gmail.com'],
    ['id' =>4,'name' =>'firdose', 'age' =>18,'email'=>'firdose@gmail.com'],
    ['id' =>5,'name' =>'sss', 'age' =>21,'email'=>'ss13@gmail.com'],
];
//function to search data by different criteria
function searchData($data,$criteria,$value){
    $result=[];
    foreach($data as $item){
        if($item[$criteria]==$value){
            $result[]=$item;
        }
    }
    return $result;
}
//search criteria and value
$searchCriteria='age';//can be 'id','email','name'.....
$searchValue='19';//value to search for criteria

//perform search
$searchResults=searchData($users,$searchCriteria,$searchValue);
//display search result

echo"search Result for $searchCriteria=$searchValue;<br>";
if(count($searchResults)>0){
    foreach($searchResults as $result){
        echo "ID:".$result['id'].",Name:".$result['name'].",Age:".$result['age'].",Email:".$result['email']."<br>";
    }
}
    else{
        echo "no result found.";
   
    }?>
