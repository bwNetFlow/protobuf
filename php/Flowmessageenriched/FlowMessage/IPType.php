<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowmessageenriched\FlowMessage;

use UnexpectedValueException;

/**
 * To be deprecated
 *
 * Protobuf type <code>flowmessageenriched.FlowMessage.IPType</code>
 */
class IPType
{
    /**
     * Generated from protobuf enum <code>IPUNKNOWN = 0;</code>
     */
    const IPUNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>IPv4 = 4;</code>
     */
    const IPv4 = 4;
    /**
     * Generated from protobuf enum <code>IPv6 = 6;</code>
     */
    const IPv6 = 6;

    private static $valueToName = [
        self::IPUNKNOWN => 'IPUNKNOWN',
        self::IPv4 => 'IPv4',
        self::IPv6 => 'IPv6',
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
class_alias(IPType::class, \Flowmessageenriched\FlowMessage_IPType::class);
