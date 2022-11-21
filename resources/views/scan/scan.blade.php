<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </script>
    <title>Document</title>
</head>

<body>
    @if ($message = Session::get('status'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" style="color:black;">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <a href="{{ url('/dashboard') }}" class="btn btn-primary" style="margin-top: 50px; margin-left: 50px;">Back</a>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <form action="{{ url('/insert') }}" method="post" class="form-horizontal">
                    @csrf
                    <label for="">Scan QR Code</label>
                    <input type="text" name="text" id="text" readonly placeholder="scan qr code "
                        class="form-control">
                </form>
            </div>
        </div>
    </div>
    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);

            } else {
                alert('No camera detected');

            }
        }).catch(function(e) {
            console.error(e)
        });
        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
            document.forms[0].submit();

        });
    </script>
</body>


</html>
