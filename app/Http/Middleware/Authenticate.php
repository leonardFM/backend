<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
<<<<<<< HEAD
        return $request->expectsJson() ? null : route('login');
    }
}
=======
        return $request->expectsJson() ? null : route('login_page');
    }
}
>>>>>>> 5914aa88cc5bd5852d0e8dd617336ef6f862391b
