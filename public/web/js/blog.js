var count = 0;

$(document).ready(function(){
    $(".btn-show-novelties").click(function() {

        var url = $(this).data("url");
            if(url.length){
                $(".image-view-novelties").prop("src", url);
                //$('.popup-novelties').modal('show');
                $(".popup-novelties").addClass('show');
            }
    });
    $(".popup-novelties .close-btn").click(function() {
        $(".image-view-novelties").prop("src", "");
        $(".popup-novelties").removeClass('show');
    });

    var $grid = $('.grid').isotope({
        layoutMode: 'packery',
        itemSelector: '.novedad',
        packery: {
            gutter: 15
        },
        percentPosition: true

    });

    lazyload();


    $('.filtros__categorias').on( 'change', function() {
        // get filter value from option value
        var filterValue = this.value;
        // use filterFn if matches value

        $grid.isotope({ filter: filterValue });
    });

    /*$('.blog-filtros [name=buscar]').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.novedad').hide();
        $('.novedad').filter(function () {
            return rex.test($(this).text());
        }).show();
    });*/


    $('.orden').on('click','button',function () {
       var let =  $(this).data('sort');

       $('.orden').find('.active').removeClass('active');
        $(this).addClass('active');

       switch (let) {
           case 'antiguo':
               $grid.isotope({
                   sortBy: 'number',
                   sortAscending: false
               });
           break;
           case 'reciente':
               $grid.isotope({
                   sortBy: 'number',
                   sortAscending: true
               });
           break;
       }
    });

    $('.search-box').on('submit',function (e) {
        e.preventDefault();

        var palabra = $('.search-box input').val();

        console.log(palabra);
        $('.busqueda span').html(palabra);
        $('.empty-blog').removeClass('show');

        $('.grid').empty();

        if(palabra != '' ){
            new Request("blog/buscar", {
                palabra: palabra
            }, function (result) {
                console.log(result);

                if(result.res != 'empty'){
                    $('.grid').show();
                    $.each(result.lista, function(k, v) {

                        var item = new itemBlog(v);
                        $('.grid').append(item)


                    });

                    $('.busqueda').addClass('show');

                    $('.grid').isotope( 'reloadItems' ).isotope();
                }else{

                    $('.empty-blog').addClass('show');
                    $('.empty-blog span').html(palabra);
                    $('.grid').hide();

                }

            },'GET');

        }else{
            $('.busqueda').removeClass('show');
            new Request("blog/blogs", null, function (data) {
                console.log(data);

                $.each(data.reciente, function(k, v) {

                    var item = new itemBlog(v);
                    $('.grid').append(item)

                });

                $.each(data.lista, function(k, v) {

                    var item = new itemBlog(v);
                    $('.grid').append(item)

                });

                $('.grid').isotope( 'reloadItems' ).isotope({
                    layoutMode: 'packery',
                    itemSelector: '.novedad',
                    packery: {
                        gutter: 15
                    },
                    percentPosition: true
                });



            },'GET');
        }




    });

    $('.busqueda').on('click',function () {

        $('.search-box').trigger("reset");

        $('.busqueda').removeClass('show');

        $('.grid').empty();

        new Request("blog/blogs", null, function (data) {
            console.log(data);

            $.each(data.reciente, function(k, v) {

                var item = new itemBlog(v);
                $('.grid').append(item)

            });

            $.each(data.lista, function(k, v) {

                var item = new itemBlog(v);
                $('.grid').append(item)

            });

            $('.grid').isotope( 'reloadItems' ).isotope({
                layoutMode: 'packery',
                itemSelector: '.novedad',
                packery: {
                    gutter: 15
                },
                percentPosition: true
            });



        },'GET');

    });

    $('.filtros__categorias').on( 'change', function() {
        // get filter value from option value
        var filterValue = this.value;
        // use filterFn if matches value

        $grid.isotope({ filter: filterValue });
    });

    /*$('.blog-filtros [name=buscar]').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.novedad').hide();
        $('.novedad').filter(function () {
            return rex.test($(this).text());
        }).show();
    });*/


    $('.orden').on('click','button',function () {
       var let =  $(this).data('sort');

       $('.orden').find('.active').removeClass('active');
        $(this).addClass('active');

       switch (let) {
           case 'antiguo':
               $grid.isotope({
                   sortBy: 'number',
                   sortAscending: false
               });
           break;
           case 'reciente':
               $grid.isotope({
                   sortBy: 'number',
                   sortAscending: true
               });
           break;
       }
    });


            resize();

            $(window).on('resize', function(){

                resize();



            });





    /*new Request("proyecto/proyectoreferidos/",null, function (result) {
        proyectos = result;
        $.each(result, function(key, v) {

            var proyecto = new itemSelect(v);
            $('.proyectos .select').append(proyecto);
        });


    });







    */

    /*new Request("categoriablog/listarPorPublicacion/", {estado:1}, function (result) {

        categorias = result.lista;

        $.each(categorias, function(key, cat) {
            var item = `<a href="novedades/${cat.ctg_alias}" class="cat-tag">${cat.ctg_descripcion}</a>`
            $('.categorias-tags .categorias-row').append(item)
        });
    });*/



    /*new Request("blog/blogs/", null, function (result) {
        console.log("cargado");
     // console.log('result');
      reciente = result.reciente[0];


       lista = [];
       lista.push(reciente);

        for (let index = 0 ; index < result.lista.length ; index++) {
            lista.push(result.lista[index]);
        }

       $('.blog-body ul').empty();

        console.log(lista);
       $.each(lista, function(key, blog) {

            var item = new itemblog(blog);
             $('.blog-body .grid').append(item);
        });

        if(alias_int == ''){
            new AnimOnScroll( document.getElementById( 'grid' ), {
                minDuration : 0.4,
                maxDuration : 0.7,
                viewportFactor : 0.6
            } );
        }
    });*/

    if(alias_int !== ''){

        /*new Request("categoriablog/listarPorPublicacion/", {estado:1}, function (result) {

            categorias = result.lista;
            $.each(categorias, function(key, cat) {
                var item = `<li><a href="novedades/${cat.ctg_alias}" class="cat-tag">${cat.ctg_descripcion}</a></li>`
                $('.categorias ul').append(item)
            });


        });*/

        /*new Request("blog/mostrarPublicacion/", {alias:alias_int}, function (result) {

            blog = result;
            // console.log(blog);

            if(blog.blg_posicion == 0){
                $('.figure-img-ver').css('display','block');
                $('.img-ver').attr('src',`files/blog/${blog.blg_archivo}`);
            }else{
                $('.figure-img-hz').css('display','block');
                $('.interna-body .portada-interna').attr('src',`files/blog/${blog.blg_archivo}`);
            }

            $('.etiquetas-box').empty();
            $.each(blog.etiquetas,function (k,v) {
                var et = new itemEtiquetas(v);
                $('.etiquetas-box').append(et);
            })

            $('.interna-body .col-lg-8 strong').text(blog.ctg_descripcion);
            $('.interna-body .col-lg-8 h1').text(blog.blg_titulo);
            $('.interna-body .col-lg-8 .fecha').text(blog.blg_fecha);
            $('.interna-body .col-lg-8 .cuerpo').html(blog.blg_cuerpo);
            $('#alias').val(blog.blg_alias);
            $('#blogid').val(blog.blg_id);

            if(blog.blg_tipo == 2){//playa
                $('body').addClass('edition-page-nov');
                $('.menu').addClass('header-edition-page');
                $('footer').addClass('edition-page');
            }
            else if(blog.blg_tipo == 3){// collection
                $('body').addClass('collection-page-nov');
                $('.menu').addClass('header-collection-page');
                $('footer').addClass('collection-page');
            }
            else{
                //quitar
            }
            var url = path+'novedades/'+alias_int;     //'+alias_cat+'/
            var text = blog.blg_titulo;

            $('.social-link .fb-share').attr('share_url',url);

            $('.social-link .fb-share').on('click', function(e){
                e.preventDefault();
                share_fb(url);
            });


            $('.social-link .twitter-share').on('click',function(e){
                e.preventDefault();
                window.open('http://twitter.com/share?url='+encodeURIComponent(url)+'&text='+encodeURIComponent(text)+'&hashtags='+blog.blg_keywords,'', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
            });


            $('.social-link .linkedin-share').on('click',function(e){
                e.preventDefault();
                window.open('https://www.linkedin.com/shareArticle?mini=true&url='+url+'&title='+text+'&summary='+text+'&source=LinkedIn','', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
            });

             $('.social-link .whatsapp-share').attr('href', 'https://wa.me/?text='+url);


            proyectos = result.proyectos;
            if(proyectos.length > 0){console.log(result.proyectos);
                $.each(proyectos, function(key,v) {
                    var item = new proyectoRelacionado(v);
                    $('.prelacionados .proyectos').append(item);

                });
            }
            else{
                $('.prelacionados').hide();
            }



            resize();

            $(window).on('resize', function(){

                resize();



            });




            //http://twitter.com/share?text=Im Sharing on Twitter&url=https://stackoverflow.com/users/2943186/youssef-subehi&hashtags=stackoverflow,example,youssefusf

            new Request("blog/blogsrelacionado/", {alias:blog.ctg_alias,id:blog.blg_id}, function (result) {
                // console.log(result);

                if(result.res != 'empty'){
                    lista = result.lista;
                    // console.log(lista);

                    $.each(lista, function(key,v) {
                        var item = new itemrelacionados(v);
                        $('.relacionados .items-rel').append(item);

                    });

                }
                else{
                    $('.relacionados .items-rel').html(`<div class="col-lg-4 item-blog">
                            <h4>No se encontraron articulos relacionados</h4>
                      </div>`);
                }

            });
        });
       */



    }


    // if( alias_int == "beneficios-de-una-vivienda-sostenible"){
    //     $('.relacionados').show();
    // }else{
    //     $('.relacionados').hide();
    // }
    var options = {
        dataType: 'json',
        type: 'post',
        clearForm:true,
        beforeSend: function() {
            $('.referidos-form  .btn-menorca-light').val('Enviando...');
            $('.referidos-form  .btn-menorca-light').attr('disabled',true);
        },
        success: function(res){

            if(res.res == 'ok'){

                $('.referidos-form  .btn-menorca-light').val('Enviar');
                $('.referidos-form  .btn-menorca-light').attr('disabled',false);

                $('#success').modal('show');
                // datosFormulario(res.datos);
            }

        }
    }

    $(".referidos-form").ajaxForm(options);

 });

