<!DOCTYPE html>
<html class="no-js" {{ language_attributes() }} >
    @include('components.html.head')

    <body <?php body_class(); ?>>

        @include('components.header')

        <div class="site js-site">

            <main class="main js-main">
                @yield('content')
            </main>
             
            @include('components.footer')

        </div>
        
        @include('components.sidebar.sidebar')
        @include('components.html.foot')
    </body>
</html>