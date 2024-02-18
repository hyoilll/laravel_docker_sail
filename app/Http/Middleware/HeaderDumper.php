<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class HeaderDumper
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->logger->info(
            'request',
            [
                'header' => strval($request->headers),
            ],
        );
        
        // ヘルパー関数を利用の場合
        // info('request',[
        //     'header' => strval($request->headers),
        // ],);
        
        $resp = $next($request);
        $this->logger->info(
            'response',
            [
                'header' => strval($resp->headers),
            ],
        );

        // req header & resp header　のログは/storage/logs/laravel.logに記録される

        return $resp;
    }
}
