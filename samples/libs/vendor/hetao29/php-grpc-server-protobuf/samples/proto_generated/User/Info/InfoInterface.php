<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: src/info.proto

namespace User\Info;

use Spiral\RoadRunner\GRPC;

interface InfoInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "User.Info.Info";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param LoginRequest $in
    * @return LoginResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function login(GRPC\ContextInterface $ctx, LoginRequest $in): LoginResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param LogoutRequest $in
    * @return LogoutResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function logout(GRPC\ContextInterface $ctx, LogoutRequest $in): LogoutResponse;
}
