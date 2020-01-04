<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - News Portal</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @yield('styles')
    </head>
    <body>
        <header>
            <div class="float-lg-left float-md-left navbar">
                <a href="/" class="nav-item nav-link text-black-50">Новостной Портал</a>
            </div>
            @php
                $rubrics = [
                    [
                        'name' => __('messages.news'),
                        'is_active' => false,
                        'slug' => '/news'
                    ],
                    [
                        'name' => __('messages.reviews'),
                        'is_active' => false,
                        'slug' => '/reviews'
                    ],
                    [
                        'name' => __('messages.equipment'),
                        'is_active' => false,
                        'slug' => '/equipment'
                    ],
                ];
            @endphp
            @include('portal.blocks.navigation.rubrics', ['rubrics'=>$rubrics])
            <div class="clearfix"></div>
        </header>
        <div class="container pd-pg-bottom">
            @yield('content')
        </div>
        @include('portal.blocks.footer.footer')
        <script src="{{ mix('/js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>