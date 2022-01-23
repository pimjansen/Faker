<?php

namespace Faker\Provider;

use Faker\Extension\Extension;

interface UserAgentExtension extends Extension
{
    public const PROCESSOR_MAC = 'mac';

    public const PROCESSOR_LINUX = 'linux';

    public const BROWSER_CHROME = 'chrome';

    public const BROWSER_FIREFOX = 'firefox';

    public const BROWSER_SAFARI = 'safari';

    public const BROWSER_OPERA = 'opera';

    public const BROWSER_INTERNET_EXPLORER = 'internetExplorer';

    /**
     * Generates a mac or linux processor type
     */
    public function processor(string $type): string;

    /**
     * Generate mac processor
     */
    public function macProcessor(): string;

    /**
     * Generate linux processor
     */
    public function linuxProcessor(): string;

    /**
     * Generate a random user agent
     *
     * @example 'Mozilla/5.0 (Windows CE) AppleWebKit/5350 (KHTML, like Gecko) Chrome/13.0.888.0 Safari/5350'
     */
    public function userAgent(): string;

    /**
     * Generate Chrome user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; PPC Mac OS X 10_6_5) AppleWebKit/5312 (KHTML, like Gecko) Chrome/14.0.894.0 Safari/5312'
     */
    public function chrome(): string;

    /**
     * Generate Firefox user agent
     *
     * @example 'Mozilla/5.0 (X11; Linuxi686; rv:7.0) Gecko/20101231 Firefox/3.6'
     */
    public function firefox(): string;

    /**
     * Generate Safari user agent
     *
     * @example 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_7_1 rv:3.0; en-US) AppleWebKit/534.11.3 (KHTML, like Gecko) Version/4.0 Safari/534.11.3'
     */
    public function safari(): string;

    /**
     * Generate Opera user agent
     *
     * @example 'Opera/8.25 (Windows NT 5.1; en-US) Presto/2.9.188 Version/10.00'
     */
    public function opera(): string;

    /**
     * Generate Internet Explorer user agent
     *
     * @example 'Mozilla/5.0 (compatible; MSIE 7.0; Windows 98; Win 9x 4.90; Trident/3.0)'
     */
    public function internetExplorer(): string;

    /**
     * Returns a windows/mac/linux platform token
     */
    public function platformToken(string $platform): string;

    public function windowsPlatformToken(): string;

    public function macPlatformToken(): string;

    public function linuxPlatformToken(): string;
}
