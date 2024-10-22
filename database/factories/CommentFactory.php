<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => fake()->sentence(),
        ];
    }

    public function withChildren(int $count = 1)
    {
        return $this->afterCreating(function ($comment) use ($count) {
            Comment::factory()->count($count)->create([
                'parent_id' => $comment->id,
            ]);
        });
    }

    public function withGrandChildren(int $count = 1)
    {
        return $this->afterCreating(function ($comment) use ($count) {
            $comment->children->each(function ($child) use ($count) {
                Comment::factory()
                    ->count($count)
                    ->create([
                        'parent_id' => $child->id,
                    ]);
            });
        });
    }
}
