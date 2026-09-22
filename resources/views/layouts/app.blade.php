<!DOCTYPE html>
<html lang="ms">
    <head>
        @include('partials.seo-meta')
        @include('partials.vendor-styles')
        @include('partials.page-styles')
        @include('partials.json-ld')
        @stack('styles')
    </head>
    <body>
        @include('partials.preloader')
        @include('partials.header')
        <!--======  Smooth Wrapper  ======-->
        <div id="smooth-wrapper">
            <div id="smooth-content">
                <main>
                    @yield('content')
                </main>
                @include('partials.footer')
            </div>
        </div>
        @include('partials.vendor-scripts')
        @include('partials.page-scripts')
        @stack('scripts')
    </body>
</html>
