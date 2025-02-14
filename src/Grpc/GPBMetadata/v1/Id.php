<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: global/v1/id.proto

namespace Xhtkyy\IdGenerator\Grpc\GPBMetadata\v1;

class Id
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Xhtkyy\IdGenerator\Grpc\GPBMetadata\Kratos\Errors\Errors::initOnce();
        \Xhtkyy\IdGenerator\Grpc\GPBMetadata\Validate\Validate::initOnce();
        \Xhtkyy\IdGenerator\Grpc\GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

global/v1/id.proto	global.v1validate/validate.protogoogle/api/annotations.protogoogle/protobuf/timestamp.proto"�
ID
data (	*
Secret
	signature (	
nonce (	�
Request;
	namespace (	B(�B%r#2!^[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*$
domain (	B�Brh$
format (2.global.v1.ID.Format 
type (2.global.v1.ID.Type
count (
extra ($
secret (2.global.v1.ID.Secret�
Response
payload (2.global.v1.ID$
format (2.global.v1.ID.Format9
	namespace (	B&�B#r!2^[a-zA-Z0-9]+(\\.[a-zA-Z0-9]+)*$
domain (	B�Brh-
	timestamp (2.google.protobuf.Timestamp
extra ($
secret (2.global.v1.ID.Secret 
type (2.global.v1.ID.Type�
Error\'
error (2.global.v1.ID.Error.Type
reason (	"�
Type
SECRET_INVALID �E�
NAMESPACE_INVALID�E�
DOMAIN_INVALID�E�
FORMAT_INVALID�E�
TYPE_INVALID�E�
COUNT_TOO_LARGE�E��E�" 
Type

RANDOM 
SEQUENCE"K
Format
RAW 	
INT64

BASE64
BASE64X

BASE36
HASH2g
Builder\\
NextID.global.v1.ID.Request.global.v1.ID.Response"#���/v1/id/{domain}/{namespace}B^Zglobal/v1;v1�$Xhtkyy\\IdGenerator\\Grpc\\Global\\v1\\Id�&Xhtkyy\\IdGenerator\\Grpc\\GPBMetadata\\v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

