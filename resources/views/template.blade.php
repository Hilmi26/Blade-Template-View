        <!-- Header start -->
        @include('header')
        <!-- Header End -->


        <!-- Navbar & Hero Start -->
        @include('navbar')
        <!-- Navbar & Hero End -->


        {{-- content start --}}
        <div class="container-fluid">
            @yield('home')
        </div>
        {{-- content end --}}


        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->

