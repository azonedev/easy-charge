<?php

namespace EasyCharge\Gateways;
use EasyCharge\Gateways\GatewayContract;

class Stripe implements GatewayContract
{
    public function setCredentials(array $credentials, string $environment)
    {
       
    }
    public function getClient()
    {
       
    }
    public function initiate(array $data)
    {
       
    }
    public function retrieve($id, array $options = [])
    {
       
    }
    public function capture($id, array $data)
    {
       
    }
}