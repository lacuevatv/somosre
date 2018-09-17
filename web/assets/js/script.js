/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 ON READY (carga las funciones y realiza algunos eventos simples)
2.0 ON LOAD (carga otras funciones que necesita que este todo cargado)
3.0 FORMULARIOS (funciones)
3.0 POPUP PROMO (funciones)
5.0 SLIDERS (funciones)
6.0 OTRAS FUNCIONES: (scroll to, openCloseMenu, instagram, cargar mapa)
--------------------------------------------------------------*/

//VARIABLES GENERALES
var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';
var paginaActual = 1;


/*--------------------------------------------------------------
1.0 ON READY
--------------------------------------------------------------*/

$(document).ready(function(){

    //iniciar formularios
    formularios();

    /*
     * SCROLL TOP
    */
    $('.go-up').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    
    /*
    * SCROLL TO (links)
    */
    $('.scroll-to').click(function( e ){
        e.preventDefault();
        var href = '#'+$(this).attr('href');
        scrollToID(href);
        if ( window.innerWidth < 992 ) {
            //cierra el menu movil
            openCloseMenu();
        }
    });

    /*
     * TOGGLE
    */
   $('.toggle').click(function(e){
       e.preventDefault();
       $('.toggle').toggleClass('toggle-open');
       openCloseMenu();
   });
    
   

    //boton que muestra compartir
    $(document).on('click', '.btn-share span', function(e){
        e.preventDefault();
        
        //prevee que se active por defecto
        if ( $(this).css('opacity') == 0 ) {
            return;
        }
        var red = $(this).attr('data-red');
        console.log('Compartiendo en ' + red);
    })


    

     /*
      * LOAD MORE AJAX
     */
     /*$(document).on('click', '#load-more', function(){
                
        $.ajax( {
          type: 'POST',
          url: ajaxFileUrl,
          data: {
            function: 'load-more',
            page: paginaActual,
          },
          //funcion antes de enviar
          beforeSend: function() {
              //imagen cargador
              loader.fadeIn();
          },
          success: function ( response ) {
              loader.fadeOut();
              //console.log(response);
              
              if (response) {
                $('#contenedor').append( response );
              } else {
                $('.wrapper-mas-button').remove();
              }
              paginaActual++
          },
          error: function ( ) {
              console.log('error');
          },
        });//cierre ajax

    });*/

   


});//.ready()

/*--------------------------------------------------------------
2.0 ON LOAD
--------------------------------------------------------------*/

$(window).on('load', function(){
    //1. iniciar instagram:
    getInstagram();
    //2. iniciar sliders
    iniciarSliders();
    //3. Iniciar animaciones
    startAnimations('.animate-element', false);
    startAnimations('.animate-element-loop', true);
    //4.iniciar header
    initHeader()
    //5. iniciarparallax
    startAnimations('.parallax', true);
    initParallax();
    

    //3.on rezise: 
    $(window).on('resize', function(){
        getInstagram();
    });

    
    
    
});


/*--------------------------------------------------------------
3.0 FUNCION FORMULARIOS
--------------------------------------------------------------*/

