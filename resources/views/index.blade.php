<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intropis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="{{ asset('vendor/js/granim.js') }}"></script>
    <!-- Styles -->
    <style>
    body {
        font-family: 'Raleway', sans-serif;
        margin: 0;
    }
    h1{
        font-size: 80px;
        color: #fff;
        padding: 0;
        margin: 0 auto;
        display: block;
    }
    p{
        display: block;
        color: #fff;
        letter-spacing: 3px;
        margin: 20px auto;
        text-align: center;
    }
    .center{
        align-items: center;
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
        height: 100vh;
        /*background-color: #263238;*/
    }
    #canvas-basic {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .content{
        z-index: 99;
    }
</style>
</head>
<body>
    <div class="center">
        <canvas id="canvas-basic"></canvas>
        <div class="content">
            <h1>Intropis</h1>
            <p>By Ibnu Abdul Azis</p>
        </div>
        <canvas id="canvas-basic"></canvas>
    </div>
</body>
<script>
    var granimInstance = new Granim({
        element: '#canvas-basic',
        name: 'basic-gradient',
        direction: 'left-right',    // 'diagonal', 'top-bottom', 'radial'
        opacity: [1, 1],
        isPausedWhenNotInView: true,
        states : {
            "default-state": {
                gradients: [
                ['#AA076B', '#61045F'],
                ['#02AAB0', '#00CDAC'],
                ['#DA22FF', '#9733EE']
                ]
            }
        }
    });
</script>
</html>
