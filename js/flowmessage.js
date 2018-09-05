/**
 * @fileoverview
 * @enhanceable
 * @suppress {messageConventions} JS Compiler reports an error if a variable or
 *     field starts with 'MSG_' and isn't a translatable message.
 * @public
 */
// GENERATED CODE -- DO NOT EDIT!

goog.provide('proto.flowmessageenriched.FlowMessage');
goog.provide('proto.flowmessageenriched.FlowMessage.DirectionType');
goog.provide('proto.flowmessageenriched.FlowMessage.FlowType');
goog.provide('proto.flowmessageenriched.FlowMessage.IPType');
goog.provide('proto.flowmessageenriched.FlowMessage.NormalizedType');

goog.require('jspb.BinaryReader');
goog.require('jspb.BinaryWriter');
goog.require('jspb.Message');


/**
 * Generated by JsPbCodeGenerator.
 * @param {Array=} opt_data Optional initial data array, typically from a
 * server response, or constructed directly in Javascript. The array is used
 * in place and becomes part of the constructed object. It is not cloned.
 * If no data is provided, the constructed object will be empty, but still
 * valid.
 * @extends {jspb.Message}
 * @constructor
 */
proto.flowmessageenriched.FlowMessage = function(opt_data) {
  jspb.Message.initialize(this, opt_data, 0, -1, null, null);
};
goog.inherits(proto.flowmessageenriched.FlowMessage, jspb.Message);
if (goog.DEBUG && !COMPILED) {
  proto.flowmessageenriched.FlowMessage.displayName = 'proto.flowmessageenriched.FlowMessage';
}


