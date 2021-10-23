<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Pricing example · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
    <meta name="token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        var base_url = '{{ url('/') }}';
    </script>
</head>
<body>

{{$slot}}

<script src="{{ asset('backend/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>


@if(isset($javascript))
    {{$javascript}}
@endif

</body>
</html>
