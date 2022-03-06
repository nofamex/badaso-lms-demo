<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:fresh', ['--database' => 'testing']);
        $this->artisan('db:seed', ['--class' => "Database\Seeders\Badaso\BadasoSeeder", '--database' => 'testing']);

        $this->app['config']->set('badaso.database.prefix', 'badaso_');
        $this->app['config']->set('database.default', 'testing');
    }
}
