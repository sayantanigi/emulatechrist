<?php
	namespace App\Http\Middleware;
	use Closure;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Session;
	class UserAccess

	{
		
	    public function handle(Request $request, Closure $next)
	    {
	    	 
	        if(Session::get('usertype')==='user')
	        {
				return $next($request);
			}
			// return response()->json(['You do not have permission to access for this page.']);
			return redirect('userlogin');
	    }

}	