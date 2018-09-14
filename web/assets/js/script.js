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
    //instagram:
    getInstagram();

    iniciarSliders();

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
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:50,
        nav:true,
        lazyLoad: true,
        autoHeight:true,
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


function cargarMapa() {
    //$('#map').empty();
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
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
/*$('.load-images').each(function(){
    var img = $(this).find('img');

    $(img).attr('src', $(img).attr('data-src') );
    if ( $(img).attr('src') != '') {
        $(this).fadeIn();
    }
});*/

/*
    * IN VIEW ANIMATION
*/
/*var $animation_elements = $('.animate-element');
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

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
        } else {
            $element.removeClass('in-view');
        }
    });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

*/

