<?php
namespace GlobTest\Tests\Services;

use PHPUnit\Framework\TestCase;
use GlobTest\Services\FooService;
use GlobTest\interfaces\FooInterface;
class FooServiceTest extends TestCase {

    /**
     * @dataProvider \GlobTest\Tests\DataProvider\FooServiceDataProvider::provideTestData
    */

    public function testFooService($input, $expectedResult) {

        // Création d'une instance de FooService
        $fooService = new FooService();

        // Appel de la méthode foo() de FooService avec les données d'entrée
        $result = $fooService->foo($input);
         // Display input and expected values in the console

      
        // Assertion pour vérifier le résultat
        $this->assertEquals($expectedResult, $result);
        
        echo "Input: " . json_encode($input) . "\n";
        echo "result : " . json_encode($result) . "\n";
        
    }

    
}
