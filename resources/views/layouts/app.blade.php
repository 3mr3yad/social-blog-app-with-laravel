<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   @include('partials.head')


</head>
<body>



    <div class="theme-layout">
        @include('partials.navbar')


        <section>
            <div class="gap2 gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <!-- LEFT sidebar -->
                                @include('partials.left_sidbar')

                                {{-- CONTENT  --}}
                                <div class="col-lg-6">
                                    @yield('content')

                                </div>


                                    {{-- RIGHT SIDE BAR  --}}
                                @include('partials.right_sidbar')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.footer')

    </div>




    @include('partials.foot')
</body>
</html>
