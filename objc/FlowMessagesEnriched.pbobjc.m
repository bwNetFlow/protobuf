// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: flow-messages-enriched.proto

// This CPP symbol can be defined to use imports that match up to the framework
// imports needed when using CocoaPods.
#if !defined(GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS)
 #define GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS 0
#endif

#if GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS
 #import <Protobuf/GPBProtocolBuffers_RuntimeSupport.h>
#else
 #import "GPBProtocolBuffers_RuntimeSupport.h"
#endif

#import <stdatomic.h>

#import "FlowMessagesEnriched.pbobjc.h"
// @@protoc_insertion_point(imports)

#pragma clang diagnostic push
#pragma clang diagnostic ignored "-Wdeprecated-declarations"

#pragma mark - FlowMessagesEnrichedRoot

@implementation FlowMessagesEnrichedRoot

// No extensions in the file and no imports, so no need to generate
// +extensionRegistry.

@end

#pragma mark - FlowMessagesEnrichedRoot_FileDescriptor

static GPBFileDescriptor *FlowMessagesEnrichedRoot_FileDescriptor(void) {
  // This is called by +initialize so there is no need to worry
  // about thread safety of the singleton.
  static GPBFileDescriptor *descriptor = NULL;
  if (!descriptor) {
    GPB_DEBUG_CHECK_RUNTIME_VERSIONS();
    descriptor = [[GPBFileDescriptor alloc] initWithPackage:@"flowmessageenriched"
                                                     syntax:GPBFileSyntaxProto3];
  }
  return descriptor;
}

#pragma mark - FlowMessage

@implementation FlowMessage

@dynamic type;
@dynamic timeRecvd;
@dynamic samplingRate;
@dynamic sequenceNum;
@dynamic timeFlow;
@dynamic srcIp;
@dynamic dstIp;
@dynamic ipversion;
@dynamic bytes;
@dynamic packets;
@dynamic routerAddr;
@dynamic nextHop;
@dynamic nextHopAs;
@dynamic srcAs;
@dynamic dstAs;
@dynamic srcNet;
@dynamic dstNet;
@dynamic srcIf;
@dynamic dstIf;
@dynamic proto;
@dynamic srcPort;
@dynamic dstPort;
@dynamic iptos;
@dynamic forwardingStatus;
@dynamic ipttl;
@dynamic tcpflags;
@dynamic srcMac;
@dynamic dstMac;
@dynamic vlanId;
@dynamic etype;
@dynamic direction;
@dynamic cid;
@dynamic normalized;
@dynamic srcIfName;
@dynamic srcIfDesc;
@dynamic srcIfSpeed;
@dynamic dstIfName;
@dynamic dstIfDesc;
@dynamic dstIfSpeed;

