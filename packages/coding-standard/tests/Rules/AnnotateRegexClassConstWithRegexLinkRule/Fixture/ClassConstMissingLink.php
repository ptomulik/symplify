<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\AnnotateRegexClassConstWithRegexLinkRule\Fixture;

final class ClassConstMissingLink
{
    /**
     * @var string
     */
    public const NAME_REGEX = '#hey_you#';
}
