<?php
	namespace App\Http\Middleware;
	use Closure;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Session;
	class AdminAccess

	{
		
	    public function handle(Request $request, Closure $next)
	    {
	    	 
	        if(Session::get('admintype')==='admin')
	        {
				return $next($request);
			}

			return redirect('admin');
	    }

}	