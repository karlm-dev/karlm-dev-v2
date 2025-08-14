<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    public ?string $site_name = null;
    public ?string $site_description = null;
    public ?string $copyright_notice = null;
    public ?string $footer_text = null;

    public ?string $email = null;
    public ?string $phone = null;
    public ?string $address = null;

    public ?string $current_company_name = null;
    public ?string $current_company_url = null;
    public ?string $title = null;

    public array $links = [];

    public static function group(): string
    {
        return 'general';
    }
}
