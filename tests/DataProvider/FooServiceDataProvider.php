<?php
namespace GlobTest\Tests\DataProvider;

class FooServiceDataProvider {

    
    public static function provideTestData(): array {
        return [
            [
               
                [
                    [0, 3], [6, 10]
                ],
              
                [
                    [0, 3],[6, 10]
                ]
            ],
            [
   
                [
                    [0, 5],[3, 10]
                ],
            
                [
                    [0, 10]
                ]
            ],
            [
                
                [
                    [0, 5],[2, 4]
                ],
              
                [
                    [0, 5]
                ]
            ],
            [
               
                [
                    [7, 8],[3, 6], [2, 4]
                ],
               
                [
                    [2, 6], [7, 8]
                ]
            ],
            [
               
                [
                    [3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]
                ],
                
                [
                    [1, 10],[15, 20]
                ]
            ]
        ];
    }
}