if (jspb.Message.GENERATE_TO_OBJECT) {
/**
 * Creates an object representation of this proto suitable for use in Soy templates.
 * Field names that are reserved in JavaScript and will be renamed to pb_name.
 * To access a reserved field use, foo.pb_<name>, eg, foo.pb_default.
 * For the list of reserved names please see:
 *     com.google.apps.jspb.JsClassTemplate.JS_RESERVED_WORDS.
 * @param {boolean=} opt_includeInstance Whether to include the JSPB instance
 *     for transitional soy proto support: http://goto/soy-param-migration
 * @return {!Object}
 */
proto.flowmessageenriched.FlowMessage.prototype.toObject = function(opt_includeInstance) {
  return proto.flowmessageenriched.FlowMessage.toObject(opt_includeInstance, this);
};


/**
 * Static version of the {@see toObject} method.
 * @param {boolean|undefined} includeInstance Whether to include the JSPB
 *     instance for transitional soy proto support:
 *     http://goto/soy-param-migration
 * @param {!proto.flowmessageenriched.FlowMessage} msg The msg instance to transform.
 * @return {!Object}
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.flowmessageenriched.FlowMessage.toObject = function(includeInstance, msg) {
  var f, obj = {
    type: jspb.Message.getFieldWithDefault(msg, 1, 0),
    timerecvd: jspb.Message.getFieldWithDefault(msg, 2, 0),
    samplingrate: jspb.Message.getFieldWithDefault(msg, 3, 0),
    sequencenum: jspb.Message.getFieldWithDefault(msg, 4, 0),
    timeflow: jspb.Message.getFieldWithDefault(msg, 5, 0),
    srcip: msg.getSrcip_asB64(),
    dstip: msg.getDstip_asB64(),
    ipversion: jspb.Message.getFieldWithDefault(msg, 8, 0),
    bytes: jspb.Message.getFieldWithDefault(msg, 9, 0),
    packets: jspb.Message.getFieldWithDefault(msg, 10, 0),
    routeraddr: msg.getRouteraddr_asB64(),
    nexthop: msg.getNexthop_asB64(),
    nexthopas: jspb.Message.getFieldWithDefault(msg, 13, 0),
    srcas: jspb.Message.getFieldWithDefault(msg, 14, 0),
    dstas: jspb.Message.getFieldWithDefault(msg, 15, 0),
    srcnet: jspb.Message.getFieldWithDefault(msg, 16, 0),
    dstnet: jspb.Message.getFieldWithDefault(msg, 17, 0),
    srcif: jspb.Message.getFieldWithDefault(msg, 18, 0),
    dstif: jspb.Message.getFieldWithDefault(msg, 19, 0),
    proto: jspb.Message.getFieldWithDefault(msg, 20, 0),
    srcport: jspb.Message.getFieldWithDefault(msg, 21, 0),
    dstport: jspb.Message.getFieldWithDefault(msg, 22, 0),
    iptos: jspb.Message.getFieldWithDefault(msg, 23, 0),
    forwardingstatus: jspb.Message.getFieldWithDefault(msg, 24, 0),
    ipttl: jspb.Message.getFieldWithDefault(msg, 25, 0),
    tcpflags: jspb.Message.getFieldWithDefault(msg, 26, 0),
    srcmac: jspb.Message.getFieldWithDefault(msg, 27, 0),
    dstmac: jspb.Message.getFieldWithDefault(msg, 28, 0),
    vlanid: jspb.Message.getFieldWithDefault(msg, 29, 0),
    etype: jspb.Message.getFieldWithDefault(msg, 30, 0),
    direction: jspb.Message.getFieldWithDefault(msg, 90, 0),
    cid: jspb.Message.getFieldWithDefault(msg, 91, 0),
    normalized: jspb.Message.getFieldWithDefault(msg, 92, 0),
    srcifname: jspb.Message.getFieldWithDefault(msg, 93, ""),
    srcifdesc: jspb.Message.getFieldWithDefault(msg, 94, ""),
    srcifspeed: jspb.Message.getFieldWithDefault(msg, 95, 0),
    dstifname: jspb.Message.getFieldWithDefault(msg, 96, ""),
    dstifdesc: jspb.Message.getFieldWithDefault(msg, 97, ""),
    dstifspeed: jspb.Message.getFieldWithDefault(msg, 98, 0),
    peer: jspb.Message.getFieldWithDefault(msg, 99, "")
  };

  if (includeInstance) {
    obj.$jspbMessageInstance = msg;
  }
  return obj;
};
}


/**
 * Deserializes binary data (in protobuf wire format).
 * @param {jspb.ByteSource} bytes The bytes to deserialize.
 * @return {!proto.flowmessageenriched.FlowMessage}
 */
proto.flowmessageenriched.FlowMessage.deserializeBinary = function(bytes) {
  var reader = new jspb.BinaryReader(bytes);
  var msg = new proto.flowmessageenriched.FlowMessage;
  return proto.flowmessageenriched.FlowMessage.deserializeBinaryFromReader(msg, reader);
};


/**
 * Deserializes binary data (in protobuf wire format) from the
 * given reader into the given message object.
 * @param {!proto.flowmessageenriched.FlowMessage} msg The message object to deserialize into.
 * @param {!jspb.BinaryReader} reader The BinaryReader to use.
 * @return {!proto.flowmessageenriched.FlowMessage}
 */
proto.flowmessageenriched.FlowMessage.deserializeBinaryFromReader = function(msg, reader) {
  while (reader.nextField()) {
    if (reader.isEndGroup()) {
      break;
    }
    var field = reader.getFieldNumber();
    switch (field) {
    case 1:
      var value = /** @type {!proto.flowmessageenriched.FlowMessage.FlowType} */ (reader.readEnum());
      msg.setType(value);
      break;
    case 2:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setTimerecvd(value);
      break;
    case 3:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setSamplingrate(value);
      break;
    case 4:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSequencenum(value);
      break;
    case 5:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setTimeflow(value);
      break;
    case 6:
      var value = /** @type {!Uint8Array} */ (reader.readBytes());
      msg.setSrcip(value);
      break;
    case 7:
      var value = /** @type {!Uint8Array} */ (reader.readBytes());
      msg.setDstip(value);
      break;
    case 8:
      var value = /** @type {!proto.flowmessageenriched.FlowMessage.IPType} */ (reader.readEnum());
      msg.setIpversion(value);
      break;
    case 9:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setBytes(value);
      break;
    case 10:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setPackets(value);
      break;
    case 11:
      var value = /** @type {!Uint8Array} */ (reader.readBytes());
      msg.setRouteraddr(value);
      break;
    case 12:
      var value = /** @type {!Uint8Array} */ (reader.readBytes());
      msg.setNexthop(value);
      break;
    case 13:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setNexthopas(value);
      break;
    case 14:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSrcas(value);
      break;
    case 15:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setDstas(value);
      break;
    case 16:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSrcnet(value);
      break;
    case 17:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setDstnet(value);
      break;
    case 18:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSrcif(value);
      break;
    case 19:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setDstif(value);
      break;
    case 20:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setProto(value);
      break;
    case 21:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSrcport(value);
      break;
    case 22:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setDstport(value);
      break;
    case 23:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setIptos(value);
      break;
    case 24:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setForwardingstatus(value);
      break;
    case 25:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setIpttl(value);
      break;
    case 26:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setTcpflags(value);
      break;
    case 27:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setSrcmac(value);
      break;
    case 28:
      var value = /** @type {number} */ (reader.readUint64());
      msg.setDstmac(value);
      break;
    case 29:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setVlanid(value);
      break;
    case 30:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setEtype(value);
      break;
    case 90:
      var value = /** @type {!proto.flowmessageenriched.FlowMessage.DirectionType} */ (reader.readEnum());
      msg.setDirection(value);
      break;
    case 91:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setCid(value);
      break;
    case 92:
      var value = /** @type {!proto.flowmessageenriched.FlowMessage.NormalizedType} */ (reader.readEnum());
      msg.setNormalized(value);
      break;
    case 93:
      var value = /** @type {string} */ (reader.readString());
      msg.setSrcifname(value);
      break;
    case 94:
      var value = /** @type {string} */ (reader.readString());
      msg.setSrcifdesc(value);
      break;
    case 95:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setSrcifspeed(value);
      break;
    case 96:
      var value = /** @type {string} */ (reader.readString());
      msg.setDstifname(value);
      break;
    case 97:
      var value = /** @type {string} */ (reader.readString());
      msg.setDstifdesc(value);
      break;
    case 98:
      var value = /** @type {number} */ (reader.readUint32());
      msg.setDstifspeed(value);
      break;
    case 99:
      var value = /** @type {string} */ (reader.readString());
      msg.setPeer(value);
      break;
    default:
      reader.skipField();
      break;
    }
  }
  return msg;
};


/**
 * Serializes the message to binary data (in protobuf wire format).
 * @return {!Uint8Array}
 */
proto.flowmessageenriched.FlowMessage.prototype.serializeBinary = function() {
  var writer = new jspb.BinaryWriter();
  proto.flowmessageenriched.FlowMessage.serializeBinaryToWriter(this, writer);
  return writer.getResultBuffer();
};


/**
 * Serializes the given message to binary data (in protobuf wire
 * format), writing to the given BinaryWriter.
 * @param {!proto.flowmessageenriched.FlowMessage} message
 * @param {!jspb.BinaryWriter} writer
 * @suppress {unusedLocalVariables} f is only used for nested messages
 */
proto.flowmessageenriched.FlowMessage.serializeBinaryToWriter = function(message, writer) {
  var f = undefined;
  f = message.getType();
  if (f !== 0.0) {
    writer.writeEnum(
      1,
      f
    );
  }
  f = message.getTimerecvd();
  if (f !== 0) {
    writer.writeUint64(
      2,
      f
    );
  }
  f = message.getSamplingrate();
  if (f !== 0) {
    writer.writeUint64(
      3,
      f
    );
  }
  f = message.getSequencenum();
  if (f !== 0) {
    writer.writeUint32(
      4,
      f
    );
  }
  f = message.getTimeflow();
  if (f !== 0) {
    writer.writeUint64(
      5,
      f
    );
  }
  f = message.getSrcip_asU8();
  if (f.length > 0) {
    writer.writeBytes(
      6,
      f
    );
  }
  f = message.getDstip_asU8();
  if (f.length > 0) {
    writer.writeBytes(
      7,
      f
    );
  }
  f = message.getIpversion();
  if (f !== 0.0) {
    writer.writeEnum(
      8,
      f
    );
  }
  f = message.getBytes();
  if (f !== 0) {
    writer.writeUint64(
      9,
      f
    );
  }
  f = message.getPackets();
  if (f !== 0) {
    writer.writeUint64(
      10,
      f
    );
  }
  f = message.getRouteraddr_asU8();
  if (f.length > 0) {
    writer.writeBytes(
      11,
      f
    );
  }
  f = message.getNexthop_asU8();
  if (f.length > 0) {
    writer.writeBytes(
      12,
      f
    );
  }
  f = message.getNexthopas();
  if (f !== 0) {
    writer.writeUint32(
      13,
      f
    );
  }
  f = message.getSrcas();
  if (f !== 0) {
    writer.writeUint32(
      14,
      f
    );
  }
  f = message.getDstas();
  if (f !== 0) {
    writer.writeUint32(
      15,
      f
    );
  }
  f = message.getSrcnet();
  if (f !== 0) {
    writer.writeUint32(
      16,
      f
    );
  }
  f = message.getDstnet();
  if (f !== 0) {
    writer.writeUint32(
      17,
      f
    );
  }
  f = message.getSrcif();
  if (f !== 0) {
    writer.writeUint32(
      18,
      f
    );
  }
  f = message.getDstif();
  if (f !== 0) {
    writer.writeUint32(
      19,
      f
    );
  }
  f = message.getProto();
  if (f !== 0) {
    writer.writeUint32(
      20,
      f
    );
  }
  f = message.getSrcport();
  if (f !== 0) {
    writer.writeUint32(
      21,
      f
    );
  }
  f = message.getDstport();
  if (f !== 0) {
    writer.writeUint32(
      22,
      f
    );
  }
  f = message.getIptos();
  if (f !== 0) {
    writer.writeUint32(
      23,
      f
    );
  }
  f = message.getForwardingstatus();
  if (f !== 0) {
    writer.writeUint32(
      24,
      f
    );
  }
  f = message.getIpttl();
  if (f !== 0) {
    writer.writeUint32(
      25,
      f
    );
  }
  f = message.getTcpflags();
  if (f !== 0) {
    writer.writeUint32(
      26,
      f
    );
  }
  f = message.getSrcmac();
  if (f !== 0) {
    writer.writeUint64(
      27,
      f
    );
  }
  f = message.getDstmac();
  if (f !== 0) {
    writer.writeUint64(
      28,
      f
    );
  }
  f = message.getVlanid();
  if (f !== 0) {
    writer.writeUint32(
      29,
      f
    );
  }
  f = message.getEtype();
  if (f !== 0) {
    writer.writeUint32(
      30,
      f
    );
  }
  f = message.getDirection();
  if (f !== 0.0) {
    writer.writeEnum(
      90,
      f
    );
  }
  f = message.getCid();
  if (f !== 0) {
    writer.writeUint32(
      91,
      f
    );
  }
  f = message.getNormalized();
  if (f !== 0.0) {
    writer.writeEnum(
      92,
      f
    );
  }
  f = message.getSrcifname();
  if (f.length > 0) {
    writer.writeString(
      93,
      f
    );
  }
  f = message.getSrcifdesc();
  if (f.length > 0) {
    writer.writeString(
      94,
      f
    );
  }
  f = message.getSrcifspeed();
  if (f !== 0) {
    writer.writeUint32(
      95,
      f
    );
  }
  f = message.getDstifname();
  if (f.length > 0) {
    writer.writeString(
      96,
      f
    );
  }
  f = message.getDstifdesc();
  if (f.length > 0) {
    writer.writeString(
      97,
      f
    );
  }
  f = message.getDstifspeed();
  if (f !== 0) {
    writer.writeUint32(
      98,
      f
    );
  }
  f = message.getPeer();
  if (f.length > 0) {
    writer.writeString(
      99,
      f
    );
  }
};


/**
 * @enum {number}
 */
proto.flowmessageenriched.FlowMessage.FlowType = {
  FLOWUNKNOWN: 0,
  NFV9: 9,
  IPFIX: 10,
  SFLOW: 5
};

/**
 * @enum {number}
 */
proto.flowmessageenriched.FlowMessage.IPType = {
  IPUNKNOWN: 0,
  IPV4: 4,
  IPV6: 6
};

/**
 * @enum {number}
 */
proto.flowmessageenriched.FlowMessage.DirectionType = {
  UNKNOWN: 0,
  INCOMING: 1,
  OUTGOING: 2
};

/**
 * @enum {number}
 */
proto.flowmessageenriched.FlowMessage.NormalizedType = {
  NO: 0,
  YES: 1
};

/**
 * optional FlowType Type = 1;
 * @return {!proto.flowmessageenriched.FlowMessage.FlowType}
 */
proto.flowmessageenriched.FlowMessage.prototype.getType = function() {
  return /** @type {!proto.flowmessageenriched.FlowMessage.FlowType} */ (jspb.Message.getFieldWithDefault(this, 1, 0));
};


/** @param {!proto.flowmessageenriched.FlowMessage.FlowType} value */
proto.flowmessageenriched.FlowMessage.prototype.setType = function(value) {
  jspb.Message.setProto3EnumField(this, 1, value);
};


/**
 * optional uint64 TimeRecvd = 2;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getTimerecvd = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 2, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setTimerecvd = function(value) {
  jspb.Message.setProto3IntField(this, 2, value);
};


/**
 * optional uint64 SamplingRate = 3;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSamplingrate = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 3, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSamplingrate = function(value) {
  jspb.Message.setProto3IntField(this, 3, value);
};


/**
 * optional uint32 SequenceNum = 4;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSequencenum = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 4, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSequencenum = function(value) {
  jspb.Message.setProto3IntField(this, 4, value);
};


/**
 * optional uint64 TimeFlow = 5;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getTimeflow = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 5, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setTimeflow = function(value) {
  jspb.Message.setProto3IntField(this, 5, value);
};


/**
 * optional bytes SrcIP = 6;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcip = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 6, ""));
};


/**
 * optional bytes SrcIP = 6;
 * This is a type-conversion wrapper around `getSrcip()`
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcip_asB64 = function() {
  return /** @type {string} */ (jspb.Message.bytesAsB64(
      this.getSrcip()));
};


