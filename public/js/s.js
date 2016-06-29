// TASTO APRI
var burgerIcon = $('.burger');
var burgerLine1 = $('.burger .line1');
var burgerLine2 = $('.burger .line2');
var burgerLine3 = $('.burger .line3');
var speed = 0.1;

// MENU
var menuContainer = $('.sidebar');
var barra = menuContainer.find('.menu-bg');
var menu = $('.menu');
var lista = menu.find('li');
var linkMenu = lista.find('a');

// LOGO
var logo = $('.logo');

// ANIMAZIONE MENU
var tlOpen = new TimelineMax({paused: true});
tlOpen.add('inizio')
	.to(burgerLine1, speed, {top: '50%', ease:Power3.easeOut}, "label--1")
	.to(burgerLine3, speed, {top: '50%', ease:Power3.easeOut}, "label--1")

	.to(burgerLine1, speed, {css:{width: '4px', left: '50%'}, ease:Power2.easeOut}, "label--2")
	.to(burgerLine2, speed, {css:{width: '4px', left: '50%', marginLeft: '-2px'}, ease:Power2.easeOut}, "label--2")
	.to(burgerLine3, speed, {css:{width: '4px', left: '50%', marginLeft: '-2px'}, ease:Power2.easeOut}, "label--2")
	

	.to(burgerLine2, speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "label--3")
	.to(burgerLine3, speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "label--3")
	
	.fromTo(barra, 0.4, {autoAlpha: 0}, {autoAlpha: 0.95, width:'100%', height:'100%', margin:'0', ease: Power4.easeInOut, force3D:true}, "label--2")

	.to(burgerLine2, speed, {css:{transform: 'rotate(45deg)'}, ease:Power2.easeOut}, "label--4")
	.to(burgerLine3, speed, {css:{transform: 'rotate(-45deg)'}, ease:Power2.easeOut}, "label--4")

	.fromTo(menuContainer, 0.4, {autoAlpha: 0, zIndex:'-1'}, {autoAlpha: 1, zIndex:'1000'}, "label--5")/*?!?!?!?!??!*/
	.to(burgerIcon, 0.5, {css:{backgroundColor: 'transparent'}, ease:Power2.easeOut}, "label--5")
	.staggerFromTo(lista, 0.5, {autoAlpha:0, visibility: 'hidden', x:'-=100'},{autoAlpha:1, x:'0', visibility: 'visible', ease:Power4.easeInOut}, 0.1, "label--5");

$('.burger').on('click', function() {
	$(this).toggleClass('active');
	$('aside').toggleClass('active');
	if ($(this).hasClass("active") ) {
		tlOpen.play(); 
	} else {
		tlOpen.reverse(); 
	}
});

// TESTO IN HOME
var words = ['una capacità.', 'un valore.','una passione.','una storia.','un obiettivo', 'un talento.'];
var words2 = ['Possiamo fare tutto.','Lavorare duramente.','I nostri clienti','Ogni minuto delle nostre vite.','Non smettere mai di imparare.', 'Sappiamo ascoltare.'];
var titolo = $('.spin span');
var sottoTitolo = $('.plus p');
var homeTxt = new TimelineMax({type:"words, chars", repeat:-1});
var homeTxt2 = new TimelineMax({type:"words2, chars", repeat:-1});
var i=0;
var j=0;
for(i=0, j=0; i<words.length, j<words2.length; i++,j++){
	homeTxt.add("inizio")
		.to(titolo, 0.8, {text:{value:words[i]}, ease:Linear.easeNone}, "=2");

	homeTxt2.add("inizio")
		.to(sottoTitolo, 0.8, {text:{value:words2[j]}, ease:Linear.easeNone}, "=2");
};

// PROVA HOVER HOME WORKs
$('.menu ul li a').each(function() {
	var tlHoverMenu = new TimelineLite({paused:true})
	.to(this, 0.9, { color:'#f00', ease:Linear.easeNone}, 0)
	this.hoverTween = tlHoverMenu;
});
$('.menu ul li a').hover(function() {
	this.hoverTween.play();
}, function() {
	this.hoverTween.reverse();
});


//SCROLL MAGIC
var controller = new ScrollMagic.Controller();

//EVIDENZIATORE
var marker = $('.giallo .marker');
var sezione = new TimelineMax();
var evidenziato = new TimelineMax();
sezione
.fromTo('.giallo ',0.6, {autoAlpha:0, y: "+=350"},{autoAlpha:1, y: "0", ease:Sine.easeInOut}, 'ora');
evidenziato.add("ora")
.fromTo('.giallo h1',0.5, {autoAlpha:0, x:"-=200"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.fromTo('.giallo .col-half',0.5, {autoAlpha:0, x:"+=200"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
//evidenziatore 
.staggerTo( marker, 0.5, {backgroundPosition:'-100% 0', ease:Linear.easeNone}, 0.2, "label--mia");

// 2. Curtain Scene
var scenaGiallo = new ScrollMagic.Scene({triggerElement: ".giallo", triggerHook: 'onEnter', offset:-200})
.addIndicators()
.addTo(controller)
.setTween(sezione);

var scenaGiallo2 = new ScrollMagic.Scene({triggerElement: ".giallo", offset: -250, reverse:false})
.addIndicators()
.addTo(controller)
.setTween(evidenziato);



/*
// PROVA HOVER MENU
$('.menu ul li a').each(function() {
	var tlHoverMenu = new TimelineLite({paused:true})
	.to(this, 0.9, { color:'#f00', ease:Linear.easeNone}, 0)
	this.hoverTween = tlHoverMenu;
});
$('.menu ul li a').hover(function() {
	this.hoverTween.play();
}, function() {
	this.hoverTween.reverse();
});
*/


// Controller

/*
$( document ).ready(function() {
	$( ".thumb" ).each(function() {
		var attr = $(this).attr('data-image');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background-image', 'url('+attr+')');
		}
  	});

	$(".thumb").each(function(){ //position the background images
		var path = $(this).css('background-image').replace('url', '').replace('(', '').replace(')', '').replace('"', '').replace('"', ''); //get the background-image path
		var tempImg = '<img class="tempImg" src="' + path + '"/>'; //write HTML for the image
		$('body').append(tempImg); // add to DOM before </body>
		$('.tempImg').hide(); //hide image

		$('.tempImg').bind('load', function(){
			var height = $(this).height();
			var width = $(this).width();
			$('.main-item').css('height',height);
			//$('.main-item').css('width',width);
		});

		//$('.tempImg').remove();
	});
});
*/