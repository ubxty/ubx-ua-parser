# Ubx UA Parser

A comprehensive User Agent parser for Laravel applications.

## Installation

```bash
composer require ubxty/ubx-ua-parser  
```

## Usage

```php
use Ubxty\UAParser\Facades\UAParser;

// Get platform
$platform = UAParser::getPlatform(); // android, ios, web, etc.

// Get browser
$browser = UAParser::getBrowser(); // chrome, firefox, in-app, etc.

// Detect bots
$isBot = UAParser::isBot();

// Get original UA string
$ua = UAParser::getOriginalUserAgent();

// Get device type
$device = UAParser::getDeviceType(); // phone, tablet, desktop, etc.
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --provider="Ubxty\UAParser\UAParserServiceProvider" --tag="config"
```

## Methods

- getPlatform(): string
- getBrowser(): string
- isBot(): bool
- getOriginalUserAgent(): ?string
- getDeviceType(): string
- getBrowserVersion(): string
- getPlatformVersion(): string

## License

MIT
