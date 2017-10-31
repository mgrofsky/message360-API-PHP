<?php
/*
 * Message360
 *
 * This file was automatically generated for message360 by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Message360Lib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class ErrorModel implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Code
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Message
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @required
     * @maps MoreInfo
     * @var array $moreInfo public property
     */
    public $moreInfo;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $code     Initialization value for $this->code
     * @param string $message  Initialization value for $this->message
     * @param array  $moreInfo Initialization value for $this->moreInfo
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->code     = func_get_arg(0);
            $this->message  = func_get_arg(1);
            $this->moreInfo = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Code']     = $this->code;
        $json['Message']  = $this->message;
        $json['MoreInfo'] = $this->moreInfo;

        return $json;
    }
}