firstColor = document.querySelector('.FirstColor');
secondColor = document.querySelector('.SecondColor');
circle = document.querySelector('.circle');
niveau = document.querySelector('.niveau');
ploc = document.querySelector('.genContainer')
containerBall = document.querySelectorAll('.containerBall')

switch (true) {
    case (ploc.classList.contains('plante')):
        firstColor.style.backgroundColor = "#7ec8ac";
        secondColor.style.backgroundColor = "#176665";
        niveau.style.backgroundColor = "#176665";
        containerBall.style.border = "#176665 3px solid";
        break;
    case (ploc.classList.contains('electrique')):
        firstColor.style.backgroundColor = "#f2e47d";
        secondColor.style.backgroundColor = "#fed53f";
        circle.style.backgroundColor = "#e9c851";
        niveau.style.backgroundColor = "#fed53f";
        containerBall[0].style.border = "#fed53f 3px solid";
        containerBall[1].style.border = "#fed53f 3px solid";
        ploc.classList.add('eclair');
        break;
    case (ploc.classList.contains('normal')):
        firstColor.style.backgroundColor = "#f5ebe0";
        secondColor.style.backgroundColor = "#d5bdaf";
        circle.style.backgroundColor = "#e3d5ca";
        niveau.style.backgroundColor = "#d5bdaf";
        containerBall[0].style.border = "#d5bdaf 3px solid";
        containerBall[1].style.border = "#d5bdaf 3px solid";
        ploc.classList.add('normal');
        break;
    case (ploc.classList.contains('combat')):
        firstColor.style.backgroundColor = "#f5ebe0";
        secondColor.style.backgroundColor = "#d5bdaf";
        circle.style.backgroundColor = "#e3d5ca";
        niveau.style.backgroundColor = "#d5bdaf";
        containerBall[0].style.border = "#d5bdaf 3px solid";
        containerBall[1].style.border = "#d5bdaf 3px solid";
        ploc.classList.add('normal');
        break;
    case (ploc.classList.contains('vol')):
        firstColor.style.backgroundColor = "#e0e9f5";
        secondColor.style.backgroundColor = "#afbcd5";
        circle.style.backgroundColor = "#cad2e3"
        niveau.style.backgroundColor = "#afbcd5";
        containerBall[0].style.border = "#afbcd5 3px solid";
        containerBall[1].style.border = "#afbcd5 3px solid";
        ploc.classList.add('vol');
        break;
    case (ploc.classList.contains('poison')):
        firstColor.style.backgroundColor = "#a26ec4";
        secondColor.style.backgroundColor = "#5c5362";
        circle.style.backgroundColor = "#d9cae3"
        niveau.style.backgroundColor = "#5c5362";
        containerBall[0].style.border = "#5c5362 3px solid";
        containerBall[1].style.border = "#5c5362 3px solid";
        ploc.classList.add('poison');
        break;
    case (ploc.classList.contains('sol')):
        firstColor.style.backgroundColor = "#edd693";
        secondColor.style.backgroundColor = "#b9a068";
        circle.style.backgroundColor = "#dfd8c2"
        niveau.style.backgroundColor = "#b9a068";
        containerBall[0].style.border = "#b9a068 3px solid";
        containerBall[1].style.border = "#b9a068 3px solid";
        ploc.classList.add('sol');
        break;
    case (ploc.classList.contains('roche')):
        firstColor.style.backgroundColor = "#bfbdb0";
        secondColor.style.backgroundColor = "#847e82";
        circle.style.backgroundColor = "#c9c5b8"
        niveau.style.backgroundColor = "#847e82";
        containerBall[0].style.border = "#847e82 3px solid";
        containerBall[1].style.border = "#847e82 3px solid";
        ploc.classList.add('roche');
        break;
    case (ploc.classList.contains('insecte')):
        firstColor.style.backgroundColor = "#c0cf6a";
        secondColor.style.backgroundColor = "#8e994f";
        circle.style.backgroundColor = "#9ca1818"
        niveau.style.backgroundColor = "#8e994f";
        containerBall[0].style.border = "#8e994f 3px solid";
        containerBall[1].style.border = "#8e994f 3px solid";
        ploc.classList.add('insecte');
        break;
    case (ploc.classList.contains('acier')):
        firstColor.style.backgroundColor = "#b0b4bb";
        secondColor.style.backgroundColor = "#83858b";
        circle.style.backgroundColor = "#c2c2c2"
        niveau.style.backgroundColor = "#83858b";
        containerBall[0].style.border = "#83858b 3px solid";
        containerBall[1].style.border = "#83858b 3px solid";
        ploc.classList.add('acier');
        break;
    case (ploc.classList.contains('feu')):
        firstColor.style.backgroundColor = "#eb8138";
        secondColor.style.backgroundColor = "#ad612a";
        circle.style.backgroundColor = "#cd9a75"
        niveau.style.backgroundColor = "#ad612a";
        containerBall[0].style.border = "#ad612a 3px solid";
        containerBall[1].style.border = "#ad612a 3px solid";
        ploc.classList.add('feu');
        break;
    case (ploc.classList.contains('psy')):
        firstColor.style.backgroundColor = "#c588ca";
        secondColor.style.backgroundColor = "#a356aa";
        circle.style.backgroundColor = "#e3a4e8"
        niveau.style.backgroundColor = "#a356aa";
        containerBall[0].style.border = "#a356aa 3px solid";
        containerBall[1].style.border = "#a356aa 3px solid";
        ploc.classList.add('psy');
        break;
    case (ploc.classList.contains('glace')):
        firstColor.style.backgroundColor = "#94c0e3";
        secondColor.style.backgroundColor = "#3c5980";
        circle.style.backgroundColor = "#72aac5"
        niveau.style.backgroundColor = "#3c5980";
        containerBall[0].style.border = "#3c5980 3px solid";
        containerBall[1].style.border = "#3c5980 3px solid";
        ploc.classList.add('glace');
        break;
    case (ploc.classList.contains('dragon')):
        firstColor.style.backgroundColor = "#7c9bcc";
        secondColor.style.backgroundColor = "#5b7498";
        circle.style.backgroundColor = "#9db0ce"
        niveau.style.backgroundColor = "#5b7498";
        containerBall[0].style.border = "#5b7498 3px solid";
        containerBall[1].style.border = "#5b7498 3px solid";
        ploc.classList.add('dragon');
        break;
    case (ploc.classList.contains('tenebres')):
        firstColor.style.backgroundColor = "#b7b7b7";
        secondColor.style.backgroundColor = "#545453";
        circle.style.backgroundColor = "#cfcfd0"
        niveau.style.backgroundColor = "#545453";
        containerBall[0].style.border = "#545453 3px solid";
        containerBall[1].style.border = "#545453 3px solid";
        ploc.classList.add('tenebre');
        break;
    case (ploc.classList.contains('fee')):
        firstColor.style.backgroundColor = "#edcae0";
        secondColor.style.backgroundColor = "#bb8faa";
        circle.style.backgroundColor = "#f3d0e5"
        niveau.style.backgroundColor = "#bb8faa";
        containerBall[0].style.border = "#bb8faa 3px solid";
        containerBall[1].style.border = "#bb8faa 3px solid";
        ploc.classList.add('fee');
        break;
    case (ploc.classList.contains('eau')):
        firstColor.style.backgroundColor = "#6daad5";
        secondColor.style.backgroundColor = "#3574a4";
        circle.style.backgroundColor = "#90b7d3"
        niveau.style.backgroundColor = "#3574a4";
        containerBall[0].style.border = "#3574a4 3px solid";
        containerBall[1].style.border = "#3574a4 3px solid";
        ploc.classList.add('eau');
        break;
    case (ploc.classList.contains('spectre')):
        firstColor.style.backgroundColor = "#616287";
        secondColor.style.backgroundColor = "#4a4964";
        circle.style.backgroundColor = "#605f7a"
        niveau.style.backgroundColor = "#4a4964";
        containerBall[0].style.border = "#4a4964 3px solid";
        containerBall[1].style.border = "#4a4964 3px solid";
        ploc.classList.add('spectre');
        break;
}
