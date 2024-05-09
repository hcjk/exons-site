<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exon's Technologies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <style>
        :root {
            --bg: dark;
            --text: white;
            --yellow: cyan;
            --red: white;
            --green: blue;
        }

        * {
            padding: 0 0;
            margin: 0 0;
        }

        body {
            height: 100vh;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            gap: 3em;
            background-color: black;
            font-family: "Poppins", sans-serif;
            margin: 0 10em;
        }

        footer {
            text-align: center;
            padding: 20px;
            margin: 20px 20px;
            color: white;
        }

        .footer-text p {
            margin: 0;
        }

        .footer-images {
            margin-top: 5px;
        }

        .footer-images img {
            width: 300px;
            height: 300px;
            margin: 3px;
        }


        .small-images {
            margin-top: 20px;
        }

        .small-images img {
            width: 30px;
            height: 30px;
            margin: 5px;
        }

        h1 {
            font-size: 60px;
            font-weight: normal;
            margin: 0;
        }

        h2 {
            font-size: 32px;
        }

        p {
            font-size: 20px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        body::before,
        body::after {
            position: absolute;
            left: 0;
            top: 0;
            content: '';
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 40%;
        }


        /* Blobs */
        .blob-cont {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: -2;
            height: 500px;
            width: 500px;
            position: relative;
            right: 5em;
        }


        .blob {
            border-radius: 100px;
            filter: blur(60px);
        }

        .yellow {
            background-color: var(--yellow);
            position: absolute;
            top: 200px;
            left: 100px;
            height: 200px;
            width: 200px;

            animation: yellow 8s infinite ease;
        }

        .green {
            background-color: var(--green);
            position: absolute;
            top: 80px;
            right: -20px;
            height: 200px;
            width: 250px;

            animation: green 8s infinite ease;
        }

        .red {
            background-color: var(--red);
            position: absolute;
            right: 0;
            top: 300px;
            height: 250px;
            width: 200px;

            animation: red 8s infinite linear;
        }

        @keyframes yellow {
            0% {
                top: 200px;
                left: 100px;
                transform: scale(1);
            }
            30% {
                top: 300px;
                left: 150px;
                transform: scale(1.2);
            }
            60% {
                top: 100px;
                left: 200px;
                transform: scale(1.3);
            }
            100% {
                top: 200px;
                left: 100px;
                transform: scale(1);
            }
        }

        @keyframes green {
            0% {
                top: 80px;
                right: -20px;
                transform: scale(1.2);
            }
            30% {
                top: 300px;
                right: -20px;
                transform: scale(1);
            }
            60% {
                top: 200px;
                right: 100px;
                transform: scale(1);
            }
            100% {
                top: 80px;
                right: -20px;
                transform: scale(1.2);
            }
        }

        @keyframes red {
            0% {
                top: 250px;
                right: 0;
                transform: scale(1);
            }
            30% {
                top: 150px;
                right: 150px;
                transform: scale(1.4);
            }
            60% {
                top: 250px;
                right: 100px;
                transform: scale(1);
            }
            100% {
                top: 250px;
                right: 0;
                transform: scale(1);
            }
        }


        /* kitas visas puzlapis no hacks */
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .textcolor {
            color: white;
        }

        .menu {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: center;
            gap: 3em;
        }

        .backgr {
            position: absolute;
            left: 0;
            top: 0;
            content: '';
            width: 100%;
            height: 100%;
        }

        .hero {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 80%;
            gap: 3em;
            background: linear-gradient(to right, white 1px, transparent 1px) 0 0 no-repeat,
            linear-gradient(to right, white 1px, transparent 1px) 0 100% no-repeat,
            linear-gradient(to left, white 1px, transparent 1px) 100% 0 no-repeat,
            linear-gradient(to left, white 1px, transparent 1px) 100% 100% no-repeat,
            linear-gradient(to bottom, white 1px, transparent 1px) 0 0 no-repeat,
            linear-gradient(to bottom, white 1px, transparent 1px) 100% 0 no-repeat,
            linear-gradient(to top, white 1px, transparent 1px) 0 100% no-repeat,
            linear-gradient(to top, white 1px, transparent 1px) 100% 100% no-repeat;
            background-size: 20px 20px;

        }

        .hero-text {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            gap: 3em;
        }

        .buttons {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            gap: 2em;
        }

        .button {
            padding: 1em 3em;
            border: 1px solid white;
            color: white;
            font-size: 18px;
            border-radius: 20px;
        }

        .primary {
            color: white;
            border-radius: 20px;
        }

        .primary:hover {
            background-color: white;
            color: black;
            border-radius: 20px;
        }

        .secondary {
            color: white;
            border-radius: 20px;
        }

        .secondary:hover {
            background-color: white;
            color: black;
            border-radius: 20px;
        }

        @media only screen and (max-width: 1000px) {
            body {
                margin: 1em;
            }
        }

        .image-box {
            width: 40%;
            border-radius: 10px;
        }

        .image-box img {
            height: 100%;
            width: 100%;
            border-radius: 20px;
            box-shadow: rgba(52, 164, 235, 0.56) 0 22px 70px 4px;
        }

        .image-boxx {
            width: 40%;
            border-radius: 10px;
        }

        .image-boxx img {
            height: 100%;
            width: 100%;
            border-radius: 20px;
            box-shadow: rgba(245, 191, 66, 0.56) 0 22px 70px 4px;
        }


        .text-box {
            width: 50%;
        }

        .text-box h1 {
            font-size: 24px;
        }

        .text-box p {
            font-size: 16px;
            color: #333;
        }

        @media only screen and (max-width: 1100px) {
            .nav {
                flex-direction: column;
            }
            .menu {
                gap: 2em;
            }
            .hero {
                flex-direction: column;
            }
        }

    </style>
</head>