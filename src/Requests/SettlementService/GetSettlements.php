<?php

namespace BoolXY\Trendyol\Requests\SettlementService;

use BoolXY\Trendyol\Abstracts\AbstractRequest;
use BoolXY\Trendyol\Interfaces\IRequest;

class GetSettlements extends AbstractRequest implements IRequest
{
    /**
     * {@inheritdoc}
     */
    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    /**
     * {@inheritdoc}
     */
    public function getPathPattern(): string
    {
        return 'suppliers/$supplierId/settlements?barcode=$barcode&'.
            'dateType=$dateType&startDate=$startDate&endDate=$endDate&page=$page&size=$size&orderNumber=$orderNumber&'.
            'shipmentPackageIds=$shipmentPackageIds&transactionTypeName=$transactionTypeName';
    }
}
