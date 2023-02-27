<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Image Comparison Slider | CodingNepal</title>
    <link rel="stylesheet" href="test9.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .con {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        .con1 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
        }

        :root {
            --image-comparison-slider-width: min(80vw, 100%);
            --image-comparison-slider-handle-width: 50px;
        }

        #image-comparison-slider {
            position: relative;
            width: 100%;
            overflow: hidden;

            cursor: col-resize;
        }

        #image-comparison-slider img {
            display: block;
            width: 100%;
            height: auto;
            max-height: 80vh;
            object-fit: cover;
            pointer-events: none;
            user-select: none;
        }

        #image-comparison-slider .img-wrapper {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            /* This is in order to fix a Firefox bug, related to the 3D tilt effect */
            /* transition: 0.25s cubic-bezier(.03,.98,.52,.99); */
        }

        #image-comparison-slider .img-wrapper img {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
        }

        #image-comparison-slider .label {
            position: absolute;
            top: 1rem;
            z-index: 3;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.33);

            padding: 0.5rem 0.75rem;
            font-size: 0.85rem;
            text-align: center;
            letter-spacing: 1px;
            user-select: none;
            opacity: 0;
            transition: 0.25s cubic-bezier(0.68, 0.26, 0.58, 1.22);
        }

        #image-comparison-slider:hover .label {
            opacity: 1;
        }

        #image-comparison-slider .label.label-before {
            left: 1rem;
        }

        #image-comparison-slider .label.label-after {
            right: 1rem;
            background-color: #f95540;
        }

        #image-comparison-slider .handle {
            position: absolute;
            top: 0;
            left: calc(50% - var(--image-comparison-slider-handle-width) / 2);
            width: var(--image-comparison-slider-handle-width);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            user-select: none;
            z-index: 2;
            /* transition: 0.25s cubic-bezier(.03,.98,.52,.99); */
        }

        #image-comparison-slider .handle-line {
            width: 2px;
            flex-grow: 1;
            background-color: #fff;
        }

        #image-comparison-slider .handle-circle {
            width: var(--image-comparison-slider-handle-width);
            height: var(--image-comparison-slider-handle-width);
            color: #fff;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            /* background-color: rgba(0,0,0,0.5); */
        }

        @media (max-width: 768px) {
            :root {
                --image-comparison-slider-width: 90vw;
            }

            .con1 {
                width: 100%;
            }
        }

        .historiku-div {
            display: flex;
            justify-content: center;
            width: 100%;
            border: solid 1px none;
            background-color: whitesmoke;
            margin-top: 30px;
        }

        .historiku-div1 {
            border: solid 1px none;
            display: flex;
            justify-content: flex-c;
            width: 70%;
            height: 100px;
            flex-direction: column;
        }

        .historiku-border {
            border: solid 2px black;
            width: 100%;
            height: 2px;
            margin-top: 0.5%;
            background-color: whitesmoke;
        }

        .historiku-p1 {
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 30px;
            color: #ff9934;
            margin-top: 2.3%;
        }

        @media (max-width: 1000px) {
            .historiku-border {
                margin-top: 1%;
            }

            .historiku-p1 {
                margin-top: 4%;
            }
        }

        @media (max-width: 600px) {
            .historiku-border {
                margin-top: -1%;
            }

            .historiku-p1 {
                margin-top: 7%;
            }
        }

        @media (max-width: 400px) {
            .historiku-border {
                margin-top: -1%;
            }

            .historiku-p1 {
                margin-top: 10%;
            }
        }

        /* pershkrimi */

        .historiku-div2 {
            display: flex;
            justify-content: center;
            width: 100%;
            height: auto;
            border: solid 1px none;
            background-color: whitesmoke;
        }

        .historiku-div3 {
            border: solid 1px none;
            margin-top: -1%;
            display: flex;
            justify-content: flex-start;
            width: 70%;
            height: auto;
        }

        .historiku-p2 {
            color: #330000;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            font-size: 18px;
            margin-bottom: 50px;
        }

        .FotojaPerLuft {
            width: 100%;
            height: 400px;
            background-image: url("../images/suhareka3.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50%;
        }
    </style>
</head>

<body>
    <main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
        <div class="con">
            <div class="con1">
                <div id="image-comparison-slider">
                    <img src="https://mcdn.wallpapersafari.com/medium/69/31/yq32dz.jpg" alt="before" />
                    <div class="img-wrapper">
                        <img src="https://images.pling.com/img/00/00/63/03/06/1849071/widescreen-beautiful-scenery-nautre-hd-desktop-wallpaper-beautiful-scenery-wallpaper-desktop-wallpapers-hd-0045-1920x1080.jpg" alt="after" />
                    </div>
                    <span class="label label-before">Before</span>
                    <span class="label label-after">After</span>
                    <div class="handle">
                        <div class="handle-line"></div>
                        <div class="handle-circle">
                            <i class="fas fa-chevron-left"></i>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        <div class="handle-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="historiku-div">
        <div class="historiku-div1">
            <p class="historiku-p1">HISTORIKU</p>
            <p class="historiku-border"></p>
        </div>
    </div>

    <div class="historiku-div2">
        <div class="historiku-div3">
            <p class="historiku-p2">
                Theranda është një qytet i vjetër që gjendet në jug të Kosovës.
                Themelimi i saj i takon shekullit XVII dhe qyteti ka qenë një qendër e
                rëndësishme e tregtisë në rajon. Në shekuj, Suhareka ka përjetuar një
                numër të madh të ngjarjeve historike, të ndikuara nga ndryshimet
                politike dhe ushtarake. Në shekullin XIX, qyteti ishte nën sundimin
                osman dhe pas pavarësisë së Shqipërisë në vitin 1912, ai u bë pjesë e
                saj. Gjatë Luftës së Dytë Botërore, qyteti u prek nga lufta dhe
                pasojat e saj. Në vitet '90, gjatë luftës së Kosovës, Theranda u prek
                nga dhunë dhe pasojat e saj janë ende të ndjeshme edhe sot. Shumë nga
                banorët e qytetit u detyruan të largohen nga shtëpitë e tyre dhe të
                jetojnë në kushte të vështira në kampet e refugjatëve. Megjithatë, pas
                lufte, banorët e qytetit kanë filluar të kthehen dhe të rindërtojnë
                jetën e tyre. Sot, Theranda është një qytet i vogël që po punon për të
                rindërtuar ekonominë dhe jetën sociale. Ajo është e njohur për
                kulturën dhe traditat e saj, si dhe për vlerësimin e pasurisë natyrore
                dhe historike të rajonit. Qyteti po përpiqet të zhvillojë sektorë të
                tjerë si turizmi, bujqësia dhe industria e lehtë për të krijuar një të
                ardhme më të ndritur për banorët e tij. Theranda, për herë të parë
                përmendet në kir-sobulat e Car Dushanit në shekullin e XIV, ndërsa
                gjetjet arkeologjike e shtynë në thellësi të kohës si vendbanim, deri
                në periudhën e eneolitit. Në rajonin e saj deri më tani janë hulumtuar
                disa lokalitete arkeologjike ndërsa bazuar në të dhënat që dalin nga
                rekognoscimi i terrenit, ky rajon është i pasur me gjurmë të kulturës
                materiale e shpirtërore. Në këtë komunë ndodhen objekte të ndryshme me
                vlera të veçanta arkeologjike ku do theksuar "Hisarin", Tumat e
                Shirokës, Reshtani, Kalaja e Kastercit, Tuma e Sopisë etj. Objektet e
                kultit dominohen nga xhamitë ku më e vjetra është ajo e Leshanit e
                ndërtuar mes vitive 1604-1610, pastaj kisha e Shën Trinës dhe kisha
                katolike në fshatin Lumbardh (Sallagrazhdë).
            </p>
        </div>
    </div>
    <div class="FotojaPerLuft"></div>
    <div class="historiku-div">
        <div class="historiku-div1">
            <p class="historiku-p1" style="letter-spacing:1px">LUFTËRAT</p>
            <p class="historiku-border"></p>
        </div>
    </div>

    <div class="historiku-div2">
        <div class="historiku-div3">
            <p class="historiku-p2">
                Theranda është një qytet i vjetër që gjendet në jug të Kosovës.
                Themelimi i saj i takon shekullit XVII dhe qyteti ka qenë një qendër e
                rëndësishme e tregtisë në rajon. Në shekuj, Suhareka ka përjetuar një
                numër të madh të ngjarjeve historike, të ndikuara nga ndryshimet
                po
            </p>
        </div>
    </div>
    <script>
        const slider = document.querySelector("#image-comparison-slider");
        const sliderImgWrapper = document.querySelector(
            "#image-comparison-slider .img-wrapper"
        );
        const sliderHandle = document.querySelector(
            "#image-comparison-slider .handle"
        );

        slider.addEventListener("mousemove", sliderMouseMove);
        slider.addEventListener("touchmove", sliderMouseMove);

        function sliderMouseMove(event) {
            if (isSliderLocked) return;

            const sliderLeftX = slider.offsetLeft;
            const sliderWidth = slider.clientWidth;
            const sliderHandleWidth = sliderHandle.clientWidth;

            let mouseX = (event.clientX || event.touches[0].clientX) - sliderLeftX;
            if (mouseX < 0) mouseX = 0;
            else if (mouseX > sliderWidth) mouseX = sliderWidth;

            sliderImgWrapper.style.width = `${(
        (1 - mouseX / sliderWidth) *
        100
        ).toFixed(4)}%`;
            sliderHandle.style.left = `calc(${(
        (mouseX / sliderWidth) *
        100
        ).toFixed(4)}% - ${sliderHandleWidth / 2}px)`;
        }

        let isSliderLocked = false;

        slider.addEventListener("mousedown", sliderMouseDown);
        slider.addEventListener("touchstart", sliderMouseDown);
        slider.addEventListener("mouseup", sliderMouseUp);
        slider.addEventListener("touchend", sliderMouseUp);
        slider.addEventListener("mouseleave", sliderMouseLeave);

        function sliderMouseDown(event) {
            if (isSliderLocked) isSliderLocked = false;
            sliderMouseMove(event);
        }

        function sliderMouseUp() {
            if (!isSliderLocked) isSliderLocked = true;
        }

        function sliderMouseLeave() {
            if (isSliderLocked) isSliderLocked = false;
        }
    </script>
</body>

</html>