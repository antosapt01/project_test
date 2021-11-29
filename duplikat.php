<!DOCTYPE html>
<html>
<body>

<?php

$arr = [1,1,4,4,5,5,7,4,9];
   
	function Duplikat($arr){
    	$sum=null;
		for($i=0;$i<=count($arr);$i++){
                for($j=count($arr)-1;$j>$i;$j--){
    	    	if($arr[$i] === $arr[$j]){
                   $sum += ($arr[$i] + $arr[$j]);
                   break;
    	   		 }else{
    	    	    $sum += 0;
     	  		 }
    	    }
    		
   	 	}
         return $sum;
    }
    
    echo(Duplikat($arr));

?>

</body>
</html>
