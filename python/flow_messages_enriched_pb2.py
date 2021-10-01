# -*- coding: utf-8 -*-
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto
"""Generated protocol buffer code."""
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()




DESCRIPTOR = _descriptor.FileDescriptor(
  name='flow-messages-enriched.proto',
  package='flowmessageenriched',
  syntax='proto3',
  serialized_options=b'\n\tbwnetflowB\025FlowMessageEnrichedPbZ4github.com/bwNetFlow/protobuf/go;flowmessageenriched',
  create_key=_descriptor._internal_create_key,
  serialized_pb=b'\n\x1c\x66low-messages-enriched.proto\x12\x13\x66lowmessageenriched\"\x9a\x0c\n\x0b\x46lowMessage\x12\x37\n\x04Type\x18\x01 \x01(\x0e\x32).flowmessageenriched.FlowMessage.FlowType\x12\x14\n\x0cTimeReceived\x18\x02 \x01(\x04\x12\x13\n\x0bSequenceNum\x18\x04 \x01(\r\x12\x14\n\x0cSamplingRate\x18\x03 \x01(\x04\x12\x15\n\rFlowDirection\x18* \x01(\r\x12\x16\n\x0eSamplerAddress\x18\x0b \x01(\x0c\x12\x15\n\rTimeFlowStart\x18& \x01(\x04\x12\x13\n\x0bTimeFlowEnd\x18\x05 \x01(\x04\x12\r\n\x05\x42ytes\x18\t \x01(\x04\x12\x0f\n\x07Packets\x18\n \x01(\x04\x12\x0f\n\x07SrcAddr\x18\x06 \x01(\x0c\x12\x0f\n\x07\x44stAddr\x18\x07 \x01(\x0c\x12\r\n\x05\x45type\x18\x1e \x01(\r\x12\r\n\x05Proto\x18\x14 \x01(\r\x12\x0f\n\x07SrcPort\x18\x15 \x01(\r\x12\x0f\n\x07\x44stPort\x18\x16 \x01(\r\x12\x0c\n\x04InIf\x18\x12 \x01(\r\x12\r\n\x05OutIf\x18\x13 \x01(\r\x12\x0e\n\x06SrcMac\x18\x1b \x01(\x04\x12\x0e\n\x06\x44stMac\x18\x1c \x01(\x04\x12\x0f\n\x07SrcVlan\x18! \x01(\r\x12\x0f\n\x07\x44stVlan\x18\" \x01(\r\x12\x0e\n\x06VlanId\x18\x1d \x01(\r\x12\x14\n\x0cIngressVrfID\x18\' \x01(\r\x12\x13\n\x0b\x45gressVrfID\x18( \x01(\r\x12\r\n\x05IPTos\x18\x17 \x01(\r\x12\x18\n\x10\x46orwardingStatus\x18\x18 \x01(\r\x12\r\n\x05IPTTL\x18\x19 \x01(\r\x12\x10\n\x08TCPFlags\x18\x1a \x01(\r\x12\x10\n\x08IcmpType\x18\x1f \x01(\r\x12\x10\n\x08IcmpCode\x18  \x01(\r\x12\x15\n\rIPv6FlowLabel\x18% \x01(\r\x12\x12\n\nFragmentId\x18# \x01(\r\x12\x16\n\x0e\x46ragmentOffset\x18$ \x01(\r\x12\x17\n\x0f\x42iFlowDirection\x18) \x01(\r\x12\r\n\x05SrcAS\x18\x0e \x01(\r\x12\r\n\x05\x44stAS\x18\x0f \x01(\r\x12\x0f\n\x07NextHop\x18\x0c \x01(\x0c\x12\x11\n\tNextHopAS\x18\r \x01(\r\x12\x0e\n\x06SrcNet\x18\x10 \x01(\r\x12\x0e\n\x06\x44stNet\x18\x11 \x01(\r\x12\x0f\n\x07HasMPLS\x18\x35 \x01(\x08\x12\x11\n\tMPLSCount\x18\x36 \x01(\r\x12\x10\n\x08MPLS1TTL\x18\x37 \x01(\r\x12\x12\n\nMPLS1Label\x18\x38 \x01(\r\x12\x10\n\x08MPLS2TTL\x18\x39 \x01(\r\x12\x12\n\nMPLS2Label\x18: \x01(\r\x12\x10\n\x08MPLS3TTL\x18; \x01(\r\x12\x12\n\nMPLS3Label\x18< \x01(\r\x12\x13\n\x0bMPLSLastTTL\x18= \x01(\r\x12\x15\n\rMPLSLastLabel\x18> \x01(\r\x12\x0c\n\x03\x43id\x18\xe8\x07 \x01(\r\x12\x12\n\tCidString\x18\xe9\x07 \x01(\t\x12\x0f\n\x06SrcCid\x18\xf4\x07 \x01(\r\x12\x0f\n\x06\x44stCid\x18\xf5\x07 \x01(\r\x12\x44\n\nNormalized\x18\xea\x07 \x01(\x0e\x32/.flowmessageenriched.FlowMessage.NormalizedType\x12\x12\n\tSrcIfName\x18\xeb\x07 \x01(\t\x12\x12\n\tSrcIfDesc\x18\xec\x07 \x01(\t\x12\x13\n\nSrcIfSpeed\x18\xed\x07 \x01(\r\x12\x12\n\tDstIfName\x18\xee\x07 \x01(\t\x12\x12\n\tDstIfDesc\x18\xef\x07 \x01(\t\x12\x13\n\nDstIfSpeed\x18\xf0\x07 \x01(\r\x12\x12\n\tProtoName\x18\xf1\x07 \x01(\t\x12\x16\n\rRemoteCountry\x18\xf2\x07 \x01(\t\x12\x44\n\nRemoteAddr\x18\xf3\x07 \x01(\x0e\x32/.flowmessageenriched.FlowMessage.RemoteAddrType\x12\r\n\x04Note\x18\xf6\x07 \x01(\t\"S\n\x08\x46lowType\x12\x0f\n\x0b\x46LOWUNKNOWN\x10\x00\x12\x0b\n\x07SFLOW_5\x10\x01\x12\x0e\n\nNETFLOW_V5\x10\x02\x12\x0e\n\nNETFLOW_V9\x10\x03\x12\t\n\x05IPFIX\x10\x04\"!\n\x0eNormalizedType\x12\x06\n\x02No\x10\x00\x12\x07\n\x03Yes\x10\x01\"/\n\x0eRemoteAddrType\x12\x0b\n\x07Neither\x10\x00\x12\x07\n\x03Src\x10\x01\x12\x07\n\x03\x44st\x10\x02\x42X\n\tbwnetflowB\x15\x46lowMessageEnrichedPbZ4github.com/bwNetFlow/protobuf/go;flowmessageenrichedb\x06proto3'
)



