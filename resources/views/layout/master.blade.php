<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title' , env('APP_NAME'))</title>
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet">
    <link href="{{asset('/css/jquery.nestable.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/morris.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/image-uploader.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/vanilla-calendar-min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanillaCalendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <!-- Favicon -->
    <link rel="stylesheet" href="{{ asset('css/breadcrumb.css') }}">
    <link rel="shortcut icon" href="{{url('/pic/ficon.png')}}" />
    <link rel="stylesheet" href="{{ asset('/scss/_menu.scss') }}">
    <style>
        .inner-announcements {
            overflow-y: scroll;
            max-height: 350px;
        }

        .dtr-data a {
            margin-bottom: 10px;
        }
        

    </style>
    @yield('css')
</head>

<body class="fixed-left">
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div  id="wrapper">
        <!-- Loader -->
        
        @include('includes.sideBar')
        <div  class="content-page">
            <div class="content">
                @include('includes.header')
                @yield('content')
                @include('includes.footer')
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/js/waves.js') }}"></script>
    <script src="{{ asset('/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/js/morris.min.js')}}"></script>
    <script src="{{ asset('/js/raphael-min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/js/jszip.min.js') }}"></script>
    <script src="{{ asset('/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/js/datatables.init.js') }}"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>
    <script src="{{ asset('/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('/js/vanillaCalendar.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('/js/plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    

    <script src="{{ asset('/js/newJS.js') }}"></script>
    
    @yield('js')
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/tagify.min.js') }}"></script>
    <script>
        if(document.querySelectorAll('.tagify').length > 0){
            const el = document.querySelector('.tagify');
            new Tagify(el);
        }
    </script>
    <script src="{{ asset('/js/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function() {
    if ($("#elm1").length > 0) {
        tinymce.init({
            selector: "textarea#elm1",
            theme: "modern",
            height: 300,
            plugins: ["lists", "wordcount"],
            toolbar:
                "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ",
            style_formats: [
                { title: "Bold text", inline: "b" },
                {
                    title: "Red text",
                    inline: "span",
                    styles: { color: "#ff0000" }
                },
                {
                    title: "Red header",
                    block: "h1",
                    styles: { color: "#ff0000" }
                },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" }
            ]
        });
    }
});

    </script>
</body>

</html>