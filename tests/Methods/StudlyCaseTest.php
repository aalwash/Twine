<?php

namespace PHLAK\Twine\Tests;

use PHLAK\Twine;
use PHPUnit\Framework\TestCase;

class StudlyCaseTest extends TestCase
{
    public function test_it_can_convert_to_studly_case()
    {
        $string = new Twine\Str('john pinkerton');

        $studlyCase = $string->studlyCase();

        $this->assertInstanceOf(Twine\Str::class, $studlyCase);
        $this->assertEquals('JohnPinkerton', $studlyCase);
    }
}
