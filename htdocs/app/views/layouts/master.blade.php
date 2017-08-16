<!DOCTYPE html>
<html class="no-js" {{ language_attributes() }} >
    @include('components.html.head')

    <body <?php body_class(); ?>>
        
        <div class="site js-site">
            @include('components.header')
            

            <main class="main js-main">
                @yield('content')
            </main>
             
            
            @include('components.footer')

        </div>

       
        @include('components.html.foot')
    </body>
</html>