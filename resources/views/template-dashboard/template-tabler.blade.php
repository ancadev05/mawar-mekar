<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css') }} rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css') }} rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css') }} rel="stylesheet"/>
    <link href="{{ asset('tabler/dist/css/demo.min.css') }} rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>

    {{-- font awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.css') }}">

  </head>
  <body  class=" layout-fluid">
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
      
        {{-- header --}}
        @include('template-dashboard.komponen-tabler.header')
        {{-- /header --}}

        {{-- navbar --}}
        @include('template-dashboard.komponen-tabler.navbar')
        {{-- navbar --}}

      <div class="page-wrapper container">

        @yield('content')


        {{-- footer --}}
        @include('template-dashboard.komponen-tabler.footer')
        {{-- /footer --}}
        
      </div>
    </div>
    <!-- Libs JS -->
    <script src="{{ asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js') }}" defer></script>
  </body>
</html>