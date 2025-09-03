<?php

namespace App\Restify;

use App\Models\User;
use Binaryk\LaravelRestify\Attributes\Model;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

#[Model(User::class)]
class UserRepository extends Repository
{
    public function fields(RestifyRequest $request): array
    {
        return [
            field('name')->rules('required'),

            field('email')->storingRules('required', 'unique:users')->messages([
                'required' => 'This field is required.',
            ]),
        ];
    }
}
