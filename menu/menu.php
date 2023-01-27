<div id="menu-container"> 
    <ul class="menu <?= $theme->getClass("menu") ?>"> 
        <!-- <a href="../"><img src="./logos/<= $theme->getLogoFilename(); ?>.png" class="logo"></a>  -->
        <a href="/"><div class="logo <?= $theme->getClass("logo"); ?>"></div></a>
        <li onmouseover="change(1);" onmouseleave="unchange(1);"><a class="sites s1" href="/"><p id="text1">ACCUEIL</p></a></li> 
        <li onmouseover="change(2);" onmouseleave="unchange(2);"><a class="sites s2" href="/course/"><p id="text2">PARCOURS</p></a></li> 
        <li onmouseover="change(3);" onmouseleave="unchange(3);"><a class="sites s3" href="/perso/"><p id="text3">PERSO</p></a></li> 
        <li onmouseover="change(4);" onmouseleave="unchange(4);"><a class="sites s4" href="/contact/"><p id="text4">CONTACT</p></a></li> 
        <form action="./" method="post" class="theme-form">
            <button type="submit" name="dark-mode" class="<?= $theme->getButtonClass()?> mode-button"></button>
        </form>
    </ul> 
    <ul class="mediamenu"> 
        <a href=""><img src="logos/portfolio_logo.png" class="logo"></a> 
        <a class="mediasites" id="receptionsite" href="/"><img src="./logos/reception_logo.png"></a> 
        <a class="mediasites" id="coursesite" href="/course/"><img src="./logos/cv_logo.png"></a> 
        <a class="mediasites" id="personalsite" href="/perso/"><img src="./logos/personnal_logo.png"></a> 
        <a class="mediasites" id="contactsite" href="/contact/"><img src="./logos/contact_logo.png"></a> 
    </ul> 
</div> 