# Generated by the protocol buffer compiler (protoc-perl) DO NOT EDIT!
# source: ./perl/flow-messages-enriched-elaborate.proto



use strict;
use warnings;

use Google::ProtocolBuffers;
{
    unless (FlowMessage::DirectionType->can('_pb_fields_list')) {
        Google::ProtocolBuffers->create_enum(
            'FlowMessage::DirectionType',
            [
               ['Unknown', 0],
               ['Incoming', 1],
               ['Outgoing', 2],

            ]
        );
    }
    
    unless (FlowMessage::FlowType->can('_pb_fields_list')) {
        Google::ProtocolBuffers->create_enum(
            'FlowMessage::FlowType',
            [
               ['FLOWUNKNOWN', 0],
               ['NFV9', 9],
               ['IPFIX', 10],
               ['SFLOW', 5],

            ]
        );
    }
    
    unless (FlowMessage::IPType->can('_pb_fields_list')) {
        Google::ProtocolBuffers->create_enum(
            'FlowMessage::IPType',
            [
               ['IPUNKNOWN', 0],
               ['IPv4', 4],
               ['IPv6', 6],

            ]
        );
    }
    
    unless (FlowMessage::NormalizedType->can('_pb_fields_list')) {
        Google::ProtocolBuffers->create_enum(
            'FlowMessage::NormalizedType',
            [
               ['No', 0],
               ['Yes', 1],

            ]
        );
    }
    
    unless (FlowMessage->can('_pb_fields_list')) {
        Google::ProtocolBuffers->create_message(
            'FlowMessage',
            [
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    'FlowMessage::FlowType', 
                    'Type', 1, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'TimeRecvd', 2, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'SamplingRate', 3, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SequenceNum', 4, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'TimeFlow', 5, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_BYTES(), 
                    'SrcIP', 6, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_BYTES(), 
                    'DstIP', 7, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    'FlowMessage::IPType', 
                    'IPversion', 8, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'Bytes', 9, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'Packets', 10, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_BYTES(), 
                    'RouterAddr', 11, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_BYTES(), 
                    'NextHop', 12, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'NextHopAS', 13, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SrcAS', 14, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'DstAS', 15, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SrcNet', 16, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'DstNet', 17, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SrcIf', 18, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'DstIf', 19, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'Proto', 20, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SrcPort', 21, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'DstPort', 22, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'IPTos', 23, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'ForwardingStatus', 24, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'IPTTL', 25, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'TCPFlags', 26, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'SrcMac', 27, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT64(), 
                    'DstMac', 28, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'VlanId', 29, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'Etype', 30, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    'FlowMessage::DirectionType', 
                    'Direction', 90, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'Cid', 91, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    'FlowMessage::NormalizedType', 
                    'Normalized', 92, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'SrcIfName', 93, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'SrcIfDesc', 94, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'SrcIfSpeed', 95, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'DstIfName', 96, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'DstIfDesc', 97, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_UINT32(), 
                    'DstIfSpeed', 98, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'Peer', 99, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'RemoteCountry', 100, undef
                ],
                [
                    Google::ProtocolBuffers::Constants::LABEL_REQUIRED(), 
                    Google::ProtocolBuffers::Constants::TYPE_STRING(), 
                    'ProtoName', 101, undef
                ],

            ],
            undef,

            { 'create_accessors' => 1, 'follow_best_practice' => 1,  }
        );
    }

}
1;
