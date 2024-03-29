<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowmessageenriched\FlowMessage;

use UnexpectedValueException;

/**
 * Protobuf type <code>flowmessageenriched.FlowMessage.RemoteAddrType</code>
 */
class RemoteAddrType
{
    /**
     * Generated from protobuf enum <code>Neither = 0;</code>
     */
    const Neither = 0;
    /**
     * Generated from protobuf enum <code>Src = 1;</code>
     */
    const Src = 1;
    /**
     * Generated from protobuf enum <code>Dst = 2;</code>
     */
    const Dst = 2;

    private static $valueToName = [
        self::Neither => 'Neither',
        self::Src => 'Src',
        self::Dst => 'Dst',
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
class_alias(RemoteAddrType::class, \Flowmessageenriched\FlowMessage_RemoteAddrType::class);

