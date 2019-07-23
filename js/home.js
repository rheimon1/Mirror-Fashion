let banners = ["img/destaque-home.jpg", "img/destaque-home-2.jpg"];
let bannerAtual = 0;

function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2
    document.querySelector('.banner-destaque img').src = banners[bannerAtual];
}

let timer = setInterval(trocaBanner, 4000);
let controle = document.querySelector('a.pause');

controle.onclick = function() {
    if (controle.className == 'pause') {
        clearInterval(timer);
        controle.className = 'play';
    } else {
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
    }
    return false;
};

$('.painel button').click(function() {
	$(this).parent().toggleClass('painel-aberto');
});

