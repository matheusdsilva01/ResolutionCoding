<?php

namespace App\Repository;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpFoundation\Response;

class TaskRepository
{
    const PAGINATION_SIZE = 10;
    private Builder $query;
    public function __construct()
    {
        $this->query = Task::query();
    }

    function create(array $data): Task
    {
        return Task::query()->create($data);
    }

    public function getAll(): LengthAwarePaginator
    {
        return $this->query->paginate(self::PAGINATION_SIZE);
    }

    public function delete(int $id): bool
    {
        return $this->query->find($id)->delete();
    }
}
