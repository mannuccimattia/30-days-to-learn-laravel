<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Model;

// class Job extends Model
class Job
{
    public static function all(): array
    {
        return [
            [
                "id" => 1,
                "title" => "Job Title 1",
                "salary" => '$ 50.000'
            ],
            [
                "id" => 2,
                "title" => "Job Title 2",
                "salary" => '$ 20.000'
            ],
            [
                "id" => 3,
                "title" => "Job Title 3",
                "salary" => '$ 30.000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) abort(404);

        return $job;
    }
}
