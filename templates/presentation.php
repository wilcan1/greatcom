<?php $this->title = 'Présentation'; ?>
<div class="container-fluid mt-5" id="projet">

  <div class="card col-md-10 d-block shadow mx-auto py-3 my-5">
    <img class="card-img-top" src="img/batiment2.jpg"  alt="Card image">
    <div class="card-body text-center">
      <h4 class="card-title">Notre Histoire</h4>
      <p class="card-text">Le réseau GREATCOM+ a été fondé en 1976 avec le regroupement des écoles de Paris et de Lyon et s'est depuis développé pour devenir le plus important acteur Français dans l’éducation sur les médias, axé sur les besoins du marché, avec 10 campus sur toute la France : Bordeaux, Lille, Lyon, Marseille, Nantes, Nice, Paris, Orléans, Strasbourg et Toulouse. Le programme d'études a été soigneusement élaboré en consultation avec les principaux acteurs du domaine pour répondre aux exigences du marché mondial des médias. Les écoles offrent une gamme de  cours  complète  dans  les  différents  domaines  des  médias  de  création  (audio,  film,  animation, conception de jeux, industrie de la musique et web) avec une forte tradition d'enseignement pratique et de reconnaissance de l'industrie.</p>                  
    </div>
  </div>
  <?php  if (!$this->session->get('username')) {
          ?>
<div class="card text-center mx-auto">
    <div class="card-header">
      Likez, Participez, Vivez !
    </div>
    
    <div class="card-body">
      <h5 class="card-title">Suivez les actualités en temps réel</h5>
      <p class="card-text">En un click vous serez informer sur tous les évenements Greatcom dans le monde, où que vous soyez la communauté sera au rendez-vous.</p>
      <a href="../public/index.php?route=login" class="btn btn-outline-info">Me Connecter</a>
    </div>
    <?php
        }
        ?>
  </div>
  <div class="row my-5 d-flex justify-content-between">
    <div class="card  col-md-5 py-3 shadow">
      <img class="card-img-top" src="img/reseau.jpg"  alt="Card image">
      <div class="card-body text-center">
        <h4 class="card-title">Notre Réseau</h4>
        <p class="card-text">Les écoles du réseau GREATCOM+ évoluent dans le secteur des écoles supérieures privées. Avec ses 436.100 étudiants (plus d'un étudiant sur six est scolarisé dans le privé) et une hausse de ses effectifs de plus de 50 % en dix ans, l'enseignement supérieur privé est en effet en pleine croissance.  
        </p> 
                                    
      </div>
    </div>

    <div class="card col-md-5 py-3 shadow">
      <img class="card-img-top" src="img/universite.jpg"  alt="Card image">
      <div class="card-body text-center">
        <h4 class="card-title">Devenez Membre</h4>
        <p class="card-text">L'Association des anciens est un réseau destiné aux étudiants et diplômés, visant à partager l'expérience des anciens après la fin de leurs études et proposant une gamme variée de ressources, événements  et  annonces. Il permet également, de rester en contact et de s'impliquer au sein du groupe d’écoles GREATCOM+.</p>                            
      </div>
    </div>
  </div>

 <div class="text-right mb-5"><a href="../public/index.php" class="text-decoration-none"><i class="fas fa-undo-alt"></i> Retour à l'accueil</a></div>

</div>

              <!-- <div class="card col-md-4 d-block shadow" >
                <img class="card-img-top" src="img/mobile.jpg"  alt="Card image">
                <div class="card-body text-center" >
                  <h4 class="card-title">Devenez Membre</h4>
                  <p class="card-text">L'Association des anciens est un réseau destiné aux étudiants et diplômés,  visant à partager l'expérience des anciens après la fin de leurs études et proposant une gamme variée de ressources, événements  et  annonces.  Il  permet  également,  de  rester  en  contact  et  de  s'impliquer  au  sein  du groupe d’écoles GREATCOM+. L’association organise différents événements, comme le Congrès des anciens de GREATCOM+ qui est un événement de réseautage gratuit, traditionnellement organisé à Lyon, il s'adresse à toute personne ayant un intérêt pour le développement et les technologies des médias. Cet événement annuel réunit des participants à la vision commune afin d'échanger des connaissances essentielles sur l'industrie des médias et du divertissement. Le congrès vous offre d'excellentes occasions de recherches décisives, d'apprentissage stimulant et de développement des affaires - c'est le forum idéal pour le réseautage et l'échange d'idées. 
                    Le  Magazine  GREATCOM+ est  une  publication  commune  entre  l’équipe  communication  du  Groupe GREATCOM+ et de l'Association des anciens. D'abord imprimée, la publication a migré vers un support en ligne en 2014. </p>                  
                  <a href="connection.php" class="btn btn-default1">S'inscrire</a>
                </div> -->

<!-- 

                L’association organise différents événements, comme le Congrès des anciens de GREATCOM+ qui est un événement de réseautage gratuit, traditionnellement organisé à Lyon, il s'adresse à toute personne ayant un intérêt pour le développement et les technologies des médias. Cet événement annuel réunit des participants à la vision commune afin d'échanger des connaissances essentielles sur l'industrie des médias et du divertissement. Le congrès vous offre d'excellentes occasions de recherches décisives, d'apprentissage stimulant et de développement des affaires - c'est le forum idéal pour le réseautage et l'échange d'idées. 
                Le  Magazine  GREATCOM+ est  une  publication  commune  entre  l’équipe  communication  du  Groupe GREATCOM+ et de l'Association des anciens. D'abord imprimée, la publication a migré vers un support en ligne en 2014. -->
