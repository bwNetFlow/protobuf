# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: flow-messages-enriched.proto

import sys
_b=sys.version_info[0]<3 and (lambda x:x) or (lambda x:x.encode('latin1'))
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
  serialized_options=_b('\n\tbwnetflowB\rFlowMessagePb'),
  serialized_pb=_b('\n\x1c\x66low-messages-enriched.proto\x12\x13\x66lowmessageenriched\"\xe6\x08\n\x0b\x46lowMessage\x12\x37\n\x04Type\x18\x01 \x01(\x0e\x32).flowmessageenriched.FlowMessage.FlowType\x12\x11\n\tTimeRecvd\x18\x02 \x01(\x04\x12\x14\n\x0cSamplingRate\x18\x03 \x01(\x04\x12\x13\n\x0bSequenceNum\x18\x04 \x01(\r\x12\x10\n\x08TimeFlow\x18\x05 \x01(\x04\x12\r\n\x05SrcIP\x18\x06 \x01(\x0c\x12\r\n\x05\x44stIP\x18\x07 \x01(\x0c\x12:\n\tIPversion\x18\x08 \x01(\x0e\x32\'.flowmessageenriched.FlowMessage.IPType\x12\r\n\x05\x42ytes\x18\t \x01(\x04\x12\x0f\n\x07Packets\x18\n \x01(\x04\x12\x12\n\nRouterAddr\x18\x0b \x01(\x0c\x12\x0f\n\x07NextHop\x18\x0c \x01(\x0c\x12\x11\n\tNextHopAS\x18\r \x01(\r\x12\r\n\x05SrcAS\x18\x0e \x01(\r\x12\r\n\x05\x44stAS\x18\x0f \x01(\r\x12\x0e\n\x06SrcNet\x18\x10 \x01(\r\x12\x0e\n\x06\x44stNet\x18\x11 \x01(\r\x12\r\n\x05SrcIf\x18\x12 \x01(\r\x12\r\n\x05\x44stIf\x18\x13 \x01(\r\x12\r\n\x05Proto\x18\x14 \x01(\r\x12\x0f\n\x07SrcPort\x18\x15 \x01(\r\x12\x0f\n\x07\x44stPort\x18\x16 \x01(\r\x12\r\n\x05IPTos\x18\x17 \x01(\r\x12\x18\n\x10\x46orwardingStatus\x18\x18 \x01(\r\x12\r\n\x05IPTTL\x18\x19 \x01(\r\x12\x10\n\x08TCPFlags\x18\x1a \x01(\r\x12\x0e\n\x06SrcMac\x18\x1b \x01(\x04\x12\x0e\n\x06\x44stMac\x18\x1c \x01(\x04\x12\x0e\n\x06VlanId\x18\x1d \x01(\r\x12\r\n\x05\x45type\x18\x1e \x01(\r\x12\x41\n\tDirection\x18Z \x01(\x0e\x32..flowmessageenriched.FlowMessage.DirectionType\x12\x0b\n\x03\x43id\x18[ \x01(\r\x12\x43\n\nNormalized\x18\\ \x01(\x0e\x32/.flowmessageenriched.FlowMessage.NormalizedType\x12\x11\n\tSrcIfName\x18] \x01(\t\x12\x11\n\tSrcIfDesc\x18^ \x01(\t\x12\x12\n\nSrcIfSpeed\x18_ \x01(\r\x12\x11\n\tDstIfName\x18` \x01(\t\x12\x11\n\tDstIfDesc\x18\x61 \x01(\t\x12\x12\n\nDstIfSpeed\x18\x62 \x01(\r\x12\x0c\n\x04Peer\x18\x63 \x01(\t\x12\x15\n\rRemoteCountry\x18\x64 \x01(\t\x12\x11\n\tProtoName\x18\x65 \x01(\t\";\n\x08\x46lowType\x12\x0f\n\x0b\x46LOWUNKNOWN\x10\x00\x12\x08\n\x04NFV9\x10\t\x12\t\n\x05IPFIX\x10\n\x12\t\n\x05SFLOW\x10\x05\"+\n\x06IPType\x12\r\n\tIPUNKNOWN\x10\x00\x12\x08\n\x04IPv4\x10\x04\x12\x08\n\x04IPv6\x10\x06\"8\n\rDirectionType\x12\x0b\n\x07Unknown\x10\x00\x12\x0c\n\x08Incoming\x10\x01\x12\x0c\n\x08Outgoing\x10\x02\"!\n\x0eNormalizedType\x12\x06\n\x02No\x10\x00\x12\x07\n\x03Yes\x10\x01\x42\x1a\n\tbwnetflowB\rFlowMessagePbb\x06proto3')
)



