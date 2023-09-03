<?php
class ArrayUtils
{
    private $collection;

    public static function getInstance()
    {
        return new ArrayUtils();
    }

    public function collect(array $collection)
    {
        $this->collection = $collection;

        return $this;
    }

    public function map(\Closure $closure)
    {
        return array_map($closure, $this->collection);
    }
}
// $mappedArray = ArrayUtils::getInstance()
//                     ->collect([1, 2, 3, 4, 800])
//                     ->map(function($iteration) {
//                         return $iteration * 2;
//                     });

$mappedArray = array('key1'=>"value1","key2"=>"value2");

print_r($mappedArray);

/*Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 1600
)*/