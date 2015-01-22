<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        @foreach($styles as $style)
        <link rel="stylesheet" href="<% $style %>"/>
        @endforeach
    </head>
    <body>
        @section('header')
            <!-- where the default header will be -->
        @show

        @yield('body')

        @yield('modal')

        @section('footer')
            <!-- where the default footer will be -->
        @show

        @foreach($scripts as $script)
        <script type="text/javascript" src="<% $script %>"></script>
        @endforeach
    </body>
</html>