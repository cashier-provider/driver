<?php

declare(strict_types=1);

namespace LaravelCashierProvider\Driver\BankName\Technology\Requests;

class GetState extends BaseRequest
{
    protected $path = '/api/status';

    public function getRawBody(): array
    {
        return [
            'PaymentId' => $this->model->getExternalId(),
        ];
    }
}
