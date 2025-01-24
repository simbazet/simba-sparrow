<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        {{-- CSS - Bootstrap 5.3 --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        {{-- Icons --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

        {{-- slick coarousel --}}
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>

        <style>
            .blue-divider {
                width: 5%;
                height: 3px;
                background-color: #0d83fd;
                border: none;
                margin: 15px;
            }

            .navigation-menu {
                height: 60px;
                background: #ffffff;
                border: 1px;
                border-radius: 50px;
                box-shadow: #ffffff;
                padding-left: 40px;
                padding-right: 40px;
                
            }

            .curved-button {
                background: #0d83fd;
                border-radius: 30px;
                color: #ffffff;
            }

            .borderless-button {
                background: transparent;
                border: 0;
                color: #284970;
            }

            .varela-round-regular {
                font-family: "Varela Round", serif;
                font-weight: 600;
                font-style: normal;
            }

            .home-bg {
                background: #f3f9ff;
                background: linear-gradient(140deg, #f3f9ff 50%, #ffffff 50%);
            }

            .home {
                padding-top: 50px;
                padding-bottom: 100px;
            }

            .card-icon {
                font-size: 1.5rem;
                color: #0d83fd;
                padding: 10px;
                border-radius: 50%;
                background: #eaf4fe;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* About Page */

            .user-icon {
                object-fit: cover;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                border-radius: 50%;
                justify-content: center;
                border: 1;
            }

            .image-container {
                position: relative;
                width: 70%;
                height: 100%;
            }

            .background-image {
                position: absolute;
                width: 70vh;
                height: 400px;
                object-fit: fill;
                z-index: 1;
                border-radius: 5%;
            }

            .foreground-image {
                position: absolute;
                transform: translate(-25%, 50%);
                width: 250px;
                height: 250px;
                z-index: 2;
                border: 10px solid white;
                border-radius: 5%;
                box-shadow: #ffffff;
            }

            /* Features */

            .nav-tabs {
                background-color: #f6f6f7;
                border: 0;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 50px;
                padding: 6px;
            }

            .nav-link {
                color: #284970;
                border-radius: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .nav-link {
                color: #284970;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .features {
                border-radius: 20px;
                padding: 40px;
            }

            /* Testimonials */

            .profile-icon {
                object-fit: cover;
                width: 80px;
                height: 80px;
                display: flex;
                align-items: center;
                border-radius: 50%;
                justify-content: center;
                border: 10px #f3f9ff;
            }

            /* Services */

            .card-square {
                font-size: 1.5rem;
                color: #0d83fd;
                padding: 10px;
                border-radius: 15%;
                background: #eaf4fe;
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Pricing */
            .most-popular {
                margin-left: 30%;
                margin-right: 30%;
                margin-top: -20px;
                border: 0;
                border-radius: 50px;
                background: #ffffff;
                color: #0d83fd;
            }

            /* Back to top */
            .backToTop {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none; /* Hidden by default */
                background-color: #0d83fd;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 50%;
                cursor: pointer;
                box-shadow: #0000001a;
                z-index: 1000;
                font-size: 18px;
            }

            .backToTop:hover {
                background-color: #0b6bcc;
        }
            

        </style>


    <style>
        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100px;
        }

        .slick-slider
        {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                    user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
                touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list
        {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }
        .slick-list.dragging
        {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
        }

        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;
            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }

        .slick-slide
        {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide img
        {
            display: block;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }
    </style>
        {{ $slot }}

        {{-- slick coarousel --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            const backToTopButton = document.getElementById("backToTop");
            window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    backToTopButton.style.display = "block";
                } else {
                    backToTopButton.style.display = "none";
                }
            };
            
            backToTopButton.onclick = function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            };
        </script>
    </body>
</html>
