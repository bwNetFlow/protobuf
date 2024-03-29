// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: flow-messages-enriched.proto

// This CPP symbol can be defined to use imports that match up to the framework
// imports needed when using CocoaPods.
#if !defined(GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS)
 #define GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS 0
#endif

#if GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS
 #import <Protobuf/GPBProtocolBuffers.h>
#else
 #import "GPBProtocolBuffers.h"
#endif

#if GOOGLE_PROTOBUF_OBJC_VERSION < 30004
#error This file was generated by a newer version of protoc which is incompatible with your Protocol Buffer library sources.
#endif
#if 30004 < GOOGLE_PROTOBUF_OBJC_MIN_SUPPORTED_VERSION
#error This file was generated by an older version of protoc which is incompatible with your Protocol Buffer library sources.
#endif

// @@protoc_insertion_point(imports)

#pragma clang diagnostic push
#pragma clang diagnostic ignored "-Wdeprecated-declarations"

CF_EXTERN_C_BEGIN

NS_ASSUME_NONNULL_BEGIN

#pragma mark - Enum FlowMessage_FlowType

typedef GPB_ENUM(FlowMessage_FlowType) {
  /**
   * Value used if any message's field encounters a value that is not defined
   * by this enum. The message will also have C functions to get/set the rawValue
   * of the field.
   **/
  FlowMessage_FlowType_GPBUnrecognizedEnumeratorValue = kGPBUnrecognizedEnumeratorValue,
  FlowMessage_FlowType_Flowunknown = 0,
  FlowMessage_FlowType_Sflow5 = 1,
  FlowMessage_FlowType_NetflowV5 = 2,
  FlowMessage_FlowType_NetflowV9 = 3,
  FlowMessage_FlowType_Ipfix = 4,
};

GPBEnumDescriptor *FlowMessage_FlowType_EnumDescriptor(void);

/**
 * Checks to see if the given value is defined by the enum or was not known at
 * the time this source was generated.
 **/
BOOL FlowMessage_FlowType_IsValidValue(int32_t value);

#pragma mark - Enum FlowMessage_NormalizedType

typedef GPB_ENUM(FlowMessage_NormalizedType) {
  /**
   * Value used if any message's field encounters a value that is not defined
   * by this enum. The message will also have C functions to get/set the rawValue
   * of the field.
   **/
  FlowMessage_NormalizedType_GPBUnrecognizedEnumeratorValue = kGPBUnrecognizedEnumeratorValue,
  FlowMessage_NormalizedType_No = 0,
  FlowMessage_NormalizedType_Yes = 1,
};

GPBEnumDescriptor *FlowMessage_NormalizedType_EnumDescriptor(void);

/**
 * Checks to see if the given value is defined by the enum or was not known at
 * the time this source was generated.
 **/
BOOL FlowMessage_NormalizedType_IsValidValue(int32_t value);

#pragma mark - Enum FlowMessage_RemoteAddrType

typedef GPB_ENUM(FlowMessage_RemoteAddrType) {
  /**
   * Value used if any message's field encounters a value that is not defined
   * by this enum. The message will also have C functions to get/set the rawValue
   * of the field.
   **/
  FlowMessage_RemoteAddrType_GPBUnrecognizedEnumeratorValue = kGPBUnrecognizedEnumeratorValue,
  FlowMessage_RemoteAddrType_Neither = 0,
  FlowMessage_RemoteAddrType_Src = 1,
  FlowMessage_RemoteAddrType_Dst = 2,
};

GPBEnumDescriptor *FlowMessage_RemoteAddrType_EnumDescriptor(void);

/**
 * Checks to see if the given value is defined by the enum or was not known at
 * the time this source was generated.
 **/
BOOL FlowMessage_RemoteAddrType_IsValidValue(int32_t value);

#pragma mark - FlowMessagesEnrichedRoot

/**
 * Exposes the extension registry for this file.
 *
 * The base class provides:
 * @code
 *   + (GPBExtensionRegistry *)extensionRegistry;
 * @endcode
 * which is a @c GPBExtensionRegistry that includes all the extensions defined by
 * this file and all files that it depends on.
 **/
