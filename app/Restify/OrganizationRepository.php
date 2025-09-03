<?php

namespace App\Restify;

use App\Models\Organization;
use Binaryk\LaravelRestify\Attributes\Model;
use Binaryk\LaravelRestify\Fields\HasMany;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

#[Model(Organization::class)]
class OrganizationRepository extends Repository
{
    public static function related(): array
    {
        return [
            HasMany::make('contacts', ContactsRepository::class),
        ];
    }

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),

            field('name')->searchable()->required(),

            field('email')->hideFromIndex(),

            field('city')->searchable(),

            field('phone')->searchable(),

            field('address')->hideFromIndex(),

            field('state')->hideFromIndex(),

            field('country')->hideFromIndex(),

            field('postal_code')->hideFromIndex(),
        ];
    }
}
