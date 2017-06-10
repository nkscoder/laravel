<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 22/5/17
 * Time: 12:54 PM
 */

namespace App\Libraries\Transformers;



abstract class Transformer
{

    public function transformCollection(array $items)
    {
        return array_map([$this, 'transform'], $items);
    }

    public abstract function transform($item);
}
