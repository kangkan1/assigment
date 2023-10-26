<?php
    // function to merge and find target sum
    function mergeAndFindSum($arr1, $arr2, $target){
        $i=0;
        $j=0;
        $new_arr = array();
        while($i < count($arr1) && $j < count($arr2)){
            if($arr1[$i] < $arr2[$j]){
                array_push($new_arr, $arr1[$i++]);
            }else{
                array_push($new_arr, $arr2[$j++]);
            }
        }
        while($i<count($arr1)){
            array_push($new_arr, $arr1[$i++]);
        }
        while($j<count($arr2)){
            array_push($new_arr, $arr2[$j++]);
        }
        
        $has = array();
        $cnt = 0;
        $at_ele  = "";
        for($i=0;$i<count($new_arr);$i++){
            if(isset($has[$target - $new_arr[$i]])){
                $cnt++;
                $at_ele .= "(".($target - $new_arr[$i]).",".$new_arr[$i].") ";
            }else{
                $has[$new_arr[$i]] = $i;
            }
        }
        echo "Count: ".$cnt."\n";
        if($cnt){
            echo "Found at element:".$at_ele."\n";
        }
    }
    // function end


    $array1 = [1, 3, 5, 6, 8, 22]; //two array
    $array2 = [2, 4, 7, 9, 10];
    $target_sum = 7;
    // call the function
    mergeAndFindSum($array1, $array2, $target_sum);
?>