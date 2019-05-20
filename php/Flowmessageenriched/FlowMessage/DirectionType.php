<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowmessageenriched\FlowMessage;

use UnexpectedValueException;

/**
 * Extensions beyond goflow's default protobuf, starting at id 90
 *
 * Protobuf type <code>flowmessageenriched.FlowMessage.DirectionType</code>
 */
class DirectionType
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Incoming = 1;</code>
     */
    const Incoming = 1;
    /**
     * Generated from protobuf enum <code>Outgoing = 2;</code>
     */
    const Outgoing = 2;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Incoming => 'Incoming',
        self::Outgoing => 'Outgoing',
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
class_alias(DirectionType::class, \Flowmessageenriched\FlowMessage_DirectionType::class);
