<?php

namespace Http;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_should_be_get_all_tasks()
    {
        // Prepare
        $task = Task::factory()->create();
        // Act
        $response = $this->get(route('task.all'));
        // Assert
        $response->assertJsonFragment($task->toArray());
    }

    public function test_should_be_create_a_task()
    {
        // Prepare
        $task = [
            'title' => 'Create an dockerfile to run an API in a container',
            'content' =>
                'Create a dockerfile to run an API in a container.
                The dockerfile should include the necessary steps to install dependencies,
                copy the application code, and expose the required ports for the API to function properly.',
        ];
        // Act
        $response = $this->post(route('task.create', $task));
        // Assert
        $response->assertCreated();
    }

    public function test_should_be_update_a_task()
    {
        // Prepare
        $task = Task::factory()->create();
        // Act
        $payload = [
            'content' => 'Updated content for the task.',
        ];
        $this->put(route('task.update', $task->id), $payload);
        // Assert
        $this->assertDatabaseHas('tasks', $payload);        // Prepare
        $payload = [
            'title' => 'Updated Task Title',
        ];
        $this->put(route('task.update', $task->id), $payload);
        // Assert
        $this->assertDatabaseHas('tasks', $payload);
    }

    public function test_should_be_delete_a_task()
    {
        // Prepare
        $task = Task::factory()->create();
        // Act
        $this->delete(route('task.delete', $task));
        // Assert
        $this->assertDatabaseMissing('tasks', $task->toArray());
    }
}
