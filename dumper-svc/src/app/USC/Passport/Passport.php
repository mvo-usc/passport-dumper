<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/proto/passport.proto

namespace USC\Passport;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>passport.Passport</code>
 */
class Passport extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.passport.Header header = 1;</code>
     */
    protected $header = null;
    /**
     * Generated from protobuf field <code>.passport.UserInfo user_info = 2;</code>
     */
    protected $user_info = null;
    /**
     * Generated from protobuf field <code>.passport.DeviceInfo device_info = 3;</code>
     */
    protected $device_info = null;
    /**
     * Generated from protobuf field <code>.passport.Integrity user_integrity = 4;</code>
     */
    protected $user_integrity = null;
    /**
     * Generated from protobuf field <code>.passport.Integrity device_integrity = 5;</code>
     */
    protected $device_integrity = null;
    /**
     * Generated from protobuf field <code>int64 created = 6;</code>
     */
    protected $created = 0;
    /**
     * Generated from protobuf field <code>int64 expires = 7;</code>
     */
    protected $expires = 0;
    /**
     * Generated from protobuf field <code>.passport.Source source = 8;</code>
     */
    protected $source = 0;
    /**
     * Generated from protobuf field <code>.passport.PassportAuthenticationLevel authentication_level = 9;</code>
     */
    protected $authentication_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \USC\Passport\Header $header
     *     @type \USC\Passport\UserInfo $user_info
     *     @type \USC\Passport\DeviceInfo $device_info
     *     @type \USC\Passport\Integrity $user_integrity
     *     @type \USC\Passport\Integrity $device_integrity
     *     @type int|string $created
     *     @type int|string $expires
     *     @type int $source
     *     @type int $authentication_level
     * }
     */
    public function __construct($data = NULL) {
        \USC\Passport\Metadata\Passport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.passport.Header header = 1;</code>
     * @return \USC\Passport\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.passport.Header header = 1;</code>
     * @param \USC\Passport\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \USC\Passport\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.UserInfo user_info = 2;</code>
     * @return \USC\Passport\UserInfo|null
     */
    public function getUserInfo()
    {
        return $this->user_info;
    }

    public function hasUserInfo()
    {
        return isset($this->user_info);
    }

    public function clearUserInfo()
    {
        unset($this->user_info);
    }

    /**
     * Generated from protobuf field <code>.passport.UserInfo user_info = 2;</code>
     * @param \USC\Passport\UserInfo $var
     * @return $this
     */
    public function setUserInfo($var)
    {
        GPBUtil::checkMessage($var, \USC\Passport\UserInfo::class);
        $this->user_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.DeviceInfo device_info = 3;</code>
     * @return \USC\Passport\DeviceInfo|null
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * Generated from protobuf field <code>.passport.DeviceInfo device_info = 3;</code>
     * @param \USC\Passport\DeviceInfo $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \USC\Passport\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.Integrity user_integrity = 4;</code>
     * @return \USC\Passport\Integrity|null
     */
    public function getUserIntegrity()
    {
        return $this->user_integrity;
    }

    public function hasUserIntegrity()
    {
        return isset($this->user_integrity);
    }

    public function clearUserIntegrity()
    {
        unset($this->user_integrity);
    }

    /**
     * Generated from protobuf field <code>.passport.Integrity user_integrity = 4;</code>
     * @param \USC\Passport\Integrity $var
     * @return $this
     */
    public function setUserIntegrity($var)
    {
        GPBUtil::checkMessage($var, \USC\Passport\Integrity::class);
        $this->user_integrity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.Integrity device_integrity = 5;</code>
     * @return \USC\Passport\Integrity|null
     */
    public function getDeviceIntegrity()
    {
        return $this->device_integrity;
    }

    public function hasDeviceIntegrity()
    {
        return isset($this->device_integrity);
    }

    public function clearDeviceIntegrity()
    {
        unset($this->device_integrity);
    }

    /**
     * Generated from protobuf field <code>.passport.Integrity device_integrity = 5;</code>
     * @param \USC\Passport\Integrity $var
     * @return $this
     */
    public function setDeviceIntegrity($var)
    {
        GPBUtil::checkMessage($var, \USC\Passport\Integrity::class);
        $this->device_integrity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created = 6;</code>
     * @return int|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Generated from protobuf field <code>int64 created = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkInt64($var);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expires = 7;</code>
     * @return int|string
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Generated from protobuf field <code>int64 expires = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpires($var)
    {
        GPBUtil::checkInt64($var);
        $this->expires = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.Source source = 8;</code>
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Generated from protobuf field <code>.passport.Source source = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkEnum($var, \USC\Passport\Source::class);
        $this->source = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.passport.PassportAuthenticationLevel authentication_level = 9;</code>
     * @return int
     */
    public function getAuthenticationLevel()
    {
        return $this->authentication_level;
    }

    /**
     * Generated from protobuf field <code>.passport.PassportAuthenticationLevel authentication_level = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setAuthenticationLevel($var)
    {
        GPBUtil::checkEnum($var, \USC\Passport\PassportAuthenticationLevel::class);
        $this->authentication_level = $var;

        return $this;
    }

}

