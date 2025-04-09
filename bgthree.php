<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fireflies Animation</title>
    <style>
        /* Background */
        body {
            background: url("https://i.pinimg.com/originals/44/6e/3b/446e3b79395a287ca32f7977dd83b290.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            height: 100vh;
            overflow: hidden;
        }

        /* Firefly Base */
        .firefly {
            position: fixed;
            left: 50%;
            top: 50%;
            width: 0.4vw;
            height: 0.4vw;
            margin: -0.2vw 0 0 9.8vw;
            animation: move ease-in-out 20s infinite alternate;
            pointer-events: none;
        }

        .firefly::before,
        .firefly::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transform-origin: -10vw;
        }

        .firefly::before {
            background: black;
            opacity: 0.4;
            animation: drift 5s ease infinite;
        }

        .firefly::after {
            background: white;
            opacity: 0;
            box-shadow: 0 0 0vw 0vw yellow;
            animation: drift 5s ease infinite, flash 2s infinite alternate;
        }

        /* Firefly Motion */
        @keyframes move {
            0% { transform: translate(-50%, -50%) scale(0.8); }
            100% { transform: translate(50vw, 50vh) scale(1.2); }
        }

        /* Rotation */
        @keyframes drift {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Firefly Glow */
        @keyframes flash {
            0%, 30%, 100% {
                opacity: 0;
                box-shadow: 0 0 0vw 0vw yellow;
            }
            5% {
                opacity: 1;
                box-shadow: 0 0 2vw 0.4vw yellow;
            }
        }
    </style>
</head>
<body>

    <!-- Fireflies -->
    <script>
        const quantity = 15;
        for (let i = 0; i < quantity; i++) {
            let firefly = document.createElement("div");
            firefly.className = "firefly";
            document.body.appendChild(firefly);

            let randomX = Math.random() * window.innerWidth;
            let randomY = Math.random() * window.innerHeight;
            let duration = Math.random() * 15 + 5;

            firefly.style.left = `${randomX}px`;
            firefly.style.top = `${randomY}px`;
            firefly.style.animationDuration = `${duration}s`;
        }
    </script>

</body>
</html>