function formularios() {

    var specialcharacters = '@#$^&%*()+=[]\'\"\/{}|:;¡!¿?<>,.';
    var numeros = '0123456789';
    var letras = 'abcdefghijklmnñopqrstuvwxyz';

    //busca los caracteres indicados en un string y devuelve true si existen
    function areThereAny ( cadena, characters ) {
        for (var i = 0; i < characters.length; i++) {
        if ( cadena.indexOf(characters[i]) != -1 ) {
                return true;    
        }
    }
    return false;
    }

    //quita numeros de un string
    function cleanedOthers(cadena, caracteres){ 

    //eliminamos uno por uno
    for (var i = 0; i < caracteres.length; i++) {
        cadena= cadena.replace(new RegExp(caracteres[i], 'gi'), '');
    }   

    return cadena;
    }

    //quita caracteres extraños del string, los caracteres se pasan como una variable
    function cleanedSpecialCharacters(cadena, specialcharacters){ 

    //eliminamos uno por uno
    for (var i = 0; i < specialcharacters.length; i++) {
        cadena= cadena.replace(new RegExp("\\" + specialcharacters[i], 'gi'), '');
    }   

    return cadena;
    }

    //lo pasa a minúsculas
    function toLowerCase(cadena) {
        cadena = cadena.toLowerCase();
        return cadena;
    }

    //remplasa dashes "-" del string por espacios
    function replaceDashes( cadena ) {
    cadena = cadena.replace(/-/gi," ");
    cadena = cadena.replace(/_/gi," ");
    return cadena;
    }


    //borra espacios del string
    function removeDashesSpaces( cadena ) {
    cadena = cadena.replace(/-/gi,"");
    cadena = cadena.replace(/_/gi,"");
    cadena = cadena.replace(/ /gi,"");
    return cadena;
    }

    // Quitamos espacios y los sustituimos por - porque nos gusta mas asi
    function replaceSpaces( cadena ) {
    cadena = cadena.replace(/ /gi,"-");
    return cadena;
    }

    //quita acentos y ñ y lo pasa a minúsculas
    function cleanAcentos( cadena ) {

    // Lo queremos devolver limpio en minusculas
    cadena = cadena.toLowerCase();

    // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
    cadena = cadena.replace(/á/gi,"a");
    cadena = cadena.replace(/é/gi,"e");
    cadena = cadena.replace(/í/gi,"i");
    cadena = cadena.replace(/ó/gi,"o");
    cadena = cadena.replace(/ú/gi,"u");
    cadena = cadena.replace(/ñ/gi,"n");
    return cadena;
    }


    /*
     * FUNCIONES DE LOS LABEL
    */
    //función que hace zoom out a las etiquetas para escribir en los input:
    function zoomOutLabel( input ) {
        var contenedor = $(input).closest('.form-group')
        var label = $(contenedor).find('label')
        $(label).addClass('on');
    }
    //funcion al hacer click en label
    function focusInput( label ) {
        var contenedor = $(label).closest('.form-group')
        var input = $(contenedor).find('input')
        $(input).focus();
    }

    //clic en label, focus en input
    $(document).on('click', 'label', function(){
        focusInput( this );
    });

    //on focus, etiqueta se achica
    $(document).on('focus', 'input.input-default', function(){
        zoomOutLabel( this );
        $(this).addClass('input-on');
    });

    $(document).on('change', 'select', function(){
        var contenedor = $(this).closest('.form-group');
        var label = $(contenedor).find('label')
        zoomOutLabel( label );
    });

    /*
     * VALIDACIONES FORMULARIO
    */
    //FOCUS OUT INPUT
    //input text
    /*$(document).on('focusout', 'input[type=text]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,specialcharacters);
        
        valor = cleanedOthers(valor,numeros);
        valor = replaceDashes(valor);
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( areThereAny(valor, numeros+specialcharacters) || valor == '' || valor.length < 3) {
            $(msj).fadeIn();
            
        } else { 
            $(msj).fadeOut();
           
        }
    });*/

    //input type numbers
    $(document).on('focusout', 'input[type=number]', function() {
        
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 
        
        valor = cleanedOthers(valor,letras);
    
        valor = cleanedSpecialCharacters(valor,specialcharacters)
                
        $(this).val(valor);

        //si hay letras o no pasa alguna de las validaciones devuelve error
        if ( areThereAny(valor, letras+specialcharacters || valor.length < 7) ) {
            $(msj).fadeIn();
            
        } else {
            $(msj).fadeOut(); 
        }
    });

    //input tyme email
    $(document).on('focusout', 'input[type=email]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,'#$^&%*()[]\'\"\/{}:;<>,');
        
        //remueve algún espacio si hay
        valor = valor.replace(/ /gi,"");
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( valor == '' || valor.length < 8 || valor.indexOf('@') == -1 || valor.indexOf('@')  == 0 ) {
            $(msj).fadeIn();
        } else {
            $(msj).fadeOut();
        }
    });


    /*
     * SUBMIT FORMULARIO
    */    

    $(document).on('submit', '#default-form', function( e ) {
        e.preventDefault();
        var loader = $('.loader');
        var msj = $(this).find('.msj-form');
        var contenedor = $(loader).closest('form');

    	formData = new FormData( this );
        formData.append('function','formulario-default');

    	$.ajax( {
            type: 'POST',
            url: ajaxFileUrl,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            //funcion antes de enviar
            beforeSend: function() {
                $(loader).fadeIn();
            },
            success: function ( response ) {
                console.log(response);
                var respuesta = JSON.parse(response);
                $(loader).fadeOut(); 
                msj.html(respuesta.email);    
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario default

    /*
     * SUBMIT FORMULARIO NEWSLETTER
    */    

   $(document).on('submit', '#newsletter-form', function( e ) {
    e.preventDefault();

    var input = $(this).find('input[name="email"]');

    formData = new FormData( this );
    formData.append('function','newsletter-form');

    $.ajax( {
        type: 'POST',
        url: ajaxFileUrl,
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function ( response ) {
            console.log(response);
            $(input).val('Listo, muchas gracias');
            $(input).css('color', 'red')
        },
        error: function ( ) {
            console.log('error');
        },
    });//cierre ajax

});//submit formulario default

}//function formularios

/*--------------------------------------------------------------
4.0 POPUP PROMO
--------------------------------------------------------------*/

function popupPromo() {
    var popup = $( '.popup' );
    var popupIMG = $( '.popup img' );
    var tiempo = 7000;
    if ( popup.length != 0 ) {
        var closeX = $( '.close-popup' );
        var closeBTN = $( '.cerrar-popup' );

        function openPop () {
            popup.addClass('popup-active');
            popupIMG.fadeIn();
        }

        setTimeout( openPop, tiempo);

        function closePopup() {
            popup.removeClass('popup-active');
            popupIMG.fadeOut(tiempo);
        }

        closeX.click(closePopup);
        closeBTN.click(closePopup);
    }
}

/*--------------------------------------------------------------
5.0 SLIDERS
--------------------------------------------------------------*/

function iniciarSliders(){

    //slider superior home
    owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        lazyLoad: true,
        autoHeight:true,
        animateOut: 'fadeOut',
        navText : ['<span class="icon-arrow icon-arrow-left"></span>','<span class="icon-arrow icon-arrow-right"></span>'],
        dots:false,
        responsive:{
            0:{
                items:1
            },
        },
    });

}

/*--------------------------------------------------------------
6.0 OTRAS FUNCIONES
--------------------------------------------------------------*/

/*
 * scroll to id
 * se pasa con numeral #LINK
*/
function scrollToID ( id ) {
    $('html, body').stop().animate({
        scrollTop: $(id).offset().top -90
    }, 'slow');
}

/*
 * ABRE Y CIERRA MENU MOVIL
*/
function openCloseMenu(){
    
     var menu = $('.main-menu')
     var h = $(menu).prop('scrollHeight')+40;

     if ( $(menu).height() == 0 ) {
            $(menu).animate({
             'height': h+'px',
         }, 500);
     } else {
            $(menu).animate({
             'height': '0px',
         }, 500);
     }
 }

/*
* CARGAR PLUGIN DE INSTAGRAM
*/
function getInstagram() {
    var html = '<script src="'+baseUrl+'/assets/js/lightwidget.js"></script>';
    var altura = 330;

    if (window.innerWidth > '400')  {
        altura = 370;
    }

    if (window.innerWidth > '480')  {
        altura = 560;
    }

    if (window.innerWidth > '767')  {
        altura = 200;
    }

    if (window.innerWidth > '992')  {
        altura = 250;
    }

    if (window.innerWidth > '1279')  {
        altura = 310;
    }
    if (window.innerWidth > '1600')  {
        altura = 380;
    }

    if (window.innerWidth > '767')  {
        html += '<iframe src="//lightwidget.com/widgets/5f76bd453f335434aba8ae21a25bb57e.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;height:100%"></iframe>';
    } else {
        html += '<iframe src="//lightwidget.com/widgets/3a71a1be6fe05cd4a511ad12c4c138d8.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;height:100%"></iframe>';
    }

    contenedor = $('#instagram-wrapper').empty().append($(html));
    contenedor.height(altura);

    //agrega el texto vertical
    $('#instagram').find('.texto-vertical').css('opacity','1');

    //agrega el sello rojo
    $('#instagram-wrapper').append( $('<span class="sello-rojo"></span>') );
    $('.sello-rojo').fadeIn();

}


/*
* INICIA Y CARGA EL MAPA DE GOOGLE CON LAS SUCURSALES
*/
function cargarMapa() {
    
    var styles = [
        {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#f5f5f5"
            }
          ]
        },
        {
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "on"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#f5f5f5"
            }
          ]
        },
        {
          "featureType": "administrative.country",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#bdbdbd"
            }
          ]
        },
        {
          "featureType": "administrative.locality",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.province",
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#dadada"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#c9c9c9"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        }
      ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      styles: styles,
      center: new google.maps.LatLng(-32.6890983, -62.103681300000005),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var icons = {
        re: {
          icon: baseUrl + '/assets/images/location.png'
        },
    }

    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < marcadores.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
        icon:icons.re.icon,
        map: map
      });
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            
            var id = '.sucursal-texto-'+marcadores[i][3];
            var html = $(id).find('article');
            console.log(html)
            
            infowindow.setContent(html.html());
            infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }



