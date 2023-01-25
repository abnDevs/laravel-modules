<?php

namespace AbnDevs\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use AbnDevs\Modules\Contracts\RepositoryInterface;
use AbnDevs\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
