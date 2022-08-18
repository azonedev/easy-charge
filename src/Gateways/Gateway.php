<?php

namespace EasyCharge\Gateways;

interface GatewayContract
{
    /**
     * Set credentials for gateway.
     *
     * @param array $credentials Credentials for gateway. It will be array with keys: ex [ 'stripe_key' => '...', 'stripe_secret' => '...' ]
     * @param string $environment Environment for gateway. It can be 'sandbox' or 'production'
     * 
     */
    public function setCredentials(array $credentials, string $environment);
    /**
     * Get client for gateway.
     *
     * @return mixed
     */
    public function getClient();

    /**
     * Initiate payment.
     *
     * @param array $data Data for payment. It will be array with keys: ex [ 'amount' => '...', 'currency' => '...', 'gateway' => '...', 'description' => '...', 'customer' => '...', 'metadata' => '...' ]
     * @return mixed
     */
    public function initiate(array $data);

    /**
     * Retrieve payment.
     *
     * @param string $id Id of payment.
     * @param array $options Options for payment. It will be array with keys: ex [ 'expand' => '...' ]
     * @return mixed
     */
    public function retrieve($id, array $options = []);

    /**
     * Capture payment.
     *
     * @param string $id Id of payment.
     * @param array $data Data for payment . It will be array with keys: ex [ 'gateway' => '...', 'metadata' => '...' ]
     * @return mixed
     */
    public function capture($id, array $data);

}
