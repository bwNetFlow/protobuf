// Code generated by protoc-gen-go. DO NOT EDIT.
// source: flow-messages-enriched.proto

package flowmessageenriched

import proto "github.com/golang/protobuf/proto"
import fmt "fmt"
import math "math"

// Reference imports to suppress errors if they are not otherwise used.
var _ = proto.Marshal
var _ = fmt.Errorf
var _ = math.Inf

// This is a compile-time assertion to ensure that this generated file
// is compatible with the proto package it is being compiled against.
// A compilation error at this line likely means your copy of the
// proto package needs to be updated.
const _ = proto.ProtoPackageIsVersion2 // please upgrade the proto package

type FlowMessage_FlowType int32

const (
	FlowMessage_FLOWUNKNOWN FlowMessage_FlowType = 0
	FlowMessage_NFV9        FlowMessage_FlowType = 9
	FlowMessage_IPFIX       FlowMessage_FlowType = 10
	FlowMessage_SFLOW       FlowMessage_FlowType = 5
)

var FlowMessage_FlowType_name = map[int32]string{
	0:  "FLOWUNKNOWN",
	9:  "NFV9",
	10: "IPFIX",
	5:  "SFLOW",
}
var FlowMessage_FlowType_value = map[string]int32{
	"FLOWUNKNOWN": 0,
	"NFV9":        9,
	"IPFIX":       10,
	"SFLOW":       5,
}

func (x FlowMessage_FlowType) String() string {
	return proto.EnumName(FlowMessage_FlowType_name, int32(x))
}
func (FlowMessage_FlowType) EnumDescriptor() ([]byte, []int) {
	return fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3, []int{0, 0}
}

// To be deprecated
type FlowMessage_IPType int32

const (
	FlowMessage_IPUNKNOWN FlowMessage_IPType = 0
	FlowMessage_IPv4      FlowMessage_IPType = 4
	FlowMessage_IPv6      FlowMessage_IPType = 6
)

var FlowMessage_IPType_name = map[int32]string{
	0: "IPUNKNOWN",
	4: "IPv4",
	6: "IPv6",
}
var FlowMessage_IPType_value = map[string]int32{
	"IPUNKNOWN": 0,
	"IPv4":      4,
	"IPv6":      6,
}

func (x FlowMessage_IPType) String() string {
	return proto.EnumName(FlowMessage_IPType_name, int32(x))
}
func (FlowMessage_IPType) EnumDescriptor() ([]byte, []int) {
	return fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3, []int{0, 1}
}

// Extensions beyond goflow's default protobuf, starting at id 90
type FlowMessage_DirectionType int32

const (
	FlowMessage_Unknown  FlowMessage_DirectionType = 0
	FlowMessage_Incoming FlowMessage_DirectionType = 1
	FlowMessage_Outgoing FlowMessage_DirectionType = 2
)

var FlowMessage_DirectionType_name = map[int32]string{
	0: "Unknown",
	1: "Incoming",
	2: "Outgoing",
}
var FlowMessage_DirectionType_value = map[string]int32{
	"Unknown":  0,
	"Incoming": 1,
	"Outgoing": 2,
}

func (x FlowMessage_DirectionType) String() string {
	return proto.EnumName(FlowMessage_DirectionType_name, int32(x))
}
func (FlowMessage_DirectionType) EnumDescriptor() ([]byte, []int) {
	return fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3, []int{0, 2}
}

type FlowMessage_NormalizedType int32

const (
	FlowMessage_No  FlowMessage_NormalizedType = 0
	FlowMessage_Yes FlowMessage_NormalizedType = 1
)

var FlowMessage_NormalizedType_name = map[int32]string{
	0: "No",
	1: "Yes",
}
var FlowMessage_NormalizedType_value = map[string]int32{
	"No":  0,
	"Yes": 1,
}

func (x FlowMessage_NormalizedType) String() string {
	return proto.EnumName(FlowMessage_NormalizedType_name, int32(x))
}
func (FlowMessage_NormalizedType) EnumDescriptor() ([]byte, []int) {
	return fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3, []int{0, 3}
}