typedef struct FlowMessage__storage_ {
  uint32_t _has_storage_[2];
  FlowMessage_FlowType type;
  uint32_t sequenceNum;
  FlowMessage_IPType ipversion;
  uint32_t nextHopAs;
  uint32_t srcAs;
  uint32_t dstAs;
  uint32_t srcNet;
  uint32_t dstNet;
  uint32_t srcIf;
  uint32_t dstIf;
  uint32_t proto;
  uint32_t srcPort;
  uint32_t dstPort;
  uint32_t iptos;
  uint32_t forwardingStatus;
  uint32_t ipttl;
  uint32_t tcpflags;
  uint32_t vlanId;
  uint32_t etype;
  FlowMessage_DirectionType direction;
  uint32_t cid;
  FlowMessage_NormalizedType normalized;
  uint32_t srcIfSpeed;
  uint32_t dstIfSpeed;
  NSData *srcIp;
  NSData *dstIp;
  NSData *routerAddr;
  NSData *nextHop;
  NSString *srcIfName;
  NSString *srcIfDesc;
  NSString *dstIfName;
  NSString *dstIfDesc;
  uint64_t timeRecvd;
  uint64_t samplingRate;
  uint64_t timeFlow;
  uint64_t bytes;
  uint64_t packets;
  uint64_t srcMac;
  uint64_t dstMac;
} FlowMessage__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "type",
        .dataTypeSpecific.enumDescFunc = FlowMessage_FlowType_EnumDescriptor,
        .number = FlowMessage_FieldNumber_Type,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, type),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom | GPBFieldHasEnumDescriptor),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "timeRecvd",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_TimeRecvd,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, timeRecvd),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "samplingRate",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SamplingRate,
        .hasIndex = 2,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, samplingRate),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "sequenceNum",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SequenceNum,
        .hasIndex = 3,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, sequenceNum),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "timeFlow",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_TimeFlow,
        .hasIndex = 4,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, timeFlow),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "srcIp",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcIp,
        .hasIndex = 5,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcIp),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeBytes,
      },
      {
        .name = "dstIp",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstIp,
        .hasIndex = 6,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstIp),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeBytes,
      },
      {
        .name = "ipversion",
        .dataTypeSpecific.enumDescFunc = FlowMessage_IPType_EnumDescriptor,
        .number = FlowMessage_FieldNumber_Ipversion,
        .hasIndex = 7,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, ipversion),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom | GPBFieldHasEnumDescriptor),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "bytes",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Bytes,
        .hasIndex = 8,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, bytes),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "packets",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Packets,
        .hasIndex = 9,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, packets),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "routerAddr",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_RouterAddr,
        .hasIndex = 10,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, routerAddr),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeBytes,
      },
      {
        .name = "nextHop",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_NextHop,
        .hasIndex = 11,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, nextHop),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeBytes,
      },
      {
        .name = "nextHopAs",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_NextHopAs,
        .hasIndex = 12,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, nextHopAs),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "srcAs",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcAs,
        .hasIndex = 13,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcAs),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "dstAs",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstAs,
        .hasIndex = 14,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstAs),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "srcNet",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcNet,
        .hasIndex = 15,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcNet),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "dstNet",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstNet,
        .hasIndex = 16,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstNet),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "srcIf",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcIf,
        .hasIndex = 17,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcIf),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "dstIf",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstIf,
        .hasIndex = 18,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstIf),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "proto",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Proto,
        .hasIndex = 19,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, proto),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "srcPort",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcPort,
        .hasIndex = 20,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcPort),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "dstPort",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstPort,
        .hasIndex = 21,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstPort),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "iptos",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Iptos,
        .hasIndex = 22,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, iptos),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "forwardingStatus",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_ForwardingStatus,
        .hasIndex = 23,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, forwardingStatus),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "ipttl",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Ipttl,
        .hasIndex = 24,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, ipttl),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "tcpflags",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Tcpflags,
        .hasIndex = 25,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, tcpflags),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "srcMac",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcMac,
        .hasIndex = 26,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcMac),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "dstMac",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstMac,
        .hasIndex = 27,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstMac),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt64,
      },
      {
        .name = "vlanId",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_VlanId,
        .hasIndex = 28,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, vlanId),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "etype",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Etype,
        .hasIndex = 29,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, etype),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "direction",
        .dataTypeSpecific.enumDescFunc = FlowMessage_DirectionType_EnumDescriptor,
        .number = FlowMessage_FieldNumber_Direction,
        .hasIndex = 30,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, direction),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom | GPBFieldHasEnumDescriptor),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "cid",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_Cid,
        .hasIndex = 31,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, cid),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "normalized",
        .dataTypeSpecific.enumDescFunc = FlowMessage_NormalizedType_EnumDescriptor,
        .number = FlowMessage_FieldNumber_Normalized,
        .hasIndex = 32,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, normalized),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom | GPBFieldHasEnumDescriptor),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "srcIfName",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcIfName,
        .hasIndex = 33,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcIfName),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "srcIfDesc",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcIfDesc,
        .hasIndex = 34,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcIfDesc),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "srcIfSpeed",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_SrcIfSpeed,
        .hasIndex = 35,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, srcIfSpeed),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
      {
        .name = "dstIfName",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstIfName,
        .hasIndex = 36,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstIfName),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "dstIfDesc",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstIfDesc,
        .hasIndex = 37,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstIfDesc),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "dstIfSpeed",
        .dataTypeSpecific.className = NULL,
        .number = FlowMessage_FieldNumber_DstIfSpeed,
        .hasIndex = 38,
        .offset = (uint32_t)offsetof(FlowMessage__storage_, dstIfSpeed),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldTextFormatNameCustom),
        .dataType = GPBDataTypeUInt32,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[FlowMessage class]
                                     rootClass:[FlowMessagesEnrichedRoot class]
                                          file:FlowMessagesEnrichedRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(FlowMessage__storage_)
                                         flags:GPBDescriptorInitializationFlag_None];
#if !GPBOBJC_SKIP_MESSAGE_TEXTFORMAT_EXTRAS
    static const char *extraTextFormatInfo =
        "\'\001D\000\002I\000\003L\000\004K\000\005H\000\006DA\000\007DA\000\010b\007\000\tE\000\nG\000\013J\000\014G\000"
        "\rHA\000\016DA\000\017DA\000\020F\000\021F\000\022E\000\023E\000\024E\000\025G\000\026G\000\027c\002\000\030P\000"
        "\031e\000\032d\004\000\033F\000\034F\000\035F\000\036E\000ZI\000[C\000\\J\000]I\000^I\000_J\000`I\000"
        "aI\000bJ\000";
    [localDescriptor setupExtraTextInfo:extraTextFormatInfo];
#endif  // !GPBOBJC_SKIP_MESSAGE_TEXTFORMAT_EXTRAS
    NSAssert(descriptor == nil, @"Startup recursed!");
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

int32_t FlowMessage_Type_RawValue(FlowMessage *message) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Type];
  return GPBGetMessageInt32Field(message, field);
}

