<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

namespace Flowprotob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>flowprotob.FlowMessage</code>
 */
class FlowMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.flowprotob.FlowMessage.FlowType Type = 1;</code>
     */
    private $Type = 0;
    /**
     * Generated from protobuf field <code>uint64 TimeReceived = 2;</code>
     */
    private $TimeReceived = 0;
    /**
     * Generated from protobuf field <code>uint32 SequenceNum = 4;</code>
     */
    private $SequenceNum = 0;
    /**
     * Generated from protobuf field <code>uint64 SamplingRate = 3;</code>
     */
    private $SamplingRate = 0;
    /**
     * Generated from protobuf field <code>uint32 FlowDirection = 42;</code>
     */
    private $FlowDirection = 0;
    /**
     * Sampler information
     *
     * Generated from protobuf field <code>bytes SamplerAddress = 11;</code>
     */
    private $SamplerAddress = '';
    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 38;</code>
     */
    private $TimeFlowStart = 0;
    /**
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 5;</code>
     */
    private $TimeFlowEnd = 0;
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
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcAddr = 6;</code>
     */
    private $SrcAddr = '';
    /**
     * Generated from protobuf field <code>bytes DstAddr = 7;</code>
     */
    private $DstAddr = '';
    /**
     * Layer 3 protocol (IPv4/IPv6/ARP/...)
     *
     * Generated from protobuf field <code>uint32 Etype = 30;</code>
     */
    private $Etype = 0;
    /**
     * Layer 4 protocol
     *
     * Generated from protobuf field <code>uint32 Proto = 20;</code>
     */
    private $Proto = 0;
    /**
     * Ports for UDP and TCP
     *
     * Generated from protobuf field <code>uint32 SrcPort = 21;</code>
     */
    private $SrcPort = 0;
    /**
     * Generated from protobuf field <code>uint32 DstPort = 22;</code>
     */
    private $DstPort = 0;
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
     * 802.1q VLAN in sampled packet
     *
     * Generated from protobuf field <code>uint32 VlanId = 29;</code>
     */
    private $VlanId = 0;
    /**
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfID = 39;</code>
     */
    private $IngressVrfID = 0;
    /**
     * Generated from protobuf field <code>uint32 EgressVrfID = 40;</code>
     */
    private $EgressVrfID = 0;
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
     * Generated from protobuf field <code>uint32 IcmpType = 31;</code>
     */
    private $IcmpType = 0;
    /**
     * Generated from protobuf field <code>uint32 IcmpCode = 32;</code>
     */
    private $IcmpCode = 0;
    /**
     * Generated from protobuf field <code>uint32 IPv6FlowLabel = 37;</code>
     */
    private $IPv6FlowLabel = 0;
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
     * Generated from protobuf field <code>uint32 BiFlowDirection = 41;</code>
     */
    private $BiFlowDirection = 0;
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
     * Generated from protobuf field <code>bytes NextHop = 12;</code>
     */
    private $NextHop = '';
    /**
     * Generated from protobuf field <code>uint32 NextHopAS = 13;</code>
     */
    private $NextHopAS = 0;
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
     * bwNetFlow enricher fields
     *
     * Generated from protobuf field <code>uint32 Cid = 1000;</code>
     */
    private $Cid = 0;
    /**
     * Customer ID - a more generalized ID, assigned by prefix
     *
     * Generated from protobuf field <code>string CidString = 1001;</code>
     */
    private $CidString = '';
    /**
     * Normalization - whether the sampling rate is accounted for
     *
     * Generated from protobuf field <code>.flowprotob.FlowMessage.NormalizedType Normalized = 1002;</code>
     */
    private $Normalized = 0;
    /**
     * Fields for Interface Usability -- enriched using SNMP
     *
     * Generated from protobuf field <code>string SrcIfName = 1003;</code>
     */
    private $SrcIfName = '';
    /**
     * set to the descrition, filtered by a regex in the enricher
     *
     * Generated from protobuf field <code>string SrcIfDesc = 1004;</code>
     */
    private $SrcIfDesc = '';
    /**
     * iface speed
     *
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 1005;</code>
     */
    private $SrcIfSpeed = 0;
    /**
     * Generated from protobuf field <code>string DstIfName = 1006;</code>
     */
    private $DstIfName = '';
    /**
     * Generated from protobuf field <code>string DstIfDesc = 1007;</code>
     */
    private $DstIfDesc = '';
    /**
     * Generated from protobuf field <code>uint32 DstIfSpeed = 1008;</code>
     */
    private $DstIfSpeed = 0;
    /**
     * Protocol Name -- set for some well known protocols, based on Proto
     *
     * Generated from protobuf field <code>string ProtoName = 1009;</code>
     */
    private $ProtoName = '';
    /**
     * Geolocation -- set using the provided database
     *
     * Generated from protobuf field <code>string RemoteCountry = 1010;</code>
     */
    private $RemoteCountry = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Type
     *     @type int|string $TimeReceived
     *     @type int $SequenceNum
     *     @type int|string $SamplingRate
     *     @type int $FlowDirection
     *     @type string $SamplerAddress
     *           Sampler information
     *     @type int|string $TimeFlowStart
     *           Found inside packet
     *     @type int|string $TimeFlowEnd
     *     @type int|string $Bytes
     *           Size of the sampled packet
     *     @type int|string $Packets
     *     @type string $SrcAddr
     *           Source/destination addresses
     *     @type string $DstAddr
     *     @type int $Etype
     *           Layer 3 protocol (IPv4/IPv6/ARP/...)
     *     @type int $Proto
     *           Layer 4 protocol
     *     @type int $SrcPort
     *           Ports for UDP and TCP
     *     @type int $DstPort
     *     @type int $SrcIf
     *           Interfaces
     *     @type int $DstIf
     *     @type int|string $SrcMac
     *           Ethernet information
     *     @type int|string $DstMac
     *     @type int $SrcVlan
     *           Vlan
     *     @type int $DstVlan
     *     @type int $VlanId
     *           802.1q VLAN in sampled packet
     *     @type int $IngressVrfID
     *           VRF
     *     @type int $EgressVrfID
     *     @type int $IPTos
     *           IP and TCP special flags
     *     @type int $ForwardingStatus
     *     @type int $IPTTL
     *     @type int $TCPFlags
     *     @type int $IcmpType
     *     @type int $IcmpCode
     *     @type int $IPv6FlowLabel
     *     @type int $FragmentId
     *           Fragments (IPv4/IPv6)
     *     @type int $FragmentOffset
     *     @type int $BiFlowDirection
     *     @type int $SrcAS
     *           Autonomous system information
     *     @type int $DstAS
     *     @type string $NextHop
     *     @type int $NextHopAS
     *     @type int $SrcNet
     *           Prefix size
     *     @type int $DstNet
     *     @type int $Cid
     *           bwNetFlow enricher fields
     *     @type string $CidString
     *           Customer ID - a more generalized ID, assigned by prefix
     *     @type int $Normalized
     *           Normalization - whether the sampling rate is accounted for
     *     @type string $SrcIfName
     *           Fields for Interface Usability -- enriched using SNMP
     *     @type string $SrcIfDesc
     *           set to the descrition, filtered by a regex in the enricher
     *     @type int $SrcIfSpeed
     *           iface speed
     *     @type string $DstIfName
     *     @type string $DstIfDesc
     *     @type int $DstIfSpeed
     *     @type string $ProtoName
     *           Protocol Name -- set for some well known protocols, based on Proto
     *     @type string $RemoteCountry
     *           Geolocation -- set using the provided database
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FlowMessagesEnriched::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.flowprotob.FlowMessage.FlowType Type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.flowprotob.FlowMessage.FlowType Type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Flowprotob\FlowMessage_FlowType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeReceived = 2;</code>
     * @return int|string
     */
    public function getTimeReceived()
    {
        return $this->TimeReceived;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeReceived = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeReceived($var)
    {
        GPBUtil::checkUint64($var);
        $this->TimeReceived = $var;

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
     * Generated from protobuf field <code>uint32 FlowDirection = 42;</code>
     * @return int
     */
    public function getFlowDirection()
    {
        return $this->FlowDirection;
    }

    /**
     * Generated from protobuf field <code>uint32 FlowDirection = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setFlowDirection($var)
    {
        GPBUtil::checkUint32($var);
        $this->FlowDirection = $var;

        return $this;
    }

    /**
     * Sampler information
     *
     * Generated from protobuf field <code>bytes SamplerAddress = 11;</code>
     * @return string
     */
    public function getSamplerAddress()
    {
        return $this->SamplerAddress;
    }

    /**
     * Sampler information
     *
     * Generated from protobuf field <code>bytes SamplerAddress = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSamplerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->SamplerAddress = $var;

        return $this;
    }

    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 38;</code>
     * @return int|string
     */
    public function getTimeFlowStart()
    {
        return $this->TimeFlowStart;
    }

    /**
     * Found inside packet
     *
     * Generated from protobuf field <code>uint64 TimeFlowStart = 38;</code>
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
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 5;</code>
     * @return int|string
     */
    public function getTimeFlowEnd()
    {
        return $this->TimeFlowEnd;
    }

    /**
     * Generated from protobuf field <code>uint64 TimeFlowEnd = 5;</code>
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
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcAddr = 6;</code>
     * @return string
     */
    public function getSrcAddr()
    {
        return $this->SrcAddr;
    }

    /**
     * Source/destination addresses
     *
     * Generated from protobuf field <code>bytes SrcAddr = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSrcAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->SrcAddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes DstAddr = 7;</code>
     * @return string
     */
    public function getDstAddr()
    {
        return $this->DstAddr;
    }

    /**
     * Generated from protobuf field <code>bytes DstAddr = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDstAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->DstAddr = $var;

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
     * Ports for UDP and TCP
     *
     * Generated from protobuf field <code>uint32 SrcPort = 21;</code>
     * @return int
     */
    public function getSrcPort()
    {
        return $this->SrcPort;
    }

    /**
     * Ports for UDP and TCP
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
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfID = 39;</code>
     * @return int
     */
    public function getIngressVrfID()
    {
        return $this->IngressVrfID;
    }

    /**
     * VRF
     *
     * Generated from protobuf field <code>uint32 IngressVrfID = 39;</code>
     * @param int $var
     * @return $this
     */
    public function setIngressVrfID($var)
    {
        GPBUtil::checkUint32($var);
        $this->IngressVrfID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 EgressVrfID = 40;</code>
     * @return int
     */
    public function getEgressVrfID()
    {
        return $this->EgressVrfID;
    }

    /**
     * Generated from protobuf field <code>uint32 EgressVrfID = 40;</code>
     * @param int $var
     * @return $this
     */
    public function setEgressVrfID($var)
    {
        GPBUtil::checkUint32($var);
        $this->EgressVrfID = $var;

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
     * Generated from protobuf field <code>uint32 BiFlowDirection = 41;</code>
     * @return int
     */
    public function getBiFlowDirection()
    {
        return $this->BiFlowDirection;
    }

    /**
     * Generated from protobuf field <code>uint32 BiFlowDirection = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setBiFlowDirection($var)
    {
        GPBUtil::checkUint32($var);
        $this->BiFlowDirection = $var;

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
     * bwNetFlow enricher fields
     *
     * Generated from protobuf field <code>uint32 Cid = 1000;</code>
     * @return int
     */
    public function getCid()
    {
        return $this->Cid;
    }

    /**
     * bwNetFlow enricher fields
     *
     * Generated from protobuf field <code>uint32 Cid = 1000;</code>
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
     * Customer ID - a more generalized ID, assigned by prefix
     *
     * Generated from protobuf field <code>string CidString = 1001;</code>
     * @return string
     */
    public function getCidString()
    {
        return $this->CidString;
    }

    /**
     * Customer ID - a more generalized ID, assigned by prefix
     *
     * Generated from protobuf field <code>string CidString = 1001;</code>
     * @param string $var
     * @return $this
     */
    public function setCidString($var)
    {
        GPBUtil::checkString($var, True);
        $this->CidString = $var;

        return $this;
    }

    /**
     * Normalization - whether the sampling rate is accounted for
     *
     * Generated from protobuf field <code>.flowprotob.FlowMessage.NormalizedType Normalized = 1002;</code>
     * @return int
     */
    public function getNormalized()
    {
        return $this->Normalized;
    }

    /**
     * Normalization - whether the sampling rate is accounted for
     *
     * Generated from protobuf field <code>.flowprotob.FlowMessage.NormalizedType Normalized = 1002;</code>
     * @param int $var
     * @return $this
     */
    public function setNormalized($var)
    {
        GPBUtil::checkEnum($var, \Flowprotob\FlowMessage_NormalizedType::class);
        $this->Normalized = $var;

        return $this;
    }

    /**
     * Fields for Interface Usability -- enriched using SNMP
     *
     * Generated from protobuf field <code>string SrcIfName = 1003;</code>
     * @return string
     */
    public function getSrcIfName()
    {
        return $this->SrcIfName;
    }

    /**
     * Fields for Interface Usability -- enriched using SNMP
     *
     * Generated from protobuf field <code>string SrcIfName = 1003;</code>
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
     * set to the descrition, filtered by a regex in the enricher
     *
     * Generated from protobuf field <code>string SrcIfDesc = 1004;</code>
     * @return string
     */
    public function getSrcIfDesc()
    {
        return $this->SrcIfDesc;
    }

    /**
     * set to the descrition, filtered by a regex in the enricher
     *
     * Generated from protobuf field <code>string SrcIfDesc = 1004;</code>
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
     * iface speed
     *
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 1005;</code>
     * @return int
     */
    public function getSrcIfSpeed()
    {
        return $this->SrcIfSpeed;
    }

    /**
     * iface speed
     *
     * Generated from protobuf field <code>uint32 SrcIfSpeed = 1005;</code>
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
     * Generated from protobuf field <code>string DstIfName = 1006;</code>
     * @return string
     */
    public function getDstIfName()
    {
        return $this->DstIfName;
    }

    /**
     * Generated from protobuf field <code>string DstIfName = 1006;</code>
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
     * Generated from protobuf field <code>string DstIfDesc = 1007;</code>
     * @return string
     */
    public function getDstIfDesc()
    {
        return $this->DstIfDesc;
    }

    /**
     * Generated from protobuf field <code>string DstIfDesc = 1007;</code>
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
     * Generated from protobuf field <code>uint32 DstIfSpeed = 1008;</code>
     * @return int
     */
    public function getDstIfSpeed()
    {
        return $this->DstIfSpeed;
    }

    /**
     * Generated from protobuf field <code>uint32 DstIfSpeed = 1008;</code>
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
     * Protocol Name -- set for some well known protocols, based on Proto
     *
     * Generated from protobuf field <code>string ProtoName = 1009;</code>
     * @return string
     */
    public function getProtoName()
    {
        return $this->ProtoName;
    }

    /**
     * Protocol Name -- set for some well known protocols, based on Proto
     *
     * Generated from protobuf field <code>string ProtoName = 1009;</code>
     * @param string $var
     * @return $this
     */
    public function setProtoName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ProtoName = $var;

        return $this;
    }

    /**
     * Geolocation -- set using the provided database
     *
     * Generated from protobuf field <code>string RemoteCountry = 1010;</code>
     * @return string
     */
    public function getRemoteCountry()
    {
        return $this->RemoteCountry;
    }

    /**
     * Geolocation -- set using the provided database
     *
     * Generated from protobuf field <code>string RemoteCountry = 1010;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->RemoteCountry = $var;

        return $this;
    }

}
