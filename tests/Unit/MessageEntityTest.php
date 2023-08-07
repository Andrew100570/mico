<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Message;

class MessageEntityTest extends TestCase
{

    private $message;

    protected function setUp() : void
    {
        parent::setUp();

        $this->message = Message::factory()->create();
    }


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_empty_objects()
    {
        $mess = new Message();

        $this->assertEquals(is_object($this->message),  is_object(Message::deserialize($mess->serialize($mess))));
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_objects()
    {
        $mess = new Message();
        $mess->id   = fake()->randomNumber(5, false);
        $mess->text = fake()->title();
        $mess->created_at =  now();
        $mess->updated_at =  now();

        $this->assertEquals(strtotime($this->message->created_at->toDateTimeString()),   strtotime(Message::deserialize($mess->serialize($mess))->created_at));
    }
}
