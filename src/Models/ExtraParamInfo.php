<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Alipaycloud\RiskControl\Models;

use AlibabaCloud\Tea\Model;

class ExtraParamInfo extends Model {
    protected $_name = [
        'key' => 'key',
        'value' => 'value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['key'] = $this->key;
        $res['value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return ExtraParamInfo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['key'])){
            $model->key = $map['key'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @example null
     * @description 扩展信息的key
     * @var string
     */
    public $key;

    /**
     * @example null
     * @description 扩展信息的值
     * @var string
     */
    public $value;

}
