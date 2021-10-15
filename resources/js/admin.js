$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Mettre l'input en D-none juste à côté, dans un form
    $('.change-pic, .icon-hover').on('click', function() {

        let myForm = $(this).closest('form')[0];
        let imgselected = $(this);
        let inputfile = imgselected.siblings('input[type="file"]');
        inputfile.trigger('click');
        
        // Fait direct le rendu 
        inputfile.on('change', function(evt) {
            var tgt = evt.target || window.event.srcElement,
                files = tgt.files;
            
                if (FileReader && files && files.length) {
                    var fr = new FileReader();
                    fr.onload = function () {
                        imgselected.get(0).src = fr.result;
                    }
                    fr.readAsDataURL(files[0]);
                }

                $.ajax({
                    type: "POST",
                    url: '/edit/about',
                    data: new FormData(myForm),
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Modification effectuée'
                        })
                    },
                    error: function() {
                        console.log('erreur ajax');
                    }
                });
            })
        })





        const Toast = swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 2000,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', swal.stopTimer)
                toast.addEventListener('mouseleave', swal.resumeTimer)
            }
        })

        // this is the id of the form
            $("form.ajax").submit(function(e) {
                Toast.fire({
                    icon: 'info',
                    title: 'Modification...'
                });
                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(this);
                var url = form.attr('action');
                
                $.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(), // serializes the form's elements.
                    success: function(data)
                    {
                        Toast.fire({
                            icon: 'success',
                            title: data
                        });
                    },
                    error: function() {
                        Toast.fire({
                            icon: 'error',
                            title: 'Aïe 😓 ça n\'a pas marché...'
                        });
                    } 
            });
            
        });

        $('.btn-danger').on('click', function() {
            let id = $(this).data('id');
            let slug = $(this).data('slug');
            swal.fire({
                title: 'Êtes-vous sûr ?',
                text: "Vous allez définitivement le supprimer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Oui, supprimer!',
                cancelButtonText: 'Annuler'

              }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                            type: "POST",
                            url: `/delete/${slug}/${id}`,
                            success: function()
                            {
                                window.location.reload();
                            },
                            error: function() {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Aïe 😓 ça n\'a pas marché...'
                                });
                            } 
                    });
                }
              })
        }),
        $('[data-toggle="tooltip"]').tooltip();  

   

    })