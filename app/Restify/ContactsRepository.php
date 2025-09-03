<?php

namespace App\Restify;

use App\Models\Contact;
use Binaryk\LaravelRestify\Attributes\Model;
use Binaryk\LaravelRestify\Fields\BelongsTo;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

#[Model(Contact::class)]
class ContactsRepository extends Repository
{
    public static function related(): array
    {
        return [
            BelongsTo::make('organization', OrganizationRepository::class)->searchable('name'),
        ];
    }

    public function fields(RestifyRequest $request): array
    {
        return [
            id(),

            field('organization_id')->rules('required', 'exists:organizations,id'),

            field('name')->searchable()->readonly(),

            field('email')->hideFromIndex(),

            field('first_name')
                ->required()
                ->hideFromIndex(),

            field('last_name')
                ->required()
                ->hideFromIndex(),

            field('city')->searchable(),

            field('phone')->searchable(),

            field('address')->hideFromIndex(),

            field('state')->hideFromIndex(),

            field('country')->hideFromIndex(),

            field('postal_code')->hideFromIndex(),
        ];
    }
}
