<?php

namespace Tests\Unit;

use App\Models\Phone;
use App\Models\User;
use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class UserTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function test_a_user_has_a_phone()
    {
        $user = factory(User::class)->create();
        $phone = factory(Phone::class)->create(['user_id' => $user->id]);

        // Method 1:
        $this->assertInstanceOf(Phone::class, $user->phone);

        // Method 2:
        $this->assertEquals(1, $user->phone->count());
    }

}
