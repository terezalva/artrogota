<?php $S='composicaoIn';?>
<section class="composicao">
	<div class="uk-container">
		<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
		<h3 <?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
		<ul>
			<?php for($i=1;$i<=5;$i++): ?>
			<li>
				<figure><img <?=G($S,"b$i",M)?>></figure>
				<h4 <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></h4>
				<p <?=G($S,"c$i",T)?>><?=Q($S,"c$i",T)?></p>
			</li>
			<?php endfor; ?>
		</ul>
		<a class="uk-button cta" <?=G($S,3,L)?>><?=Q($S,3,L)?></a>
	</div>
</section>