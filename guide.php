<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantation Guide</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background:rgb(0, 0, 0);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        header {
            background: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        .reel-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
            margin: 20px auto;
            max-width: 600px;
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
            padding: 20px;
        }

        .reel-container::-webkit-scrollbar {
            width: 6px;
        }

        .reel-container::-webkit-scrollbar-thumb {
            background: #4CAF50;
            border-radius: 3px;
        }

        .video-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            scroll-snap-align: center;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 15px;
            text-align: center;
        }

        video {
            width: 100%;
            height: 300px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            video {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Plantation Guide</h1>
        <p>Scroll through the videos to learn more about plant care and gardening</p>
    </header>
    <div class="reel-container">
        <!-- Section 1 -->
        <div class="video-section">
            <h2>How to Plant in a Garden</h2>
            <p>Learn the step-by-step process of planting in your garden to ensure healthy growth and vibrant plants.</p>
            <video controls>
                <source src="plantationvideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 2 -->
        <div class="video-section">
            <h2>How to Take Care of Plants</h2>
            <p>Understand the essentials of plant care, including sunlight, pruning, and keeping plants pest-free.</p>
            <video controls>
                <source src="plantvid2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 3 -->
        <div class="video-section">
            <h2>Watering and Fertilizing Plants</h2>
            <p>Discover the right way to water and fertilize plants to maintain their health and beauty.</p>
            <video controls>
                <source src="plantvid3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 4 -->
        <div class="video-section">
            <h2>Soil Preparation</h2>
            <p>Choosing the right soil and enriching it with compost to give your plants the best foundation.</p>
            <video controls>
                <source src="plantvid4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 5 -->
        <div class="video-section">
            <h2>Indoor Gardening</h2>
            <p>Learn how to grow plants indoors, including light requirements and suitable species.</p>
            <video controls>
                <source src="indoorplnt.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 6 -->
        <div class="video-section">
            <h2>Seasonal Gardening</h2>
            <p>Understand what to plant in each season and how to prepare your garden for seasonal changes.</p>
            <video controls>
                <source src="seasonal.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <!-- Section 7 -->
        <div class="video-section">
            <h2>Container Gardening</h2>
            <p>Explore how to grow plants in pots and vertical spaces for small gardens and urban homes.</p>
            <video controls>
                <source src="container1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>
</html>
