<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Dynamic Background with Centered Main Content</title>
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Background container (for iframes) */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
			
        }

        .background-frame {
            position: absolute;
            width: 100%;
            height: 100%;
            border: none;
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .background-frame.active {
            opacity: 1;
        }

        /* Main content */
        .main-content {
            position: relative;
            z-index: 10;
            width: 80%;
            max-width: 800px;
            padding: 20px;
            text-align: center;
            color: white;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

    <!-- Background Container -->
    <div class="background-container">
        <iframe id="bg1" class="background-frame active" src="bgone.php"></iframe>
        <iframe id="bg2" class="background-frame"></iframe>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <?php include 'main.php'; ?>  <!-- Your main content -->
    </div>

    <script>
        let backgrounds = ["bgone.php", "bgtwo.php", "bgthree.php", "bgfour.php"];
        let currentIndex = 0;
        let activeBg = document.getElementById("bg1");
        let nextBg = document.getElementById("bg2");

        function loadBackground() {
            let nextIndex = (currentIndex + 1) % backgrounds.length;

            nextBg.src = backgrounds[nextIndex]; // Load new PHP page
            nextBg.classList.add("active");

            setTimeout(() => {
                activeBg.classList.remove("active");
                [activeBg, nextBg] = [nextBg, activeBg]; // Swap references
                currentIndex = nextIndex;
            }, 2000); // Wait for transition to complete
        }

        // Change background every 1 minute (60000ms)
        setInterval(loadBackground, 5000);
    </script>

</body>
</html>
