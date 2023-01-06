<?php $S='duvidasIn';?>
<section class="duvidas">
	<div class="uk-container">
		<div class="content">
			<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
			<ul uk-accordion>
				<?php for($i=1;$i<=8;$i++): ?>
				<li>
					<a class="uk-accordion-title" href="#" <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></a>
					<div class="uk-accordion-content" <?=G($S,"b$i",A)?>><?=Q($S,"b$i",A)?></div>
				</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>