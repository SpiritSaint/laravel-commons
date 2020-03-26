<?php

use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->loadLaravelMigrations(['--database' => 'testing']);
        $this->loadMigrationsFrom([
            '--database' => 'testing',
            '--path' => realpath(dirname(__DIR__).'/tests/database/migrations'),
        ]);
        $this->withFactories(realpath(dirname(__DIR__) . '/tests/database/factories'));
    }

    /** @test */
    public function friendable_can_view_own_accepted_friends()
    {
        $sender    = createUser();
        $recipient = createUser();
    }
}
