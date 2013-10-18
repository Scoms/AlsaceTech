<?php if(AuthComponent::user('username')): ?>

	<h1 class="bleufonce" style="margin:10px 0; margin-top:30px; color: #009790; text-align:center;">Afin de vous préparer au mieux cette journée, Alsace Tech vous propose de créer votre programme.<br/>
Organisez votre planning et intégrez toutes les activités auxquelles vous souhaitez participer.</p>
	<p style="text-align:center;"><img src="http://www.forum-alsacetech.org/uploads/images/DSC_0235.JPG"/></p>

<?php endif ?>

<?php if(!(AuthComponent::user('username'))): ?>
<p style="text-align:center;"><img src="http://www.forum-alsacetech.org/uploads/images/DSC_0309.JPG"/></p>
<?php endif ?>