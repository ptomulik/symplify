<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\NoTraitExceptItsMethodsPublicAndRequired\Fixture;

trait SomeTraitWithPrivateMethodRequired
{
    /**
     * @required
     */
    private function run()
    {
    }
}