var itemEtiquetas = function (data) {

    var html = $('<a href="'+path+'tags/'+data.etq_alias+'" class="etiquetas-item">' +
        data.etq_descripcion+
        '</a>');

    return html;

};


var itemSelect = function(data){

    var item = $(`<option value="${data.pry_otroid}">${data.pry_nombre}</option>`);

    return item;

}


var itemBlog = function(data){

    var item = $('<div class="novedad cat-'+data.ctg_id+'" data-tipo="'+data.blg_tipo+'">'+
                    '<figure class="novedad__imagen">'+
                    '<img src="'+path+'files/blog/'+data.blg_home+'" alt="">'+
                    '</figure>'+
                    '<div class="novedad__info">'+
                    '<strong>'+data.ctg_descripcion+'</strong>'+
                    '<h4>'+data.blg_titulo+'</h4>'+
                    '<span>'+data.blg_fecha+'</span>'+
                    '<p>'+data.blg_description+'</p>'+
                    '<a href="'+path+'novedades/'+data.blg_alias+'">Ver más <i class="fas fa-chevron-right"></i></a>'+
                ' </div>'+
            ' </div>');

    return item;

}


function resize() {
    var win = $(this); //this = window
    if (win.width() >= 992) {
        scroll(0);
    }else{
        scroll(780);
    }
}

