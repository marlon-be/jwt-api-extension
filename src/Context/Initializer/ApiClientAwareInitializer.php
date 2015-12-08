<?php


namespace Behat\JwtApiExtension\Context\Initializer;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\Initializer\ContextInitializer;
use Behat\JwtApiExtension\Context\ApiClientAwareInterface;
use GuzzleHttp\ClientInterface;

/**
 * Guzzle-aware contexts initializer.
 *
 * Sets Guzzle client instance to the ApiClientAwareContext.
 *
 * @author Frédéric G. Marand <fgm@osinet.fr>
 */
class ApiClientAwareInitializer implements ContextInitializer
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var array Config for jwt
     */
    private $config;

    /**
     * Initializes initializer.
     *
     * @param ClientInterface $client
     * @param array $config
     */
    public function __construct(ClientInterface $client, $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    /**
     * Initializes provided context.
     *
     * @param Context $context
     */
    public function initializeContext(Context $context)
    {
        if ($context instanceof ApiClientAwareInterface) {
            $context->setClient($this->client);
            $context->setConfig($this->config);
        }
    }
}
