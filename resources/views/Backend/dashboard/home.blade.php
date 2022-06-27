<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping-Mall</title>
    
    <!-- Favicon-->

    <!-- plugin css file  -->
      @include('Backend.dashboard.css')
      @yield('css')
  
  </head>
  <body>
    <div id="ebazar-layout" class="theme-blue">
      <!-- sidebar -->
     @include('Backend.dashboard.sidebar')

      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
        <!-- Body: Header -->
       @include('Backend.dashboard.header')

        <!-- Body: Body -->
      @yield('main')
      </div>
    </div>

    <!-- Jquery Core Js -->

      @include('Backend.dashboard.js')
      @yield('script')

  </body>
</html>
