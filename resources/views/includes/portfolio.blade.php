<div class="d-flex justify-content-center my-3">
    <div class="d-flex bg-light portfolio-sort px-2 bg-primary">
        <span data-sort="all" class="pointer sort text-uppercase py-2 px-3">ALL</span>
        <span data-sort="app" class="pointer sort text-uppercase py-2 px-3">App</span>
        <span data-sort="test" class="pointer sort text-uppercase py-2 px-3">test</span>
        <span data-sort="web" class="pointer sort text-uppercase py-2 px-3">WEB</span>
    </div>
</div>
    <div class="realisations row">
        <div class="app col-sm-4 my-3 p-3 position-relative text-center">
            <img src="https://i.pinimg.com/736x/6d/6d/a1/6d6da1386014c5a3d5877a14488eeb5d.jpg" class=" fit-cover rounded shadow" alt="">
            <div class="rea-content">
                <h5 class="text-center text-white font-weight-bold">Nekjeu</h5>
                <p class="text-center text-white">
                    <em>
                        Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains
                    </em>
                </p>
                <div class="btn btn-dark">En savoir +</div>
            </div>
        </div>
        <div class="app col-sm-4 my-3 p-3">
            <img src="https://i.pinimg.com/736x/6d/6d/a1/6d6da1386014c5a3d5877a14488eeb5d.jpg" class="fit-cover rounded shadow pointer" alt="">
            <h5 class="text-center">Ceci est un text exemple</h5>
        </div>
        <div class="test col-sm-4 my-3 p-3">
            <img src="https://i.pinimg.com/736x/6d/6d/a1/6d6da1386014c5a3d5877a14488eeb5d.jpg" class="fit-cover rounded shadow pointer" alt="">
            <h5 class="text-center">Ceci est un text exemple</h5>
        </div>
        <div class="web col-sm-4 my-3 p-3">
            <img src="https://i.pinimg.com/736x/6d/6d/a1/6d6da1386014c5a3d5877a14488eeb5d.jpg" class=" fit-cover rounded shadow pointer" alt="">
            <h5 class="text-center">Ceci est un text exemple</h5>
        </div>
    </div>

<script>
    $('.sort').on('click', function() {
        let sort = $(this).data('sort');
        $('.sort').removeClass('sort-active');
        $(this).addClass('sort-active');

        if (sort == "all") {
            $('.sort').removeClass('sort-active');
            $('.realisations > div').show("1000");
        } else {
            $('.realisations > div').each(function(i, obj) {
                if ($(obj).hasClass(sort)) {
                    $(this).show("1000")
                } else {
                    $(this).hide("1000"); 
                }
            });
        }
    });

</script>