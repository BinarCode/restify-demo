# Laravel Restify Demo

A demonstration repository showcasing the capabilities of [Laravel Restify](https://github.com/BinarCode/laravel-restify) - a unified API layer for both humans and AI agents.

## About This Demo

This repository demonstrates how **Laravel Restify** transforms your Eloquent models into powerful APIs that serve both traditional JSON:API endpoints and MCP (Model Context Protocol) servers for AI agents - all from one codebase.

### What's Included

- **User Management** - Complete CRUD operations for users
- **Organization Management** - Hierarchical organization structure
- **Contact Management** - Contact records with relationships
- **Authentication** - Laravel Sanctum integration
- **MCP Server** - AI agent compatibility out of the box

## Features Demonstrated

- ✅ **JSON:API Endpoints** - Full specification compliance
- ✅ **MCP Server Generation** - Automatic AI agent interfaces
- ✅ **Unified Authorization** - Same policies for humans and AI
- ✅ **Search & Filtering** - Powerful query capabilities
- ✅ **Field Validation** - Consistent rules across interfaces
- ✅ **Relationships** - Complex model relationships

## Quick Start

1. **Clone and Install**
   ```bash
   git clone https://github.com/BinarCode/restify-demo.git
   cd restify-demo
   composer install
   ```

2. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   php artisan migrate --seed
   ```

3. **Serve the Application**
   ```bash
   php artisan serve
   ```

4. **Explore the APIs**
   - JSON:API: `http://localhost:8000/api/restify/users`
   - MCP Server: `http://localhost:8000/mcp/restify`

## API Examples

### For Humans (JSON:API)
```bash
# Get all users
GET /api/restify/users

# Create a user
POST /api/restify/users
Content-Type: application/vnd.api+json

{
  "data": {
    "type": "users",
    "attributes": {
      "name": "John Doe",
      "email": "john@example.com"
    }
  }
}
```

### For AI Agents (MCP)
The same repositories automatically provide MCP tools for AI agents:

```bash
# Get available tools
GET /mcp/restify

# AI agents can use tools like:
# - users-index-tool
# - users-store-tool
# - organizations-index-tool
# - contacts-index-tool
```

## Learn More

- **[Laravel Restify](https://github.com/BinarCode/laravel-restify)** - Main package repository
- **[Documentation](https://laravel-restify.com)** - Complete guides and API reference
- **[BinarCode](https://binarcode.com)** - The company behind Laravel Restify
- **[Restify Templates](https://restifytemplates.com)** - Production-ready starter kits

## Contributing

This is a demo repository. For contributing to Laravel Restify itself, please visit the [main repository](https://github.com/BinarCode/laravel-restify).

## License

This demo is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
