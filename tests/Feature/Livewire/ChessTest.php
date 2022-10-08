<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Chess;
use App\Http\Livewire\Home;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ChessTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Chess::class);

        $component->assertStatus(200);
    }
}
