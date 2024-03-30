<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/assets/staff/components.chunk.css?v={{$version}}">
    <link rel="stylesheet" href="/assets/staff/umi.css?v={{$version}}">
    <link rel="stylesheet" href="/assets/staff/custom.css?v={{$version}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>{{$title}}</title>
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700"> -->
    <script>window.routerBase = "/";</script>
    <script>
        window.settings = {
            title: '{{$title}}',
            theme: {
                sidebar: '{{$theme_sidebar}}',
                header: '{{$theme_header}}',
                color: '{{$theme_color}}',
            },
            version: '{{$version}}',
            background_url: '{{$background_url}}',
            logo: '{{$logo}}',
            staff_path: '{{$staff_path}}'
        }
    </script>
</head>

<body>
<div id="root"></div>
<script src="/assets/staff/vendors.async.js?v={{$version}}"></script>
<script src="/assets/staff/components.async.js?v={{$version}}"></script>
<script src="/assets/staff/umi.js?v={{$version}}"></script>
</body>

</html>
