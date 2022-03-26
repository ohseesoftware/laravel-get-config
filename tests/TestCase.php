<?php

namespace OhSeeSoftware\LaravelGetConfig\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [\OhSeeSoftware\LaravelGetConfig\Tests\TestServiceProvider::class];
    }
}
