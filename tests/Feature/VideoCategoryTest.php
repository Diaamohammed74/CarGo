<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\VideoCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideoCategoryTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/v1/videoCategories';
    protected string $tableName = 'videoCategories';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateVideoCategory(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = VideoCategory::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllVideoCategoriesSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        VideoCategory::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(VideoCategory::find(rand(1, 5))->name);
    }

    public function testViewAllVideoCategoriesByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        VideoCategory::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateVideoCategoryValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewVideoCategoryData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        VideoCategory::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(VideoCategory::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateVideoCategory(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        VideoCategory::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteVideoCategory(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        VideoCategory::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, VideoCategory::count());
    }
    
}