// Flow Message needs to stay compatible to goflow's default protobuf
// -> never edit record id's, only ever append
type FlowMessage struct {
	Type         FlowMessage_FlowType `protobuf:"varint,1,opt,name=Type,proto3,enum=flowmessageenriched.FlowMessage_FlowType" json:"Type,omitempty"`
	TimeRecvd    uint64               `protobuf:"varint,2,opt,name=TimeRecvd,proto3" json:"TimeRecvd,omitempty"`
	SamplingRate uint64               `protobuf:"varint,3,opt,name=SamplingRate,proto3" json:"SamplingRate,omitempty"`
	SequenceNum  uint32               `protobuf:"varint,4,opt,name=SequenceNum,proto3" json:"SequenceNum,omitempty"`
	// Found inside packet
	TimeFlow uint64 `protobuf:"varint,5,opt,name=TimeFlow,proto3" json:"TimeFlow,omitempty"`
	// Source/destination addresses
	SrcIP     []byte             `protobuf:"bytes,6,opt,name=SrcIP,proto3" json:"SrcIP,omitempty"`
	DstIP     []byte             `protobuf:"bytes,7,opt,name=DstIP,proto3" json:"DstIP,omitempty"`
	IPversion FlowMessage_IPType `protobuf:"varint,8,opt,name=IPversion,proto3,enum=flowmessageenriched.FlowMessage_IPType" json:"IPversion,omitempty"`
	// Size of the sampled packet
	Bytes   uint64 `protobuf:"varint,9,opt,name=Bytes,proto3" json:"Bytes,omitempty"`
	Packets uint64 `protobuf:"varint,10,opt,name=Packets,proto3" json:"Packets,omitempty"`
	// Routing information
	RouterAddr []byte `protobuf:"bytes,11,opt,name=RouterAddr,proto3" json:"RouterAddr,omitempty"`
	NextHop    []byte `protobuf:"bytes,12,opt,name=NextHop,proto3" json:"NextHop,omitempty"`
	NextHopAS  uint32 `protobuf:"varint,13,opt,name=NextHopAS,proto3" json:"NextHopAS,omitempty"`
	// Autonomous system information
	SrcAS uint32 `protobuf:"varint,14,opt,name=SrcAS,proto3" json:"SrcAS,omitempty"`
	DstAS uint32 `protobuf:"varint,15,opt,name=DstAS,proto3" json:"DstAS,omitempty"`
	// Prefix size
	SrcNet uint32 `protobuf:"varint,16,opt,name=SrcNet,proto3" json:"SrcNet,omitempty"`
	DstNet uint32 `protobuf:"varint,17,opt,name=DstNet,proto3" json:"DstNet,omitempty"`
	// Interfaces
	SrcIf uint32 `protobuf:"varint,18,opt,name=SrcIf,proto3" json:"SrcIf,omitempty"`
	DstIf uint32 `protobuf:"varint,19,opt,name=DstIf,proto3" json:"DstIf,omitempty"`
	// Layer 4 protocol
	Proto uint32 `protobuf:"varint,20,opt,name=Proto,proto3" json:"Proto,omitempty"`
	// Port for UDP and TCP
	SrcPort uint32 `protobuf:"varint,21,opt,name=SrcPort,proto3" json:"SrcPort,omitempty"`
	DstPort uint32 `protobuf:"varint,22,opt,name=DstPort,proto3" json:"DstPort,omitempty"`
	// IP and TCP special flags
	IPTos            uint32 `protobuf:"varint,23,opt,name=IPTos,proto3" json:"IPTos,omitempty"`
	ForwardingStatus uint32 `protobuf:"varint,24,opt,name=ForwardingStatus,proto3" json:"ForwardingStatus,omitempty"`
	IPTTL            uint32 `protobuf:"varint,25,opt,name=IPTTL,proto3" json:"IPTTL,omitempty"`
	TCPFlags         uint32 `protobuf:"varint,26,opt,name=TCPFlags,proto3" json:"TCPFlags,omitempty"`
	// Ethernet information
	SrcMac uint64 `protobuf:"varint,27,opt,name=SrcMac,proto3" json:"SrcMac,omitempty"`
	DstMac uint64 `protobuf:"varint,28,opt,name=DstMac,proto3" json:"DstMac,omitempty"`
	VlanId uint32 `protobuf:"varint,29,opt,name=VlanId,proto3" json:"VlanId,omitempty"`
	// Layer 3 protocol (IPv4/IPv6/ARP/...)
	Etype                uint32                     `protobuf:"varint,30,opt,name=Etype,proto3" json:"Etype,omitempty"`
	Direction            FlowMessage_DirectionType  `protobuf:"varint,90,opt,name=Direction,proto3,enum=flowmessageenriched.FlowMessage_DirectionType" json:"Direction,omitempty"`
	Cid                  uint32                     `protobuf:"varint,91,opt,name=Cid,proto3" json:"Cid,omitempty"`
	Normalized           FlowMessage_NormalizedType `protobuf:"varint,92,opt,name=Normalized,proto3,enum=flowmessageenriched.FlowMessage_NormalizedType" json:"Normalized,omitempty"`
	SrcIfName            string                     `protobuf:"bytes,93,opt,name=SrcIfName,proto3" json:"SrcIfName,omitempty"`
	SrcIfDesc            string                     `protobuf:"bytes,94,opt,name=SrcIfDesc,proto3" json:"SrcIfDesc,omitempty"`
	SrcIfSpeed           uint32                     `protobuf:"varint,95,opt,name=SrcIfSpeed,proto3" json:"SrcIfSpeed,omitempty"`
	DstIfName            string                     `protobuf:"bytes,96,opt,name=DstIfName,proto3" json:"DstIfName,omitempty"`
	DstIfDesc            string                     `protobuf:"bytes,97,opt,name=DstIfDesc,proto3" json:"DstIfDesc,omitempty"`
	DstIfSpeed           uint32                     `protobuf:"varint,98,opt,name=DstIfSpeed,proto3" json:"DstIfSpeed,omitempty"`
	Peer                 string                     `protobuf:"bytes,99,opt,name=Peer,proto3" json:"Peer,omitempty"`
	RemoteCountry        string                     `protobuf:"bytes,100,opt,name=RemoteCountry,proto3" json:"RemoteCountry,omitempty"`
	ProtoName            string                     `protobuf:"bytes,101,opt,name=ProtoName,proto3" json:"ProtoName,omitempty"`
	XXX_NoUnkeyedLiteral struct{}                   `json:"-"`
	XXX_unrecognized     []byte                     `json:"-"`
	XXX_sizecache        int32                      `json:"-"`
}