/**
 * optional bytes SrcIP = 6;
 * Note that Uint8Array is not supported on all browsers.
 * @see http://caniuse.com/Uint8Array
 * This is a type-conversion wrapper around `getSrcip()`
 * @return {!Uint8Array}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcip_asU8 = function() {
  return /** @type {!Uint8Array} */ (jspb.Message.bytesAsU8(
      this.getSrcip()));
};


/** @param {!(string|Uint8Array)} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcip = function(value) {
  jspb.Message.setProto3BytesField(this, 6, value);
};


/**
 * optional bytes DstIP = 7;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstip = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 7, ""));
};


/**
 * optional bytes DstIP = 7;
 * This is a type-conversion wrapper around `getDstip()`
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstip_asB64 = function() {
  return /** @type {string} */ (jspb.Message.bytesAsB64(
      this.getDstip()));
};


/**
 * optional bytes DstIP = 7;
 * Note that Uint8Array is not supported on all browsers.
 * @see http://caniuse.com/Uint8Array
 * This is a type-conversion wrapper around `getDstip()`
 * @return {!Uint8Array}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstip_asU8 = function() {
  return /** @type {!Uint8Array} */ (jspb.Message.bytesAsU8(
      this.getDstip()));
};


/** @param {!(string|Uint8Array)} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstip = function(value) {
  jspb.Message.setProto3BytesField(this, 7, value);
};


/**
 * optional IPType IPversion = 8;
 * @return {!proto.flowmessageenriched.FlowMessage.IPType}
 */