/*
* CARGA ASINCRONA DE IMAGENES
* carga las imágenes con img src
*/
function getLazyImages() {
    $('.load-images').each(function(){
        var img = $(this).find('img');
    
        $(img).attr('src', $(img).attr('data-src') );
        if ( $(img).attr('src') != '') {
            $(this).fadeIn();
        }
    });
}

/*
* IN VIEW ANIMATION
* loop se usa como true o false, si es true, la animacion se ejecuta siempre, es decir el elemento entra y sale del view y cada vez se ejecuta la animación, en cambio en false solo se ejecuta una vez y luego queda fija
*/
function startAnimations( clase, loop ) {
    var $animation_elements = $(clase);
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            if ( loop ) {
                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
                } else {
                    $element.removeClass('in-view');
                }
            } else {
                //check to see if this current container is within viewport
                if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                    $element.addClass('in-view');
                }
            }
            
        });

    }//check_if_in_view

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
}//startAnimations()



/*
 * INICIA LOS PARALLAXS
*/
function initParallax () {

    var confetiBox = $('.span-confeti');
    var valijaWrapper = $('.valija-wrapper');

    $(window).scroll(function(){
      
        //valor de barra que necesitan todos
        var barra = ($(window).scrollTop());

        /*
        CONFETI BOX
        */
        if (window.innerWidth > 992) {
            if ( confetiBox.hasClass('in-view') ) {
                var mover = (barra * 1.9 / 100 ) + (barra* 1.1 /100);
                $(confetiBox).css('background-position-y', mover + '%'); 
                
            }
        }

        /*
        VALIJA SUPERIOR
        */
       var confeti = valijaWrapper.find('.confeti');
       var numero = valijaWrapper.find('.numero');
       var corazon = valijaWrapper.find('.corazon');
       var valija = valijaWrapper.find('.valija');
       if (window.innerWidth > 992) {
            if ( confeti.hasClass('in-view') ) {
                
                var mover = (barra * 1.1 / 100 ) ;
                var mover2 = (barra * 1.9 / 100 ) ;
                var mover3 = (barra * 0.7 / 10 ) + 120;
                var mover4 = (barra * 1.5 / 100 );

                $(confeti).css('top', mover + 'px'); 
                $(numero).css('top', mover2 + 'px'); 
                $(corazon).css('top', mover3 + 'px'); 
                $(valija).css('bottom', mover4 + 'px'); 
   
            }    
        }



    });//on scroll

}//initParallax()

