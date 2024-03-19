<?php
namespace  GlobTest\Services;

use GlobTest\Interfaces\FooInterface; 

class FooService implements FooInterface
{


    /**
     * Fusionner des intervales from arrays entry 
     *
     * @param array
     * @return array
     * 
     */
    public function foo($data): array
    {
        if (!is_array($data)) 

            throw new Exception('Entry must be an array !') ;

        if (empty($data)) 

            return [];

            
            usort($data, function($a, $b) {

                
                return $a[0] - $b[0];
            });
            
          
            $merged = array_reduce($data, function($array, $interval) {
                $lastMerged = end($array);
                
             
                if ($interval[0] <= $lastMerged[1]) {
               
                    $lastMerged[1] = max($lastMerged[1], $interval[1]);
                    array_pop($array);
                    array_push($array, $lastMerged);
                } else {
                
                    $array[] = $interval;
                }
                
                return $array;
                
            }, [$data[0]]); 
    

            return $merged;
    }



    
}