func (m *FlowMessage) Reset()         { *m = FlowMessage{} }
func (m *FlowMessage) String() string { return proto.CompactTextString(m) }
func (*FlowMessage) ProtoMessage()    {}
func (*FlowMessage) Descriptor() ([]byte, []int) {
	return fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3, []int{0}
}
func (m *FlowMessage) XXX_Unmarshal(b []byte) error {
	return xxx_messageInfo_FlowMessage.Unmarshal(m, b)
}
func (m *FlowMessage) XXX_Marshal(b []byte, deterministic bool) ([]byte, error) {
	return xxx_messageInfo_FlowMessage.Marshal(b, m, deterministic)
}
func (dst *FlowMessage) XXX_Merge(src proto.Message) {
	xxx_messageInfo_FlowMessage.Merge(dst, src)
}
func (m *FlowMessage) XXX_Size() int {
	return xxx_messageInfo_FlowMessage.Size(m)
}
func (m *FlowMessage) XXX_DiscardUnknown() {
	xxx_messageInfo_FlowMessage.DiscardUnknown(m)
}

var xxx_messageInfo_FlowMessage proto.InternalMessageInfo

func (m *FlowMessage) GetType() FlowMessage_FlowType {
	if m != nil {
		return m.Type
	}
	return FlowMessage_FLOWUNKNOWN
}

func (m *FlowMessage) GetTimeRecvd() uint64 {
	if m != nil {
		return m.TimeRecvd
	}
	return 0
}

func (m *FlowMessage) GetSamplingRate() uint64 {
	if m != nil {
		return m.SamplingRate
	}
	return 0
}

func (m *FlowMessage) GetSequenceNum() uint32 {
	if m != nil {
		return m.SequenceNum
	}
	return 0
}

func (m *FlowMessage) GetTimeFlow() uint64 {
	if m != nil {
		return m.TimeFlow
	}
	return 0
}

func (m *FlowMessage) GetSrcIP() []byte {
	if m != nil {
		return m.SrcIP
	}
	return nil
}

