<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_that_one_is_one(): void
    {
        $this->assertEquals(1, 1);
    }

    public function test_that_list_is_not_empty(): void
    {
        $this->assertNotEmpty([1, 2, 3]);
    }

    public function test_that_is_json(): void
    {
        $this->assertJson('{"message": "OK"}');
    }
}
