<?php

<<<<<<< HEAD
test('that true is true', function () {
    expect(true)->toBeTrue();
});
=======
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
}
>>>>>>> 289a69ce825ce29d3ef4d7e5bcc074aaf3c9351a
