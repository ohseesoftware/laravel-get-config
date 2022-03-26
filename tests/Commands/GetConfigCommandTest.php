<?php

namespace OhSeeSoftware\LaravelGetConfig\Tests;

class GetConfigCommandTest extends TestCase
{
    /** @test */
    public function it_returns_string_config_value()
    {
        // Given
        config(['hello' => 'world']);

        // When/Then
        $this->artisan('config:get hello')->expectsOutput('"world"');
    }

    /** @test */
    public function it_returns_numeric_config_value()
    {
        // Given
        config(['hello' => 123]);

        // When/Then
        $this->artisan('config:get hello')->expectsOutput('123');
    }

    /** @test */
    public function it_returns_nested_config_value()
    {
        // Given
        config([
            'hello' => ['world' => 'foo'],
        ]);

        // When/Then
        $this->artisan('config:get hello.world')->expectsOutput('"foo"');
    }

    /** @test */
    public function it_returns_object_config_value()
    {
        // Given
        config([
            'hello' => ['world' => 'foo'],
        ]);

        // When/Then
        $expected = json_encode([
            'world' => 'foo'
        ], JSON_PRETTY_PRINT);

        $this->artisan('config:get hello')->expectsOutput($expected);
    }
}
