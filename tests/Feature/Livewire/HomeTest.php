<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Home;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Home::class);

        $component->assertStatus(200);
    }
}