func (m *FlowMessage) GetDstIP() []byte {
	if m != nil {
		return m.DstIP
	}
	return nil
}

func (m *FlowMessage) GetIPversion() FlowMessage_IPType {
	if m != nil {
		return m.IPversion
	}
	return FlowMessage_IPUNKNOWN
}

func (m *FlowMessage) GetBytes() uint64 {
	if m != nil {
		return m.Bytes
	}
	return 0
}

func (m *FlowMessage) GetPackets() uint64 {
	if m != nil {
		return m.Packets
	}
	return 0
}

func (m *FlowMessage) GetRouterAddr() []byte {
	if m != nil {
		return m.RouterAddr
	}
	return nil
}

func (m *FlowMessage) GetNextHop() []byte {
	if m != nil {
		return m.NextHop
	}
	return nil
}

func (m *FlowMessage) GetNextHopAS() uint32 {
	if m != nil {
		return m.NextHopAS
	}
	return 0
}

func (m *FlowMessage) GetSrcAS() uint32 {
	if m != nil {
		return m.SrcAS
	}
	return 0
}

func (m *FlowMessage) GetDstAS() uint32 {
	if m != nil {
		return m.DstAS
	}
	return 0
}

func (m *FlowMessage) GetSrcNet() uint32 {
	if m != nil {
		return m.SrcNet
	}
	return 0
}

func (m *FlowMessage) GetDstNet() uint32 {
	if m != nil {
		return m.DstNet
	}
	return 0
}

func (m *FlowMessage) GetSrcIf() uint32 {
	if m != nil {
		return m.SrcIf
	}
	return 0
}

func (m *FlowMessage) GetDstIf() uint32 {
	if m != nil {
		return m.DstIf
	}
	return 0
}

func (m *FlowMessage) GetProto() uint32 {
	if m != nil {
		return m.Proto
	}
	return 0
}

func (m *FlowMessage) GetSrcPort() uint32 {
	if m != nil {
		return m.SrcPort
	}
	return 0
}

func (m *FlowMessage) GetDstPort() uint32 {
	if m != nil {
		return m.DstPort
	}
	return 0
}

func (m *FlowMessage) GetIPTos() uint32 {
	if m != nil {
		return m.IPTos
	}
	return 0
}

func (m *FlowMessage) GetForwardingStatus() uint32 {
	if m != nil {
		return m.ForwardingStatus
	}
	return 0
}

func (m *FlowMessage) GetIPTTL() uint32 {
	if m != nil {
		return m.IPTTL
	}
	return 0
}

func (m *FlowMessage) GetTCPFlags() uint32 {
	if m != nil {
		return m.TCPFlags
	}
	return 0
}

func (m *FlowMessage) GetSrcMac() uint64 {
	if m != nil {
		return m.SrcMac
	}
	return 0
}

func (m *FlowMessage) GetDstMac() uint64 {
	if m != nil {
		return m.DstMac
	}
	return 0
}

func (m *FlowMessage) GetVlanId() uint32 {
	if m != nil {
		return m.VlanId
	}
	return 0
}

func (m *FlowMessage) GetEtype() uint32 {
	if m != nil {
		return m.Etype
	}
	return 0
}

func (m *FlowMessage) GetDirection() FlowMessage_DirectionType {
	if m != nil {
		return m.Direction
	}
	return FlowMessage_Unknown
}

func (m *FlowMessage) GetCid() uint32 {
	if m != nil {
		return m.Cid
	}
	return 0
}

func (m *FlowMessage) GetNormalized() FlowMessage_NormalizedType {
	if m != nil {
		return m.Normalized
	}
	return FlowMessage_No
}

func (m *FlowMessage) GetSrcIfName() string {
	if m != nil {
		return m.SrcIfName
	}
	return ""
}

func (m *FlowMessage) GetSrcIfDesc() string {
	if m != nil {
		return m.SrcIfDesc
	}
	return ""
}

func (m *FlowMessage) GetSrcIfSpeed() uint32 {
	if m != nil {
		return m.SrcIfSpeed
	}
	return 0
}

func (m *FlowMessage) GetDstIfName() string {
	if m != nil {
		return m.DstIfName
	}
	return ""
}

