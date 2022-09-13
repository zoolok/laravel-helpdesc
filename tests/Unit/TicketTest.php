<?php

namespace Tests\Unit;

use App\Models\Ticket;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TicketTest extends TestCase
{
   // use RefreshDatabase;
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_is_new()
    {
        $this->seed();
        $ticket = Ticket::factory()->create([
            'status' => 0,
        ]);
        $this->assertTrue($ticket->isNew());
    }

    public function test_is_not_new()
    {
        $this->seed();
        $ticket = Ticket::factory()->create([
            'status' => 1,
        ]);
        $this->assertFalse($ticket->isNew());
    }
}
