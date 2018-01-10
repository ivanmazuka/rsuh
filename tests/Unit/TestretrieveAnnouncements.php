<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestretrieveAnnouncements extends TestCase
{
    public function testExample()
    {
        $this->seeInDatabase('announcements');
        $this->visit('/da')
            ->see('id');
    }
}