function initHeader(){
    var contenedor = $('.header-inicio');
    var button = $(contenedor).find('.btn-fucsia')
    var contenedorImagen = $(contenedor).find('.header-image-wrapper');
    var retina = window.devicePixelRatio>1;
    var windowWidth = window.innerWidth;
    var movil = windowWidth < 768;
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    
    var imagen = '';
    var corazon = 'corazones-inicio.png';

    if (retina) {
        corazon = 'corazones-inicio@2x.png';
    }

    if (movil) {
        if (retina) {
            //movil retina
            imagen = 'banner-inicio-movil@2x.jpg';
        } else {
            //movil no retina   
            imagen = 'banner-inicio-movil.jpg';
        }
    } else {
      //no es movil  
      if (retina) {
            //no movil retina
            imagen = 'banner-inicio@2x.jpg';
        } else {
        //no movil no retina   
            imagen = 'banner-inicio.jpg';
        }
    }

    var htmlbackground = '<img src="'+baseUrl+'/assets/images/'+imagen+'" alt="Somos Re" class="header-image">';
    var htmlheart = '<img src="'+baseUrl+'/assets/images/'+corazon+'" alt="Somos Re Heart" class="corazon-inicio">';

    $(contenedorImagen).append( $(htmlbackground) );
    $(contenedorImagen).fadeIn();

    contenedor.append( $(htmlheart) );
    var imagenCorazon = $('.corazon-inicio');
    $(imagenCorazon).fadeIn();

    var imagenHeaderParallax = $('.header-image');

    if ( imagenHeaderParallax.length > 0 ) {
        
        //movimiento header on scroll
        $(window).scroll(function(){
            
            //valor de barra que necesitan todos
            var barra = ($(window).scrollTop());

            //imagen header chica
            imagenHeaderParallax.css('top', ( barra/1.9 )+'px');
            
            //titulo
            $('.main-title-inicio').css('bottom', ( barra/1.9 )+'px');
            $(button).css('bottom', ( barra/1.5 )+'px');


        });//onscrll
    }

}//initHeader()