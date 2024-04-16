<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\WeekDay;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WeekDayTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/v1/weekDays';
    protected string $tableName = 'weekDays';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateWeekDay(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = WeekDay::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllWeekDaysSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        WeekDay::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(WeekDay::find(rand(1, 5))->name);
    }

    public function testViewAllWeekDaysByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        WeekDay::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateWeekDayValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewWeekDayData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        WeekDay::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(WeekDay::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateWeekDay(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        WeekDay::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteWeekDay(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        WeekDay::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, WeekDay::count());
    }
    
}
