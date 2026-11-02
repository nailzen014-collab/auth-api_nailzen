<?php
    namespace App\OpenApi;

    use OpenApi\Attributes as OA;

    #[OA\Info(
        title: "My API",
        version: "1.0.0",
        description: "This is the API documentation for My API.",
    )]
    #[OA\Server(
        url: "http://localhost:8000",
        description: "local server"
    )]

    class ApiDocumentation
    {
        // This class is used to generate OpenAPI documentation using annotations.
    }
?>