void SetFlowMessage_Type_RawValue(FlowMessage *message, int32_t value) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Type];
  GPBSetInt32IvarWithFieldInternal(message, field, value, descriptor.file.syntax);
}

int32_t FlowMessage_Ipversion_RawValue(FlowMessage *message) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Ipversion];
  return GPBGetMessageInt32Field(message, field);
}

void SetFlowMessage_Ipversion_RawValue(FlowMessage *message, int32_t value) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Ipversion];
  GPBSetInt32IvarWithFieldInternal(message, field, value, descriptor.file.syntax);
}

int32_t FlowMessage_Direction_RawValue(FlowMessage *message) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Direction];
  return GPBGetMessageInt32Field(message, field);
}

void SetFlowMessage_Direction_RawValue(FlowMessage *message, int32_t value) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Direction];
  GPBSetInt32IvarWithFieldInternal(message, field, value, descriptor.file.syntax);
}

int32_t FlowMessage_Normalized_RawValue(FlowMessage *message) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Normalized];
  return GPBGetMessageInt32Field(message, field);
}

void SetFlowMessage_Normalized_RawValue(FlowMessage *message, int32_t value) {
  GPBDescriptor *descriptor = [FlowMessage descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:FlowMessage_FieldNumber_Normalized];
  GPBSetInt32IvarWithFieldInternal(message, field, value, descriptor.file.syntax);
}

#pragma mark - Enum FlowMessage_FlowType

GPBEnumDescriptor *FlowMessage_FlowType_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "Flowunknown\000Nfv9\000Ipfix\000Sflow\000";
    static const int32_t values[] = {
        FlowMessage_FlowType_Flowunknown,
        FlowMessage_FlowType_Nfv9,
        FlowMessage_FlowType_Ipfix,
        FlowMessage_FlowType_Sflow,
    };
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(FlowMessage_FlowType)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:FlowMessage_FlowType_IsValidValue];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL FlowMessage_FlowType_IsValidValue(int32_t value__) {
  switch (value__) {
    case FlowMessage_FlowType_Flowunknown:
    case FlowMessage_FlowType_Nfv9:
    case FlowMessage_FlowType_Ipfix:
    case FlowMessage_FlowType_Sflow:
      return YES;
    default:
      return NO;
  }
}

#pragma mark - Enum FlowMessage_IPType

GPBEnumDescriptor *FlowMessage_IPType_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "Ipunknown\000Ipv4\000Ipv6\000";
    static const int32_t values[] = {
        FlowMessage_IPType_Ipunknown,
        FlowMessage_IPType_Ipv4,
        FlowMessage_IPType_Ipv6,
    };
    static const char *extraTextFormatInfo = "\002\001b\002\000\002b\002\000";
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(FlowMessage_IPType)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:FlowMessage_IPType_IsValidValue
                              extraTextFormatInfo:extraTextFormatInfo];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL FlowMessage_IPType_IsValidValue(int32_t value__) {
  switch (value__) {
    case FlowMessage_IPType_Ipunknown:
    case FlowMessage_IPType_Ipv4:
    case FlowMessage_IPType_Ipv6:
      return YES;
    default:
      return NO;
  }
}

#pragma mark - Enum FlowMessage_DirectionType

GPBEnumDescriptor *FlowMessage_DirectionType_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "Unknown\000Incoming\000Outgoing\000";
    static const int32_t values[] = {
        FlowMessage_DirectionType_Unknown,
        FlowMessage_DirectionType_Incoming,
        FlowMessage_DirectionType_Outgoing,
    };
    static const char *extraTextFormatInfo = "\003\000\007\000\001\010\000\002\010\000";
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(FlowMessage_DirectionType)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:FlowMessage_DirectionType_IsValidValue
                              extraTextFormatInfo:extraTextFormatInfo];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL FlowMessage_DirectionType_IsValidValue(int32_t value__) {
  switch (value__) {
    case FlowMessage_DirectionType_Unknown:
    case FlowMessage_DirectionType_Incoming:
    case FlowMessage_DirectionType_Outgoing:
      return YES;
    default:
      return NO;
  }
}

#pragma mark - Enum FlowMessage_NormalizedType

GPBEnumDescriptor *FlowMessage_NormalizedType_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "No\000Yes\000";
    static const int32_t values[] = {
        FlowMessage_NormalizedType_No,
        FlowMessage_NormalizedType_Yes,
    };
    static const char *extraTextFormatInfo = "\002\000\002\000\001\003\000";
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(FlowMessage_NormalizedType)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:FlowMessage_NormalizedType_IsValidValue
                              extraTextFormatInfo:extraTextFormatInfo];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL FlowMessage_NormalizedType_IsValidValue(int32_t value__) {
  switch (value__) {
    case FlowMessage_NormalizedType_No:
    case FlowMessage_NormalizedType_Yes:
      return YES;
    default:
      return NO;
  }
}


#pragma clang diagnostic pop

// @@protoc_insertion_point(global_scope)
