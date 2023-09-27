<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResolutionResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDomainResolutionResponseBody\domainResolutions\domainResolution;
use AlibabaCloud\Tea\Model;

class domainResolutions extends Model
{
    /**
     * @var domainResolution[]
     */
    public $domainResolution;
    protected $_name = [
        'domainResolution' => 'DomainResolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainResolution) {
            $res['DomainResolution'] = [];
            if (null !== $this->domainResolution && \is_array($this->domainResolution)) {
                $n = 0;
                foreach ($this->domainResolution as $item) {
                    $res['DomainResolution'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainResolutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainResolution'])) {
            if (!empty($map['DomainResolution'])) {
                $model->domainResolution = [];
                $n                       = 0;
                foreach ($map['DomainResolution'] as $item) {
                    $model->domainResolution[$n++] = null !== $item ? domainResolution::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
