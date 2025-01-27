<?php

namespace Ubxty\UAParser\Services;

use Jenssegers\Agent\Agent;

class UAParserService
{
    protected $agent;
    protected $userAgent;

    public function __construct($userAgent = null)
    {
        $this->userAgent = $userAgent;
        $this->agent = new Agent(null, $userAgent);
    }

    public function getPlatform()
    {
        $platform = strtolower($this->agent->platform());

        foreach (config('ua-parser.platforms') as $type => $patterns) {
            foreach ($patterns as $pattern) {
                if (preg_match("/$pattern/i", $platform)) {
                    return $type;
                }
            }
        }

        return 'web';
    }

    public function getBrowser()
    {
        $browser = strtolower($this->agent->browser());

        // Check in-app browsers first
        foreach (config('ua-parser.in_app_browsers') as $pattern) {
            if (preg_match("/$pattern/i", $this->userAgent)) {
                return 'in-app';
            }
        }

        // Check regular browsers
        foreach (config('ua-parser.browsers') as $type => $patterns) {
            foreach ($patterns as $pattern) {
                if (preg_match("/$pattern/i", $browser)) {
                    return $type;
                }
            }
        }

        return 'other';
    }

    public function isBot()
    {
        return $this->agent->isRobot();
    }

    public function getOriginalUserAgent()
    {
        return $this->userAgent;
    }

    public function getDeviceType()
    {
        return $this->agent->deviceType();
    }

    public function getBrowserVersion()
    {
        return $this->agent->version($this->agent->browser());
    }

    public function getPlatformVersion()
    {
        return $this->agent->version($this->agent->platform());
    }
}
