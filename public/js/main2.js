// VARIABILI / Timeline "burgerOpenTL"
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



// ANIMAZIONE LETTERE + TIMELINE GSAP
var words = ['una capacità.', 'un valore.','una passione.','una storia.','un obiettivo', 'un talento.'];
var words2 = ['Possiamo fare tutto.','Lavorare duramente.','I nostri clienti','Ogni minuto delle nostre vite.','Non smettere mai di imparare.', 'Sappiamo ascoltare.'];
var titolo = $('.home .spin span');
var sottoTitolo = $('.home .plus p');

		// TIMELINE: homeTxt, homeTxt2 (ANIMAZIONE TESTO IN HOME)

var homeTxt = new TimelineMax({type:"words, chars", repeat:-1});
var homeTxt2 = new TimelineMax({type:"words2, chars", repeat:-1});
var i=0;
var j=0;
for(i=0, j=0; i<words.length, j<words2.length; i++,j++){
	homeTxt.add("inizio")
		.to(titolo, 0.4, {text:{value:words[i]}, ease:Linear.easeNone}, "=2");

	homeTxt2.add("inizio")
		.to(sottoTitolo, 0.4, {text:{value:words2[j]}, ease:Linear.easeNone}, "=2");
};





// DEFINISCO UNA MASTER TIMELINE PER ATTACCARCI IL MONDO
var masterTL = new TimelineMax();




// TIMELINE: INTRO (DISSOLVENZA BURGER E LOGO)
var introTL = new TimelineMax();

introTL
.fromTo(".burger", 0.5, {autoAlpha: 0, x:'-=500'}, {autoAlpha: 1, x:'0', ease:Power2.easeOut})
.add('entraburger')
.fromTo(".logo", 0.5, {autoAlpha: 0, x:'+=300'}, {autoAlpha: 1, x:'0', ease:Power2.easeOut}, 'entraburger-=0.3')
.add('fineIntro');







// TIMELINE: burgerOpenTL (APERTURA MENU)
var burgerOpenTL = new TimelineMax({paused: true, yoyo: true});
burgerOpenTL.add('inizio')
  
	.to(burgerLine1, speed, {top: '50%', ease:Power3.easeOut}, "inizio")
	.to(burgerLine3, speed, {top: '50%', ease:Power3.easeOut}, "inizio")
	.add('label--2')
	.to(burgerLine1, speed, {css:{width: '4px', left: '50%'}, ease:Power2.easeOut}, "label--2")
	.to(burgerLine2, speed, {css:{width: '4px', left: '50%', marginLeft: '-2px'}, ease:Power2.easeOut}, "label--2")
	.to(burgerLine3, speed, {css:{width: '4px', left: '50%', marginLeft: '-2px'}, ease:Power2.easeOut}, "label--2")
	
	.add('label--3')
	.to(burgerLine2, speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "label--3")
	.to(burgerLine3, speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "label--3")
	
	.fromTo(barra, 0.1, {autoAlpha: 0}, {autoAlpha: 1, width:'100%', height:'100%', margin:'0', ease: Power4.easeInOut, force3D:true}, "label--2")
	.add('label--4')
	.to(burgerLine2, speed, {css:{transform: 'rotate(45deg)'}, ease:Power2.easeOut}, "label--4")
	.to(burgerLine3, speed, {css:{transform: 'rotate(-45deg)'}, ease:Power2.easeOut}, "label--4")
	.add('label--5')
	.fromTo(menuContainer, 0.4, {autoAlpha: 0, zIndex:'-1'}, {autoAlpha: 1, zIndex:'1000'}, "label--5")/*?!?!?!?!??!*/
	.to(burgerIcon, 0.5, {css:{backgroundColor: 'transparent'}, ease:Power2.easeOut}, "label--5")
	.staggerFromTo(lista, 0.5, {autoAlpha:0, visibility: 'hidden', x:'-=100'},{autoAlpha:1, x:'0', visibility: 'visible', ease:Power4.easeInOut}, 0.1, "label--5");



$('.burger').on('click', function() {
	$(this).toggleClass('active');
	$('aside').toggleClass('active');
	if ($(this).hasClass("active") ) {
		$('.plus').fadeOut();
		burgerOpenTL.play(); 
	} else {
		burgerOpenTL.reverse(1); 
		$('.plus').fadeIn();
	}
});



