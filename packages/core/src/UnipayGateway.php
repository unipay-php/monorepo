<?php
namespace Unipay\Core;

use Unipay\Core\Interfaces\PaymentProviderInterface;
use Unipay\Core\Interfaces\PaymentRequestInterface;

class UnipayGateway {
    private PaymentProviderInterface $provider;

    public function __construct(PaymentProviderInterface $provider) {
        $this->provider = $provider;
    }

    public function purchase(PaymentRequestInterface $request): array {
        return $this->provider->purchase($request);
    }

    public function refund(string $transactionId, float $amount): array {
        return $this->provider->refund($transactionId, $amount);
    }
}