importScripts('./waitme/waitme.js');

function run_waitMe(el, num, effect){
    text = `Pagamento sendo processado, aguarde...`;
    fontSize = '28px';
    switch (num) {
        case 1:
        maxSize = '';
        textPos = 'vertical';
        break;
        case 2:
        text = '';
        maxSize = 30;
        textPos = 'vertical';
        break;
        case 3:
        maxSize = 30;
        textPos = 'horizontal';
        fontSize = '18px';
        break;
    }
    el.waitMe({
        effect: effect,
        text: text,
        bg: 'rgba(255,255,255,0.7)',
        color: '#1a0e3e',
        maxSize: maxSize,
        waitTime: -1,
        source: 'img.svg',
        textPos: textPos,
        fontSize: fontSize,
        onClose: function(el) {}
    });
}

run_waitMe($('body'), 1, 'bounce');

/*
    none
    bounce
    rotateplane
    stretch
    orbit
    roundBounce
    win8,
    win8_linear
    ios
*/