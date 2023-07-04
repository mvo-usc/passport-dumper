<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/proto/passport.proto

namespace USC\Passport;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>passport.UserInfo</code>
 */
class UserInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>string locale = 2;</code>
     */
    protected $locale = '';
    /**
     * Generated from protobuf field <code>repeated string roles = 3;</code>
     */
    private $roles;
    /**
     * Generated from protobuf field <code>repeated .passport.UserAction actions = 4;</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *     @type string $locale
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $roles
     *     @type array<\USC\Passport\UserAction>|\Google\Protobuf\Internal\RepeatedField $actions
     * }
     */
    public function __construct($data = NULL) {
        \USC\Passport\Metadata\Passport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, False);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string locale = 2;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Generated from protobuf field <code>string locale = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Generated from protobuf field <code>repeated string roles = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .passport.UserAction actions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated .passport.UserAction actions = 4;</code>
     * @param array<\USC\Passport\UserAction>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \USC\Passport\UserAction::class);
        $this->actions = $arr;

        return $this;
    }

}