GPB_FINAL @interface FlowMessagesEnrichedRoot : GPBRootObject
@end

#pragma mark - FlowMessage

typedef GPB_ENUM(FlowMessage_FieldNumber) {
  FlowMessage_FieldNumber_Type = 1,
  FlowMessage_FieldNumber_TimeReceived = 2,
  FlowMessage_FieldNumber_SamplingRate = 3,
  FlowMessage_FieldNumber_SequenceNum = 4,
  FlowMessage_FieldNumber_TimeFlowEnd = 5,
  FlowMessage_FieldNumber_SrcAddr = 6,
  FlowMessage_FieldNumber_DstAddr = 7,
  FlowMessage_FieldNumber_Bytes = 9,
  FlowMessage_FieldNumber_Packets = 10,
  FlowMessage_FieldNumber_SamplerAddress = 11,
  FlowMessage_FieldNumber_NextHop = 12,
  FlowMessage_FieldNumber_NextHopAs = 13,
  FlowMessage_FieldNumber_SrcAs = 14,
  FlowMessage_FieldNumber_DstAs = 15,
  FlowMessage_FieldNumber_SrcNet = 16,
  FlowMessage_FieldNumber_DstNet = 17,
  FlowMessage_FieldNumber_InIf = 18,
  FlowMessage_FieldNumber_OutIf = 19,
  FlowMessage_FieldNumber_Proto = 20,
  FlowMessage_FieldNumber_SrcPort = 21,
  FlowMessage_FieldNumber_DstPort = 22,
  FlowMessage_FieldNumber_Iptos = 23,
  FlowMessage_FieldNumber_ForwardingStatus = 24,
  FlowMessage_FieldNumber_Ipttl = 25,
  FlowMessage_FieldNumber_Tcpflags = 26,
  FlowMessage_FieldNumber_SrcMac = 27,
  FlowMessage_FieldNumber_DstMac = 28,
  FlowMessage_FieldNumber_VlanId = 29,
  FlowMessage_FieldNumber_Etype = 30,
  FlowMessage_FieldNumber_IcmpType = 31,
  FlowMessage_FieldNumber_IcmpCode = 32,
  FlowMessage_FieldNumber_SrcVlan = 33,
  FlowMessage_FieldNumber_DstVlan = 34,
  FlowMessage_FieldNumber_FragmentId = 35,
  FlowMessage_FieldNumber_FragmentOffset = 36,
  FlowMessage_FieldNumber_Ipv6FlowLabel = 37,
  FlowMessage_FieldNumber_TimeFlowStart = 38,
  FlowMessage_FieldNumber_IngressVrfId = 39,
  FlowMessage_FieldNumber_EgressVrfId = 40,
  FlowMessage_FieldNumber_BiFlowDirection = 41,
  FlowMessage_FieldNumber_FlowDirection = 42,
  FlowMessage_FieldNumber_HasMpls = 53,
  FlowMessage_FieldNumber_Mplscount = 54,
  FlowMessage_FieldNumber_Mpls1Ttl = 55,
  FlowMessage_FieldNumber_Mpls1Label = 56,
  FlowMessage_FieldNumber_Mpls2Ttl = 57,
  FlowMessage_FieldNumber_Mpls2Label = 58,
  FlowMessage_FieldNumber_Mpls3Ttl = 59,
  FlowMessage_FieldNumber_Mpls3Label = 60,
  FlowMessage_FieldNumber_MplslastTtl = 61,
  FlowMessage_FieldNumber_MplslastLabel = 62,
  FlowMessage_FieldNumber_Cid = 1000,
  FlowMessage_FieldNumber_CidString = 1001,
  FlowMessage_FieldNumber_Normalized = 1002,
  FlowMessage_FieldNumber_SrcIfName = 1003,
  FlowMessage_FieldNumber_SrcIfDesc = 1004,
  FlowMessage_FieldNumber_SrcIfSpeed = 1005,
  FlowMessage_FieldNumber_DstIfName = 1006,
  FlowMessage_FieldNumber_DstIfDesc = 1007,
  FlowMessage_FieldNumber_DstIfSpeed = 1008,
  FlowMessage_FieldNumber_ProtoName = 1009,
  FlowMessage_FieldNumber_RemoteCountry = 1010,
  FlowMessage_FieldNumber_RemoteAddr = 1011,
  FlowMessage_FieldNumber_SrcCid = 1012,
  FlowMessage_FieldNumber_DstCid = 1013,
  FlowMessage_FieldNumber_SrcCountry = 1014,
  FlowMessage_FieldNumber_DstCountry = 1015,
  FlowMessage_FieldNumber_Note = 1016,
};

