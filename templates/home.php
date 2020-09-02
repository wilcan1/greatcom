<?php $this->title = 'Accueil'; ?>
<div class="container">
	<?= $this->session->show('add_article'); ?>
	<?= $this->session->show('edit_article'); ?>
	<?= $this->session->show('delete_article'); ?>
	<?= $this->session->show('add_comment'); ?>
	<?= $this->session->show('flag_comment'); ?>
	<?= $this->session->show('unflag_comment'); ?>
	<?= $this->session->show('delete_comment'); ?>
	<?= $this->session->show('register'); ?>
	<?= $this->session->show('login'); ?>
	<?= $this->session->show('logout'); ?>
	<?php
	if ($this->session->get('username')) {
		?>
		<div class="row">
			<div class="asidemobile">
				<ul class="nav d-lg-none d-lg mt-3 justify-content-center list-style-none align-items-center">
					<li class="nav-item">
						<?php if($this->session->get('role') === 'admin') { ?>
							<a class="nav-link text-center btn-warning mt-2 mr-3" href="../public/index.php?route=administration"><i class="fas fa-tools"></i>ADMINISTRATION</a>
						</li>
					<?php } ?>					
					<li class="nav-item">
						<a class="nav-link text-center btn-primary  mt-2 mr-3" href="../public/index.php?route=addArticle"><i class="fas fa-plus"></i> Ajouter Un Article</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-center btn-light mt-2  mr-3" href="../public/index.php?route=profil"><i class="far fa-address-card"></i> Mon Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-center btn-danger mt-2" href="../public/index.php?route=logout"><i class="fas fa-times"></i> Déconnexion</a>
					</li>
				</ul> 
			</div>
		</div>

		<?php foreach ($articles as $article)
		{
			?>		
			<div class="row">				
				<div class="col-md-2 text-center d-none d-lg-block aside" >
					<div class="fakeimg">
						<h5 class="text-center">Bien <i class="fas fa-plus icoplus"></i> qu'un réseau ... une communauté</h5> 
					</div>
					<div class="asidepost" style="overflow-y: auto; height: 100%;">						
						<?php if($this->session->get('role') === 'admin') { ?>
							<li class="nav-item">
								<a class="nav-link text-center btn-warning" href="../public/index.php?route=administration"><i class="fas fa-tools"></i> ADMINISTRATION</a>
							</li>
						<?php } ?>
						<li class="nav-item">
							<a class="nav-link text-center" href="../public/index.php?route=profil"><i class="far fa-address-card"></i> Mon Profil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  text-center" href="../public/index.php">Mes Actualités</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-center " href="../public/index.php?route=addArticle"><i class="fas fa-plus"></i> Ajouter Un Article</a>
						</li>                                  
						<li class="nav-item">
							<a class="nav-link text-center btn-danger" href="../public/index.php?route=logout"><i class="fas fa-times"></i> Déconnexion</a>
						</li>
						<hr class="d-sm-none">
					</div>
				</div>
				<div class="col-md-6 col-12 my-5 py-3 mx-auto card news-card">
					<div class="card news-card">                        		
						<div class="card-body">
							<h2><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>" class=" text-decoration-none"><?= htmlspecialchars($article->getTitle());?></a></h2>
						</div>                        		
						<div class="form-group">
							<img src="<?= $article->getPhoto(); ?>" style="width: 100%" >                        		
						</div>
						<div class="card-body">                        			
							<div class="social-meta">
								<p><?= htmlspecialchars($article->getContent());?></p>
							</div>
							<hr>                        		
							<div class="md-form">
								<p><?= htmlspecialchars($article->getAuthor());?></p>
								<p>Posté le : <?= htmlspecialchars($article->getCreatedAt());?></p>		            
							</div>
						</div>                        		
					</div>                        	
				</div>                        			
			</div>
			<?php
		}
		?>
	</div>
</div>
<?php
} else {
	?>
	<div class="col-md-12 my-5 mx-auto card card-image shadow" style="background-image: url(img/chateau.jpg);  ">
		<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
			<div class="d-block">
				<h5 class="text-white"><i class="fas fa-chalkboard-teacher"></i> Bienvenue sur l'espace</h5>
				<h1 class="card-title pt-2 text-uppercase"><strong>Greatcom +</strong></h1>
				<p>Un réseau entre les membres du Greatcom afin de partager, de tisser des liens, vivre au sein de la communauté partout dans le monde où que vous soyez, restez connecté.</p>				
				<a href="../public/index.php?route=register" class="btn btn-lg btn-light btn-ac"><i class="fas fa-user-edit"></i> Inscription</a>    						
				<a href="../public/index.php?route=login" class="btn btn-lg btn-info btn-ac2"><i class="fas fa-user-graduate"></i> Connexion</a>
			</div>   
		</div>
	</div>			
	<div class="col-md-8 mx-auto">
		<h3 class="text-center">Bien <i class="fas fa-plus icoplus"></i> qu'un réseau ... Une communauté</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="text-center mb-5">
			<a href="../public/index.php?route=presentation" class="btn btn-outline-info">En Savoir +</a>
		</div>
	</div>    		
	<div class="card-deck mb-5">    		
		<div class="card col-12 col-lg-6 py-3">    				
			<div class="view overlay">
				<img class="card-img-top" src="img/librairie.jpg"
				alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>    				
			<div class="card-body">    					
				<h4 class="card-title">Etudions Ensemble</h4>    					
				<p class="card-text">Participez ou organisez des évenements culturel ou technologique.</p>
			</div>
		</div>    			
		<div class="card col-12 col-lg-6 py-3">    				
			<div class="view overlay">
				<img class="card-img-top" src="img/students.jpg"
				alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>    				
			<div class="card-body">    					
				<h4 class="card-title">Notre Réseau</h4>    					
				<p class="card-text">Plus qu'une école, une communauté, de l'amour et des liens forts !</p>						
			</div>
		</div>    			
		<div class="card col-12 col-lg-6 py-3">    				
			<div class="view overlay">
				<img class="card-img-top" src="img/party.jpg"
				alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>    				
			<div class="card-body">    					
				<h4 class="card-title">Suivre les Evenements</h4>    					
				<p class="card-text">Participez ou organisez des évenements culturel ou technologique.</p>						
			</div>
		</div>    			
	</div>    		
	<?php
}
?>
</div>