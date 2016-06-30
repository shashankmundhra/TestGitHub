<?php
    $array=array('2','10','3','40','5');
    $max=10;
    echo "Traversel of queue array is:<br><pre>";
    print_r($array);
    
    if($flag!=1) {
        if(count($array)!=$max){
            echo"inserting a  new value>";
            $count=count($array);
            $value=$count*7;
            $array[$count]=$value;
            echo "$value<br>";
        }
        else{
            print"queue array is full<br>";
            $flag=1;
        }       
    }
    else{
        exit();
    }
    echo "after insertion is:<br><pre>";
    print_r($array);
    
    echo "Removal of element:><br>";
       $index=0;
        $count=count($array);
         for($i=$index;$i<$count;$i++)
         {
             $array[$i]=$array[$i+1];
         }
         unset($array[7]);
         echo"Traversel after removal:><br><pre>";
         print_r($array);
         
    ?>

