<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\FixtureBuilder\Denormalizer;

use Nelmio\Alice\ParameterBag;
use Nelmio\Alice\Throwable\DenormalizationThrowable;

interface ParameterBagDenormalizerInterface
{
    /**
     * More specific version of {@see \Nelmio\Alice\FixtureBuilder\BuilderInterface}.
     *
     * Denormalizes the parsed data or a subset of it parsed into a list of parameters.
     *
     * @param array $data PHP data coming from the parser
     *
     * @throws DenormalizationThrowable
     *
     * @return ParameterBag
     */
    public function denormalize(array $data): ParameterBag;
}
