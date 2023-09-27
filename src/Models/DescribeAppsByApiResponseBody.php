<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeAppsByApiResponseBody\appApiRelationInfos;
use AlibabaCloud\Tea\Model;

class DescribeAppsByApiResponseBody extends Model
{
    /**
     * @var appApiRelationInfos
     */
    public $appApiRelationInfos;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appApiRelationInfos' => 'AppApiRelationInfos',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appApiRelationInfos) {
            $res['AppApiRelationInfos'] = null !== $this->appApiRelationInfos ? $this->appApiRelationInfos->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppsByApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppApiRelationInfos'])) {
            $model->appApiRelationInfos = appApiRelationInfos::fromMap($map['AppApiRelationInfos']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
