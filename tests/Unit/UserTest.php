<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(1);
        $this->assertInternalType('int', $user->id);
    }
    public function testExample2()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInternalType('int', $user->id);
    }
    public function testExample3()
    {
        $user = User::inRandomOrder()->first();
        $this->assertInstanceOf('App\User', $user);
    }
}