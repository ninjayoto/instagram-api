<?php

namespace Instagram\SDK\DTO\Cursor;

use Instagram\SDK\Client\Client;
use Instagram\SDK\Requests\Traits\MakeRequestsAccessible;
use Instagram\SDK\Responses\Interfaces\IteratorInterface;

/**
 * Class RequestIterator
 *
 * @package Instagram\SDK\DTO\Cursor
 */
abstract class RequestIterator implements IteratorInterface
{

    use MakeRequestsAccessible;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Returns the client.
     *
     * @return Client
     */
    protected function getClient(): Client
    {
        return $this->client;
    }
}
