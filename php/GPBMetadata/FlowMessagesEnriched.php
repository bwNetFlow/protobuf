<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace GPBMetadata;

class FlowMessagesEnriched
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
flow-messages-enriched.protoflowmessageenriched"�
FlowMessage7
Type (2).flowmessageenriched.FlowMessage.FlowType
TimeReceived (
SequenceNum (
SamplingRate (
FlowDirection* (
SamplerAddress (
TimeFlowStart& (
TimeFlowEnd (
Bytes	 (
Packets
 (
SrcAddr (
DstAddr (
Etype (
Proto (
SrcPort (
DstPort (
InIf (
OutIf (
SrcMac (
DstMac (
SrcVlan! (
DstVlan" (
VlanId (
IngressVrfID\' (
EgressVrfID( (
IPTos (
ForwardingStatus (
IPTTL (
TCPFlags (
IcmpType (
IcmpCode  (
IPv6FlowLabel% (

FragmentId# (
FragmentOffset$ (
BiFlowDirection) (
SrcAS (
DstAS (
NextHop (
	NextHopAS (
SrcNet (
DstNet (
HasMPLS5 (
	MPLSCount6 (
MPLS1TTL7 (

MPLS1Label8 (
MPLS2TTL9 (

MPLS2Label: (
MPLS3TTL; (

MPLS3Label< (
MPLSLastTTL= (
MPLSLastLabel> (
Cid� (
	CidString� (	
SrcCid� (
DstCid� (D

Normalized� (2/.flowmessageenriched.FlowMessage.NormalizedType
	SrcIfName� (	
	SrcIfDesc� (	

SrcIfSpeed� (
	DstIfName� (	
	DstIfDesc� (	

DstIfSpeed� (
	ProtoName� (	
RemoteCountry� (	

SrcCountry� (	

DstCountry� (	D

RemoteAddr� (2/.flowmessageenriched.FlowMessage.RemoteAddrType
Note� (	"S
FlowType
FLOWUNKNOWN 
SFLOW_5

NETFLOW_V5

NETFLOW_V9	
IPFIX"!
NormalizedType
No 
Yes"/
RemoteAddrType
Neither 
Src
DstBX
	bwnetflowBFlowMessageEnrichedPbZ4github.com/bwNetFlow/protobuf/go;flowmessageenrichedbproto3'
        , true);

        static::$is_initialized = true;
    }
}

