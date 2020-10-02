<?php

namespace Rlaravel\StrExtends\Test\Feature;

use Illuminate\Support\Str;
use Rlaravel\StrExtends\Test\TestCase;

/**
 * Class StrTest
 * @package Rlaravel\StrExtends\Test\Feature
 */
class StrTest extends TestCase
{
    public function test_a_text_string_can_be_masked()
    {
        // 1. Given
        $str = "3013561732";

        // 2. Then
        $processed = Str::mask($str, 0, 4);

        // 3. When
        $this->assertEquals('******1732', $processed);
    }

    public function test_a_text_string_can_be_masked_with_helper()
    {
        // 1. Given
        $str = "3013561732";

        // 2. Then
        $processed = \str_mask($str, 0, 4);

        // 3. When
        $this->assertEquals('******1732', $processed);
    }
}