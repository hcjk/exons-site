<?php include "header.php"; ?>

<body>

<div class="content">
    <div class="nav">
        <div class="logo">
            <img src="images/logo.svg" alt="logo">
        </div>
        <div class="menu">
            <a class="textcolor" href="https://dsc.gg">CHITAI</a>
            <a class="textcolor" href="https://dsc.gg">SDAI</a>
            <a class="textcolor" href="https://dsc.gg">Service's</a>
            <a class="textcolor" href="https://dsc.gg">Safety</a>
            <a class="textcolor" href="https://dsc.gg">Contact's</a>
        </div>
    </div>
    <div class="hero">
        <div class="hero-text">
            <h1 class="textcolor">Exon's Technologies</h1>
            <p class="textcolor">Let's make the future even brighter with Artificial Intelligence, Design & more...</p>
            <div class="buttons">
                <a class="button primary" href="https://dsc.gg" target="_blank">Service's</a>
                <a class="button secondary" href="https://dsc.gg/exonui" target="_blank">Discord Server</a>
            </div>
        </div>
        <div class="blob-cont">
            <div class="yellow blob"></div>
            <div class="red blob"></div>
            <div class="green blob"></div>
        </div>
    </div>

    <svg>
        <filter id='noiseFilter'>
            <feTurbulence
                    type='fractalNoise'
                    baseFrequency='0.8'
                    stitchTiles='stitch'/>
            <feColorMatrix in="colorNoise" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"/>
            <feComposite operator="in" in2="SourceGraphic" result="monoNoise"/>
            <feBlend in="SourceGraphic" in2="monoNoise" mode="screen"/>
        </filter>

    </svg>

    <!-- Noise effect applied to the bottom of the page -->
    <div class="backgr" style="position: fixed; bottom: 0; width: 100%; height: 100%; z-index: -1;">
        <div style="position: absolute; left: 0; right: 0; top: 0; bottom: 0; background-color: #000000; filter: url(#noiseFilter); opacity: 0.2;"></div>
    </div>

</div>

<?php include "footer.php"; ?>