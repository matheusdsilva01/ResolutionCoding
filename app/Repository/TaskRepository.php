<?php

namespace App\Repository;

use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class TaskRepository
{
    const PAGINATION_SIZE = 10;
    private Builder $query;
    public function __construct()
    {
        $this->query = Task::query();
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->query->paginate(self::PAGINATION_SIZE);
    }

    public function get(int $id): Task
    {
        return $this->query->findOrFail($id);
    }

    function create(array $data): Task
    {
        return Task::query()->create($data);
    }

    public function delete(int $id): bool
    {
        return $this->query->find($id)->delete();
    }

    public function update(int $id, array $payload): Task
    {
        $task = $this->query->findOrFail($id);
        $task->update($payload);
        return $task->refresh();
    }
}
