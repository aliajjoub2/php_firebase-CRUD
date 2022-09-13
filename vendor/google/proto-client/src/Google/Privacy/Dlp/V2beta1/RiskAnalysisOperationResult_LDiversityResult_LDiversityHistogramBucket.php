<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Privacy\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Histogram bucket of sensitive value frequencies in the table.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult.LDiversityHistogramBucket</code>
 */
class RiskAnalysisOperationResult_LDiversityResult_LDiversityHistogramBucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Lower bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_lower_bound = 1;</code>
     */
    private $sensitive_value_frequency_lower_bound = 0;
    /**
     * Upper bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_upper_bound = 2;</code>
     */
    private $sensitive_value_frequency_upper_bound = 0;
    /**
     * Total number of records in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     */
    private $bucket_size = 0;
    /**
     * Sample of equivalence classes in this bucket. The total number of
     * classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult.LDiversityEquivalenceClass bucket_values = 4;</code>
     */
    private $bucket_values;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Lower bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_lower_bound = 1;</code>
     * @return int|string
     */
    public function getSensitiveValueFrequencyLowerBound()
    {
        return $this->sensitive_value_frequency_lower_bound;
    }

    /**
     * Lower bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_lower_bound = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSensitiveValueFrequencyLowerBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->sensitive_value_frequency_lower_bound = $var;

        return $this;
    }

    /**
     * Upper bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_upper_bound = 2;</code>
     * @return int|string
     */
    public function getSensitiveValueFrequencyUpperBound()
    {
        return $this->sensitive_value_frequency_upper_bound;
    }

    /**
     * Upper bound on the sensitive value frequencies of the equivalence
     * classes in this bucket.
     *
     * Generated from protobuf field <code>int64 sensitive_value_frequency_upper_bound = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSensitiveValueFrequencyUpperBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->sensitive_value_frequency_upper_bound = $var;

        return $this;
    }

    /**
     * Total number of records in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     * @return int|string
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * Total number of records in this bucket.
     *
     * Generated from protobuf field <code>int64 bucket_size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->bucket_size = $var;

        return $this;
    }

    /**
     * Sample of equivalence classes in this bucket. The total number of
     * classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult.LDiversityEquivalenceClass bucket_values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBucketValues()
    {
        return $this->bucket_values;
    }

    /**
     * Sample of equivalence classes in this bucket. The total number of
     * classes returned per bucket is capped at 20.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2beta1.RiskAnalysisOperationResult.LDiversityResult.LDiversityEquivalenceClass bucket_values = 4;</code>
     * @param \Google\Privacy\Dlp\V2beta1\RiskAnalysisOperationResult_LDiversityResult_LDiversityEquivalenceClass[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBucketValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Privacy\Dlp\V2beta1\RiskAnalysisOperationResult_LDiversityResult_LDiversityEquivalenceClass::class);
        $this->bucket_values = $arr;

        return $this;
    }

}
