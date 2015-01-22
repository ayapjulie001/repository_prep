<?php
/**
 * Created JulieAnnAyap
 * Date: 01/6/15
 * Time: 5:45 PM
 */


namespace TopHomes\Common\Transformers;


abstract class Transformer
{
    public abstract function transform($object);

    public function transformCollection(array $collection)
    {
        return array_map([$this, 'transform'], $collection);
    }
} 