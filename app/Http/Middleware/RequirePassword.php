<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\RequirePassword as MiddlewareRequirePassword;

class RequirePassword extends MiddlewareRequirePassword
{
    /**
     * Password Confirmation Route
     *
     * This is used by Laravel authentication to redirect users after session unlocking.
     *
     * @var string
     */
    public const PASSWORD_CONFIRM_ROUTE = 'admin.password.confirm';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
     * @return mixed
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if ($this->shouldConfirmPassword($request)) {
            if ($request->expectsJson()) {
                return $this->responseFactory->json([
                    'message' => 'Password confirmation required.',
                ], 423);
            }

            return $this->responseFactory->redirectGuest(
                $this->urlGenerator->route($redirectToRoute ?? $this::PASSWORD_CONFIRM_ROUTE)
            );
        }

        return $next($request);
    }
}
