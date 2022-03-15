<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) Manfred Gipp
 *
 * @license LGPL-3.0-or-later
 */

namespace gww-its\CiteBundle\Tests;

use gww-its\CiteBundle\ContaoCiteBundle;
use PHPUnit\Framework\TestCase;

class ContaoCiteBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoCiteBundle();

        $this->assertInstanceOf('gww-its\CiteBundle\ContaoCiteBundle', $bundle);
    }
}
