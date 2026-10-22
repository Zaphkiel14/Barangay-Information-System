<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Barangay Information System</title>
</head>


<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <x-header />
        <x-sidebar />
        <main class="app-main">
            <div class="app-content-header">
                <!-- page title + breadcrumb -->
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </main>
        <x-footer />
    </div>
</body>

</html>