func (m *FlowMessage) GetDstIfDesc() string {
	if m != nil {
		return m.DstIfDesc
	}
	return ""
}

func (m *FlowMessage) GetDstIfSpeed() uint32 {
	if m != nil {
		return m.DstIfSpeed
	}
	return 0
}

func (m *FlowMessage) GetPeer() string {
	if m != nil {
		return m.Peer
	}
	return ""
}

func (m *FlowMessage) GetRemoteCountry() string {
	if m != nil {
		return m.RemoteCountry
	}
	return ""
}

func (m *FlowMessage) GetProtoName() string {
	if m != nil {
		return m.ProtoName
	}
	return ""
}

func init() {
	proto.RegisterType((*FlowMessage)(nil), "flowmessageenriched.FlowMessage")
	proto.RegisterEnum("flowmessageenriched.FlowMessage_FlowType", FlowMessage_FlowType_name, FlowMessage_FlowType_value)
	proto.RegisterEnum("flowmessageenriched.FlowMessage_IPType", FlowMessage_IPType_name, FlowMessage_IPType_value)
	proto.RegisterEnum("flowmessageenriched.FlowMessage_DirectionType", FlowMessage_DirectionType_name, FlowMessage_DirectionType_value)
	proto.RegisterEnum("flowmessageenriched.FlowMessage_NormalizedType", FlowMessage_NormalizedType_name, FlowMessage_NormalizedType_value)
}

func init() {
	proto.RegisterFile("flow-messages-enriched.proto", fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3)
}

