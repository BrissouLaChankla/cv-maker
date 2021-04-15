<div class="row">
    <div class="col-lg-6">
        <h3 class="my-3">Parcours Pro.</h3>
        <div class="item-cv">
            <div>
                <h4><strong>Développeur Full-stack</strong> | MWA</h4>
            </div>
            <div class="date">Sept. 2020 <i class="fas fa-long-arrow-alt-right mx-1"></i> Aujourd'hui </div> <small><i class="far fa-clock mx-1"></i> 8 mois</small>
            <p>Développement d'applications métiers et sites web sous Laravel et développement d'applications mobiles natives iOs/Android sous Flutter.</p>
        </div>
        <div class="item-cv">
            <div>
                <h4><strong>Développeur Web</strong> | KOEDIA</h4>
            </div>
            <div class="date">Sept. 2019 <i class="fas fa-long-arrow-alt-right mx-1"></i> Août 2020 </div> <small><i class="far fa-clock mx-1"></i> 1 an</small>
            <p>Créations de wireframes, intégrations de maquettes (Bootstrap/jQuery), refontes UX et optimisations de sites clients.</p>
        </div>
        <div class="item-cv">
            <div>
                <h4><strong>Intégrateur Web</strong> | VISIPLUS</h4>
            </div>
            <div class="date">Juil. 2016 <i class="fas fa-long-arrow-alt-right mx-1"></i> Sept. 2019 </div> <small><i class="far fa-clock mx-1"></i> 3 ans 3 mois</small>
            <p>Montage vidéo de formations e-learning et MOOC, intégration de maquettes et créations de bannières HTML (Photoshop + Google WebDesigner).</p>
            <p>
                Optimisation de contenu et refonte de site web, développement et amélioration du référencement et de réputation d'établissements clients (JOA Casino - Antargaz - Audemard - Imperial Yachts - Kuantic...).
            </p>
        </div>
    </div>
    <div class="col-lg-6">
        <h3 class="my-3">Études et diplômes</h3>
        <div class="item-cv">
            <div>
                <h4><strong>Master 2, 360° Digital </strong> | SUPDEWEB Nice</h4>
            </div>
            <div class="date">2020 <i class="fas fa-long-arrow-alt-right mx-1"></i> 2022 </div> <small><i class="fas fa-briefcase mx-1"></i> En alternance chez MWA</small>
            <p>Formation bac +4/5 permettant de découvrir au quotidien l’état d’esprit start-up mêlé à l’écosystème digital à savoir : innovation, flexibilité, interconnexion, prise de risque mais également rigueur et anticipation.
            </p>
        </div>
        <div class="item-cv">
            <div>
                <h4><strong>Licence, Gestion du Web</strong> | SUPDEWEB Nice</h4>
            </div>
            <div class="date">2019 <i class="fas fa-long-arrow-alt-right mx-1"></i> 2020 </div> <small><i class="fas fa-briefcase mx-1"></i> En alternance chez Koedia</small>
            <p>École web & multimédia qui forme ses étudiants aux métiers du Web et du Digital.
            </p>
        </div>
        <div class="item-cv">
            <div>
                <h4><strong>DUT, Métier du Multimédia et de l'Internet</strong> | IUT Toulon</h4>
            </div>
            <div class="date">2017 <i class="fas fa-long-arrow-alt-right mx-1"></i> 2019 </div> <small><i class="fas fa-briefcase mx-1"></i> En alternance chez Visiplus</small>
            <p>Formation qui couvre tous les champs du digital, de la réalisation de sites internet à l’animation de communautés, de la création vidéo à la conception de contenus.
            </p>
        </div>


        <div class="pointer modal-competences" data-toggle="modal" data-target="#lgModal">
            <h3 class="my-3">Compétences <small><i class="fas fa-exclamation-triangle text-primary"></i></small></h3>
        </div>

        <div class="d-flex flex-wrap">
            <div class="skill w-50 pr-3 py-2">
                <h6 class="text-uppercase">Laravel 💙</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skill w-50 pl-3 py-2">
                <h6 class="text-uppercase">Bootstrap</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skill w-50 pr-3 py-2">
                <h6 class="text-uppercase">SCSS</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skill w-50 pl-3 py-2">
                <h6 class="text-uppercase">Javascript <small>(jQuery)</small></h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skill w-50 pr-3 py-2">
                <h6 class="text-uppercase">Wordpress/CMS</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="skill w-50 pl-3 py-2">
                <h6 class="text-uppercase">Flutter</h6>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@section('scripts')
    <script>
        $('.modal-competences').on('click', function() {
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
        
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
@endsection

