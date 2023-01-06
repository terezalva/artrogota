<?php $S='acaoIn';?>
<section class="acao">
	<div class="uk-container">
		<div class="content">
			<div class="bottom">
				<figure class="produto">
					<h2 <?=G($S,1,E)?>><?=Q($S,1,E)?></h2>
					<img <?=G($S,3,M)?>>
				</figure>
				<div class="text">
					<ul>
						<?php for($i=1;$i<=3;$i++): ?>
						<li <?=G($S,"a$i",E)?>>
							<?=Q($S,"a$i",E)?>
						</li>
						<?php endfor; ?>
					</ul>
					<img <?=G($S,4,M)?> class="assinatura">
					<a class="uk-button cta" <?=G($S,2,L)?>><?=Q($S,2,L)?></a>
				</div>
			</div>
		</div>
	</div>
</section>