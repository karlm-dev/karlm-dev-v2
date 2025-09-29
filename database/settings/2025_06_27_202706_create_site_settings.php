<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'My Site');
        $this->migrator->add('general.site_description', 'My Site Description');
        $this->migrator->add('general.copyright_notice', '© 2025 My Site All Rights Reserved');
        $this->migrator->add('general.footer_text', 'Made with ❤️ using Laravel & Livewire.');
        $this->migrator->add('general.allow_resume_download', false);

        $this->migrator->add('general.first_name', 'John');
        $this->migrator->add('general.last_name', 'Doe');

        $this->migrator->add('general.website', 'https://example.com');
        $this->migrator->add('general.email', 'test@example.com');
        $this->migrator->add('general.phone', null);
        $this->migrator->add('general.address', null);

        $this->migrator->add('general.current_company_name', 'My Company');
        $this->migrator->add('general.current_company_url', 'https://mycompany.com');
        $this->migrator->add('general.title', 'Software Engineer');

        $this->migrator->add('general.links', []);
    }
};
