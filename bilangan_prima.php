<!DOCTYPE html>
<html>
<body>

<?php
	$number = bil_Prima(22);
        		function bil_Prima($number){
            $arr = [];
            $ket = [];
            
    			for($i = 1 ; $i<=$number; $i++){
       				if($number % $i == 0){
       	 		 	$arr[] = $i;
        			}
          		}
               		if($number % 2 == 0){
                      	$ket[] = "<br>".$number." bukan bilangan prima ";
                    }else if($number % 2 == 1){
                        $ket[] = "<br>".$number." bilangan prima ";
                    }
            
            return [$arr, $ket];
            }
         
          foreach($number as $key => $value){          		
           foreach($value as $keys => $values){
          		echo $values." ";                
         	};	
          };	
                    	
            
            

    
?>

</body>
</html>
