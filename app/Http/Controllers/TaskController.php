<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Repository\TaskRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    private TaskRepository $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    function viewAll(): View
    {
        $tasks = $this->repository->getAll();
        return view('home', compact('tasks'));
    }

    function create(TaskRequest $request): JsonResponse
    {
        $task = $this->repository->create($request->validated());
        return response()->json($task, Response::HTTP_CREATED);
    }

    function get(int $id): View
    {
        $task = $this->repository->get($id);
        return view('task', $task->toArray());
    }

    function update(UpdateTaskRequest $request, int $id): JsonResponse
    {
        $payload = $request->validated();
        return response()->json($this->repository->update($id, $payload), Response::HTTP_OK);
    }

    function delete(int $id): JsonResponse
    {
        $response = $this->repository->delete($id);
        return response()->json($response, RESPONSE::HTTP_NO_CONTENT);
    }
}
