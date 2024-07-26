<?php

namespace pashazahari\CEXApiClient\ClientTool;

use pashazahari\CEXApiClient\Client;

class ClientToolAbstract
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * ClientToolFactory constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}