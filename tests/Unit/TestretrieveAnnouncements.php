<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestretrieveAnnouncements extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->seeInDatabase('announcements');
        $this->visit('/da')
            ->see('id:2');
    }
}
