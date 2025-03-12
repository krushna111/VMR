<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Revolution Test</title>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>

    <style>
        body {
            background-color: #1d42a3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .swiper {
            width: 80%;
            height: 500px;
        }

        .swiper-slide {
            width: 300px; /* Ensure slides have a fixed width */
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease-in-out;
            transform: scale(0.8);
            filter: blur(2px);
            background: transparent !important; /* Remove background */
            overflow: hidden;
        }

        .swiper-slide-active {
            transform: scale(1);
            filter: blur(0);
        }

        .swiper-slide img {
            width: 100%;
            height: 100%; /* Ensures image takes up full height of slide */
           
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .swiper-pagination-bullet {
            background: #fff;
        }

        .swiper-pagination-bullet-active {
            background: #ffcc00;
        }
.swiper-wrapper {
    align-items: center;
}
        .swiper-container {
            background: transparent !important;
        }
    </style>
</head>

<body>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://images.verifiedmarketresearch.com/assets/energy_poster_option_rqZkn.jpg" alt="Image 1">
            </div>
            <div class="swiper-slide">
                <img src="https://images.verifiedmarketresearch.com/assets/it_poster_option_4_c_IZIKM.jpg" alt="Image 2">
            </div>
            <div class="swiper-slide">
                <img src="https://images.verifiedmarketresearch.com/assets/chemicals_poster_opt_He1U8.jpg" alt="Image 3">
            </div>
            <div class="swiper-slide">
                <img src="https://images.verifiedmarketresearch.com/assets/chemicals.jpg" alt="Image 4">
            </div>
            <div class="swiper-slide">
                <img src="https://images.verifiedmarketresearch.com/assets/healthcare_poster_op_U3zI1.jpg" alt="Image 5">
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js'></script>

    <script>
        var swiper = new Swiper(".swiper", {
            slidesPerView: 3, /* Adjust based on your layout */
            loop: true,
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1.5,
                slideShadows: true
            },
            spaceBetween: 200,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }
            
        });
    </script>

</body>

</html>