function  scroll(footer) {
    $(window).scroll(function() {
        var scrollwin = $(window).scrollTop() + 387;
        var articleheight = $('article').outerHeight(true);
        var windowWidth = $(window).width();
        if(scrollwin >= $('article').offset().top){
            if( (scrollwin + 387) <= ($('article').offset().top + articleheight )){
                $('.bar-long').css('width', ( ( scrollwin - $('article').offset().top)  / articleheight) * 100 + "%"  );
            }else{
                $('.bar-long').css('width',"100%");

            }
        }else{
            $('.bar-long').css('width',"0px");

        }

        if(  ( $(window).scrollTop() + $(window).height()  >=  $(document).height() - footer )  && count < 1  )  {

            count++;
            console.log("lectura completada!");
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'blogLectura'
            });


        }





    });
}


function share_fb(url) {
  window.open('https://www.facebook.com/sharer/sharer.php?u='+url,'facebook-share-dialog',"width=626, height=436")
}




var itemblog = function(data){

    var tipo = "";
    var tiponame = "";

    if(data.blg_tipo == 3){
        tiponame = "collection"
    }

    if(data.blg_tipo == 2){
        tiponame = "playa";
    }


    var html = $(`<li class="${tiponame}">
                    <a href="novedades/${data.blg_alias}" class="item-blog">
                        <img src="files/blog/${data.blg_archivo}" alt="">
                        <strong class="cat">${data.ctg_descripcion}</strong>
                        <h4>${data.blg_titulo}</h4>
                        <span>${data.blg_fecha}</span>
                        <p>${data.blg_description}</p>
                        <strong>VER MÁS</strong>
                    </a>
                </li>`);


    return html;

}