// TIMELINE & ANIMAZIONE TESTI HOME


function inizializzatitoli(){
var timeline_titoli = new TimelineMax();

timeline_titoli

.fromTo('.main',0.5, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeInOut}, 0.5)
.add("step1")

.fromTo('.plus h1',0.5, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeInOut}, 'step1+=0.3')
.fromTo('.plus .underline',1, {autoAlpha:0, x:"-=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 'step1+=0.3')
.add("step2")

.fromTo('.plus p',0.5, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeInOut}, 'step1+=0.8')
.add(homeTxt, 'step2').add(homeTxt2, 'step2'); // innesto le timeline sulla principale

masterTL.add(timeline_titoli);



}


function inizializzailmondo() {



inizializzatitoli();


// TIMELINE X PER FILTRI CLIENTI
var box = $("#filtri");
var filtriContainer = $('.filtriContainer');
var fltrClient = $('.fltrClient');
var filtriclienti = new TimelineMax({paused: true});
var clienteattivo = $('.ichissi.cnt');
filtriclienti
	.fromTo(box, 0.1, {zIndex:'-1', autoAlpha: 0}, {zIndex:'9999', autoAlpha: 1}, "inizio")
	.fromTo(filtriContainer, 0.4, {autoAlpha: 0, width:'', height:'100%'}, {autoAlpha: 1, width:'100%', height:'100%', margin:'0', ease: Power4.easeInOut, force3D:true}, "inizio")
	
	.to('.ichissi .line.line2', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio2")
	.to('.ichissi .line.line3', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio2")
	.to('.ichissi .line.line2', speed, {css:{transform: 'rotate(45deg)'}, ease:Power2.easeOut}, "inizio2")
	.to('.ichissi .line.line3', speed, {css:{transform: 'rotate(-45deg)'}, ease:Power2.easeOut}, "inizio2")
	.fromTo(fltrClient, 0.4, {autoAlpha: 0}, {autoAlpha: 1}, "inizio2")
	.staggerFromTo( ".fltrClient .list-columns li", 0.3, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeIn}, 0.03, 'inizio2');


// TIMELINE FILTRI BUSINESS


var fltrBusiness = $('.fltrBusiness');
var filtriBusiness = new TimelineMax({paused: true});
filtriBusiness
	.fromTo(box, 0.3, {zIndex:'-1', autoAlpha: 0}, {zIndex:'9999', autoAlpha: 1})
	.add('boxIn')
	.fromTo(filtriContainer, 0.1, {autoAlpha: 0, width:'0', height:'0'}, {autoAlpha: 1, width:'100%', height:'100%', margin:'0', ease: Power4.easeInOut}, "boxIn-=0.2")
	
	.to('.ichissi .line.line2', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line3', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line2', speed, {css:{transform: 'rotate(45deg)'}, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line3', speed, {css:{transform: 'rotate(-45deg)'}, ease:Power2.easeOut}, "inizio28")
	.fromTo(fltrBusiness, 0.4, {autoAlpha: 0}, {autoAlpha: 1}, "inizio28")
	.staggerFromTo( ".fltrBusiness .list-columns li", 0.3, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeIn}, 0.03, 'inizio28');




// TIMELINE FILTRI BUSINESS


var fltrAmbito = $('.fltrAmbito');
var filtriAmbito = new TimelineMax({paused: true});
filtriAmbito
	.fromTo(box, 0.1, {zIndex:'-1', autoAlpha: 0}, {zIndex:'9999', autoAlpha: 1})
	.add('boxIn')
	.fromTo(filtriContainer, 0.1, {autoAlpha: 0, width:'0', height:'0'}, {autoAlpha: 1, width:'100%', height:'100%', margin:'0', ease: Power4.easeInOut}, "boxIn-=0.2")
	
	.to('.ichissi .line.line2', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line3', speed, {css:{width: '50%', top: '50%', left: '25%', marginLeft: '0'}, delay: speed, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line2', speed, {css:{transform: 'rotate(45deg)'}, ease:Power2.easeOut}, "inizio28")
	.to('.ichissi .line.line3', speed, {css:{transform: 'rotate(-45deg)'}, ease:Power2.easeOut}, "inizio28")
	.fromTo(fltrAmbito, 0.4, {autoAlpha: 0}, {autoAlpha: 1}, "inizio28")
	.staggerFromTo( ".fltrAmbito .list-columns li", 0.3, {autoAlpha:0},{autoAlpha:1, ease:Power4.easeIn}, 0.03, 'inizio28');



$('.business').on('click', function() {
	document.getElementById("tre").className = "ichissi bsn";

	filtriBusiness.play(); 
	filtriAmbito.reverse();
});
$('.bsn').on('click', function() {
	filtriBusiness.reverse(0.5);
	filtriAmbito.reverse();
});


$('.ambito').on('click', function() {
	document.getElementById("tre").className = "ichissi abt";
	filtriAmbito.play();
	filtriBusiness.reverse(); 

});
$('.abt').on('click', function() {
	filtriAmbito.reverse(0.5);
	filtriBusiness.reverse();
});

$('.tutti').on('click', function() {
	 window.location = '/progetti';
});










// HOVER HOME WORKS
$('.lavoroContainer').each(function () {
	var $this = $(this);
	var $innerImg = $this.find('.image-block img');
	var $innerH3 = $this.find('.title-block h3');
	var $innerLine = $this.find('.title-block .underline');
	var $innerSpan = $this.find('.title-block span');
	var tlHoverWorks = new TimelineLite({paused:true})
	.to($innerImg, 0.25, {scale: 1.1, '-webkit-filter':'blur(0px) grayscale(0%)','filter':'blur(0px) grayscale(0%)', ease: Power4.easeNone}, 'primotempo')

// 	effetto blur disattivato 
//	.fromTo($innerImg, 0.5,  {'-webkit-filter':'blur(0px) grayscale(100%)','filter':'blur(0px) grayscale(100%)'}, {'-webkit-filter':'blur(5px) grayscale(100%)','filter':'blur(5px) grayscale(100%)', ease: Power4.easeOut},'primotempo2')
	
	.fromTo($innerH3, 0.2, {autoAlpha:0, x:'-=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerLine, 0.6, {autoAlpha:1, width: '0'},{autoAlpha:1, width: '100', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerSpan, 0.2, {autoAlpha:0, x:'-=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo5');
	this.hoverTweenWorks = tlHoverWorks;
});
$('.lavoroContainer').hover(function() {
		this.hoverTweenWorks.play();
}, function() {
		this.hoverTweenWorks.reverse(0.2);
});
// Dovremmo riuscire a realizzare la stessa cosa per quanto riguarda i marker degli evidenziatori



// HOVER PEOPLE EVERYDAY HUMANS
$('.peopleContainer').each(function() {
	var $this = $(this);
	var $innerImg = $this.find('.image-block img');
	var $innerH3 = $this.find('.title-block h3');
	var $innerLine = $this.find('.title-block .underline');
	var $innerSpan = $this.find('.title-block span');
	var tlHoverWorks = new TimelineLite({paused:true})
	.to($innerImg, 0.25, {scale: 1.1, '-webkit-filter':'blur(0px) grayscale(0%)','filter':'blur(0px) grayscale(0%)', ease: Power4.easeNone}, 'primotempo')
	//.fromTo($innerImg, 0.5,  {'-webkit-filter':'blur(0px) grayscale(100%)','filter':'blur(0px) grayscale(100%)'}, {'-webkit-filter':'blur(5px) grayscale(100%)','filter':'blur(5px) grayscale(100%)', ease: Power4.easeOut},'primotempo2')
	
	.fromTo($innerH3, 0.2, {autoAlpha:0, x:'-=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerLine, 0.6, {autoAlpha:1, width: '0'},{autoAlpha:1, width: '100', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerSpan, 0.2, {autoAlpha:0, x:'-=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo5');
	this.hoverTweenWorks = tlHoverWorks;
});
$('.peopleContainer').hover(function() {
		this.hoverTweenWorks.play();
}, function() {
		this.hoverTweenWorks.reverse(0.2);
});

//SCROLL MAGIC
var controller = new ScrollMagic.Controller();
var controller2 = new ScrollMagic.Controller();

//EIDENZIATORE

// Setting dei marker per evidenziatore
var marker = $('.giallo .marker');
var marker2 = $('.prova .marker');
var marker3 = $('.progetti .marker');

// Inizializzo le timeline
var sezione = new TimelineMax();
var evidenziato = new TimelineMax();
var evidenziato2 = new TimelineMax();
var evidenziato3 = new TimelineMax();
var lavorihome = new TimelineMax();

// Timeline sezione / Bianco che sale
sezione

// TL Evidenziatore sezione GIALLO
evidenziato.add("ora")
.fromTo('.giallo .col-half.sx',1.0, {autoAlpha:0, x:"-=450"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.fromTo('.giallo .underline',1.0, {autoAlpha:0, x:"-=450"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-2')

.fromTo('.giallo .col-half.dx',1.0, {autoAlpha:0, x:"+=200"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.staggerTo( '.marker', 0.5, {backgroundPosition:'-100% 0', ease:Linear.easeNone}, 0.2, "label--mia");

// TL Evidenziatore sezione EVERYDAY HUMANS

evidenziato2.add("prova")
.fromTo('.prova h1',0.5, {autoAlpha:0, x:"-=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.fromTo('.prova .underline',0.5, {autoAlpha:0, x:"-=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')

.fromTo('.prova .col-half',0.5, {autoAlpha:0, x:"+=200"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.staggerTo( marker2, 0.5, {backgroundPosition:'-100% 0', ease:Linear.easeNone}, 0.2, "label--dd");

// TL Evidenziatore sezione ULTIMI LAVORI

evidenziato3.add("progetti")
.fromTo('.progetti h1',0.5, {autoAlpha:0, x:"-=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.fromTo('.progetti .underline',0.5, {autoAlpha:0, x:"-=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')

.fromTo('.progetti .col-half',0.5, {autoAlpha:0, x:"+=200"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo')
.staggerTo( marker3, 0.5, {backgroundPosition:'-100% 0', ease:Linear.easeNone}, 0.2, "label--dd");


lavorihome.add("salita")
.fromTo('#rolla',0.5, {autoAlpha:0, x:"+=250"},{autoAlpha:1, x:"0", ease:Power4.easeInOut}, 0.5, 'sposta-dopo');


// Scrollmagic per sezione bianca
var scenaGiallo = new ScrollMagic.Scene({triggerElement: ".giallo", triggerHook: 'onEnter', offset:-200})

.addTo(controller)
.setTween(sezione);

// Scrollmagic Evidenziato GIALLO
var scenaGiallo2 = new ScrollMagic.Scene({triggerElement: ".giallo", offset: -450, reverse:false})

.addTo(controller)
.setTween(evidenziato);



// Scrollmagic Evidenziato HUMANS
var humans = new ScrollMagic.Scene({triggerElement: ".prova", offset: -460, reverse:false})

.addTo(controller2)
.setTween(evidenziato2);

// Scrollmagic Evidenziato ULTIMI LAVORI
var progetti = new ScrollMagic.Scene({triggerElement: ".progetti", offset: -450, reverse:false})

.addTo(controller2)
.setTween(evidenziato3);

// Scrollmagic Evidenziato ULTIMI LAVORI
var lavori_home = new ScrollMagic.Scene({triggerElement: "#rolla", offset: -650, reverse:false})

.addTo(controller2)
.setTween(lavorihome);


$(function() {
    controllerx = new ScrollMagic();
    $(".giallo").each(function (index, elem) {
        var tween = TweenMax.to(elem, 0.5,
                               {scale: 1.02, backgroundColor: 'rgb(255, 39, 46)' }
                    );
        new ScrollScene({
                duration: 200,
                triggerElement: elem,
                triggerHook: "onCenter",
            })
            .setTween(tween)
            .addTo(controllerx)
            .addIndicators();
    });
});


// TIMELINE ANIMAZIONE CLIENTI

var stagclienti = new TimelineMax({paused: false});

stagclienti.add("stag")
.staggerFromTo( ".listaclienti", 0.4, {autoAlpha:0},{autoAlpha:1, ease:Sine.easeInOut}, 0.1, 'sposta-dopo');








// HOVER HOME WORKS
$('.lavoroContainer.detail').each(function() {
	var $this = $(this);
	var $innerImg = $this.find('.image-block img');
	var $innerH3 = $this.find('.title-block h3');
	var $innerLine = $this.find('.title-block .underline');
	var $innerSpan = $this.find('.title-block span');
	var tlHoverWorks = new TimelineLite({paused:true})
	.to($innerImg, 0.25, {scale: 1.1, '-webkit-filter':'blur(0px) grayscale(0%)','filter':'blur(0px) grayscale(0%)', ease: Power4.easeNone}, 'primotempo')

// 	effetto blur disattivato 
//	.fromTo($innerImg, 0.5,  {'-webkit-filter':'blur(0px) grayscale(100%)','filter':'blur(0px) grayscale(100%)'}, {'-webkit-filter':'blur(5px) grayscale(100%)','filter':'blur(5px) grayscale(100%)', ease: Power4.easeOut},'primotempo2')
	
	.fromTo($innerH3, 0.2, {autoAlpha:1, x:'+=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerLine, 0.6, {autoAlpha:1, width: '0'},{autoAlpha:1, width: '100', ease:Linear.easeNone}, 'primotempo3')
	.fromTo($innerSpan, 0.2, {autoAlpha:0, x:'-=50px'},{autoAlpha:1, x:'0', ease:Linear.easeNone}, 'primotempo5');
	this.hoverTweenWorks = tlHoverWorks;
});
$('.lavoroContainer.detail').hover(function() {
		this.hoverTweenWorks.play();
}, function() {
		this.hoverTweenWorks.reverse(0.2);
});


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

function fancy_nav(new_url,new_title) {
   	var tl = new TimelineLite({onComplete:change_content});
  
   	window.new_url = new_url;
   	window.new_title = new_title;
   
   	tl.to('body', 1, {autoAlpha:0});
   }
  
  function change_content() {
  	source_url = window.new_url;
  	$.ajax(source_url).done(function(data) {
  		$('body').html(data);
  		history.pushState(null, window.new_title, window.new_url);
  		document.title = window.new_title;
  
  		var tl = new TimelineLite();
  		tl.to('body', 1, {autoAlpha:1});
 	});
  	return true;
}


*/





$(function(){	
	var $win = $(window);
	var $doc = $(document);
	var $body = $(".home .humans");
	var bgHeight = 350; 
			
	var docHeight, winHeight, maxScroll;
			
	function onResize(){
		docHeight = $doc.height(); //Altezza di tutto il documento
		winHeight = $win.height(); //Altezza finestra browser
		maxScroll = docHeight - winHeight;
		moveParallax();
	}					
	function moveParallax(){													
		var bgYPos = (bgHeight-winHeight)*($win.scrollTop() / maxScroll);
		TweenLite.to($body, 0.1, {backgroundPosition: "50% " + bgYPos + "px"});	
	}	
	$win.on("scroll", moveParallax).on("resize", onResize).resize();		
});



}

inizializzailmondo();


		   $(function(){
                // pjax
                $(document).pjax('a', '#wrapper')
            })


            $(document).ready(function(){
                // does current browser support PJAX
                if ($.support.pjax) {
                    $.pjax.defaults.timeout = 2000; // time in milliseconds
                }
                var wrapper = $('.joint');

                $(document).on('pjax:clicked', function() {

                $('#wrapper').fadeOut();

                	if ($('.burger').hasClass("active") ) {
					$('.burger').toggleClass('active');
					$('aside').toggleClass('active');
					

					burgerOpenTL.reverse();
					
					} //else { 

					
                	//var preloading = new TimelineMax();

                    //$('#wrapper').fadeOut();
                   // preloading.fromTo(wrapper, 0.7, {autoAlpha:1, x: "-=2000"}, {autoAlpha:1, x: "0", ease:Power2.easeOut })
                   //	.add('finish');

                  // }
                   


                  




                })
                $(document).on('pjax:end', function() {
                    //$('#wrapper').fadeIn();
					$('#wrapper').fadeIn();



				//	var preloading2 = new TimelineMax();

                 //   preloading2.fromTo(wrapper, 1,
                 //       {autoAlpha:1, x: "0"}, 
                 //       {autoAlpha:1, x: "-=2000", ease:Power2.easeOut}, 'finish+=0.5');

					inizializzailmondo();

                })

              


            });         



// Inizializzao animazioni


