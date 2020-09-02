<?php $this->title = 'contact'; ?>


<div class="card col-12 col-md-8 d-block shadow mx-auto py-3 my-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.769935142024!2d2.2839548155506013!3d48.84352690970736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6700e15f3cedf%3A0x854f0003123c8d8a!2s104%20Rue%20de%20Lourmel%2C%2075015%20Paris!5e0!3m2!1sfr!2sfr!4v1588706301773!5m2!1sfr!2sfr"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="goomap"></iframe>
    <div class="card-body text-center">
      <h4 class="card-title"><img src="img/logo_noir.png" id="logo_noir"></h4>
      
      <p class="card-text">Le plus gros campus est situé sur Paris 15 ème, il donc a été choisi tout naturellement comme site pilote  pour  le lancement du  nouvel  outil régissant  la  communauté  des  anciens  élèves  du  réseau GREATCOM+.</p> <?php  if (!$this->session->get('username')) {
          ?>                 
      <a href="../public/index.php?route=register" class="btn btn-outline-primary">NOUS REJOINDRE</a>
    <?php
        }
        ?>

    </div>
  </div>