_FLOWMESSAGE_FLOWTYPE = _descriptor.EnumDescriptor(
  name='FlowType',
  full_name='flowmessageenriched.FlowMessage.FlowType',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='FLOWUNKNOWN', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='SFLOW_5', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='NETFLOW_V5', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='NETFLOW_V9', index=3, number=3,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='IPFIX', index=4, number=4,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1449,
  serialized_end=1532,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_FLOWTYPE)

_FLOWMESSAGE_NORMALIZEDTYPE = _descriptor.EnumDescriptor(
  name='NormalizedType',
  full_name='flowmessageenriched.FlowMessage.NormalizedType',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='No', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='Yes', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1534,
  serialized_end=1567,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_NORMALIZEDTYPE)

_FLOWMESSAGE_REMOTEADDRTYPE = _descriptor.EnumDescriptor(
  name='RemoteAddrType',
  full_name='flowmessageenriched.FlowMessage.RemoteAddrType',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='Neither', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='Src', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='Dst', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1569,
  serialized_end=1616,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_REMOTEADDRTYPE)


_FLOWMESSAGE = _descriptor.Descriptor(
  name='FlowMessage',
  full_name='flowmessageenriched.FlowMessage',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='Type', full_name='flowmessageenriched.FlowMessage.Type', index=0,
      number=1, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='TimeReceived', full_name='flowmessageenriched.FlowMessage.TimeReceived', index=1,
      number=2, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SequenceNum', full_name='flowmessageenriched.FlowMessage.SequenceNum', index=2,
      number=4, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SamplingRate', full_name='flowmessageenriched.FlowMessage.SamplingRate', index=3,
      number=3, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='FlowDirection', full_name='flowmessageenriched.FlowMessage.FlowDirection', index=4,
      number=42, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SamplerAddress', full_name='flowmessageenriched.FlowMessage.SamplerAddress', index=5,
      number=11, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=b"",
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='TimeFlowStart', full_name='flowmessageenriched.FlowMessage.TimeFlowStart', index=6,
      number=38, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='TimeFlowEnd', full_name='flowmessageenriched.FlowMessage.TimeFlowEnd', index=7,
      number=5, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Bytes', full_name='flowmessageenriched.FlowMessage.Bytes', index=8,
      number=9, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Packets', full_name='flowmessageenriched.FlowMessage.Packets', index=9,
      number=10, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcAddr', full_name='flowmessageenriched.FlowMessage.SrcAddr', index=10,
      number=6, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=b"",
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstAddr', full_name='flowmessageenriched.FlowMessage.DstAddr', index=11,
      number=7, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=b"",
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Etype', full_name='flowmessageenriched.FlowMessage.Etype', index=12,
      number=30, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Proto', full_name='flowmessageenriched.FlowMessage.Proto', index=13,
      number=20, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcPort', full_name='flowmessageenriched.FlowMessage.SrcPort', index=14,
      number=21, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstPort', full_name='flowmessageenriched.FlowMessage.DstPort', index=15,
      number=22, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='InIf', full_name='flowmessageenriched.FlowMessage.InIf', index=16,
      number=18, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='OutIf', full_name='flowmessageenriched.FlowMessage.OutIf', index=17,
      number=19, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcMac', full_name='flowmessageenriched.FlowMessage.SrcMac', index=18,
      number=27, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstMac', full_name='flowmessageenriched.FlowMessage.DstMac', index=19,
      number=28, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcVlan', full_name='flowmessageenriched.FlowMessage.SrcVlan', index=20,
      number=33, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstVlan', full_name='flowmessageenriched.FlowMessage.DstVlan', index=21,
      number=34, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='VlanId', full_name='flowmessageenriched.FlowMessage.VlanId', index=22,
      number=29, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IngressVrfID', full_name='flowmessageenriched.FlowMessage.IngressVrfID', index=23,
      number=39, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='EgressVrfID', full_name='flowmessageenriched.FlowMessage.EgressVrfID', index=24,
      number=40, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IPTos', full_name='flowmessageenriched.FlowMessage.IPTos', index=25,
      number=23, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='ForwardingStatus', full_name='flowmessageenriched.FlowMessage.ForwardingStatus', index=26,
      number=24, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IPTTL', full_name='flowmessageenriched.FlowMessage.IPTTL', index=27,
      number=25, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='TCPFlags', full_name='flowmessageenriched.FlowMessage.TCPFlags', index=28,
      number=26, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IcmpType', full_name='flowmessageenriched.FlowMessage.IcmpType', index=29,
      number=31, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IcmpCode', full_name='flowmessageenriched.FlowMessage.IcmpCode', index=30,
      number=32, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='IPv6FlowLabel', full_name='flowmessageenriched.FlowMessage.IPv6FlowLabel', index=31,
      number=37, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='FragmentId', full_name='flowmessageenriched.FlowMessage.FragmentId', index=32,
      number=35, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='FragmentOffset', full_name='flowmessageenriched.FlowMessage.FragmentOffset', index=33,
      number=36, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='BiFlowDirection', full_name='flowmessageenriched.FlowMessage.BiFlowDirection', index=34,
      number=41, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcAS', full_name='flowmessageenriched.FlowMessage.SrcAS', index=35,
      number=14, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstAS', full_name='flowmessageenriched.FlowMessage.DstAS', index=36,
      number=15, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='NextHop', full_name='flowmessageenriched.FlowMessage.NextHop', index=37,
      number=12, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=b"",
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='NextHopAS', full_name='flowmessageenriched.FlowMessage.NextHopAS', index=38,
      number=13, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcNet', full_name='flowmessageenriched.FlowMessage.SrcNet', index=39,
      number=16, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstNet', full_name='flowmessageenriched.FlowMessage.DstNet', index=40,
      number=17, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='HasMPLS', full_name='flowmessageenriched.FlowMessage.HasMPLS', index=41,
      number=53, type=8, cpp_type=7, label=1,
      has_default_value=False, default_value=False,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLSCount', full_name='flowmessageenriched.FlowMessage.MPLSCount', index=42,
      number=54, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS1TTL', full_name='flowmessageenriched.FlowMessage.MPLS1TTL', index=43,
      number=55, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS1Label', full_name='flowmessageenriched.FlowMessage.MPLS1Label', index=44,
      number=56, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS2TTL', full_name='flowmessageenriched.FlowMessage.MPLS2TTL', index=45,
      number=57, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS2Label', full_name='flowmessageenriched.FlowMessage.MPLS2Label', index=46,
      number=58, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS3TTL', full_name='flowmessageenriched.FlowMessage.MPLS3TTL', index=47,
      number=59, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLS3Label', full_name='flowmessageenriched.FlowMessage.MPLS3Label', index=48,
      number=60, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLSLastTTL', full_name='flowmessageenriched.FlowMessage.MPLSLastTTL', index=49,
      number=61, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='MPLSLastLabel', full_name='flowmessageenriched.FlowMessage.MPLSLastLabel', index=50,
      number=62, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Cid', full_name='flowmessageenriched.FlowMessage.Cid', index=51,
      number=1000, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='CidString', full_name='flowmessageenriched.FlowMessage.CidString', index=52,
      number=1001, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcCid', full_name='flowmessageenriched.FlowMessage.SrcCid', index=53,
      number=1012, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstCid', full_name='flowmessageenriched.FlowMessage.DstCid', index=54,
      number=1013, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Normalized', full_name='flowmessageenriched.FlowMessage.Normalized', index=55,
      number=1002, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcIfName', full_name='flowmessageenriched.FlowMessage.SrcIfName', index=56,
      number=1003, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcIfDesc', full_name='flowmessageenriched.FlowMessage.SrcIfDesc', index=57,
      number=1004, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='SrcIfSpeed', full_name='flowmessageenriched.FlowMessage.SrcIfSpeed', index=58,
      number=1005, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstIfName', full_name='flowmessageenriched.FlowMessage.DstIfName', index=59,
      number=1006, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstIfDesc', full_name='flowmessageenriched.FlowMessage.DstIfDesc', index=60,
      number=1007, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='DstIfSpeed', full_name='flowmessageenriched.FlowMessage.DstIfSpeed', index=61,
      number=1008, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='ProtoName', full_name='flowmessageenriched.FlowMessage.ProtoName', index=62,
      number=1009, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='RemoteCountry', full_name='flowmessageenriched.FlowMessage.RemoteCountry', index=63,
      number=1010, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='RemoteAddr', full_name='flowmessageenriched.FlowMessage.RemoteAddr', index=64,
      number=1011, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='Note', full_name='flowmessageenriched.FlowMessage.Note', index=65,
      number=1014, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
    _FLOWMESSAGE_FLOWTYPE,
    _FLOWMESSAGE_NORMALIZEDTYPE,
    _FLOWMESSAGE_REMOTEADDRTYPE,
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=54,
  serialized_end=1616,
)

