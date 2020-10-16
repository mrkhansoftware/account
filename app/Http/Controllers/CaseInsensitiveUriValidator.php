<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\Route as IlluminateRoute;
use Illuminate\Routing\Matching\ValidatorInterface;

class CaseInsensitiveUriValidator implements ValidatorInterface
{
  public function matches(Route $route, Request $request)
  {
     $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(stripos($actual_link,"www.account.iieex.org")){
    echo  $url=str_ireplace("www.","",$actual_link);
    header("Location: ".$url);
    exit();
   }
    $path = $request->path() == '/' ? '/' : '/'.$request->path();
    $path=str_ireplace("/apex","",$path);//handling salesforce links
    return preg_match(preg_replace('/$/','i', $route->getCompiled()->getRegex()), rawurldecode($path));
  }
}