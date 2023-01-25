<?php

namespace AbnDevs\Modules\Tests;

use AbnDevs\Modules\Contracts\RepositoryInterface;
use AbnDevs\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
