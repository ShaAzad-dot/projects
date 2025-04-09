<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Animation</title>
    <style>
        /* Background container */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            overflow: hidden;
            z-index: -1;
        }

        /* Moon image */
        img {
            height: 70vh;
            width: 70vh;
            position: absolute;
            z-index: 3;
            right: 20px;
        }

        /* Stars background */
        .stars {
            background: black url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1231630/stars.png") repeat;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: block;
            z-index: 0;
        }

        /* Twinkling effect */
        .twinkling {
            width: 10000px;
            height: 100%;
            background: transparent url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1231630/twinkling.png") repeat;
            background-size: 1000px 1000px;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 2;
            animation: move-background 70s linear infinite;
        }

        /* Moving clouds */
        .clouds {
            width: 10000px;
            height: 100%;
            background: transparent url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1231630/clouds_repeat.png") repeat;
            background-size: 1000px 1000px;
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 3;
            animation: move-background 150s linear infinite;
        }

        /* Background movement animation */
        @keyframes move-background {
            from { transform: translate3d(0px, 0px, 0px); }
            to { transform: translate3d(1000px, 0px, 0px); }
        }
    </style>
</head>
<body>

    <!-- Background Effects -->
    <div class="background-container">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1231630/moon2.png" alt="Moon">
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="clouds"></div>
    </div>

</body>
</html>

