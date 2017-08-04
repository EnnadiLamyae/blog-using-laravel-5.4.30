<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;
use Carbon\Carbon;

class ExampleTest extends TestCase
{

    use DatabaseTransaction;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at'=>Carbon::now()->subMonth()
        ]);

        $post =Post::archives();

        $this->assertCount(2,$post);



    }
}
