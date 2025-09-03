<?php

use Binaryk\LaravelRestify\MCP\RestifyServer;
use Laravel\Mcp\Server\Facades\Mcp;

Mcp::web('restify', RestifyServer::class);
