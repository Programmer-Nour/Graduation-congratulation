<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline SVG Example</title>
    <style>
        /* Center the SVG horizontally and vertically */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .svg-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 200px);
            /* Subtract button and select height */
        }

        svg {
            width: 600px;
            /* Larger width */
            height: 600px;
            /* Larger height */
            fill: #007bff;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 20px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #464c57;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 600px;
          
            font-size: 24px;
            /* Button width */
        }

        /* Style for the quality select */
        select {
            width: 600px;
            padding: 10px 20px;
            /* Match button padding */
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 24px;
            /* Include padding in width calculation */
        }

        @media (max-width: 768px) {
            button {
                width: 150px;
                /* Adjust width for smaller screens */
            }
        }

        /* Media query for even smaller screens */
        @media (max-width: 576px) {
            button {
                width: 100px;
                /* Adjust width for even smaller screens */
            }
        }
    </style>
</head>

<body>
    <div class="svg-container">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="100%" height="100%" align="center">
            <defs>
                <style>
                    .cls-1 {
                        isolation: isolate;
                    }

                    .cls-2 {
                        fill: #fdf3e3;
                    }

                    .cls-3 {
                        fill: #fce7c7;
                    }

                    .cls-4 {
                        fill: #1b1b1b;
                    }

                    .cls-14,
                    .cls-18,
                    .cls-4 {
                        mix-blend-mode: overlay;
                    }

                    .cls-23,
                    .cls-5 {
                        fill: #f2b518;
                    }

                    .cls-6 {
                        fill: #fff;
                    }

                    .cls-17,
                    .cls-20,
                    .cls-21,
                    .cls-22,
                    .cls-7,
                    .cls-8,
                    .cls-9 {
                        fill: none;
                    }

                    .cls-7 {
                        stroke: #321e33;
                    }

                    .cls-17,
                    .cls-20,
                    .cls-21,
                    .cls-22,
                    .cls-7,
                    .cls-8 {
                        stroke-linecap: round;
                        stroke-linejoin: round;
                    }

                    .cls-8 {
                        stroke: #fff;
                    }

                    .cls-10,
                    .cls-24 {
                        fill: #464c57;
                    }

                    .cls-11 {
                        fill: #697384;
                    }

                    .cls-12 {
                        fill: #e63800;
                    }

                    .cls-13 {
                        fill: #353c47;
                    }

                    .cls-15 {
                        fill: #0f0f0f;
                    }

                    .cls-16 {
                        fill: #2b313d;
                    }

                    .cls-17 {
                        stroke: #aa790b;
                        stroke-width: 0.75px;
                    }

                    .cls-18 {
                        fill: #3f3f3f;
                    }

                    .cls-19 {
                        fill: #f9c660;
                    }

                    .cls-20 {
                        stroke: #f2b518;
                    }

                    .cls-21 {
                        stroke: #e63800;
                    }

                    .cls-22 {
                        stroke: #2b313d;
                    }

                    .cls-23 {
                        font-size: 50px;
                    }

                    .cls-23,
                    .cls-24 {
                        font-family: -Bold, خط سلطاني عريض;
                        font-weight: 700;
                    }

                    .cls-24 {
                        font-size: 40px;
                    }
                </style>
            </defs>
            <g class="cls-1">
                <g id="POST_2" data-name="POST 2">
                    <rect class="cls-2" width="500" height="500" />
                    <path class="cls-3"
                        d="M245,234.58c-17.67.17-35.95-2.77-53.75-7.33-22.75-5.84-45.34-13.15-68.62-15.34-32.67-3.06-56.72,9.84-68.56,36-11,24.33-5.62,54.65,5.77,78.56,20.46,42.94,62.23,65.64,108.44,72.65,24.8,3.76,50,3.87,75,4.86,33,1.3,66.7,4.05,98.27-4.91,44.3-12.57,79.54-48.33,90.79-92.08,8.37-32.51,11.67-78.42-20.2-104.32-21-17.1-52.1-22.74-75-9.49-11.32,6.55-20.34,15.68-30.84,23.19C288.24,229.27,267.09,234.36,245,234.58Z" />
                    <ellipse class="cls-4" cx="255.37" cy="409.02" rx="180.37" ry="43.48" />
                    <polygon class="cls-5"
                        points="114.12 386.54 116.88 420.72 322.22 444.94 396.89 393.48 396.89 388.6 390.33 388.6 319.47 438.38 317.9 411.02 396.89 361.92 396.89 356.91 312.97 410.35 114.12 386.54" />
                    <polygon class="cls-5"
                        points="396.89 356.91 198.71 343.39 114.12 386.54 312.97 410.35 396.89 356.91" />
                    <polygon class="cls-6"
                        points="389.98 366.21 390.33 388.6 319.47 438.38 317.9 411.02 389.98 366.21" />
                    <line class="cls-7" x1="390.06" y1="371.08" x2="317.9" y2="416.43" />
                    <line class="cls-7" x1="390.19" y1="378.25" x2="318.04" y2="423.6" />
                    <line class="cls-7" x1="390.33" y1="385.42" x2="318.18" y2="430.77" />
                    <path class="cls-7" d="M114.12,386.54,313,410.35c-1.29,2,0,33.5,0,33.5" />
                    <path class="cls-8"
                        d="M139.74,414.33c6.17,1,12.54,2,18.73.56,5.51-1.27,10.8-4.8,12.75-10.11a6.8,6.8,0,0,0,.34-4.33c-1.64-5.21-6.3-1.23-7.14,2.07a10.76,10.76,0,0,0,1.78,8.94c2.34,3.14,6.18,4.72,9.86,6.08A53.08,53.08,0,0,0,188.75,421c7.09.74,18.09-2.05,17.51-11.17-.1-1.47-.75-3.13-2.17-3.55a3.38,3.38,0,0,0-1.7,0,5.54,5.54,0,0,0-3.76,3c-1,2.3-.14,5,1.21,7.14,7.31,11.58,26,11.24,37.79,9.19a14,14,0,0,0,4.44-1.37,8.8,8.8,0,0,0,3.81-5.94c1.06-6-6.11-5.08-7.39-.42a7.94,7.94,0,0,0,.64,5.45,13.17,13.17,0,0,0,6.43,6.06c8.31,3.92,19,2.46,27.51.07" />
                    <polygon class="cls-8"
                        points="203.8 349.61 144.37 381.17 303.87 398.97 367.67 361.67 203.8 349.61" />
                    <path class="cls-9" d="M263.91,407.74l-.38-.69C263.76,407.5,263.91,407.74,263.91,407.74Z" />
                    <polygon class="cls-10"
                        points="261.72 359.21 376.39 319.43 236.54 286.52 126.02 313.28 253.84 356.55 261.72 359.21" />
                    <path class="cls-6"
                        d="M364.4,327.89l-101,33.91s-7.76,22.66,2.07,39.14L368.58,363.3C364.06,350.11,364.15,334.14,364.4,327.89Z" />
                    <path class="cls-10"
                        d="M364.4,327.89l12.19-4.09-.2-4.37L261.72,359.21l-7.88-2.66L126,313.28S109.31,327.8,128,356.36l136,51.38s-.15-.24-.38-.69l.38.69,114.64-43.49L370,362.78l-1.44.52L265.47,400.94c-9.83-16.48-2.07-39.14-2.07-39.14Z" />
                    <path class="cls-11"
                        d="M245.81,372.34a6.1,6.1,0,0,1-5.89-6.29,6,6,0,0,1,.42-2L138.68,325a6.11,6.11,0,0,1-5.8,3.7l-.41,0-.56,17.26h.42a6.09,6.09,0,0,1,5.89,6.29,5.92,5.92,0,0,1-.42,2l101.66,39a6.11,6.11,0,0,1,5.8-3.7c.14,0,.27,0,.41,0l.56-17.25Z" />
                    <line class="cls-7" x1="364.34" y1="335.86" x2="262.64" y2="372.56" />
                    <line class="cls-7" x1="365.06" y1="346.78" x2="260.52" y2="382.55" />
                    <line class="cls-7" x1="366.55" y1="355.92" x2="261.96" y2="392.53" />
                    <line class="cls-8" x1="261.72" y1="359.21" x2="126.02" y2="313.28" />
                    <polygon class="cls-12"
                        points="309.99 366.21 309.99 378.24 316.23 370.1 320.13 374.68 320.13 362.71 309.99 366.21" />
                    <polygon class="cls-12"
                        points="101.6 280.12 255.57 251.31 373.18 280.12 204.7 312.03 101.6 280.12" />
                    <path class="cls-12"
                        d="M101.6,280.12s-9.32,23.82,0,39.25L205.15,352,379.4,312l-9.29-3.4L206.5,347.39,104,316.08s-5.42-22,2.58-34.41Z" />
                    <path class="cls-6"
                        d="M367.89,281.12l2.22,27.51L206.5,347.39,104,316.08s-5.58-22.34,2.58-34.41L204.7,312Z" />
                    <polyline class="cls-7" points="108.48 287.5 204.37 316.47 368.14 284.27" />
                    <polyline class="cls-7" points="108.48 295.11 204.37 324.08 368.14 290.82" />
                    <polyline class="cls-7" points="108.48 301.98 204.37 330.95 368.4 296.49" />
                    <polyline class="cls-7" points="108.48 309.59 204.37 338.56 368.4 301.67" />
                    <polygon class="cls-8"
                        points="253.67 258.78 125.14 280.12 207.03 304.92 341.86 280.12 253.67 258.78" />
                    <polygon class="cls-13"
                        points="226.74 347.05 237.9 350.85 372.27 318.46 361.98 316 226.74 347.05" />
                    <g class="cls-14">
                        <path class="cls-15"
                            d="M349.76,280.14c0-9-45-16.35-100.6-16.35s-100.6,7.32-100.6,16.35,45,16.35,100.6,16.35c19.34,0,37.4-.89,52.73-2.43l41.73-8.28C347.59,284,349.76,282.12,349.76,280.14Z" />
                    </g>
                    <path class="cls-16" d="M193.44,278.83l-1.6-45.08H319.93v43.47S269.77,313.48,193.44,278.83Z" />
                    <path class="cls-5"
                        d="M193,267.91l.41,11.19c76,34,126.51-1.58,126.51-1.58V267.34C306.27,275,258.78,295.78,193,267.91Z" />
                    <polygon class="cls-16"
                        points="203.04 185.41 144.32 224.8 312.36 232.87 361.34 193.72 203.04 185.41" />
                    <path class="cls-10"
                        d="M362.52,201c-.39.79-49.67,38.94-49.67,38.94l-120.52-5.1-48-3.15V224.8l168,8.07,49-39.15Z" />
                    <polyline class="cls-8" points="301.56 194.75 348.3 197.7 316.24 221.07" />
                    <line class="cls-8" x1="315.04" y1="242.34" x2="315.04" y2="276.6" />
                    <path class="cls-5"
                        d="M165.52,256.74c-.32-15,2.54-27.28,8.53-36.44,6.65-10.2,18.58-16.34,35.44-18.24a225,225,0,0,1,50.7.49l-.31,2.69a222,222,0,0,0-50.09-.5c-16,1.81-27.28,7.55-33.48,17-5.68,8.7-8.4,20.44-8.09,34.9Z" />
                    <ellipse class="cls-5" cx="258.35" cy="204.18" rx="8.01" ry="3.32" />
                    <path class="cls-5" d="M175.64,280.4l-2-16.29a6.58,6.58,0,1,0-13.16-.21l-2.38,16.37Z" />
                    <path class="cls-17" d="M172,276.33c0-.39-2.77-17.63-2.77-17.63" />
                    <path class="cls-17" d="M161.45,277.52c0-.14,3.92-19.41,3.92-19.41" />
                    <line class="cls-17" x1="167.11" y1="275.9" x2="167.32" y2="258.95" />
                    <path class="cls-5" d="M164.47,258.11a5.88,5.88,0,1,1,8.07-2A5.88,5.88,0,0,1,164.47,258.11Z" />
                    <path class="cls-17" d="M169.8,249.43a4.73,4.73,0,0,1,1.28,6.53" />
                    <polygon class="cls-18"
                        points="368.3 362.46 367.67 360.22 386.9 364.13 277.69 406.13 271.87 404.72 378.55 364.25 369.98 362.76 368.58 363.3 368.3 362.46" />
                    <polygon class="cls-18"
                        points="153.96 366.21 249.5 402.3 236.13 401.15 149.22 368.63 153.96 366.21" />
                    <polygon class="cls-18"
                        points="116.16 346.43 83.4 414.64 210.25 440.14 243.38 371.16 116.16 346.43" />
                    <polygon class="cls-6"
                        points="114.06 344.96 81.3 413.17 208.15 438.67 241.28 369.68 114.06 344.96" />
                    <line class="cls-7" x1="95.46" y1="407.22" x2="203.2" y2="427.07" />
                    <line class="cls-7" x1="98.48" y1="399.65" x2="206.21" y2="419.5" />
                    <line class="cls-7" x1="101.49" y1="392.08" x2="209.22" y2="411.93" />
                    <polygon class="cls-12"
                        points="155.03 372.81 140.21 387.72 148.69 388.39 152.39 393.94 171.49 377.5 155.03 372.81" />
                    <polygon class="cls-12"
                        points="177.02 378.96 176.74 397.93 169.61 394.24 162.33 396.72 160.68 374.66 177.02 378.96" />
                    <path class="cls-5"
                        d="M181.66,378.57c-2.56,5.75-11.31,8.54-19.53,6.24s-12.82-8.82-10.26-14.57,11.3-8.54,19.53-6.24S184.22,372.82,181.66,378.57Z" />
                    <path class="cls-19"
                        d="M178.93,377.81c-2.09,4.69-9.24,7-16,5.09s-10.47-7.2-8.38-11.9,9.23-7,16-5.09S181,373.11,178.93,377.81Z" />
                    <path class="cls-6"
                        d="M75.08,313.77c1.18,3.61,4.38,16.74,4.38,16.74S96,320.44,95.37,321.27s-10.45,13.92-10.45,13.92l12.79,12.56-14.33-6.1-2.69,17.08L76.52,343.9l-13.42,11,9.34-15.8L49.38,328.77l23.27,4.33Z" />
                    <polygon class="cls-6"
                        points="359.46 234.14 383.74 245.58 369.3 221.63 392.18 240.49 401.93 216.53 396.37 244.31 414.66 231.41 397.76 250.52 421.08 264.65 398.88 257.83 403.97 282.25 390.29 257.61 370.01 273.59 381.93 253.49 359.46 234.14" />
                    <path class="cls-20"
                        d="M389.56,319.37c13.16,1.83,27.58-.29,38.55-8.21A37.13,37.13,0,0,0,439,298.76c1.83-3.41,3.63-7.3,3.52-11.26-.11-3.7-2.93-8.37-7.29-7.35-2.68.63-4.18,3.82-3.66,6.53s2.58,4.89,4.87,6.42c8.15,5.46,20,5.29,28.56.82" />
                    <path class="cls-21"
                        d="M106.05,167.15a26.59,26.59,0,0,0-8.33,17.47,19.29,19.29,0,0,0,3.87,13.45c4.37,5.78,12,10.59,17.81,5.67,2.27-1.93,5.2-5.82,4.68-9.15-.45-3-3.65-3.63-5.81-2.52a7.46,7.46,0,0,0-4,6.24,10.88,10.88,0,0,0,2.92,7.64c5.39,6.05,17.57,8.51,23.4,4.07" />
                    <path class="cls-22"
                        d="M57.6,404.88a21.25,21.25,0,0,0-5.78,5,9.3,9.3,0,0,0-2.15,6.89c.55,3.75,4.31,5.71,7.86,5a3,3,0,0,0,2.15-1.49,1.33,1.33,0,0,0,0-1.24c-.74-1.21-2.75.93-3.21,1.52a7.86,7.86,0,0,0-1.6,4.49c-.32,8.5,8.4,14.11,15.14,17.19s21.75,7.13,27.45-.13" />
                    <path class="cls-22"
                        d="M381.35,194.28c-6.16.12-14.07-5.11-12.34-12.07a8.16,8.16,0,0,1,4.64-5.44c1.9-.81,3.23.69,2.1,2.45a12.52,12.52,0,0,1-6.82,4.74c-7,2.25-13.89.67-20.15-2.94" />
                    <path class="cls-22"
                        d="M55.07,277.22c5,.16,10.31-1.22,14.1-4.63a13.78,13.78,0,0,0,3.58-5.08,8.78,8.78,0,0,0,.86-4.35c-.19-1.39-1.43-3-3-2.46a2.12,2.12,0,0,0-1.11,2.59,4,4,0,0,0,2.08,2.21c3.27,1.71,10.09,2.9,14.79-1.61" />
                    <path class="cls-21"
                        d="M457.51,416.49a32.91,32.91,0,0,0-11.09-1,19.44,19.44,0,0,0-7.95,2.16c-2.51,1.39-5.74,4.32-5.11,7.49.34,1.68,2,1.36,2.95.46a7.07,7.07,0,0,0,1.74-3.31c.75-3.08-.74-6.46-2.92-8.62a10,10,0,0,0-7.07-3,5.52,5.52,0,0,0-4.42,2.34c-.67,1-1,3.34.62,3.74,3,.74,2.13-4.08,1.46-5.39a16.6,16.6,0,0,0-5.22-5.77c-5.06-3.61-12.73-6.17-18.74-3.53" />
                    <path class="cls-16" d="M396.8,341.93a3.37,3.37,0,1,1-3.37-3.37A3.37,3.37,0,0,1,396.8,341.93Z" />
                    <path class="cls-16" d="M81,378.23a3.37,3.37,0,1,1-3.37-3.37A3.37,3.37,0,0,1,81,378.23Z" />
                    <path class="cls-16" d="M224.07,443.69a3.38,3.38,0,1,1-3.37-3.37A3.37,3.37,0,0,1,224.07,443.69Z" />
                    <path class="cls-5" d="M348.42,252.69a3.37,3.37,0,1,1-3.37-3.37A3.37,3.37,0,0,1,348.42,252.69Z" />
                    <path class="cls-5" d="M445.08,380a3.37,3.37,0,1,1-3.37-3.37A3.37,3.37,0,0,1,445.08,380Z" />
                    <path class="cls-5" d="M302.87,468.09a3.37,3.37,0,1,1-3.37-3.37A3.37,3.37,0,0,1,302.87,468.09Z" />
                    <path class="cls-5" d="M41.73,316a3.38,3.38,0,1,1-3.37-3.37A3.37,3.37,0,0,1,41.73,316Z" />
                    <path class="cls-5" d="M170.16,181.38a3.38,3.38,0,1,1-2.65-2.65A3.38,3.38,0,0,1,170.16,181.38Z" />
                    <path class="cls-12" d="M444.45,218.21a3.52,3.52,0,1,1-3.51-3.52A3.52,3.52,0,0,1,444.45,218.21Z" />
                    <path class="cls-12" d="M139,452.51a3.52,3.52,0,1,1-3.52-3.52A3.52,3.52,0,0,1,139,452.51Z" />
                    <path class="cls-12" d="M128.62,249.39a2.6,2.6,0,1,1-2.6-2.6A2.6,2.6,0,0,1,128.62,249.39Z" />
                    <path class="cls-22" d="M75,215.27a3.42,3.42,0,1,1-3.42-3.42A3.42,3.42,0,0,1,75,215.27Z" />
                    <circle class="cls-22" cx="454.45" cy="337.31" r="3.36" />
                    <path class="cls-22" d="M376.54,427.07a3.36,3.36,0,1,1-3.36-3.36A3.36,3.36,0,0,1,376.54,427.07Z" />
                    <text class="cls-23" transform="translate(121.23 78.11)">
                        مبروك التخرج</text><text id="svgText" class="cls-24" x="49%" y="26.5%" text-anchor="middle">
                        <?php echo htmlspecialchars($_POST['name']); ?>
                    </text>
                </g>
            </g>
        </svg>
    </div>
    <div class="buttons-container">
        <button id="downloadBtn">تنزيل كصورة</button>
        <select id="qualitySelect">
            <option value="0.1">جودة منخفضة</option>
            <option value="0.5">جودة متوسطة</option>
            <option value="0.9" selected>جودة عالية</option>
        </select>
        <select id="widthSelect">
            <option value="200">200px</option>
            <option value="400">400px</option>
            <option value="600" selected>600px</option>
        </select>
    </div>

    <script>
        document.getElementById('downloadBtn').addEventListener('click', function () {
            var svg = document.querySelector('svg');
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');
            var data = (new XMLSerializer()).serializeToString(svg);
            var DOMURL = window.URL || window.webkitURL || window;
            var img = new Image();
            var svgBlob = new Blob([data], { type: 'image/svg+xml;charset=utf-8' });
            var url = DOMURL.createObjectURL(svgBlob);

            img.onload = function () {
                canvas.width = parseInt(document.getElementById('widthSelect').value);
                canvas.height = canvas.width;
                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                DOMURL.revokeObjectURL(url);
                var quality = parseFloat(document.getElementById('qualitySelect').value);
                var imgURI = canvas.toDataURL('image/png', quality).replace('image/png', 'image/octet-stream');
                var evt = new MouseEvent('click', {
                    view: window,
                    bubbles: false,
                    cancelable: true
                });
                var a = document.createElement('a');
                a.setAttribute('download', 'download.png');
                a.setAttribute('href', imgURI);
                a.setAttribute('target', '_blank');
                a.dispatchEvent(evt);
            };

            img.src = url;
        });
        ///
        var widthSelect = document.getElementById('widthSelect');
        var heightSelect = document.getElementById('widthSelect');

        widthSelect.addEventListener('change', updateCanvasDimensions);
        heightSelect.addEventListener('change', updateCanvasDimensions);

        function updateCanvasDimensions() {
            var width = parseInt(widthSelect.value);
            var height = parseInt(heightSelect.value);
            canvas.width = width;
            canvas.height = height;
            // Redraw the image with new dimensions
            ctx.drawImage(img, 0, 0, width, height);
        }

    </script>
</body>

</html>