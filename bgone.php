<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Ripple Background</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
	
	
	
<style>
	
	body {
    background: #3399ff;
    margin: 0;
    padding: 0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    position: relative;
}

.ripple-background {
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Centered Circle Ripples */
.circle {
    position: absolute;
    border-radius: 50%;
    background: white;
    animation: ripple 12s infinite ease-in-out;
    box-shadow: 0px 0px 1px 0px #508fb9;
}

/* Increased Ripple Sizes (Desktop) */
.small { width: 400px; height: 400px; }
.medium { width: 800px; height: 800px; }
.large { width: 1200px; height: 1200px; }
.xlarge { width: 1600px; height: 1600px; }
.xxlarge { width: 2000px; height: 2000px; }

/* Centering all ripples */
.circle {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* Opacity shades */
.shade1 { opacity: 0.15; }
.shade2 { opacity: 0.4; }
.shade3 { opacity: 0.6; }
.shade4 { opacity: 0.75; }
.shade5 { opacity: 0.9; }

/* Ripple Animation */
@keyframes ripple {
    0% { transform: translate(-50%, -50%) scale(0.8); }
    50% { transform: translate(-50%, -50%) scale(1.3); }
    100% { transform: translate(-50%, -50%) scale(0.8); }
}

/* Perfect Centering for Mobile Devices */
@media (max-width: 768px) {
    .small { width: 200px; height: 200px; }
    .medium { width: 400px; height: 400px; }
    .large { width: 600px; height: 600px; }
    .xlarge { width: 800px; height: 800px; }
    .xxlarge { width: 1000px; height: 1000px; }
}

</style>	
	
	
	
	
	
	
</head>
<body>

    <div class="ripple-background">
        <div class="circle xxlarge shade1"></div>
        <div class="circle xlarge shade2"></div>
        <div class="circle large shade3"></div>
        <div class="circle medium shade4"></div>
        <div class="circle small shade5"></div>
    </div>

</body>
</html>