var itemrelacionados = function(data){
    //${data.ctg_alias}/
    var html = $(`<div class="col-lg-4">
                    <a href="novedades/${data.blg_alias}" class="item-blog">
                        <img src="files/blog/${data.blg_archivo}" alt="">
                        <strong>${data.ctg_descripcion}</strong>
                        <h4>${data.blg_titulo}</h4>
                        <span>${data.blg_fecha}</span>
                        <p>${data.blg_description}</p>
                        <strong>VER MÁS</strong>
                    </a>
                </div>`);

    return html;
}

var proyectoRelacionado = function(data){
    // console.log(data);
    if(data.pry_tipo == 'C'){
        dir = 'casas';
        tipo = 'casa'
        tit = 'Casas';
        precio = `<p>Cuota desde ${data.pry_cuota_sol} al mes</p>`;
    }
    else if(data.pry_tipo == 'T'){
        dir = 'terrenos';
        tipo = 'terreno';
        tit = 'Terrenos';
        precio = `<p>Cuota desde ${data.pry_cuota_sol} al mes</p>`;
    }
    else if(data.pry_tipo == 'CL'){
        dir = 'collection';
        tipo = 'collection';
        tit = 'Collection';
        precio = ``;
    }
    else if(data.pry_tipo == 'E'){
        dir = 'edition';
        tipo = 'edition';
        tit = 'Edition';
        precio = `<p>Cuota desde ${data.pry_cuota_sol} al mes</p>`;
    }
    if(data.pry_nuevo == 1){
        nuevo = `t-nuevo`;
    }
    else{
        nuevo = '';
    }
    /*html = $(`<div class="col-lg-12 col-md-6">
                <a href="${dir}/${data.pry_alias}" class="menorca__cards nuevo cards-small">
                    ${nuevo}
                    <div class="cards__tipo--${tipo}">
                        ${tit}
                    </div>
                    <div class="cards__top">
                    <img class="lazy" src="files/proyecto/${data.pry_miniatura}" srcset="files/proyecto/${data.pry_miniatura} 2x" alt="" style="">
                    </div>
                    <div class="cards__info">
                        <h4>${data.pry_nombre}</h4>
                       ${precio}
                    </div>
                </a>
            </div>`);*/


    html = $(` <div class="col-lg-12 col-md-6">
                            <a href="${dir}/${data.pry_alias}" class="related-card">
                                <div class="related-card__left">
                                    <img class="lazy" src="files/proyecto/${data.pry_miniatura}" srcset="files/proyecto/${data.pry_miniatura} 2x" alt="Proyecto Relacionado" style="">
                                </div>
                                <div class="related-card__data">
                                    <div class="related-card__tipo--${tipo} ${nuevo}">
                                        ${tit}
                                    </div>
                                    <div class="related-card__info">
                                        <h4>${data.pry_nombre}</h4>
                                        <p>${precio}</p>
                                    </div>
                                </div>

                            </a>
                        </div>`);

    return html;
}
