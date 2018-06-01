<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    /**
     * A super basic test.
     *
     * @return void
     */
    public function testCreateAndDelete()
    {
        $post = new Post();
        $post->setAttribute('subject', 'This is a test');
        $post->save();

        $this->assertTrue($post->exists());
        $this->assertNotEmpty($post->getAttribute('id'));

        $this->assertNotFalse($post->delete());
    }
}