proto.flowmessageenriched.FlowMessage.prototype.getIpversion = function() {
  return /** @type {!proto.flowmessageenriched.FlowMessage.IPType} */ (jspb.Message.getFieldWithDefault(this, 8, 0));
};


/** @param {!proto.flowmessageenriched.FlowMessage.IPType} value */
proto.flowmessageenriched.FlowMessage.prototype.setIpversion = function(value) {
  jspb.Message.setProto3EnumField(this, 8, value);
};


/**
 * optional uint64 Bytes = 9;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getBytes = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 9, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setBytes = function(value) {
  jspb.Message.setProto3IntField(this, 9, value);
};


/**
 * optional uint64 Packets = 10;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getPackets = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 10, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setPackets = function(value) {
  jspb.Message.setProto3IntField(this, 10, value);
};


/**
 * optional bytes RouterAddr = 11;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getRouteraddr = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 11, ""));
};


/**
 * optional bytes RouterAddr = 11;
 * This is a type-conversion wrapper around `getRouteraddr()`
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getRouteraddr_asB64 = function() {
  return /** @type {string} */ (jspb.Message.bytesAsB64(
      this.getRouteraddr()));
};


/**
 * optional bytes RouterAddr = 11;
 * Note that Uint8Array is not supported on all browsers.
 * @see http://caniuse.com/Uint8Array
 * This is a type-conversion wrapper around `getRouteraddr()`
 * @return {!Uint8Array}
 */
