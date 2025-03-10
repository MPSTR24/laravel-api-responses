
# Laravel API Responses

This package provides API response functions via a trait to help improve consistency of API response codes across your projects.

![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/mpstr24/laravel-api-responses/run-tests.yml?branch=main)
![Packagist Version](https://img.shields.io/packagist/v/mpstr24/laravel-api-responses)
![Packagist Downloads](https://img.shields.io/packagist/dt/mpstr24/laravel-api-responses)

## Features

- Pre-made functions of the most common API responses.

## Installation

Install the package via Composer:

```bash
composer require mpstr24/laravel-api-responses
```


## Usage/Examples

First add the trait to your controller.

```Bash
use ApiResponseTrait;
```

All methods, except from "No Content" allow for a message and data to be returned.
Custom messages also allow you to choose the status code.

Examples of each below.

### Success - 200

```Bash
public function success()
{
  return $this->apiSuccess();
}
```

### Created - 201

```Bash
public function created()
{
    return $this->apiCreated();
}
```

### Accepted - 202

```Bash
public function accepted()
{
    return $this->apiAccepted();
}
```

### No Content - 204
```Bash
public function noContent()
{
    return $this->apiNoContent();
}
```

### Bad Request - 400
```Bash
public function badRequest()
{
    return $this->apiBadRequest();
}
```

### Unauthorized - 401
```Bash
public function unauthorized()
{
    return $this->apiUnauthorized();
}
```

### Forbidden - 403
```Bash
public function forbidden()
{
    return $this->apiForbidden();
}
```

### Not Found - 404
```Bash
public function notFound()
{
    return $this->apiNotFound();
}
```

### Teapot - 418
```Bash
public function teapot()
{
    return $this->apiTeapot();
}
```

### Unprocessable - 422
```Bash
public function unprocessable()
{
    return $this->apiUnprocessable();
}
```

### Too Many Requests - 429
```Bash
public function tooManyRequests()
{
    return $this->apiTooManyRequests();
}
```

### Server Error - 500
```Bash
public function serverError()
{
    return $this->apiInternalServerError();
}
```

### Custom response
```Bash
public function apiCustomResponse()
{
    return $this->apiCustom('Custom', null, 201);
}
```


## Roadmap

- [ ] Support for resources
- [ ] Expand into more helpful API features
- [x] Larastan goals
    - [x] 5
    - [x] 6
    - [x] 7
    - [x] 8
    - [x] 9


## License

[MIT](https://choosealicense.com/licenses/mit/)

