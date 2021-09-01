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
        window.wow.init();

        if (document.querySelector('#welcome')) {
        
        let about = $('#about').offset().top;
        let resume = $('#resume').offset().top;
        let portfolio = $('#portfolio').offset().top;
        let contact = $('#contact').offset().top;
        
        // Detect partie active menu gauche
            $(window).on('scroll', _.throttle(function () {
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
                    if($('nav a:nth-last-child(4)').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:nth-last-child(4)').addClass('onit');
                    }
                } else {
                    if($('nav a:first-child').hasClass('onit')) {
                    } else {
                        $('nav a').removeClass('onit');
                        $('nav a:first-child').addClass('onit');
                    }
                }
            },300));

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
            }
        });
    });


        }

        if (document.querySelector('#realisation')) {
        
        }

    }
    
    init();
	
    swup.on('contentReplaced', init);
});

