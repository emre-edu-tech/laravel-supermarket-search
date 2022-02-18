<!doctype html>
<html>
    
    @include('frontend.partials.head')

    <body>
        
        @include('frontend.partials.header')

        @yield('hero')

        <div class="main-container">
            <main>
                @yield('content')
            </main>
            @include('frontend.partials.footer')
        </div>
    </body>
</html>