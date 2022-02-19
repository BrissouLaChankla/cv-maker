const { throttle } = require("lodash");


document.addEventListener( 'DOMContentLoaded', function () {
	const swup = new Swup({
            plugins: [new SwupOverlayTheme({
                color: '#040b14',
            }),
            // new SwupScrollPlugin()
        ]
    }); 

    
    function init() {

        if (document.querySelector('#welcome')) {
            window.wow.init();

                  // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: false})
        .add({
            targets: '.ml6 .letter',
            translateY: ["1.1em", 0],
            translateZ: 0,
            duration: 1400,
            delay: (el, i) => 50 * i
        });
        
        let about = $('#about').offset().top;
        let resume = $('#resume').offset().top;
        let portfolio = $('#portfolio').offset().top;
        let contact = $('#contact').offset().top;
        
        // Detect partie active menu gauche
            $(window).on('scroll load', _.throttle(function () {
                var scroll = $(window).scrollTop();
                if(scroll >= contact) {
                    if($('nav a:last-child').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:last-child').addClass('onit');
                    }
                } else if (scroll >= portfolio) {
                    if($('nav a:nth-last-child(2)').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:nth-last-child(2)').addClass('onit');
                    }
                } else if (scroll >= resume) {
                    if($('nav a:nth-last-child(3)').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:nth-last-child(3)').addClass('onit');
                    }
                } else if (scroll >= about) {
                    $('.cv-side').fadeIn();
                    if($('nav a:nth-last-child(4)').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:nth-last-child(4)').addClass('onit');
                    }
                } else {
                    $('.cv-side').fadeOut();
                    if($('nav a:first-child').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:first-child').addClass('onit');
                    }
                }
            },300));

            $('.modal-competences').on('click', function() {
                $('.modal-title').html('<i class="fas fa-circle-notch fa-spin"></i>');
                $('.modal-body').html('<i class="fas fa-circle-notch fa-spin"></i>');
                $.ajax({
                    url : '/infos/competences',
                    type : 'GET',
                    success : function(data){
                        $('.modal-title').text('Des barres sur un CV, ça vous énerve ? 😇')
                        $('.modal-body').html(data);
                    },
                    error : function(){
                        console.log('err ajax')
                    }
    
                });
            });  

            const Toast = swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', swal.stopTimer)
                  toast.addEventListener('mouseleave', swal.resumeTimer)
                }
              })


    $("#contact-form").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        Toast.fire({
            icon: 'info',
            title: 'Envoie du mail...'
        });
        var form = $(this);
        var url = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(data)
            {
                form.find("input[type=text], input[type=email], textarea").val("");
                Toast.fire({
                    icon: 'success',
                    title: 'Super, j\'ai bien reçu votre mail ! 🤗'
                });
            },
            error : function(data){
                console.log(data);
                Toast.fire({
                    icon: 'error',
                    title: 'Oups, le mail s\'est pas envoyé 😱'
                });
            }
        });
    });
}

        if (document.querySelector('#technoModal')) {

            
            // fix swup bug qui laissait modal ouverte
            $('#technoModal').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
           
                $('[data-toggle="tooltip"]').tooltip();  
                
                $('.open-modal-techno').on('click', function() {
                    $('#technoModal').modal('show');
                    $('.loader').show();

                    
                    let id = $(this).data('id');
                    $.ajax({
                        url : '/infos/technology/'+id,
                        type : 'GET',
                        success : function(data){
                        
                            $('.loader').fadeOut();
                            $('.techno-name').text(data.name);
                            $('.techno-desc').html(data.description);
                            $('.techno-color').css('background-color', data.color);
                            $('.techno-icon').html(data.logo_icon);
                            $('.techno-type').text(data.type);
                            $('.techno-type.badge').css('background-color', data.color);
                            if ($('#technoreas').hasClass('slick-initialized')) {
                                $('#technoreas').slick('destroy');
                                $('#technoreas').empty();
                              }    

                              data.realisations.forEach(element => {
                                $('#technoreas').append(`
                                    <div> 
                                        <a href="/projet/${element.slug}" style="background:linear-gradient(rgba(0, 0, 0, 0.6) 35%, rgba(0, 0, 0, 0.6)), url('/img/realisations/${element.background_path_small}'); background-size: cover; background-position: center;" class="d-block imgtechno-rea mx-2 img-fluid shadow-sm rounded position-relative">
                                            <i class="fas fa-search"></i>
                                            <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden proj">
                                                <img src="/img/realisations/logo/${element.logo_path}" class="small-logo-project" />
                                                <h5 class="font-weight-bold text-white mt-2 text-center">${element.name}</h5>
                                            </div>
                                        </a>
                                    </div>`
                                );
                            });
                       
                            $('#technoreas').slick({
                                dots: true,
                                arrows:false,
                                infinite: true,
                                speed: 600,
                                slidesToShow: 4,
                                slidesToScroll: 2,
                                autoplay: true,
                                autoplaySpeed: 5000,
                                responsive: [
                                  {
                                    breakpoint: 1024,
                                    settings: {
                                      slidesToShow: 3,
                                      slidesToScroll: 3,
                                      infinite: true,
                                      dots: true
                                    }
                                  },
                                  {
                                    breakpoint: 600,
                                    settings: {
                                      slidesToShow: 2,
                                      slidesToScroll: 2
                                    }
                                  },
                                  {
                                    breakpoint: 480,
                                    settings: {
                                      slidesToShow: 1,
                                      slidesToScroll: 1
                                    }
                                  }
                                ]
                             });
                        },
                        error : function(){
                            console.log('err ajax')
                        }
                    });
                }); 

        }

    }
    
    init();
	
    swup.on('contentReplaced', init);
});

