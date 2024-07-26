<?php

namespace pashazahari\CEXApiClient\ClientTool;

use pashazahari\CEXApiClient\Client;
use pashazahari\CEXApiClient\Factory\FactoryAbstract;

class ClientToolFactory extends FactoryAbstract
{
    /**
     * @var Client
     */
    private $client;

    /**
     * ClientToolFactory constructor.
     * @param Client $client
     */
    public function setClient(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return object|BalanceClientTool
     */
    public function balance()
    {
        return $this->createObjectIfNotExists('balance', function() {
            return new BalanceClientTool($this->client);
        });
    }


}