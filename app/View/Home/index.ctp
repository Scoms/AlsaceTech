<?php if(AuthComponent::user('username')): ?>

	<h1 class="bleufonce" style="margin:10px 0; margin-top:30px; color: #009790; text-align:center;">Bienvenue dans votre espace personnalisé</h1>
	<p>Afin de préparer au mieux cette journée, Alsace Tech vous propose cet espace dédié vous permettant d'enregistrer votre journée.<br/>Organisez votre planning et réservez votre place pour les conférences via le menu ci-dessus</p>
	<p style="text-align:center;"><img src="http://www.forum-alsacetech.org/uploads/images/DSC_0235.JPG"/></p>

<?php endif ?>

<?php if(!(AuthComponent::user('username'))): ?>
<p style="text-align:center;"><img src="http://www.forum-alsacetech.org/uploads/images/DSC_0309.JPG"/></p>
<?php endif ?>