<?php

namespace App\Restify;

use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;
use Binaryk\LaravelRestify\MCP\Concerns\HasMcpTools;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Binaryk\LaravelRestify\Repositories\Repository as RestifyRepository;

abstract class Repository extends RestifyRepository
{
    use HasMcpTools;

    /**
     * Build a "show" and "index" query for the given repository.
     */
    public static function mainQuery(RestifyRequest $request, Builder|Relation $query): Builder|Relation
    {
        return $query;
    }

    /**
     * Build an "index" query for the given repository.
     */
    public static function indexQuery(RestifyRequest $request, Builder|Relation $query): Builder|Relation
    {
        return $query;
    }

    /**
     * Build a "show" query for the given repository.
     */
    public static function showQuery(RestifyRequest $request, Builder|Relation $query): Builder|Relation
    {
        return $query;
    }

    public function mcpAllowsIndex(): bool
    {
        return true;
    }

    public function mcpAllowsShow(): bool
    {
        return true;
    }

    public function mcpAllowsStore(): bool
    {
        return true;
    }

    public function mcpAllowsUpdate(): bool
    {
        return false;
    }

    public function mcpAllowsDelete(): bool
    {
        return false;
    }

    public function mcpAllowsActions(): bool
    {
        return false;
    }

    public function mcpAllowsGetters(): bool
    {
        return false;
    }

}
