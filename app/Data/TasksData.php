<?php

namespace App\Data;
use App\Models\TaskManagement;
use Spatie\LaravelData\Data;

class TasksData extends Data
{
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public string $status
    ) {
    }

    public static function fromModel(TaskManagement $task): self
    {
        return new self(
            $task->id,
            $task->title,
            $task->description ?? "",
            $task->status
        );
    }
}
