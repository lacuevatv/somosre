var currentPage = 1;

/*
* pagina LOOP
*/
var currentPage = 1;

$(document).ready(function(){
    /*
    * LOAD MORE
    */
   
   $(document).on('click', '#load-more-sucursales', function( event ){
        event.preventDefault();

        var contenedorNews = $('.loop-noticias-backend');
        var contenedorAjax = $('.loading-news-ajax');

        $.ajax( {
            type: 'POST',
            url: ajaxFunctionDir + '/load-more-sucursales.php',
            data: {
                page: currentPage,
            },
            beforeSend: function() {
                contenedorAjax.html('cargando');
                $('.info-resumen').remove();
            },
            success: function ( response ) {
                console.log(response)
                    currentPage++;
                    contenedorNews.append(response);
                    contenedorAjax.html('');
            },
            error: function ( ) {
                console.log('error');
            },
        });//cierre ajax

    });//load-more-news

    $(document).on('click', '.btn-delete-sucursales', function( event ){
        event.preventDefault();
        var deletePost = false;
        var postToDelete = $(this).attr('href');
        var itemToDelete = this.closest('li');
        if ( confirm( '¿Está seguro de querer BORRAR?' ) ) {
            deletePost = true;
        }

        if (deletePost) {
            $.ajax( {
                type: 'POST',
                url: ajaxFunctionDir + '/delete-sucursal.php',
                data: {
                    post_id: postToDelete,
                },
                success: function ( response ) {
                    console.log(response);
                    if (response == 'deleted') {
                    //borra la noticia del front
                        itemToDelete.remove()
                        //myFunctionNoticias();
                    }
                },
                error: function ( ) {
                    console.log('error');
                },
            });//cierre ajax
        }
    });
    

});//ready


/*
* pagina EDICION
*/
$(document).ready(function(){
    /*
	 accordion by jquery ui de videos, galería de imagenes, etc
	*/
    $( '#accordion-post' ).accordion({
		heightStyle: "content",
		active: false,
		collapsible: true,
    });


    /*
	 Editor enriquecido by tinyMCE
    */
    iniciarEditorEnriquecido( '.editor-enriquecido' );

    function iniciarEditorEnriquecido(clase) {
        tinyMCE.init({
            selector: clase,
            toolbar1: 'bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, bullist, numlist, undo, redo, link, image, media',
            toolbar2: 'formatselect, cut, copy, paste, blockquote, forecolor backcolor, removeformat, code',
            menubar: false,
            height: 200,
            plugins: [
              'code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'save table contextmenu directionality emoticons template paste textcolor colorpicker media',
            ],
            branding: false,
            media_live_embeds: true,
            language: 'es',
            language_url: 'assets/lib/tinymce/langs/es.js',
            //mantiene sincronizado los cambios del editor con el textarea hidden
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            },
            file_browser_callback : 
            function(field_name, url, type, win){
            var imagebrowser = templatesDir + '/media-browser-tinymce.php';
            tinymce.activeEditor.windowManager.open({
            title : "Insertar Medio",
            width : 780,
            height : 600,
            url : imagebrowser
            }, {
            window : win,
            input : field_name
            });
            return false;
            }
        });    
    }
	
    
    /*
	 Editor enriquecido by tinyMCE
    */
    iniciarMiniEditorEnriquecido( '.mini-editor-enriquecido' );

    function iniciarMiniEditorEnriquecido(clase) {
        tinyMCE.init({
            selector: clase,
            toolbar1: 'bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, bullist, numlist, undo, redo, link, image, media',
            toolbar2: 'formatselect, cut, copy, paste, blockquote, forecolor backcolor, removeformat, code',
            menubar: false,
            height: 100,
            plugins: [
              'code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'save table contextmenu directionality emoticons template paste textcolor colorpicker media',
            ],
            branding: false,
            media_live_embeds: true,
            language: 'es',
            language_url: 'assets/lib/tinymce/langs/es.js',
            //mantiene sincronizado los cambios del editor con el textarea hidden
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            },
            file_browser_callback : 
            function(field_name, url, type, win){
            var imagebrowser = templatesDir + '/media-browser-tinymce.php';
            tinymce.activeEditor.windowManager.open({
            title : "Insertar Medio",
            width : 780,
            height : 600,
            url : imagebrowser
            }, {
            window : win,
            input : field_name
            });
            return false;
            }
        }); 
    }    
    
    /*
     * SUBMIT FORMULARIO
    */
    $(document).on('submit', '#editar-sucursal-form', function(e){
        e.preventDefault();
        var error = $('.error-msj-list');
        
        //primero revalidamos que el titulo y el url esten,sino estan hay un error
		//el título no puede estar vacío
		if ( $('#post_title').val() == '' ) {
			error.append( '<li class="error-msj-list-item-danger">El título no puede estar vacío</li>');
			return;
		}

        //datos del formulario:
        var formulario = $( this );
		var formData = new FormData( formulario[0] );
        
        //envia el formulario
		$.ajax({
			type: 'POST',
			url: ajaxFunctionDir + '/editor-sucursal-ajax.php',
			data: formData,
			cache: false,
		    contentType: false,
		    processData: false,
            //funcion antes de enviar
            beforeSend: function() {
            	console.log('enviando formulario');
            },
			success: function ( response ) {
				console.log(response);
				switch(response) {

					case 'error-url':
						error.append( '<li class="error-msj-list-item-danger">Ya existe una entrada con ese URL</li>');
                    break;

					case 'updated':
						error.append( '<li class="error-msj-list-item-danger">Los Cambios fueron guardados</li>');
						scrollHaciaArriba();
                    break;

					case 'error':
						error.append( '<li class="error-msj-list-item-danger">Hubo un pequeño error</li>');
                    break;
                        
                    //devuelve id para reload
                    default :
						var url = window.location.href;
						url += '&id=';
						url += response;
						window.location.href = url;
					break;
				}
			},
			error: function ( error ) {
				console.log(error);
			},
        });//cierre ajax
        
    });//submit
    
});//READY