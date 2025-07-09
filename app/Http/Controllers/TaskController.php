<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Repository\TaskRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    private TaskRepository $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    function getTasks(): JsonResponse
    {
        $response = $this->repository->getAll();
        return response()->json($response, Response::HTTP_OK);
    }

    function createTask(TaskRequest $request): JsonResponse
    {
        $task = $this->repository->create($request->validated());
        return response()->json($task, Response::HTTP_CREATED);
    }
}
