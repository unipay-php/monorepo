<?php
namespace Unipay\Core\Interfaces;

interface PaymentProviderInterface {
    public function purchase(PaymentRequestInterface $request): array;
    public function refund(string $transactionId, float $amount): array;
}