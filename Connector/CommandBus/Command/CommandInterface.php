<?php

namespace PlentyConnector\Connector\CommandBus\Command;

/**
 * Class CommandInterface.
 */
interface CommandInterface
{
    /**
     * @return array
     */
    public function getPayload();

    /**
     * @param array $payload
     */
    public function setPayload(array $payload);
}
