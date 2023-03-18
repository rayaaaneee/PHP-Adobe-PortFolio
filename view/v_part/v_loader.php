<div id="loader">
    <div id="backgroundLoader" class="<?= $theme->getClass("background"); ?>"></div>
    <div id="container" class="<?= $theme->getClass("container"); ?>" onmouseover="changeCursor();" onmouseout="unchangeCursor();">
        <div id="left">
            <div id="title" class="<?= $theme->getClass("title"); ?>">
                <img draggable="false" src="<?= PATH_IMAGES; ?>header/<?= $theme->getLogoFilename(); ?>" alt="PortFolio">
                <h1>Adobe Portfolio</h1>
            </div>
            <div id="loader">
            </div>
            <div id="text">
                <div class="abovetext">
                    <p class="highfontweight">© 1990 - 2022 Adobe. All rights reserved.</p>
                    <p class="highfontweight">Illustration de Flore Marquin</p>
                    <p class="lowfontweight">Illustration inspirée par le seigneur des anneaux : Les anneaux de pouvoirs. "Pour obtenir plus de détails et des informations juridiques, rendez vous sur l'écran.</p>
                    <p id="toChange" class="highfontweight"></p>
                </div>
                <div class="undertext">

                </div>
                <p id="underChange" class="lowfontweight2">Russel Williams, Thomas Knoll, John Knoll, Mark Hamburg, Jackie Lincoln-O w y ang, A lan Erickson, Sarah Kong, Jerry Harris, Mike Shaw, Thomas Ruark, Yukie Takahashi, David Dobish, John Peterson, Adam Jerugim, Yuko Kagita, Foster Brereton, Meredith Payne Stotzner, Tai Luxon, Vinod Balakrishnan, David Hackel, Eric Floch, Judy Lee, Kevin Hopps, Barkin Aygun, Shanmugh Natarajan, Vishal Wadhwa, Pulkit Jindal, Quynn Megan Le, Stephen Nielson, Bob Archer, Kavana Anand, Chad Rolfs, Charles F. Rose III, Kamal Arora, Joel Baer, Metthew Neldam, Jacob Correia, Pulkit Mehta, Jesper S. Bache, Eric C hing, Dustin Passofaro, Sagar Pathak, Irina Maderych, Praveen Gelra, Vasanth Pai, Zijun Wei, Nithesh Gangadhar Salian</p>
            </div>
            <div id="logo">
                <img draggable="false" src="<?= PATH_IMAGES; ?>loader/adobe.png" alt="Adobe">
                <p>Adobe Creative Cloud</p>
            </div>
        </div>
        <div id="right">
            <div id="img">
                <img draggable="false" src="<?= PATH_IMAGES; ?>loader/load.png" alt="Adobe Portfolio">
            </div>
            <div id="logomedia">
                <img draggable="false" src="<?= PATH_IMAGES; ?>loader/adobe.png" alt="Adobe">
                <p>Adobe Creative Cloud</p>
            </div>
        </div>
    </div>
    <div id="cursor">
        <div class="point p0"></div>
        <div class="point p1"></div>
        <div class="point p2"></div>
        <div class="point p3"></div>
        <div class="point p4"></div>
        <div class="point p5"></div>
    </div>
</div>