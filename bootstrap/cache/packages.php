<?php return array (
  'beyondcode/laravel-dump-server' => 
  array (
    'providers' => 
    array (
      0 => 'BeyondCode\\DumpServer\\DumpServerServiceProvider',
    ),
  ),
  'bumbummen99/shoppingcart' => 
  array (
    'providers' => 
    array (
      0 => 'Gloudemans\\Shoppingcart\\ShoppingcartServiceProvider',
    ),
    'aliases' => 
    array (
      'Cart' => 'Gloudemans\\Shoppingcart\\Facades\\Cart',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'jrean/laravel-user-verification' => 
  array (
    'providers' => 
    array (
      0 => 'Jrean\\UserVerification\\UserVerificationServiceProvider',
    ),
    'aliases' => 
    array (
      'UserVerification' => 'Jrean\\UserVerification\\Facades\\UserVerification',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'waavi/sanitizer' => 
  array (
    'providers' => 
    array (
      0 => 'Waavi\\Sanitizer\\Laravel\\SanitizerServiceProvider',
    ),
    'aliases' => 
    array (
      'Sanitizer' => 'Waavi\\Sanitizer\\Laravel\\Facade',
    ),
  ),
  'yoeunes/toastr' => 
  array (
    'providers' => 
    array (
      0 => 'Yoeunes\\Toastr\\ToastrServiceProvider',
    ),
    'aliases' => 
    array (
      'Toastr' => 'Yoeunes\\Toastr\\Facades\\Toastr',
    ),
  ),
);