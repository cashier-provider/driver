<?php

declare(strict_types=1);

namespace YourName\CashierDriver\BankName\Technology\Resources;

use Helldar\Cashier\Resources\Details as BaseDetails;

class Details extends BaseDetails
{
    protected $url;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function toArray(): array
    {
        return [
            'status' => $this->status,
            'url'    => $this->url,
        ];
    }
}
