<?php

namespace DansMaCulotte\Contentful\Tests;

use DansMaCulotte\Contentful\ContentfulServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ContentfulServiceProvider::class
        ];
    }
}
