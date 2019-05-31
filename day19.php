<?php
/**
 * @Author: Marte
 * @Date:   2019-05-31 08:39:35
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-05-31 08:49:10
 */



function findnum($arr,$n)
{
$len = count($arr); 

for ($i=0; $i <=$len;$i++)
{ 
     // $num = $i;
     if($i=$n)
     {
        return $n;
     }

     if($n>$i)
     {
       $new= $len/2;
        for ($i=0; $i <=$new;$i++)
        {
        if($i=$n)
        {
            return $n;
        }         
        }
{ 
     }
} 
}

}

echo findnum([1,2,3,4,5,6,7,8,9,10],6);