GPB_FINAL @interface FlowMessage : GPBMessage

@property(nonatomic, readwrite) FlowMessage_FlowType type;

@property(nonatomic, readwrite) uint64_t timeReceived;

@property(nonatomic, readwrite) uint32_t sequenceNum;

@property(nonatomic, readwrite) uint64_t samplingRate;

@property(nonatomic, readwrite) uint32_t flowDirection;

/** Sampler information */
@property(nonatomic, readwrite, copy, null_resettable) NSData *samplerAddress;

/** Found inside packet */
@property(nonatomic, readwrite) uint64_t timeFlowStart;

@property(nonatomic, readwrite) uint64_t timeFlowEnd;

/** Size of the sampled packet */
@property(nonatomic, readwrite) uint64_t bytes;

@property(nonatomic, readwrite) uint64_t packets;

/** Source/destination addresses */
@property(nonatomic, readwrite, copy, null_resettable) NSData *srcAddr;

@property(nonatomic, readwrite, copy, null_resettable) NSData *dstAddr;

/** Layer 3 protocol (IPv4/IPv6/ARP/MPLS...) */
@property(nonatomic, readwrite) uint32_t etype;

/** Layer 4 protocol */
@property(nonatomic, readwrite) uint32_t proto;

/** Ports for UDP and TCP */
@property(nonatomic, readwrite) uint32_t srcPort;

@property(nonatomic, readwrite) uint32_t dstPort;

/** Interfaces */
@property(nonatomic, readwrite) uint32_t inIf;

@property(nonatomic, readwrite) uint32_t outIf;

/** Ethernet information */
@property(nonatomic, readwrite) uint64_t srcMac;

@property(nonatomic, readwrite) uint64_t dstMac;

/** Vlan */
@property(nonatomic, readwrite) uint32_t srcVlan;

@property(nonatomic, readwrite) uint32_t dstVlan;

/** 802.1q VLAN in sampled packet */
@property(nonatomic, readwrite) uint32_t vlanId;

/** VRF */
@property(nonatomic, readwrite) uint32_t ingressVrfId;

@property(nonatomic, readwrite) uint32_t egressVrfId;

/** IP and TCP special flags */
@property(nonatomic, readwrite) uint32_t iptos;

@property(nonatomic, readwrite) uint32_t forwardingStatus;

@property(nonatomic, readwrite) uint32_t ipttl;

@property(nonatomic, readwrite) uint32_t tcpflags;

@property(nonatomic, readwrite) uint32_t icmpType;

@property(nonatomic, readwrite) uint32_t icmpCode;

@property(nonatomic, readwrite) uint32_t ipv6FlowLabel;

/** Fragments (IPv4/IPv6) */
@property(nonatomic, readwrite) uint32_t fragmentId;

@property(nonatomic, readwrite) uint32_t fragmentOffset;

@property(nonatomic, readwrite) uint32_t biFlowDirection;

/** Autonomous system information */
@property(nonatomic, readwrite) uint32_t srcAs;

@property(nonatomic, readwrite) uint32_t dstAs;

@property(nonatomic, readwrite, copy, null_resettable) NSData *nextHop;

@property(nonatomic, readwrite) uint32_t nextHopAs;

/** Prefix size */
@property(nonatomic, readwrite) uint32_t srcNet;

@property(nonatomic, readwrite) uint32_t dstNet;

/** MPLS information */
@property(nonatomic, readwrite) BOOL hasMpls;

@property(nonatomic, readwrite) uint32_t mplscount;

/** First TTL */
@property(nonatomic, readwrite) uint32_t mpls1Ttl;

/** First Label */
@property(nonatomic, readwrite) uint32_t mpls1Label;

/** Second TTL */
@property(nonatomic, readwrite) uint32_t mpls2Ttl;

