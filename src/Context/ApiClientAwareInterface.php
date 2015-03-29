<?php

namespace Behat\JwtApiExtension\Context;

use Behat\Behat\Context\Context;
use GuzzleHttp\ClientInterface;

interface ApiClientAwareInterface extends Context {


    /**
     * Sets Guzzle Client instance.
     *
     * @param ClientInterface $client Guzzle client.
     */
    public function setClient(ClientInterface $client);

    /**
     * Sets default config
     *
     * @param array $config
     */
    public function setConfig(array $config);
}