_FLOWMESSAGE_FLOWTYPE = _descriptor.EnumDescriptor(
  name='FlowType',
  full_name='flowmessageenriched.FlowMessage.FlowType',
  filename=None,
  file=DESCRIPTOR,
  values=[
    _descriptor.EnumValueDescriptor(
      name='FLOWUNKNOWN', index=0, number=0,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='NFV9', index=1, number=9,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='IPFIX', index=2, number=10,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='SFLOW', index=3, number=5,
      serialized_options=None,
      type=None),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=983,
  serialized_end=1042,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_FLOWTYPE)

_FLOWMESSAGE_IPTYPE = _descriptor.EnumDescriptor(
  name='IPType',
  full_name='flowmessageenriched.FlowMessage.IPType',
  filename=None,
  file=DESCRIPTOR,
  values=[
    _descriptor.EnumValueDescriptor(
      name='IPUNKNOWN', index=0, number=0,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='IPv4', index=1, number=4,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='IPv6', index=2, number=6,
      serialized_options=None,
      type=None),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1044,
  serialized_end=1087,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_IPTYPE)

_FLOWMESSAGE_DIRECTIONTYPE = _descriptor.EnumDescriptor(
  name='DirectionType',
  full_name='flowmessageenriched.FlowMessage.DirectionType',
  filename=None,
  file=DESCRIPTOR,
  values=[
    _descriptor.EnumValueDescriptor(
      name='Unknown', index=0, number=0,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='Incoming', index=1, number=1,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='Outgoing', index=2, number=2,
      serialized_options=None,
      type=None),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1089,
  serialized_end=1145,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_DIRECTIONTYPE)

_FLOWMESSAGE_NORMALIZEDTYPE = _descriptor.EnumDescriptor(
  name='NormalizedType',
  full_name='flowmessageenriched.FlowMessage.NormalizedType',
  filename=None,
  file=DESCRIPTOR,
  values=[
    _descriptor.EnumValueDescriptor(
      name='No', index=0, number=0,
      serialized_options=None,
      type=None),
    _descriptor.EnumValueDescriptor(
      name='Yes', index=1, number=1,
      serialized_options=None,
      type=None),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1147,
  serialized_end=1180,
)
_sym_db.RegisterEnumDescriptor(_FLOWMESSAGE_NORMALIZEDTYPE)


_FLOWMESSAGE = _descriptor.Descriptor(
  name='FlowMessage',
  full_name='flowmessageenriched.FlowMessage',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  fields=[
    _descriptor.FieldDescriptor(
      name='Type', full_name='flowmessageenriched.FlowMessage.Type', index=0,
      number=1, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='TimeRecvd', full_name='flowmessageenriched.FlowMessage.TimeRecvd', index=1,
      number=2, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SamplingRate', full_name='flowmessageenriched.FlowMessage.SamplingRate', index=2,
      number=3, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SequenceNum', full_name='flowmessageenriched.FlowMessage.SequenceNum', index=3,
      number=4, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='TimeFlow', full_name='flowmessageenriched.FlowMessage.TimeFlow', index=4,
      number=5, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcIP', full_name='flowmessageenriched.FlowMessage.SrcIP', index=5,
      number=6, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=_b(""),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstIP', full_name='flowmessageenriched.FlowMessage.DstIP', index=6,
      number=7, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=_b(""),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='IPversion', full_name='flowmessageenriched.FlowMessage.IPversion', index=7,
      number=8, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Bytes', full_name='flowmessageenriched.FlowMessage.Bytes', index=8,
      number=9, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Packets', full_name='flowmessageenriched.FlowMessage.Packets', index=9,
      number=10, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='RouterAddr', full_name='flowmessageenriched.FlowMessage.RouterAddr', index=10,
      number=11, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=_b(""),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='NextHop', full_name='flowmessageenriched.FlowMessage.NextHop', index=11,
      number=12, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=_b(""),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='NextHopAS', full_name='flowmessageenriched.FlowMessage.NextHopAS', index=12,
      number=13, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcAS', full_name='flowmessageenriched.FlowMessage.SrcAS', index=13,
      number=14, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstAS', full_name='flowmessageenriched.FlowMessage.DstAS', index=14,
      number=15, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcNet', full_name='flowmessageenriched.FlowMessage.SrcNet', index=15,
      number=16, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstNet', full_name='flowmessageenriched.FlowMessage.DstNet', index=16,
      number=17, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcIf', full_name='flowmessageenriched.FlowMessage.SrcIf', index=17,
      number=18, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstIf', full_name='flowmessageenriched.FlowMessage.DstIf', index=18,
      number=19, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Proto', full_name='flowmessageenriched.FlowMessage.Proto', index=19,
      number=20, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcPort', full_name='flowmessageenriched.FlowMessage.SrcPort', index=20,
      number=21, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstPort', full_name='flowmessageenriched.FlowMessage.DstPort', index=21,
      number=22, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='IPTos', full_name='flowmessageenriched.FlowMessage.IPTos', index=22,
      number=23, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='ForwardingStatus', full_name='flowmessageenriched.FlowMessage.ForwardingStatus', index=23,
      number=24, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='IPTTL', full_name='flowmessageenriched.FlowMessage.IPTTL', index=24,
      number=25, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='TCPFlags', full_name='flowmessageenriched.FlowMessage.TCPFlags', index=25,
      number=26, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcMac', full_name='flowmessageenriched.FlowMessage.SrcMac', index=26,
      number=27, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstMac', full_name='flowmessageenriched.FlowMessage.DstMac', index=27,
      number=28, type=4, cpp_type=4, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='VlanId', full_name='flowmessageenriched.FlowMessage.VlanId', index=28,
      number=29, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Etype', full_name='flowmessageenriched.FlowMessage.Etype', index=29,
      number=30, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Direction', full_name='flowmessageenriched.FlowMessage.Direction', index=30,
      number=90, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Cid', full_name='flowmessageenriched.FlowMessage.Cid', index=31,
      number=91, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Normalized', full_name='flowmessageenriched.FlowMessage.Normalized', index=32,
      number=92, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcIfName', full_name='flowmessageenriched.FlowMessage.SrcIfName', index=33,
      number=93, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcIfDesc', full_name='flowmessageenriched.FlowMessage.SrcIfDesc', index=34,
      number=94, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='SrcIfSpeed', full_name='flowmessageenriched.FlowMessage.SrcIfSpeed', index=35,
      number=95, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstIfName', full_name='flowmessageenriched.FlowMessage.DstIfName', index=36,
      number=96, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstIfDesc', full_name='flowmessageenriched.FlowMessage.DstIfDesc', index=37,
      number=97, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='DstIfSpeed', full_name='flowmessageenriched.FlowMessage.DstIfSpeed', index=38,
      number=98, type=13, cpp_type=3, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='Peer', full_name='flowmessageenriched.FlowMessage.Peer', index=39,
      number=99, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='RemoteCountry', full_name='flowmessageenriched.FlowMessage.RemoteCountry', index=40,
      number=100, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
    _descriptor.FieldDescriptor(
      name='ProtoName', full_name='flowmessageenriched.FlowMessage.ProtoName', index=41,
      number=101, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=_b("").decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
    _FLOWMESSAGE_FLOWTYPE,
    _FLOWMESSAGE_IPTYPE,
    _FLOWMESSAGE_DIRECTIONTYPE,
    _FLOWMESSAGE_NORMALIZEDTYPE,
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=54,
  serialized_end=1180,
)

_FLOWMESSAGE.fields_by_name['Type'].enum_type = _FLOWMESSAGE_FLOWTYPE
_FLOWMESSAGE.fields_by_name['IPversion'].enum_type = _FLOWMESSAGE_IPTYPE
_FLOWMESSAGE.fields_by_name['Direction'].enum_type = _FLOWMESSAGE_DIRECTIONTYPE
_FLOWMESSAGE.fields_by_name['Normalized'].enum_type = _FLOWMESSAGE_NORMALIZEDTYPE
_FLOWMESSAGE_FLOWTYPE.containing_type = _FLOWMESSAGE
_FLOWMESSAGE_IPTYPE.containing_type = _FLOWMESSAGE
_FLOWMESSAGE_DIRECTIONTYPE.containing_type = _FLOWMESSAGE
_FLOWMESSAGE_NORMALIZEDTYPE.containing_type = _FLOWMESSAGE
DESCRIPTOR.message_types_by_name['FlowMessage'] = _FLOWMESSAGE
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

FlowMessage = _reflection.GeneratedProtocolMessageType('FlowMessage', (_message.Message,), dict(
  DESCRIPTOR = _FLOWMESSAGE,
  __module__ = 'flow_messages_enriched_pb2'
  # @@protoc_insertion_point(class_scope:flowmessageenriched.FlowMessage)
  ))
_sym_db.RegisterMessage(FlowMessage)


DESCRIPTOR._options = None
# @@protoc_insertion_point(module_scope)
