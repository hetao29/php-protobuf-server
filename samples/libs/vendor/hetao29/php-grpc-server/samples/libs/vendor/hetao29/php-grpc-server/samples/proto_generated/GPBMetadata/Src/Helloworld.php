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
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac1010a147372632f68656c6c6f776f726c642e70726f746f120f546573" .
            "742e48656c6c6f776f726c64221c0a0c48656c6c6f52657175657374120c" .
            "0a046e616d65180120012809221d0a0a48656c6c6f5265706c79120f0a07" .
            "6d65737361676518012001280932530a074772656574657212480a085361" .
            "7948656c6c6f121d2e546573742e48656c6c6f776f726c642e48656c6c6f" .
            "526571756573741a1b2e546573742e48656c6c6f776f726c642e48656c6c" .
            "6f5265706c792200620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

