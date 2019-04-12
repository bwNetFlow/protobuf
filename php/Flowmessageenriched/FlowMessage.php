<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowmessageenriched;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Flow Message needs to stay compatible to goflow's default protobuf
 * -> never edit record id's, only ever append
 *
 * Generated from protobuf message <code>flowmessageenriched.FlowMessage</code>
 */
class FlowMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.FlowType Type = 1;</code>
     */
    private $Type = 0;
    /**
     * Generated from protobuf field <code>uint64 TimeRecvd = 2;</code>
     */
    private $TimeRecvd = 0;
    /**
     * Generated from protobuf field <code>uint64 SamplingRate = 3;</code>
     */
    private $SamplingRate = 0;
    /**
     * Generated from protobuf field <code>uint32 SequenceNum = 4;</code>
     */
    private $SequenceNum = 0;
    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlow = 5;</code>
     */
    private $TimeFlow = 0;
    /**
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcIP = 6;</code>
     */
    private $SrcIP = '';
    /**
     * Generated from protobuf field <code>bytes DstIP = 7;</code>
     */
    private $DstIP = '';
    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.IPType IPversion = 8;</code>
     */
    private $IPversion = 0;
    /**
     * Size of the sampled packet
     *
     * Generated from protobuf field <code>uint64 Bytes = 9;</code>
     */
    private $Bytes = 0;
    /**
     * Generated from protobuf field <code>uint64 Packets = 10;</code>
     */
    private $Packets = 0;
    /**
     * Routing information
     *
     * Generated from protobuf field <code>bytes RouterAddr = 11;</code>
     */
    private $RouterAddr = '';
    /**
     * Generated from protobuf field <code>bytes NextHop = 12;</code>
     */
    private $NextHop = '';
    /**
     * Generated from protobuf field <code>uint32 NextHopAS = 13;</code>
     */
    private $NextHopAS = 0;
    /**
     * Autonomous system information
     *
     * Generated from protobuf field <code>uint32 SrcAS = 14;</code>
     */
    private $SrcAS = 0;
    /**
     * Generated from protobuf field <code>uint32 DstAS = 15;</code>
     */
    private $DstAS = 0;
    /**
     * Prefix size
     *
     * Generated from protobuf field <code>uint32 SrcNet = 16;</code>
     */
    private $SrcNet = 0;
    /**
     * Generated from protobuf field <code>uint32 DstNet = 17;</code>
     */
    private $DstNet = 0;
    /**
     * Interfaces
     *
     * Generated from protobuf field <code>uint32 SrcIf = 18;</code>
     */
    private $SrcIf = 0;
    /**
     * Generated from protobuf field <code>uint32 DstIf = 19;</code>
     */
    private $DstIf = 0;
    /**
     * Layer 4 protocol
     *
     * Generated from protobuf field <code>uint32 Proto = 20;</code>
     */
    private $Proto = 0;
    /**
     * Port for UDP and TCP
     *
     * Generated from protobuf field <code>uint32 SrcPort = 21;</code>
     */
    private $SrcPort = 0;
    /**
     * Generated from protobuf field <code>uint32 DstPort = 22;</code>
     */
    private $DstPort = 0;
    /**
     * IP and TCP special flags
     *
     * Generated from protobuf field <code>uint32 IPTos = 23;</code>
     */
    private $IPTos = 0;
    /**
     * Generated from protobuf field <code>uint32 ForwardingStatus = 24;</code>
     */
    private $ForwardingStatus = 0;
    /**
     * Generated from protobuf field <code>uint32 IPTTL = 25;</code>
     */
    private $IPTTL = 0;
    /**
     * Generated from protobuf field <code>uint32 TCPFlags = 26;</code>
     */
    private $TCPFlags = 0;
    /**
     * Ethernet information
     *
     * Generated from protobuf field <code>uint64 SrcMac = 27;</code>
     */
    private $SrcMac = 0;
    /**
     * Generated from protobuf field <code>uint64 DstMac = 28;</code>
     */
    private $DstMac = 0;
    /**
     * 802.1q VLAN in sampled packet
     *
     * Generated from protobuf field <code>uint32 VlanId = 29;</code>
     */
    private $VlanId = 0;
    /**
     * Layer 3 protocol (IPv4/IPv6/ARP/...)
     *
     * Generated from protobuf field <code>uint32 Etype = 30;</code>
     */
    private $Etype = 0;
    /**
     * Generated from protobuf field <code>uint32 IcmpType = 31;</code>
     */
    private $IcmpType = 0;
    /**
     * Generated from protobuf field <code>uint32 IcmpCode = 32;</code>
     */
    private $IcmpCode = 0;
    /**
     * Vlan
     *
     * Generated from protobuf field <code>uint32 SrcVlan = 33;</code>
     */
    private $SrcVlan = 0;
    /**
     * Generated from protobuf field <code>uint32 DstVlan = 34;</code>
     */
    private $DstVlan = 0;
    /**
     * Fragments (IPv4/IPv6)
     *
     * Generated from protobuf field <code>uint32 FragmentId = 35;</code>
     */
    private $FragmentId = 0;
    /**
     * Generated from protobuf field <code>uint32 FragmentOffset = 36;</code>
     */
    private $FragmentOffset = 0;
    /**
     * Generated from protobuf field <code>uint32 IPv6FlowLabel = 37;</code>
     */
    private $IPv6FlowLabel = 0;
    /**
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfId = 38;</code>
     */
    private $IngressVrfId = 0;
    /**
     * Generated from protobuf field <code>uint32 EgressVrfId = 39;</code>
     */
    private $EgressVrfId = 0;
    /**
     * Time Flow
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 40;</code>
     */
    private $TimeFlowStart = 0;
    /**
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 41;</code>
     */
    private $TimeFlowEnd = 0;
    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.DirectionType Direction = 90;</code>
     */
    private $Direction = 0;
    /**
     * Generated from protobuf field <code>uint32 Cid = 91;</code>
     */
    private $Cid = 0;
    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.NormalizedType Normalized = 92;</code>
     */
    private $Normalized = 0;
    /**
     * Generated from protobuf field <code>string SrcIfName = 93;</code>
     */
    private $SrcIfName = '';
    /**
     * Generated from protobuf field <code>string SrcIfDesc = 94;</code>
     */
    private $SrcIfDesc = '';
    /**
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 95;</code>
     */
    private $SrcIfSpeed = 0;
    /**
     * Generated from protobuf field <code>string DstIfName = 96;</code>
     */
    private $DstIfName = '';
    /**
     * Generated from protobuf field <code>string DstIfDesc = 97;</code>
     */
    private $DstIfDesc = '';
    /**
     * Generated from protobuf field <code>uint32 DstIfSpeed = 98;</code>
     */
    private $DstIfSpeed = 0;
    /**
     * Generated from protobuf field <code>string Peer = 99;</code>
     */
    private $Peer = '';
    /**
     * Generated from protobuf field <code>string RemoteCountry = 100;</code>
     */
    private $RemoteCountry = '';
    /**
     * Generated from protobuf field <code>string ProtoName = 101;</code>
     */
    private $ProtoName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Type
     *     @type int|string $TimeRecvd
     *     @type int|string $SamplingRate
     *     @type int $SequenceNum
     *     @type int|string $TimeFlow
     *           Found inside packet
     *     @type string $SrcIP
     *           Source/destination addresses
     *     @type string $DstIP
     *     @type int $IPversion
     *     @type int|string $Bytes
     *           Size of the sampled packet
     *     @type int|string $Packets
     *     @type string $RouterAddr
     *           Routing information
     *     @type string $NextHop
     *     @type int $NextHopAS
     *     @type int $SrcAS
     *           Autonomous system information
     *     @type int $DstAS
     *     @type int $SrcNet
     *           Prefix size
     *     @type int $DstNet
     *     @type int $SrcIf
     *           Interfaces
     *     @type int $DstIf
     *     @type int $Proto
     *           Layer 4 protocol
     *     @type int $SrcPort
     *           Port for UDP and TCP
     *     @type int $DstPort
     *     @type int $IPTos
     *           IP and TCP special flags
     *     @type int $ForwardingStatus
     *     @type int $IPTTL
     *     @type int $TCPFlags
     *     @type int|string $SrcMac
     *           Ethernet information
     *     @type int|string $DstMac
     *     @type int $VlanId
     *           802.1q VLAN in sampled packet
     *     @type int $Etype
     *           Layer 3 protocol (IPv4/IPv6/ARP/...)
     *     @type int $IcmpType
     *     @type int $IcmpCode
     *     @type int $SrcVlan
     *           Vlan
     *     @type int $DstVlan
     *     @type int $FragmentId
     *           Fragments (IPv4/IPv6)
     *     @type int $FragmentOffset
     *     @type int $IPv6FlowLabel
     *     @type int $IngressVrfId
     *           VRF
     *     @type int $EgressVrfId
     *     @type int|string $TimeFlowStart
     *           Time Flow
     *     @type int|string $TimeFlowEnd
     *     @type int $Direction
     *     @type int $Cid
     *     @type int $Normalized
     *     @type string $SrcIfName
     *     @type string $SrcIfDesc
     *     @type int $SrcIfSpeed
     *     @type string $DstIfName
     *     @type string $DstIfDesc
     *     @type int $DstIfSpeed
     *     @type string $Peer
     *     @type string $RemoteCountry
     *     @type string $ProtoName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FlowMessagesEnriched::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.FlowType Type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.FlowType Type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Flowmessageenriched\FlowMessage_FlowType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeRecvd = 2;</code>
     * @return int|string
     */
    public function getTimeRecvd()
    {
        return $this->TimeRecvd;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeRecvd = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeRecvd($var)
    {
        GPBUtil::checkUint64($var);
        $this->TimeRecvd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 SamplingRate = 3;</code>
     * @return int|string
     */
    public function getSamplingRate()
    {
        return $this->SamplingRate;
    }

    /**
     * Generated from protobuf field <code>uint64 SamplingRate = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSamplingRate($var)
    {
        GPBUtil::checkUint64($var);
        $this->SamplingRate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SequenceNum = 4;</code>
     * @return int
     */
    public function getSequenceNum()
    {
        return $this->SequenceNum;
    }

    /**
     * Generated from protobuf field <code>uint32 SequenceNum = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSequenceNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->SequenceNum = $var;

        return $this;
    }

    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlow = 5;</code>
     * @return int|string
     */
    public function getTimeFlow()
    {
        return $this->TimeFlow;
    }

    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlow = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeFlow($var)
    {
        GPBUtil::checkUint64($var);
        $this->TimeFlow = $var;

        return $this;
    }

    /**
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcIP = 6;</code>
     * @return string
     */
    public function getSrcIP()
    {
        return $this->SrcIP;
    }

    /**
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcIP = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcIP($var)
    {
        GPBUtil::checkString($var, False);
        $this->SrcIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes DstIP = 7;</code>
     * @return string
     */
    public function getDstIP()
    {
        return $this->DstIP;
    }

    /**
     * Generated from protobuf field <code>bytes DstIP = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDstIP($var)
    {
        GPBUtil::checkString($var, False);
        $this->DstIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.IPType IPversion = 8;</code>
     * @return int
     */
    public function getIPversion()
    {
        return $this->IPversion;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.IPType IPversion = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setIPversion($var)
    {
        GPBUtil::checkEnum($var, \Flowmessageenriched\FlowMessage_IPType::class);
        $this->IPversion = $var;

        return $this;
    }

    /**
     * Size of the sampled packet
     *
     * Generated from protobuf field <code>uint64 Bytes = 9;</code>
     * @return int|string
     */
    public function getBytes()
    {
        return $this->Bytes;
    }

    /**
     * Size of the sampled packet
     *
     * Generated from protobuf field <code>uint64 Bytes = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBytes($var)
    {
        GPBUtil::checkUint64($var);
        $this->Bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 Packets = 10;</code>
     * @return int|string
     */
    public function getPackets()
    {
        return $this->Packets;
    }

    /**
     * Generated from protobuf field <code>uint64 Packets = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPackets($var)
    {
        GPBUtil::checkUint64($var);
        $this->Packets = $var;

        return $this;
    }

    /**
     * Routing information
     *
     * Generated from protobuf field <code>bytes RouterAddr = 11;</code>
     * @return string
     */
    public function getRouterAddr()
    {
        return $this->RouterAddr;
    }

    /**
     * Routing information
     *
     * Generated from protobuf field <code>bytes RouterAddr = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRouterAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->RouterAddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes NextHop = 12;</code>
     * @return string
     */
    public function getNextHop()
    {
        return $this->NextHop;
    }

    /**
     * Generated from protobuf field <code>bytes NextHop = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setNextHop($var)
    {
        GPBUtil::checkString($var, False);
        $this->NextHop = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NextHopAS = 13;</code>
     * @return int
     */
    public function getNextHopAS()
    {
        return $this->NextHopAS;
    }

    /**
     * Generated from protobuf field <code>uint32 NextHopAS = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setNextHopAS($var)
    {
        GPBUtil::checkUint32($var);
        $this->NextHopAS = $var;

        return $this;
    }

    /**
     * Autonomous system information
     *
     * Generated from protobuf field <code>uint32 SrcAS = 14;</code>
     * @return int
     */
    public function getSrcAS()
    {
        return $this->SrcAS;
    }

    /**
     * Autonomous system information
     *
     * Generated from protobuf field <code>uint32 SrcAS = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcAS($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcAS = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstAS = 15;</code>
     * @return int
     */
    public function getDstAS()
    {
        return $this->DstAS;
    }

    /**
     * Generated from protobuf field <code>uint32 DstAS = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDstAS($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstAS = $var;

        return $this;
    }

    /**
     * Prefix size
     *
     * Generated from protobuf field <code>uint32 SrcNet = 16;</code>
     * @return int
     */
    public function getSrcNet()
    {
        return $this->SrcNet;
    }

    /**
     * Prefix size
     *
     * Generated from protobuf field <code>uint32 SrcNet = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcNet($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcNet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstNet = 17;</code>
     * @return int
     */
    public function getDstNet()
    {
        return $this->DstNet;
    }

    /**
     * Generated from protobuf field <code>uint32 DstNet = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setDstNet($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstNet = $var;

        return $this;
    }

    /**
     * Interfaces
     *
     * Generated from protobuf field <code>uint32 SrcIf = 18;</code>
     * @return int
     */
    public function getSrcIf()
    {
        return $this->SrcIf;
    }

    /**
     * Interfaces
     *
     * Generated from protobuf field <code>uint32 SrcIf = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcIf($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcIf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstIf = 19;</code>
     * @return int
     */
    public function getDstIf()
    {
        return $this->DstIf;
    }

    /**
     * Generated from protobuf field <code>uint32 DstIf = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setDstIf($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstIf = $var;

        return $this;
    }

    /**
     * Layer 4 protocol
     *
     * Generated from protobuf field <code>uint32 Proto = 20;</code>
     * @return int
     */
    public function getProto()
    {
        return $this->Proto;
    }

    /**
     * Layer 4 protocol
     *
     * Generated from protobuf field <code>uint32 Proto = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setProto($var)
    {
        GPBUtil::checkUint32($var);
        $this->Proto = $var;

        return $this;
    }

    /**
     * Port for UDP and TCP
     *
     * Generated from protobuf field <code>uint32 SrcPort = 21;</code>
     * @return int
     */
    public function getSrcPort()
    {
        return $this->SrcPort;
    }

    /**
     * Port for UDP and TCP
     *
     * Generated from protobuf field <code>uint32 SrcPort = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcPort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstPort = 22;</code>
     * @return int
     */
    public function getDstPort()
    {
        return $this->DstPort;
    }

    /**
     * Generated from protobuf field <code>uint32 DstPort = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setDstPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstPort = $var;

        return $this;
    }

    /**
     * IP and TCP special flags
     *
     * Generated from protobuf field <code>uint32 IPTos = 23;</code>
     * @return int
     */
    public function getIPTos()
    {
        return $this->IPTos;
    }

    /**
     * IP and TCP special flags
     *
     * Generated from protobuf field <code>uint32 IPTos = 23;</code>
     * @param int $var
     * @return $this
     */
    public function setIPTos($var)
    {
        GPBUtil::checkUint32($var);
        $this->IPTos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ForwardingStatus = 24;</code>
     * @return int
     */
    public function getForwardingStatus()
    {
        return $this->ForwardingStatus;
    }

    /**
     * Generated from protobuf field <code>uint32 ForwardingStatus = 24;</code>
     * @param int $var
     * @return $this
     */
    public function setForwardingStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->ForwardingStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IPTTL = 25;</code>
     * @return int
     */
    public function getIPTTL()
    {
        return $this->IPTTL;
    }

    /**
     * Generated from protobuf field <code>uint32 IPTTL = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setIPTTL($var)
    {
        GPBUtil::checkUint32($var);
        $this->IPTTL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 TCPFlags = 26;</code>
     * @return int
     */
    public function getTCPFlags()
    {
        return $this->TCPFlags;
    }

    /**
     * Generated from protobuf field <code>uint32 TCPFlags = 26;</code>
     * @param int $var
     * @return $this
     */
    public function setTCPFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->TCPFlags = $var;

        return $this;
    }

    /**
     * Ethernet information
     *
     * Generated from protobuf field <code>uint64 SrcMac = 27;</code>
     * @return int|string
     */
    public function getSrcMac()
    {
        return $this->SrcMac;
    }

    /**
     * Ethernet information
     *
     * Generated from protobuf field <code>uint64 SrcMac = 27;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSrcMac($var)
    {
        GPBUtil::checkUint64($var);
        $this->SrcMac = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 DstMac = 28;</code>
     * @return int|string
     */
    public function getDstMac()
    {
        return $this->DstMac;
    }

    /**
     * Generated from protobuf field <code>uint64 DstMac = 28;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDstMac($var)
    {
        GPBUtil::checkUint64($var);
        $this->DstMac = $var;

        return $this;
    }

    /**
     * 802.1q VLAN in sampled packet
     *
     * Generated from protobuf field <code>uint32 VlanId = 29;</code>
     * @return int
     */
    public function getVlanId()
    {
        return $this->VlanId;
    }

    /**
     * 802.1q VLAN in sampled packet
     *
     * Generated from protobuf field <code>uint32 VlanId = 29;</code>
     * @param int $var
     * @return $this
     */
    public function setVlanId($var)
    {
        GPBUtil::checkUint32($var);
        $this->VlanId = $var;

        return $this;
    }

    /**
     * Layer 3 protocol (IPv4/IPv6/ARP/...)
     *
     * Generated from protobuf field <code>uint32 Etype = 30;</code>
     * @return int
     */
    public function getEtype()
    {
        return $this->Etype;
    }

    /**
     * Layer 3 protocol (IPv4/IPv6/ARP/...)
     *
     * Generated from protobuf field <code>uint32 Etype = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setEtype($var)
    {
        GPBUtil::checkUint32($var);
        $this->Etype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IcmpType = 31;</code>
     * @return int
     */
    public function getIcmpType()
    {
        return $this->IcmpType;
    }

    /**
     * Generated from protobuf field <code>uint32 IcmpType = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setIcmpType($var)
    {
        GPBUtil::checkUint32($var);
        $this->IcmpType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IcmpCode = 32;</code>
     * @return int
     */
    public function getIcmpCode()
    {
        return $this->IcmpCode;
    }

    /**
     * Generated from protobuf field <code>uint32 IcmpCode = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setIcmpCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->IcmpCode = $var;

        return $this;
    }

    /**
     * Vlan
     *
     * Generated from protobuf field <code>uint32 SrcVlan = 33;</code>
     * @return int
     */
    public function getSrcVlan()
    {
        return $this->SrcVlan;
    }

    /**
     * Vlan
     *
     * Generated from protobuf field <code>uint32 SrcVlan = 33;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcVlan($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcVlan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstVlan = 34;</code>
     * @return int
     */
    public function getDstVlan()
    {
        return $this->DstVlan;
    }

    /**
     * Generated from protobuf field <code>uint32 DstVlan = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setDstVlan($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstVlan = $var;

        return $this;
    }

    /**
     * Fragments (IPv4/IPv6)
     *
     * Generated from protobuf field <code>uint32 FragmentId = 35;</code>
     * @return int
     */
    public function getFragmentId()
    {
        return $this->FragmentId;
    }

    /**
     * Fragments (IPv4/IPv6)
     *
     * Generated from protobuf field <code>uint32 FragmentId = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentId($var)
    {
        GPBUtil::checkUint32($var);
        $this->FragmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 FragmentOffset = 36;</code>
     * @return int
     */
    public function getFragmentOffset()
    {
        return $this->FragmentOffset;
    }

    /**
     * Generated from protobuf field <code>uint32 FragmentOffset = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setFragmentOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->FragmentOffset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IPv6FlowLabel = 37;</code>
     * @return int
     */
    public function getIPv6FlowLabel()
    {
        return $this->IPv6FlowLabel;
    }

    /**
     * Generated from protobuf field <code>uint32 IPv6FlowLabel = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setIPv6FlowLabel($var)
    {
        GPBUtil::checkUint32($var);
        $this->IPv6FlowLabel = $var;

        return $this;
    }

    /**
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfId = 38;</code>
     * @return int
     */
    public function getIngressVrfId()
    {
        return $this->IngressVrfId;
    }

    /**
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfId = 38;</code>
     * @param int $var
     * @return $this
     */
    public function setIngressVrfId($var)
    {
        GPBUtil::checkUint32($var);
        $this->IngressVrfId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EgressVrfId = 39;</code>
     * @return int
     */
    public function getEgressVrfId()
    {
        return $this->EgressVrfId;
    }

    /**
     * Generated from protobuf field <code>uint32 EgressVrfId = 39;</code>
     * @param int $var
     * @return $this
     */
    public function setEgressVrfId($var)
    {
        GPBUtil::checkUint32($var);
        $this->EgressVrfId = $var;

        return $this;
    }

    /**
     * Time Flow
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 40;</code>
     * @return int|string
     */
    public function getTimeFlowStart()
    {
        return $this->TimeFlowStart;
    }

    /**
     * Time Flow
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 40;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeFlowStart($var)
    {
        GPBUtil::checkUint64($var);
        $this->TimeFlowStart = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 41;</code>
     * @return int|string
     */
    public function getTimeFlowEnd()
    {
        return $this->TimeFlowEnd;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 41;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeFlowEnd($var)
    {
        GPBUtil::checkUint64($var);
        $this->TimeFlowEnd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.DirectionType Direction = 90;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->Direction;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.DirectionType Direction = 90;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Flowmessageenriched\FlowMessage_DirectionType::class);
        $this->Direction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 Cid = 91;</code>
     * @return int
     */
    public function getCid()
    {
        return $this->Cid;
    }

    /**
     * Generated from protobuf field <code>uint32 Cid = 91;</code>
     * @param int $var
     * @return $this
     */
    public function setCid($var)
    {
        GPBUtil::checkUint32($var);
        $this->Cid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.NormalizedType Normalized = 92;</code>
     * @return int
     */
    public function getNormalized()
    {
        return $this->Normalized;
    }

    /**
     * Generated from protobuf field <code>.flowmessageenriched.FlowMessage.NormalizedType Normalized = 92;</code>
     * @param int $var
     * @return $this
     */
    public function setNormalized($var)
    {
        GPBUtil::checkEnum($var, \Flowmessageenriched\FlowMessage_NormalizedType::class);
        $this->Normalized = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SrcIfName = 93;</code>
     * @return string
     */
    public function getSrcIfName()
    {
        return $this->SrcIfName;
    }

    /**
     * Generated from protobuf field <code>string SrcIfName = 93;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcIfName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SrcIfName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SrcIfDesc = 94;</code>
     * @return string
     */
    public function getSrcIfDesc()
    {
        return $this->SrcIfDesc;
    }

    /**
     * Generated from protobuf field <code>string SrcIfDesc = 94;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcIfDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->SrcIfDesc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 95;</code>
     * @return int
     */
    public function getSrcIfSpeed()
    {
        return $this->SrcIfSpeed;
    }

    /**
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 95;</code>
     * @param int $var
     * @return $this
     */
    public function setSrcIfSpeed($var)
    {
        GPBUtil::checkUint32($var);
        $this->SrcIfSpeed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DstIfName = 96;</code>
     * @return string
     */
    public function getDstIfName()
    {
        return $this->DstIfName;
    }

    /**
     * Generated from protobuf field <code>string DstIfName = 96;</code>
     * @param string $var
     * @return $this
     */
    public function setDstIfName($var)
    {
        GPBUtil::checkString($var, True);
        $this->DstIfName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DstIfDesc = 97;</code>
     * @return string
     */
    public function getDstIfDesc()
    {
        return $this->DstIfDesc;
    }

    /**
     * Generated from protobuf field <code>string DstIfDesc = 97;</code>
     * @param string $var
     * @return $this
     */
    public function setDstIfDesc($var)
    {
        GPBUtil::checkString($var, True);
        $this->DstIfDesc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DstIfSpeed = 98;</code>
     * @return int
     */
    public function getDstIfSpeed()
    {
        return $this->DstIfSpeed;
    }

    /**
     * Generated from protobuf field <code>uint32 DstIfSpeed = 98;</code>
     * @param int $var
     * @return $this
     */
    public function setDstIfSpeed($var)
    {
        GPBUtil::checkUint32($var);
        $this->DstIfSpeed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Peer = 99;</code>
     * @return string
     */
    public function getPeer()
    {
        return $this->Peer;
    }

    /**
     * Generated from protobuf field <code>string Peer = 99;</code>
     * @param string $var
     * @return $this
     */
    public function setPeer($var)
    {
        GPBUtil::checkString($var, True);
        $this->Peer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string RemoteCountry = 100;</code>
     * @return string
     */
    public function getRemoteCountry()
    {
        return $this->RemoteCountry;
    }

    /**
     * Generated from protobuf field <code>string RemoteCountry = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->RemoteCountry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ProtoName = 101;</code>
     * @return string
     */
    public function getProtoName()
    {
        return $this->ProtoName;
    }

    /**
     * Generated from protobuf field <code>string ProtoName = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ProtoName = $var;

        return $this;
    }

}

