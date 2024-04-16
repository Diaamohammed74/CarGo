<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\MechanicalAvailableTime;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MechanicalAvailableTimeTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/v1/mechanicalAvailableTimes';
    protected string $tableName = 'mechanicalAvailableTimes';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateMechanicalAvailableTime(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = MechanicalAvailableTime::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllMechanicalAvailableTimesSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        MechanicalAvailableTime::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(MechanicalAvailableTime::find(rand(1, 5))->name);
    }

    public function testViewAllMechanicalAvailableTimesByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        MechanicalAvailableTime::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateMechanicalAvailableTimeValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewMechanicalAvailableTimeData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        MechanicalAvailableTime::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(MechanicalAvailableTime::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateMechanicalAvailableTime(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        MechanicalAvailableTime::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteMechanicalAvailableTime(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        MechanicalAvailableTime::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, MechanicalAvailableTime::count());
    }
    
}
