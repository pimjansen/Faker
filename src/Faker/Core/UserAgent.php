<?php

declare(strict_types=1);

namespace Faker\Core;

use Faker\Extension\Helper;
use Faker\Provider\UserAgentExtension;

final class UserAgent implements UserAgentExtension
{
    // /** @var array|string[] */
    // private array $userAgents = ['firefox', 'chrome', 'internetExplorer', 'opera', 'safari'];

    /** @var array|string[] */
    private array $windowsPlatformTokens = [
        'Windows NT 6.2', 'Windows NT 6.1', 'Windows NT 6.0', 'Windows NT 5.2', 'Windows NT 5.1',
        'Windows NT 5.01', 'Windows NT 5.0', 'Windows NT 4.0', 'Windows 98; Win 9x 4.90', 'Windows 98',
        'Windows 95', 'Windows CE',
    ];

    /** @var array|string[] */
    private array $linuxProcessor = ['i686', 'x86_64'];

    /** @var array|string[] */
    private array $macProcessor = ['Intel', 'PPC', 'U; Intel', 'U; PPC'];

    //** @var array|string[] */
    private array $lang = ['en-US', 'sl-SI'];

    /**
     * Generates a mac or linux processor type
     */
    public function processor(string $type): string
    {
        return Helper::randomElement([
            fn () => $this->macProcessor(),
            fn () => $this->linuxProcessor(),
        ])();
    }

    /**
     * Generate mac processor
     */
    public function macProcessor(): string
    {
        return Helper::randomElement($this->macProcessor);
    }

    /**
     * Generate linux processor
     */
    public function linuxProcessor(): string
    {
        return Helper::randomElement($this->linuxProcessor);
    }

    /**
     * Generate a random user agent
     *
     * @example 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
     */
    public function userAgent(): string
    {
        $userAgentName = Helper::randomElement($this->userAgents);

        return static::$userAgentName();
    }

    /**
     * Generate Chrome user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
     */
    public function chrome(): string
    {
        $number = new Number();
        $saf = $number->numberBetween(531, 536) . $number->numberBetween(0, 2);

        $platforms = [
            sprintf(
                '(%s) AppleWebKit/%s (KHTML, like Gecko) Chrome/%d.0.%d.0 Mobile Safari/%s',
                $this->linuxPlatformToken(),
                $saf,
                $number->numberBetween(36, 40),
                $number->numberBetween(800, 899),
                $saf
            ),
            sprintf(
                '(%s) AppleWebKit/%s (KHTML, like Gecko) Chrome/%d.0.%d.0 Mobile Safari/%s',
                $this->windowsPlatformToken(),
                $saf,
                $number->numberBetween(36, 40),
                $number->numberBetween(800, 899),
                $saf
            ),
            sprintf(
                '(%s) AppleWebKit/%s (KHTML, like Gecko) Chrome/%d.0.%d.0 Mobile Safari/%s',
                $this->macPlatformToken(),
                $saf,
                $number->numberBetween(36, 40),
                $number->numberBetween(800, 899),
                $saf
            )
        ];

        return 'Mozilla/5.0 ' . Helper::randomElement($platforms);
    }

    /**
     * Generate Firefox user agent
     *
     * @example 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
     */
    public function firefox(): string
    {
        //@todo
    }

    /**
     * Generate Safari user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
     */
    public function safari(): string
    {
        //@todo
    }

    /**
     * Generate Opera user agent
     *
     * @example 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
     */
    public function opera(): string
    {
        //@todo
    }

    /**
     * Generate Internet Explorer user agent
     *
     * @example 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
     */
    public function internetExplorer(): string
    {
        //@todo
    }

    /**
     * Returns a windows/mac/linux platform token
     */
    public function platformToken(string $platform): string
    {
        //@todo
    }

    public function windowsPlatformToken(): string
    {
        //@todo
    }

    public function macPlatformToken(): string
    {
        //@todo
    }

    public function linuxPlatformToken(): string
    {
        //@todo
    }
}
