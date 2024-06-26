<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>

@include('layout.nav')
{{--content starts here--}}
<div class="container-fluid p-0">
@yield('content')
</div>

@include('layout.footer')



<!-- bootstrap js file -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- js files -->
<script src="{{ asset('assets/js/script.js') }}"></script>
@yield('javascript')
</body>

</html>