proto.flowmessageenriched.FlowMessage.prototype.getRouteraddr_asU8 = function() {
  return /** @type {!Uint8Array} */ (jspb.Message.bytesAsU8(
      this.getRouteraddr()));
};


/** @param {!(string|Uint8Array)} value */
proto.flowmessageenriched.FlowMessage.prototype.setRouteraddr = function(value) {
  jspb.Message.setProto3BytesField(this, 11, value);
};


/**
 * optional bytes NextHop = 12;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getNexthop = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 12, ""));
};


/**
 * optional bytes NextHop = 12;
 * This is a type-conversion wrapper around `getNexthop()`
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getNexthop_asB64 = function() {
  return /** @type {string} */ (jspb.Message.bytesAsB64(
      this.getNexthop()));
};


/**
 * optional bytes NextHop = 12;
 * Note that Uint8Array is not supported on all browsers.
 * @see http://caniuse.com/Uint8Array
 * This is a type-conversion wrapper around `getNexthop()`
 * @return {!Uint8Array}
 */
proto.flowmessageenriched.FlowMessage.prototype.getNexthop_asU8 = function() {
  return /** @type {!Uint8Array} */ (jspb.Message.bytesAsU8(
      this.getNexthop()));
};


/** @param {!(string|Uint8Array)} value */
proto.flowmessageenriched.FlowMessage.prototype.setNexthop = function(value) {
  jspb.Message.setProto3BytesField(this, 12, value);
};


