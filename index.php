<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXpossible</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            background: url('./images/wallpaper.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .content {
            z-index: 1;
            position: relative;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
		
		.copyright {
			font-size: 1rem;			
		}

        #countdown {
            font-size: 3rem;
            font-weight: bold;
			margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="content">
        <h1>Website Under Construction</h1>
        <p>We are working hard to bring you a better experience. Stay tuned!</p>
        <div id="countdown">Loading...</div>
		<p class="copyright">@ ByDoWhy Corporation</p>
    </div>

    <script>
        // Set the target date and time
        const targetDate = new Date("2024-12-31T23:59:59"); // Change this to your desired target date

        function updateCountdown() {
            const now = new Date();
            const timeDifference = targetDate - now;

            if (timeDifference <= 0) {
                document.getElementById("countdown").innerHTML = "We're live now!";
                clearInterval(interval);
                return;
            }

            const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = 
                `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }

        const interval = setInterval(updateCountdown, 1000);
    </script>
</body>
</html>