<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.blurb', 'This is what shows on the home page.');
        $this->migrator->add('general.cta_text', 'Call to Action');
    }
};
