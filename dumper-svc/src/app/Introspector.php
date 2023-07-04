<?php

namespace USC\Introspector;

use USC\Passport\Passport;
use USC\Passport\PassportAuthenticationLevel;

final class Introspector
{
    const PASSPORT_HEADER = 'x-passport';

    /**
     * @var Passport $passport
     */
    private $passport;

    public function __construct(string $header)
    {
        $passport = new \USC\Passport\Passport();
        $passport->mergeFromString(base64_decode($header));

        $this->passport = $passport;
    }

    /**
     * @return string
     */
    public function getAuthenticationLevel(): string
    {
        return PassportAuthenticationLevel::name(
            $this->passport->getAuthenticationLevel()
        );
    }

    /**
     * @return string
     */
    public function getAccountID(): string
    {
        if ($this->passport->getUserInfo() === null) {
            return "";
        }

        return $this->passport->getUserInfo()->getAccountID();
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->passport->getSource();
    }

    /**
     * @return string
     */
    public function getAccountLocale(): string
    {
        if ($this->passport->getUserInfo() === null) {
            return "";
        }

        return $this->passport->getUserInfo()->getLocale();
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        if ($this->passport->getUserInfo() === null) {
            return [];
        }

        $roles = $this->passport->getUserInfo()->getRoles();

        if ($roles->count() == 0) {
            return [];
        }

        $ir = [];
        foreach ($roles->getIterator() as $role) {
            $ir[] = $role;
        }

        return $ir;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->passport->getCreated();
    }

    /**
     * @return string
     */
    public function getDeviceInfoIP(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getIp();
    }

    /**
     * @return string
     */
    public function getDeviceInfoOs(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getOs();
    }

    /**
     * @return string
     */
    public function GetDeviceInfoPlatform(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getPlatform();
    }

    /**
     * @return string
     */
    public function GetDeviceInfoBrowser(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }
        
        return $this->passport->getDeviceInfo()->getBrowser();
    }

    /**
     * @return string
     */
    public function GetDeviceInfoEngine(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getEngine();
    }

    /**
     * @return string
     */
    public function GetDeviceInfoLocale(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getLocale();
    }

    /**
     * @return string
     */
    public function GetDeviceInfoIsBot(): string
    {
        if ($this->passport->getDeviceInfo() === null) {
            return "";
        }

        return $this->passport->getDeviceInfo()->getIsBot();
    }

    public function toArray(): array
    {
        return [
            'authentication level' => $this->getAuthenticationLevel(),
            'account id' => $this->getAccountID(),
            'source' => $this->getSource(),
            'account locale' => $this->getAccountLocale(),
            'roles' => $this->getRoles(),
            'created at' => $this->getCreatedAt(),
            'device info' => [
                'ip' => $this->getDeviceInfoIP(),
                'os' => $this->getDeviceInfoOs(),
                'platform' => $this->GetDeviceInfoPlatform(),
                'browser' => $this->GetDeviceInfoBrowser(),
                'engine' => $this->GetDeviceInfoEngine(),
                'locale' => $this->GetDeviceInfoLocale(),
                'is bot' => $this->GetDeviceInfoIsBot(),
            ],
        ];
    }
}