_FLOWMESSAGE.fields_by_name['Type'].enum_type = _FLOWMESSAGE_FLOWTYPE
_FLOWMESSAGE.fields_by_name['Normalized'].enum_type = _FLOWMESSAGE_NORMALIZEDTYPE
_FLOWMESSAGE.fields_by_name['RemoteAddr'].enum_type = _FLOWMESSAGE_REMOTEADDRTYPE
_FLOWMESSAGE_FLOWTYPE.containing_type = _FLOWMESSAGE
_FLOWMESSAGE_NORMALIZEDTYPE.containing_type = _FLOWMESSAGE
_FLOWMESSAGE_REMOTEADDRTYPE.containing_type = _FLOWMESSAGE
DESCRIPTOR.message_types_by_name['FlowMessage'] = _FLOWMESSAGE
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

FlowMessage = _reflection.GeneratedProtocolMessageType('FlowMessage', (_message.Message,), {
  'DESCRIPTOR' : _FLOWMESSAGE,
  '__module__' : 'flow_messages_enriched_pb2'
  # @@protoc_insertion_point(class_scope:flowmessageenriched.FlowMessage)
  })
_sym_db.RegisterMessage(FlowMessage)


DESCRIPTOR._options = None
# @@protoc_insertion_point(module_scope)
