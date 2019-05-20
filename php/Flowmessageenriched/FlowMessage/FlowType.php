<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowmessageenriched\FlowMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>flowmessageenriched.FlowMessage.FlowType</code>
 */
class FlowType
{
    /**
     * Generated from protobuf enum <code>FLOWUNKNOWN = 0;</code>
     */
    const FLOWUNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>NFV9 = 9;</code>
     */
    const NFV9 = 9;
    /**
     * Generated from protobuf enum <code>IPFIX = 10;</code>
     */
    const IPFIX = 10;
    /**
     * Generated from protobuf enum <code>SFLOW = 5;</code>
     */
    const SFLOW = 5;

    private static $valueToName = [
        self::FLOWUNKNOWN => 'FLOWUNKNOWN',
        self::NFV9 => 'NFV9',
        self::IPFIX => 'IPFIX',
        self::SFLOW => 'SFLOW',
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
class_alias(FlowType::class, \Flowmessageenriched\FlowMessage_FlowType::class);
