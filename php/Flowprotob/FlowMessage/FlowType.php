<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowprotob\FlowMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>flowprotob.FlowMessage.FlowType</code>
 */
class FlowType
{
    /**
     * Generated from protobuf enum <code>FLOWUNKNOWN = 0;</code>
     */
    const FLOWUNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>SFLOW_5 = 1;</code>
     */
    const SFLOW_5 = 1;
    /**
     * Generated from protobuf enum <code>NETFLOW_V5 = 2;</code>
     */
    const NETFLOW_V5 = 2;
    /**
     * Generated from protobuf enum <code>NETFLOW_V9 = 3;</code>
     */
    const NETFLOW_V9 = 3;
    /**
     * Generated from protobuf enum <code>IPFIX = 4;</code>
     */
    const IPFIX = 4;

    private static $valueToName = [
        self::FLOWUNKNOWN => 'FLOWUNKNOWN',
        self::SFLOW_5 => 'SFLOW_5',
        self::NETFLOW_V5 => 'NETFLOW_V5',
        self::NETFLOW_V9 => 'NETFLOW_V9',
        self::IPFIX => 'IPFIX',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlowType::class, \Flowprotob\FlowMessage_FlowType::class);

