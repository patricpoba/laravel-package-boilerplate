<?php

namespace Qodehub\TicketingApp\Tests;

use Orchestra\Testbench\TestCase;
use Qodehub\TicketingApp\TicketingAppServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [TicketingAppServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
