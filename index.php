<?php include("_header.php"); ?>
	<div class="menu_haut">
		<ul>
		     <a href="presentation.php"><li>Qui sommes-nous ?</li></a>
		     <a href="equipe.php"><li>Notre équipe</li></a>
		     <a href="lieux_accueil.php"><li>Nos lieux d'accueil</li></a>
		     <a href="form_contact.php"><li>Nous contacter</li></a>
		</ul>
	</div>
    <article class="bloc_icones">
		<a href="#bloc_particuliers"><img src="images/particuliergris1.jpg" class="icone_particuliers"><div class="titre_bloc_icone">Particuliers</div>
		</a>
		<a href="#bloc_entreprises"><img src="images/entreprisegris1.jpg" class="icone_entreprises"><div class="titre_bloc_icone">Entreprises</div>
		</a> 
		<a href="#bloc_associations"><img src="images/assos2.svg" class="icone_associations"><div class="titre_bloc_icone">Associations</div>
		</a>
		<a href="#bloc_collectivites"><img src="images/collectivites.svg" class="icone_collectivites"><div class="titre_bloc_icone">Collectivités</div>
		</a>
		<a href="#bloc_territoires"><img src="images/territoiregris1.jpg" class="icone_territoires"><div class="titre_bloc_icone">Territoire et acteurs</div>
		</a>
	</article>

	<div class="bloc_presentation">
		<div class"map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.2876532463283!2d4.36905!3d44.937819999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5805cd934bd85%3A0x4291ed20b3f32cab!2sSite+de+Proximit%C3%A9+des+Bouti%C3%A8res!5e0!3m2!1sfr!2sfr!4v1442650017251" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		</div>
		<div class="introduction">
			<h3>Pôle d’ingénierie locale pour la création et le développement des activités et des emplois. </h3>
			<p>Association loi 1901 (<a href="presentation.php">+ d'infos </a>), financée par l’Europe, l’Etat, la Région et les intercommunalités. Ses services sont gratuits.</p>
			<p>Il intervient sur les Communautés de communes du pays de Lamastre, Valeyrieux et sur une partie de la Communauté d’agglomération centre Ardèche.
			<p>Il travaille en complémentarité avec les services de l’emploi et de la création d’activités. Il est votre porte d’entrée sur le territoire.</p>
			<p>Son <a href="equipe.php"><strong>équipe</strong></a> vous accueille dans <a href="lieux_accueil.php"><strong>5 lieux différents</strong></a> : Saint Agrève, Saint Martin de Valamas, Le Cheylard, Lamastre et les Ollières sur Eyrieux.</p>
			<a href="form_contact.php"><button class="button">Nous contacter</button></a>
		</div>
	</div>

	<div class="bloc_img_particuliers">
		<div class="bloc_gauche" id="bloc_particuliers">
			<h3>Particuliers</h3>
			<h4>Vous êtes à la recherche d’un emploi ?</h4>
			<p>Le site de proximité vous propose un accompagnement individualisé pour :</p>
			<ul>
				<li>faire le point sur vos compétences ;</li>
				<li>vous informer sur l’activité locale, les secteurs qui recrutent, les perspectives ;</li>
				<li>Vous outiller dans votre recherche d’emploi (CV, lettres de motivation, préparations d’entretien…) ;</li>
				<li>Vous mettre en relation avec les offres d’emploi locales.</li>
				<li>Sur le secteur de Val’Eyrieux, le Site de proximité est correspondant de la Mission locale nord Ardèche. A ce titre, il accompagne tout particulièrement les jeunes dans leur insertion sociale et professionnelle.</li>
			</ul>
		</div>
		<div class="offres_particuliers">
			<i class="fa fa-search fa-5x"></i>
			<div class="texte_offres">
				<a href="offres_pdf/offres.pdf"><h4>A consulter</h4></a>
				<ul>
					<li>offres d'emplois</li>
					<li>offres d'opportunités</li>
					<li>offres de locaux professionnels</li>
				</ul>
			</div>
		</div>
	</div>
		
	<div class="bloc_creation">
		<img src="images/reunion.jpg" class="reunion">
		<div class="texte_creation">
			<h4>Vous souhaitez créer votre entreprise, une association ?</h4>
			<p>Que vous ayez ou pas une idée d’activité, l’Atelier des projets est fait pour vous !</p>
			<p>L’atelier des projets vous propose</p>
				<ul>
					<li>Un accompagnement individualisé pour valider votre idée, vous apporter un appui méthodologique pour construire votre projet et le formaliser</li>
					<li>Des temps collectifs avec d’autres personnes souhaitant créer leur activité, pour enrichir votre idée, </li>
					<li>Des « agendas pour comprendre » pour  explorer un secteur d’activités, un statut, repérer des potentiels de création,</li>
					<li>Une orientation vers les partenaires de la création (Cci, Chambre de métiers, Chambre d’agriculture…) pour finaliser votre projet</li>
				</ul>
			<p>Le Site de proximité est labellisé porte d’entrée « Je crée en Rhône-Alpes » dispositif régional d’accompagnement à la création d’entreprises.</p>
		</div>
	</div>
	
	<div class="bloc_img_entreprises">
		<div class="texte_entreprise" id="bloc_entreprises">

			<h3>Entreprises</h3>
				<h4>Vous souhaitez développer ou diversifier votre activité ?</h4>
				<p>Le Site de proximité vous propose :</p>
					<ul>
						<li>Un appui à la validation et la mise en œuvre de votre projet.</li>
						<li>Une orientation vers les structures spécialisées pour un appui technique, un financement…</li>
				</ul>
				<h4>Vous voulez recruter ?</h4>	
		</div>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		  + d'infos ...
		</button>
		<img src="images/local.jpg" class="img_entreprise">

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel"></h4>
		      </div>
		      <div class="modal-body">
							<p>Nous disposons d'informations sur :</p>	
							<ul>
								<li>Les différents types de contrats.</li>
								<li>Les aides à l’embauche.</li>
								<li>La définition du poste proposé.</li>
								<li>La liste de diffusion des offres.</li>
								<li>Une mise en relation avec des candidats.</li>
								<li>Une aide à la sélection et au suivi de l’intégration de la personne recrutée.</li>
								<li>Un accompagnement spécifique pour les formalités liées à votre première embauche.</li>
							</ul>
						<h4>Vous recherchez des locaux ?</h4>
							<p>Le Site de proximité met à votre disposition la liste des locaux vacants, vous oriente en fonction de vos besoins.</p>
						<h4>Vous projetez de transmettre votre entreprise ?</h4>
							<p>Le Site de proximité vous accompagne dans la recherche de candidats repreneurs.</p>
		      </div>
		    </div>
		  </div>
		</div>
		</div>	
		
	
	<div class="bloc_img_associations">
		<div class="img_associations">
			<img src="images/asso.jpg" class="img_asso">
		</div>
			<div class="texte_associations" id="bloc_associations">
				<h3>Associations</h3>
					<h4>Vous souhaitez développer un nouveau projet ? </h4>
						<p>Le Site de proximité vous propose</p>
							<ul>
								<li>Un appui à la validation et la mise en œuvre de vos projets.</li>
								<li>Une orientation vers les structures spécialisées.</li>
							</ul>
					<h4>Vous voulez recruter ?</h4>
						
			</div>

			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		   + d'infos ...
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel"></h4>
			      </div>
			      <div class="modal-body">
						<p>Le Site de proximité vous propose un appui au recrutement : </p>
								<ul>
									<li>Information sur les différents types de contrats.</li>
									<li>Aides à l’embauche.</li>
									<li>Une aide à la définition du poste proposé. </li>
									<li>Diffusion de l’offre, mise en relation avec des candidats.</li>
									<li>Appui à la sélection.</li>
									<li>Suivi de l’intégration de la personne recrutée.</li>
									<li>Appui spécifique pour les formalités liées à votre première embauche.</li>
								</ul>	
						<h4>Vous avez besoin d’un appui dans l’organisation de votre association ?</h4>
							<p>Le Site de proximité vous propose un appui méthodologique pour faire évoluer votre organisation.</p>
						<h4>Vous recherchez des locaux ?</h4>
							<p>Nous mettons à votre disposition la liste des locaux vacants, vous oriente en fonction de vos besoins.</p>	
			      </div>
			    </div>
			  </div>
			</div>
</div>	
	
	<div class="bloc_img_collectivites">
		<div  class="texte_collectivite" id="bloc_collectivites">
			<h3>Collectivités</h3>
			<h4>Vous souhaitez contribuer à la création d’emploi, maintenir ou créer de nouveaux services sur votre territoire ?</h4>
				<p>Le Site de proximité analyse avec vous  les potentiels de vos territoires : locaux vacants, entreprises à reprendre, savoirs faire non valorisés, besoins de nouveaux services, opportunités de création d’activités et mettons en œuvre les actions pour valoriser ces potentiels.</p>
			<h4>Vous voulez recruter ?</h4>
			<!-- <p>Le Site de proximité vous propose un appui au recrutement : </p>
			<ul>
				<li>Information sur les différents types de contrats. 
				<li>Les aides à l’embauche, aide à la définition du poste proposé.</li>
				<li>La diffusion de l’offre, mise en relation avec des candidats.</li>
				<li>L'appui à la sélection, suivi de l’intégration de la personne recrutée.</li>
			</ul> -->
		</div>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		   + d'infos ...
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel"></h4>
			      </div>
			      <div class="modal-body">
						<p>Le Site de proximité vous propose un appui au recrutement : </p>
						<ul>
							<li>Information sur les différents types de contrats. 
							<li>Les aides à l’embauche, aide à la définition du poste proposé.</li>
							<li>La diffusion de l’offre, mise en relation avec des candidats.</li>
							<li>L'appui à la sélection, suivi de l’intégration de la personne recrutée.</li>
						</ul> 
			      </div>
			    </div>
			  </div>
			</div>
		<div class="img_collectivites">
			<img src="images/territoires-petit.jpg">
		</div>
	</div>
	
	<div class="bloc_img_territoire">
		<div class="img_territoire">
			<img src="images/territoires-petit.jpg">
		</div>
		<div class="bloc_texte_territoire" id="bloc_territoires">
			<h3>Territoire et acteurs</h3>
			<h4> blabla </h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tempus eros. Proin a fermentum sem. Ut nulla quam, mattis a pellentesque eget, finibus nec turpis. Nunc posuere enim quis dolor consequat, in blandit enim mattis. Proin non dolor commodo, tristique justo a, convallis justo. Praesent interdum, nulla at ullamcorper bibendum, massa mauris placerat lacus, ut lacinia ante massa auctor metus. Aenean vitae turpis eu tortor sollicitudin dignissim. Pellentesque mollis nunc sit amet massa pharetra dictum. Nam venenatis, arcu et tempus semper, velit augue iaculis tortor, fringilla imperdiet augue nisi a metus. Fusce erat augue, consequat eu euismod quis, tempor at velit. Quisque tristique magna ac leo hendrerit vehicula. Suspendisse vestibulum purus a erat venenatis, sagittis iaculis velit efficitur.</p>
		</div>
	</div>
	<div class="bloc_titre_financeurs">
			<p class ="titre_financeurs">Nos financeurs :</p>
	</div>
	<?php include("_financeurs.php"); ?>
	<?php include("_footer.php"); ?>
	
</body>
</html>
