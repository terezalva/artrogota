<?php $S='ofertaIn2';?>
<section class="oferta in2">
	<div class="uk-container">
		<h2 <?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
		<ul>
			<?php for($i=1;$i<=4;$i++): ?>
			<li>
				<a target="_blank" <?=G($S,"a$i",C)?>>
					<?=Q($S,"a$i",C)?>
					<img <?=G($S,"b$i",D)?>>
				</a>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</section>