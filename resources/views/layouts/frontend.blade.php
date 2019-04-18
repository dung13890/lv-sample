<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend._partials._head')

    <!-- Styles -->
    @stack('prestyles')
    {{ Html::style(mix('css/frontend.css')) }}
    @stack('sufstyles')
</head>
<body id="site-body" @yield('class')>
    <div class="site-wrapper">
        {{-- <div class="site-overlay"></div> --}}
        @include('frontend._partials.header')

        @yield('content')

        @include('frontend._partials.footer')

        <a href="#site-body" id="back-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
     </div>

    <!-- Scripts -->
    @stack('prescripts')
    {!! Html::script(mix('js/manifest.js')) !!}
    {!! Html::script(mix('js/vendor.js')) !!}
    {!! Html::script(mix('js/frontend.js')) !!}
    @stack('sufscripts')
</body>
</html>
