<!DOCTYPE html>
    <html lang="en">
<head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <title> Historicos </title>
</head>

<body>
    <div>
        
        <h1>Historicos</h1>
        
    </div>
    
        <input
            onchange="saveStart()"
            id="start"
            name="start"
            type="datetime-local"
            value="2022-09-26T22:56"/>

        <input
            id="end"
            name="end"
            type="datetime-local"
            value="2022-09-29T00:39"/>

        <button onclick="getInfo()" > Click Here! </button>

    <a href="index.php"> main page </a>

    <div id="map" style="height: 500px"></div>

    <script src="/historicos.js"></script>

    
</body>


</html>