<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/helloworld.proto

namespace GPBMetadata\Src;

class Helloworld
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
src/helloworld.protoTest.Helloworld"
HelloRequest
name (	"

HelloReply
message (	"^
ServerStreamingEchoRequest
message (	
message_count (
message_interval (".
ServerStreamingEchoResponse
message (	2�
GreeterF
SayHello.Test.Helloworld.HelloRequest.Test.Helloworld.HelloReplyI
	EchoAbort.Test.Helloworld.HelloRequest.Test.Helloworld.HelloReply" r
ServerStreamingEcho+.Test.Helloworld.ServerStreamingEchoRequest,.Test.Helloworld.ServerStreamingEchoResponse0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

