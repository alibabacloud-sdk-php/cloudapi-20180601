<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\CreateIpControlRequest;

use AlibabaCloud\Tea\Model;

class ipControlPolicys extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $IP;
    protected $_name = [
        'appId' => 'AppId',
        'IP'    => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipControlPolicys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        return $model;
    }
}