var fileDescriptor_flow_messages_enriched_c62f1a810d6a57d3 = []byte{
	// 781 bytes of a gzipped FileDescriptorProto
	0x1f, 0x8b, 0x08, 0x00, 0x00, 0x00, 0x00, 0x00, 0x02, 0xff, 0x84, 0x95, 0x6f, 0x6f, 0xe3, 0x44,
	0x10, 0xc6, 0xeb, 0x36, 0x4d, 0xe3, 0x49, 0xd3, 0x33, 0x7b, 0xc7, 0x31, 0x94, 0x72, 0x0a, 0x11,
	0x12, 0x01, 0x74, 0x45, 0x02, 0x84, 0x40, 0x88, 0x17, 0x6d, 0x73, 0x11, 0x16, 0x3d, 0xd7, 0xb2,
	0x73, 0x77, 0xfc, 0x07, 0xd7, 0xde, 0x06, 0xeb, 0x62, 0x6f, 0xb0, 0x37, 0x0d, 0xe5, 0x6b, 0xf3,
	0x05, 0xd0, 0xcc, 0xda, 0x8e, 0x23, 0x90, 0xfa, 0x6e, 0x9f, 0xdf, 0xec, 0x3c, 0xb3, 0x3b, 0x3b,
	0x71, 0xe0, 0xe4, 0x66, 0xa1, 0xd6, 0x4f, 0x33, 0x59, 0x96, 0xd1, 0x5c, 0x96, 0x4f, 0x65, 0x5e,
	0xa4, 0xf1, 0x1f, 0x32, 0x39, 0x5d, 0x16, 0x4a, 0x2b, 0xf1, 0x90, 0xa2, 0x55, 0xb0, 0x0e, 0x8d,
	0xfe, 0xe9, 0x43, 0x7f, 0xba, 0x50, 0xeb, 0xe7, 0x86, 0x8b, 0x6f, 0xa0, 0x33, 0xbb, 0x5b, 0x4a,
	0xb4, 0x86, 0xd6, 0xf8, 0xe8, 0xd3, 0x0f, 0x4f, 0xff, 0x27, 0xe7, 0xb4, 0xb5, 0x9f, 0xd7, 0x94,
	0x10, 0x70, 0x9a, 0x38, 0x01, 0x7b, 0x96, 0x66, 0x32, 0x90, 0xf1, 0x6d, 0x82, 0xbb, 0x43, 0x6b,
	0xdc, 0x09, 0x36, 0x40, 0x8c, 0xe0, 0x30, 0x8c, 0xb2, 0xe5, 0x22, 0xcd, 0xe7, 0x41, 0xa4, 0x25,
	0xee, 0xf1, 0x86, 0x2d, 0x26, 0x86, 0xd0, 0x0f, 0xe5, 0x9f, 0x2b, 0x99, 0xc7, 0xd2, 0x5b, 0x65,
	0xd8, 0x19, 0x5a, 0xe3, 0x41, 0xd0, 0x46, 0xe2, 0x18, 0x7a, 0x64, 0x49, 0x95, 0x71, 0x9f, 0x1d,
	0x1a, 0x2d, 0x1e, 0xc1, 0x7e, 0x58, 0xc4, 0xae, 0x8f, 0xdd, 0xa1, 0x35, 0x3e, 0x0c, 0x8c, 0x20,
	0x3a, 0x29, 0xb5, 0xeb, 0xe3, 0x81, 0xa1, 0x2c, 0xc4, 0x33, 0xb0, 0x5d, 0xff, 0x56, 0x16, 0x65,
	0xaa, 0x72, 0xec, 0xf1, 0x7d, 0x3f, 0xb8, 0xf7, 0xbe, 0xae, 0xcf, 0xb7, 0xdd, 0x64, 0x92, 0xf9,
	0xf9, 0x9d, 0x96, 0x25, 0xda, 0x7c, 0x16, 0x23, 0x04, 0xc2, 0x81, 0x1f, 0xc5, 0xaf, 0xa5, 0x2e,
	0x11, 0x98, 0xd7, 0x52, 0x3c, 0x01, 0x08, 0xd4, 0x4a, 0xcb, 0xe2, 0x2c, 0x49, 0x0a, 0xec, 0xf3,
	0x89, 0x5a, 0x84, 0x32, 0x3d, 0xf9, 0x97, 0xfe, 0x56, 0x2d, 0xf1, 0x90, 0x83, 0xb5, 0xa4, 0xe6,
	0x56, 0xcb, 0xb3, 0x10, 0x07, 0xdc, 0x98, 0x0d, 0xa8, 0xae, 0x7e, 0x16, 0xe2, 0x11, 0x47, 0x8c,
	0xa8, 0xae, 0x7e, 0x16, 0xe2, 0x03, 0x43, 0x59, 0x88, 0xc7, 0xd0, 0x0d, 0x8b, 0xd8, 0x93, 0x1a,
	0x1d, 0xc6, 0x95, 0x22, 0x3e, 0x29, 0x35, 0xf1, 0x37, 0x0c, 0x37, 0xaa, 0x6e, 0xeb, 0x0d, 0x8a,
	0xc6, 0xdb, 0xbd, 0xa9, 0xdb, 0x7a, 0x83, 0x0f, 0x1b, 0x6f, 0x43, 0x7d, 0x9a, 0x37, 0x7c, 0x64,
	0x28, 0x0b, 0xba, 0x55, 0x58, 0xc4, 0xbe, 0x2a, 0x34, 0xbe, 0xc9, 0xbc, 0x96, 0x14, 0x99, 0x94,
	0x9a, 0x23, 0x8f, 0x4d, 0xa4, 0x92, 0xe4, 0xe4, 0xfa, 0x33, 0x55, 0xe2, 0x5b, 0xc6, 0x89, 0x85,
	0xf8, 0x08, 0x9c, 0xa9, 0x2a, 0xd6, 0x51, 0x91, 0xa4, 0xf9, 0x3c, 0xd4, 0x91, 0x5e, 0x95, 0x88,
	0xbc, 0xe1, 0x3f, 0xbc, 0x72, 0x98, 0x5d, 0xe2, 0xdb, 0x8d, 0xc3, 0xec, 0x92, 0x07, 0xe8, 0xc2,
	0x9f, 0x2e, 0xa2, 0x79, 0x89, 0xc7, 0x1c, 0x68, 0x74, 0xd5, 0x99, 0xe7, 0x51, 0x8c, 0xef, 0xf0,
	0xb3, 0x55, 0xaa, 0xea, 0x0c, 0xf1, 0x13, 0xc3, 0x8d, 0x22, 0xfe, 0x72, 0x11, 0xe5, 0x6e, 0x82,
	0xef, 0x9a, 0x8e, 0x19, 0x45, 0x95, 0x9f, 0x69, 0xfa, 0x21, 0x3d, 0x31, 0x95, 0x59, 0x88, 0x4b,
	0xb0, 0x27, 0x69, 0x21, 0x63, 0x4d, 0x23, 0xf7, 0x23, 0x8f, 0xdc, 0xe9, 0xbd, 0x23, 0xd7, 0x64,
	0x98, 0xc9, 0x6b, 0xa4, 0x70, 0x60, 0xef, 0x22, 0x4d, 0xf0, 0x27, 0xae, 0x40, 0x4b, 0x71, 0x05,
	0xe0, 0xa9, 0x22, 0x8b, 0x16, 0xe9, 0xdf, 0x32, 0xc1, 0x9f, 0xb9, 0xc0, 0x27, 0xf7, 0x16, 0xd8,
	0xa4, 0x70, 0x85, 0x96, 0x05, 0x8d, 0x1c, 0xbf, 0xb5, 0x17, 0x65, 0x12, 0x7f, 0x19, 0x5a, 0x63,
	0x3b, 0xd8, 0x80, 0x26, 0x3a, 0x91, 0x65, 0x8c, 0xbf, 0xb6, 0xa2, 0x04, 0x68, 0xd0, 0x59, 0x84,
	0x4b, 0x29, 0x13, 0xfc, 0x8d, 0x4f, 0xd9, 0x22, 0x94, 0xcd, 0x13, 0xc3, 0xde, 0xbf, 0x9b, 0xec,
	0x06, 0x34, 0x51, 0xf6, 0x8e, 0x5a, 0xd1, 0xda, 0x9b, 0x85, 0xf1, 0xbe, 0x36, 0xde, 0x1b, 0x22,
	0x04, 0x74, 0x7c, 0x29, 0x0b, 0x8c, 0x39, 0x91, 0xd7, 0xe2, 0x7d, 0x18, 0x04, 0x32, 0x53, 0x5a,
	0x5e, 0xa8, 0x55, 0xae, 0x8b, 0x3b, 0x4c, 0x38, 0xb8, 0x0d, 0xa9, 0x2e, 0x4f, 0x2c, 0x9f, 0x4a,
	0x9a, 0xba, 0x0d, 0x18, 0x7d, 0x0d, 0xbd, 0xfa, 0x8b, 0x27, 0x1e, 0x40, 0x7f, 0x7a, 0x79, 0xf5,
	0xea, 0x85, 0xf7, 0x9d, 0x77, 0xf5, 0xca, 0x73, 0x76, 0x44, 0x0f, 0x3a, 0xde, 0xf4, 0xe5, 0x57,
	0x8e, 0x2d, 0x6c, 0x9a, 0xbb, 0xa9, 0xfb, 0xbd, 0x03, 0xb4, 0x0c, 0x69, 0x9b, 0xb3, 0x3f, 0xfa,
	0x18, 0xba, 0xe6, 0xf3, 0x21, 0x06, 0xf4, 0xe9, 0xd9, 0x4a, 0x74, 0xfd, 0xdb, 0xcf, 0x9d, 0x4e,
	0xb5, 0xfa, 0xc2, 0xe9, 0x8e, 0xbe, 0x84, 0xc1, 0xd6, 0xc3, 0x8b, 0x3e, 0x1c, 0xbc, 0xc8, 0x5f,
	0xe7, 0x6a, 0x9d, 0x3b, 0x3b, 0xe2, 0x10, 0x7a, 0x6e, 0x1e, 0xab, 0x2c, 0xcd, 0xe7, 0x8e, 0x45,
	0xea, 0x6a, 0xa5, 0xe7, 0x8a, 0xd4, 0xee, 0xe8, 0x3d, 0x38, 0xda, 0x7e, 0x51, 0xd1, 0x85, 0x5d,
	0x4f, 0x39, 0x3b, 0xe2, 0x00, 0xf6, 0x7e, 0x90, 0xa5, 0x63, 0x9d, 0x1f, 0x83, 0x7d, 0xbd, 0xce,
	0xa5, 0xa6, 0xc9, 0x38, 0x1f, 0xb4, 0x66, 0xc1, 0xbf, 0xbe, 0xee, 0xf2, 0xbf, 0xc5, 0x67, 0xff,
	0x06, 0x00, 0x00, 0xff, 0xff, 0xd8, 0x8d, 0x01, 0xdf, 0x4d, 0x06, 0x00, 0x00,
}
