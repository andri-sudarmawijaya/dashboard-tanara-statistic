<?php namespace Bantenprov\DashboardTanaraStatistic\Http\Middleware;

use Closure;

/**
 * The DashboardTanaraStatisticMiddleware class.
 *
 * @package Bantenprov\DashboardTanaraStatistic
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DashboardTanaraStatisticMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
