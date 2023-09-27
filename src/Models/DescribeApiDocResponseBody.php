<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\pathParameters;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\requestBody;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\requestHeaders;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\requestQueries;
use AlibabaCloud\Tea\Model;

class DescribeApiDocResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $bodyFormat;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var string
     */
    public $httpProtocol;

    /**
     * @var string
     */
    public $mock;

    /**
     * @var string
     */
    public $mockResult;

    /**
     * @var string
     */
    public $originResultDescription;

    /**
     * @var string
     */
    public $path;

    /**
     * @var pathParameters
     */
    public $pathParameters;

    /**
     * @var string
     */
    public $postBodyDescription;

    /**
     * @var string
     */
    public $postBodyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var requestBody
     */
    public $requestBody;

    /**
     * @var requestHeaders
     */
    public $requestHeaders;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestMode;

    /**
     * @var requestQueries
     */
    public $requestQueries;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var int
     */
    public $serviceTimeout;

    /**
     * @var string
     */
    public $serviceVpcEnable;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'apiId'                   => 'ApiId',
        'apiName'                 => 'ApiName',
        'bodyFormat'              => 'BodyFormat',
        'deployedTime'            => 'DeployedTime',
        'description'             => 'Description',
        'errorCodeSamples'        => 'ErrorCodeSamples',
        'failResultSample'        => 'FailResultSample',
        'groupId'                 => 'GroupId',
        'groupName'               => 'GroupName',
        'httpMethod'              => 'HttpMethod',
        'httpProtocol'            => 'HttpProtocol',
        'mock'                    => 'Mock',
        'mockResult'              => 'MockResult',
        'originResultDescription' => 'OriginResultDescription',
        'path'                    => 'Path',
        'pathParameters'          => 'PathParameters',
        'postBodyDescription'     => 'PostBodyDescription',
        'postBodyType'            => 'PostBodyType',
        'regionId'                => 'RegionId',
        'requestBody'             => 'RequestBody',
        'requestHeaders'          => 'RequestHeaders',
        'requestId'               => 'RequestId',
        'requestMode'             => 'RequestMode',
        'requestQueries'          => 'RequestQueries',
        'resultSample'            => 'ResultSample',
        'resultType'              => 'ResultType',
        'serviceTimeout'          => 'ServiceTimeout',
        'serviceVpcEnable'        => 'ServiceVpcEnable',
        'stageName'               => 'StageName',
        'vpcName'                 => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->httpProtocol) {
            $res['HttpProtocol'] = $this->httpProtocol;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }
        if (null !== $this->mockResult) {
            $res['MockResult'] = $this->mockResult;
        }
        if (null !== $this->originResultDescription) {
            $res['OriginResultDescription'] = $this->originResultDescription;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->pathParameters) {
            $res['PathParameters'] = null !== $this->pathParameters ? $this->pathParameters->toMap() : null;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->postBodyType) {
            $res['PostBodyType'] = $this->postBodyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toMap() : null;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = null !== $this->requestHeaders ? $this->requestHeaders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->requestQueries) {
            $res['RequestQueries'] = null !== $this->requestQueries ? $this->requestQueries->toMap() : null;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->serviceTimeout) {
            $res['ServiceTimeout'] = $this->serviceTimeout;
        }
        if (null !== $this->serviceVpcEnable) {
            $res['ServiceVpcEnable'] = $this->serviceVpcEnable;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['HttpProtocol'])) {
            $model->httpProtocol = $map['HttpProtocol'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }
        if (isset($map['MockResult'])) {
            $model->mockResult = $map['MockResult'];
        }
        if (isset($map['OriginResultDescription'])) {
            $model->originResultDescription = $map['OriginResultDescription'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['PathParameters'])) {
            $model->pathParameters = pathParameters::fromMap($map['PathParameters']);
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['PostBodyType'])) {
            $model->postBodyType = $map['PostBodyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = requestBody::fromMap($map['RequestBody']);
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = requestHeaders::fromMap($map['RequestHeaders']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['RequestQueries'])) {
            $model->requestQueries = requestQueries::fromMap($map['RequestQueries']);
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['ServiceTimeout'])) {
            $model->serviceTimeout = $map['ServiceTimeout'];
        }
        if (isset($map['ServiceVpcEnable'])) {
            $model->serviceVpcEnable = $map['ServiceVpcEnable'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
