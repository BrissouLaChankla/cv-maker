$(function() {
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

   

    })