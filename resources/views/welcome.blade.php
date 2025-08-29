<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- ==== CSS ==== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ==== SCRIPT ==== -->
    @vite('resources/js/app.js')
    @vite('resources/js/echo.js')
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <script src="{{ asset('js/echo.js') }}" defer></script> -->
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module">
        var channel = Echo.channel('chat');

        channel.listen('MessageEvent', function(data) {
            console.log(JSON.stringify(data));
            // alert(JSON.stringify(data));
        });

    </script>

    <title>Reverb Config</title>
</head>
<body style="height: 100vh;">

    <main class="container d-flex border p-1 h-100 gap-2">
        <section id="card-message-receive" class="d-flex border p-1 h-100 w-100">

        </section>
        <section id="card-message-receive" class="d-flex border p-1 h-100 w-100">

        </section>
    </main>
    
</body>

<script>

        

</script>

</html>