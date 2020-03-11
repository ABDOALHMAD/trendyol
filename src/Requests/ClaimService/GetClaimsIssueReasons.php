<?php

namespace BoolXY\Trendyol\Requests\ClaimService;

use BoolXY\Trendyol\Abstracts\AbstractRequest;
use BoolXY\Trendyol\Interfaces\IRequest;

class GetClaimsIssueReasons extends AbstractRequest implements IRequest
{
    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return self::METHOD_GET;
    }

    /**
     * @inheritDoc
     */
    public function getPathPattern(): string
    {
        return 'claim-issue-reasons';
    }
}