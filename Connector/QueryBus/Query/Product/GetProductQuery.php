<?php

namespace PlentyConnector\Connector\QueryBus\Query\Product;

use PlentyConnector\Connector\QueryBus\Query\QueryInterface;

/**
 * Class GetProductQuery.
 */
class GetProductQuery implements QueryInterface
{
    /**
     * @var string
     */
    private $adapterName;

    /**
     * GetProductQuery constructor.
     *
     * @param string $adapterName
     */
    public function __construct($adapterName)
    {
        $this->adapterName = $adapterName;
    }

    /**
     * @return string
     */
    public function getAdapterName()
    {
        return $this->adapterName;
    }

    /**
     * @return array
     */
    public function getPayload()
    {
        return [
            'adapterName' => $this->adapterName,
        ];
    }

    /**
     * @param array $payload
     */
    public function setPayload(array $payload = [])
    {
        $this->adapterName = $payload['adapterName'];
    }
}