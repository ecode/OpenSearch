<?php
namespace OpenSearch\Generated\BehaviorCollection;
/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * @deprecated
 */
final class Command {
  const ADD = 0;
  static public $__names = array(
    0 => 'ADD',
  );
}

/**
 * @deprecated
 */
final class Constant extends \Thrift\Type\TConstant {
  static protected $DOC_KEY_CMD;
  static protected $DOC_KEY_FIELDS;

  static protected function init_DOC_KEY_CMD() {
    return "cmd";
  }

  static protected function init_DOC_KEY_FIELDS() {
    return "fields";
  }
}
