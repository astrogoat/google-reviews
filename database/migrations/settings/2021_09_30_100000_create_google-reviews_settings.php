<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGoogleReviewsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('google-reviews.enabled', false);
        // $this->migrator->add('google-reviews.url', '');
        // $this->migrator->addEncrypted('google-reviews.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('google-reviews.enabled');
        // $this->migrator->delete('google-reviews.url');
        // $this->migrator->delete('google-reviews.access_token');
    }
}
