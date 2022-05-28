<?php

namespace App\Http\Middleware;

use App\Models\Request;
use Illuminate\Support\Facades\Log;

class LogAfterRequest
{
  public function handle($request, \Closure $next)
  {
    return $next($request);
  }
  public function terminate($request, $response)
  {
    $url = $request->fullUrl();
    $ip = $request->ip();
    $r = new Request();
    if (strcmp($ip, "163.17.135.127") != 0) {
      $r->ip = $ip;
      $r->url = $url;
      $r->request = json_encode($request->all());
      $r->response = $response;
      $r->save();
    }
  }
}
