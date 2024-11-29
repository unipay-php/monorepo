<?php
namespace Unipay\Core\Interfaces;

abstract class AbstractPaymentProvider implements PaymentProviderInterface {
    protected string $apiToken;
    protected string $apiVersion;

    public function __construct(string $apiToken, string $apiVersion) {
        $this->apiToken   = $apiToken;
        $this->apiVersion = $apiVersion;
    }

    // Implement common methods here
}