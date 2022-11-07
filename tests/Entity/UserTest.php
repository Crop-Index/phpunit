<?php

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     *
     * @return array
     */
    public function testPush(array $stack) : array
    {
        array_push($stack, 'New Value');
        $this->assertSame('New Value', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     *
     * @return void
     */
    public function testPop($stack)
    {
        array_pop($stack);
        $this->assertEmpty($stack);
    }
}