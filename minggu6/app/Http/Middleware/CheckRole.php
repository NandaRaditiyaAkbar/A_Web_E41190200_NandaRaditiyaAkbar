<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle($request, Closure $next, $role){
        if (!$request->user()->hasRole($role)){
            //
        }   
        return $next($request);
    }


}
Route::put('post/{id}', function($id){
})->middleware ('role:editor');
?>