/**
 * optional uint32 NextHopAS = 13;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getNexthopas = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 13, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setNexthopas = function(value) {
  jspb.Message.setProto3IntField(this, 13, value);
};


/**
 * optional uint32 SrcAS = 14;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcas = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 14, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcas = function(value) {
  jspb.Message.setProto3IntField(this, 14, value);
};


/**
 * optional uint32 DstAS = 15;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstas = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 15, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstas = function(value) {
  jspb.Message.setProto3IntField(this, 15, value);
};


/**
 * optional uint32 SrcNet = 16;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcnet = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 16, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcnet = function(value) {
  jspb.Message.setProto3IntField(this, 16, value);
};


/**
 * optional uint32 DstNet = 17;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstnet = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 17, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstnet = function(value) {
  jspb.Message.setProto3IntField(this, 17, value);
};


/**
 * optional uint32 SrcIf = 18;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcif = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 18, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcif = function(value) {
  jspb.Message.setProto3IntField(this, 18, value);
};


/**
 * optional uint32 DstIf = 19;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstif = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 19, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstif = function(value) {
  jspb.Message.setProto3IntField(this, 19, value);
};


/**
 * optional uint32 Proto = 20;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getProto = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 20, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setProto = function(value) {
  jspb.Message.setProto3IntField(this, 20, value);
};


/**
 * optional uint32 SrcPort = 21;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcport = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 21, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcport = function(value) {
  jspb.Message.setProto3IntField(this, 21, value);
};


/**
 * optional uint32 DstPort = 22;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstport = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 22, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstport = function(value) {
  jspb.Message.setProto3IntField(this, 22, value);
};


/**
 * optional uint32 IPTos = 23;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getIptos = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 23, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setIptos = function(value) {
  jspb.Message.setProto3IntField(this, 23, value);
};


/**
 * optional uint32 ForwardingStatus = 24;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getForwardingstatus = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 24, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setForwardingstatus = function(value) {
  jspb.Message.setProto3IntField(this, 24, value);
};


/**
 * optional uint32 IPTTL = 25;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getIpttl = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 25, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setIpttl = function(value) {
  jspb.Message.setProto3IntField(this, 25, value);
};


/**
 * optional uint32 TCPFlags = 26;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getTcpflags = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 26, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setTcpflags = function(value) {
  jspb.Message.setProto3IntField(this, 26, value);
};


/**
 * optional uint64 SrcMac = 27;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcmac = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 27, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcmac = function(value) {
  jspb.Message.setProto3IntField(this, 27, value);
};


/**
 * optional uint64 DstMac = 28;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstmac = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 28, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstmac = function(value) {
  jspb.Message.setProto3IntField(this, 28, value);
};


/**
 * optional uint32 VlanId = 29;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getVlanid = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 29, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setVlanid = function(value) {
  jspb.Message.setProto3IntField(this, 29, value);
};


/**
 * optional uint32 Etype = 30;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getEtype = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 30, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setEtype = function(value) {
  jspb.Message.setProto3IntField(this, 30, value);
};


/**
 * optional DirectionType Direction = 90;
 * @return {!proto.flowmessageenriched.FlowMessage.DirectionType}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDirection = function() {
  return /** @type {!proto.flowmessageenriched.FlowMessage.DirectionType} */ (jspb.Message.getFieldWithDefault(this, 90, 0));
};


