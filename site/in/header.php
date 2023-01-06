<?php $S='headerIn';?>
<header class="header" id="header">
	<section class="tarja">
		<div class="uk-container">
			<p <?=G($S,1,T)?>><?=Q($S,1,T)?></p>
		</div>
	</section>
	<section class="principal">
		<div class="uk-container">
			<div class="text">
				<h1 <?=G($S,2,T)?>><?=Q($S,2,T)?></h1>
				<h2 <?=G($S,3,T)?>><?=Q($S,3,T)?></h2>
				<ul class="lista">
					<?php for($i=1;$i<=5;$i++): ?>
					<li <?=G($S,"a$i",T)?>>
					<i class="bi bi-check-square-fill"></i>
					<?=Q($S,"a$i",T)?></li>
					<?php endfor; ?>
				</ul>
				<a class="uk-button cta" <?=G($S,5,L)?>><?=Q($S,5,L)?></a>
			</div>
			<figure class="produto"><img <?=G($S,4,M)?>></figure>
			<figure class="background"><img <?=G($S,6,M)?>></figure>
		</div>
	</section>
</header>