/** Second Label */
@property(nonatomic, readwrite) uint32_t mpls2Label;

/** Third TTL */
@property(nonatomic, readwrite) uint32_t mpls3Ttl;

/** Third Label */
@property(nonatomic, readwrite) uint32_t mpls3Label;

/** Last TTL */
@property(nonatomic, readwrite) uint32_t mplslastTtl;

/** Last Label */
@property(nonatomic, readwrite) uint32_t mplslastLabel;

/** bwNetFlow enricher fields */
@property(nonatomic, readwrite) uint32_t cid;

/** deprecated */
@property(nonatomic, readwrite, copy, null_resettable) NSString *cidString;

/** Src Customer ID - numerical ID, usually assigned by prefix */
@property(nonatomic, readwrite) uint32_t srcCid;

/** Dst Customer ID - numerical ID, usually assigned by prefix */
@property(nonatomic, readwrite) uint32_t dstCid;

/** Normalization - whether the sampling rate is accounted for */
@property(nonatomic, readwrite) FlowMessage_NormalizedType normalized;

/** Fields for Interface Usability -- enriched using SNMP */
@property(nonatomic, readwrite, copy, null_resettable) NSString *srcIfName;

/** set to the descrition, filtered by a regex in the enricher */
@property(nonatomic, readwrite, copy, null_resettable) NSString *srcIfDesc;

/** iface speed */
@property(nonatomic, readwrite) uint32_t srcIfSpeed;

@property(nonatomic, readwrite, copy, null_resettable) NSString *dstIfName;

@property(nonatomic, readwrite, copy, null_resettable) NSString *dstIfDesc;

@property(nonatomic, readwrite) uint32_t dstIfSpeed;

/** Protocol Name -- set for some well known protocols, based on Proto */
@property(nonatomic, readwrite, copy, null_resettable) NSString *protoName;

/** Geolocation -- set using the provided database */
@property(nonatomic, readwrite, copy, null_resettable) NSString *remoteCountry;

/** Src Geolocation */
@property(nonatomic, readwrite, copy, null_resettable) NSString *srcCountry;

/** Dst Geolocation */
@property(nonatomic, readwrite, copy, null_resettable) NSString *dstCountry;

/** RemoteAddr - which Addr field contains the remote/local address */
@property(nonatomic, readwrite) FlowMessage_RemoteAddrType remoteAddr;

/** free-form field to implement anything */
@property(nonatomic, readwrite, copy, null_resettable) NSString *note;

@end

/**
 * Fetches the raw value of a @c FlowMessage's @c type property, even
 * if the value was not defined by the enum at the time the code was generated.
 **/
int32_t FlowMessage_Type_RawValue(FlowMessage *message);
/**
 * Sets the raw value of an @c FlowMessage's @c type property, allowing
 * it to be set to a value that was not defined by the enum at the time the code
 * was generated.
 **/
void SetFlowMessage_Type_RawValue(FlowMessage *message, int32_t value);

/**
 * Fetches the raw value of a @c FlowMessage's @c normalized property, even
 * if the value was not defined by the enum at the time the code was generated.
 **/
int32_t FlowMessage_Normalized_RawValue(FlowMessage *message);
/**
 * Sets the raw value of an @c FlowMessage's @c normalized property, allowing
 * it to be set to a value that was not defined by the enum at the time the code
 * was generated.
 **/
void SetFlowMessage_Normalized_RawValue(FlowMessage *message, int32_t value);

/**
 * Fetches the raw value of a @c FlowMessage's @c remoteAddr property, even
 * if the value was not defined by the enum at the time the code was generated.
 **/
int32_t FlowMessage_RemoteAddr_RawValue(FlowMessage *message);
/**
 * Sets the raw value of an @c FlowMessage's @c remoteAddr property, allowing
 * it to be set to a value that was not defined by the enum at the time the code
 * was generated.
 **/
void SetFlowMessage_RemoteAddr_RawValue(FlowMessage *message, int32_t value);

NS_ASSUME_NONNULL_END

CF_EXTERN_C_END

#pragma clang diagnostic pop

// @@protoc_insertion_point(global_scope)
