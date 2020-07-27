<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:59
 */

namespace Shoplo\ShipX\Model;

use JMS\Serializer\Annotation as Serializer;

class BaseCollectionResponse implements \IteratorAggregate
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $href;

    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $count;

    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $page;

    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $perPage;

    /**
     * @var BaseModelResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\BaseModelResponse>")
     */
    public $items;

    public function addItem($obj, $key = null)
    {
        if ($key === null) {
            $this->items[] = $obj;
        } else {
            if (isset($this->items[$key])) {
                throw new \Exception("Key $key already in use.");
            }
            $this->items[$key] = $obj;
        }
    }

    public function deleteItem($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        }
        throw new \Exception("Invalid key $key.");
    }

    public function getItem($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        throw new \Exception("Invalid key $key.");
    }

    public function keys()
    {
        return array_keys($this->items);
    }

    public function length()
    {
        return count($this->items);
    }

    public function keyExists($key)
    {
        return isset($this->items[$key]);
    }

    public function getIterator()
    {
        return $this->items;
    }
}