/** @param {!proto.flowmessageenriched.FlowMessage.DirectionType} value */
proto.flowmessageenriched.FlowMessage.prototype.setDirection = function(value) {
  jspb.Message.setProto3EnumField(this, 90, value);
};


/**
 * optional uint32 Cid = 91;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getCid = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 91, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setCid = function(value) {
  jspb.Message.setProto3IntField(this, 91, value);
};


/**
 * optional NormalizedType Normalized = 92;
 * @return {!proto.flowmessageenriched.FlowMessage.NormalizedType}
 */
proto.flowmessageenriched.FlowMessage.prototype.getNormalized = function() {
  return /** @type {!proto.flowmessageenriched.FlowMessage.NormalizedType} */ (jspb.Message.getFieldWithDefault(this, 92, 0));
};


/** @param {!proto.flowmessageenriched.FlowMessage.NormalizedType} value */
proto.flowmessageenriched.FlowMessage.prototype.setNormalized = function(value) {
  jspb.Message.setProto3EnumField(this, 92, value);
};


/**
 * optional string SrcIfName = 93;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcifname = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 93, ""));
};


/** @param {string} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcifname = function(value) {
  jspb.Message.setProto3StringField(this, 93, value);
};


/**
 * optional string SrcIfDesc = 94;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcifdesc = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 94, ""));
};


/** @param {string} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcifdesc = function(value) {
  jspb.Message.setProto3StringField(this, 94, value);
};


/**
 * optional uint32 SrcIfSpeed = 95;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getSrcifspeed = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 95, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setSrcifspeed = function(value) {
  jspb.Message.setProto3IntField(this, 95, value);
};


/**
 * optional string DstIfName = 96;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstifname = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 96, ""));
};


/** @param {string} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstifname = function(value) {
  jspb.Message.setProto3StringField(this, 96, value);
};


/**
 * optional string DstIfDesc = 97;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstifdesc = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 97, ""));
};


/** @param {string} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstifdesc = function(value) {
  jspb.Message.setProto3StringField(this, 97, value);
};


/**
 * optional uint32 DstIfSpeed = 98;
 * @return {number}
 */
proto.flowmessageenriched.FlowMessage.prototype.getDstifspeed = function() {
  return /** @type {number} */ (jspb.Message.getFieldWithDefault(this, 98, 0));
};


/** @param {number} value */
proto.flowmessageenriched.FlowMessage.prototype.setDstifspeed = function(value) {
  jspb.Message.setProto3IntField(this, 98, value);
};


/**
 * optional string Peer = 99;
 * @return {string}
 */
proto.flowmessageenriched.FlowMessage.prototype.getPeer = function() {
  return /** @type {string} */ (jspb.Message.getFieldWithDefault(this, 99, ""));
};


/** @param {string} value */
proto.flowmessageenriched.FlowMessage.prototype.setPeer = function(value) {
  jspb.Message.setProto3StringField(this, 99, value);
};


