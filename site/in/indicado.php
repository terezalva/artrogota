<?php $S='indicadoIn';?>
<section class="indicado">
	<div class="uk-container">
		<div class="content">
			<h2 <?=G($S,1,E)?>><?=Q($S,1,E)?></h2>
			<div class="uk-position-relative" tabindex="-1" uk-slider="autoplay: true;draggable: true;">
				<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
					<?php for($i=1;$i<=7;$i++): ?>
					<li>
						<img <?=G($S,"b$i",M)?>>
						<h4 <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></h4>
					</li>
					<?php endfor; ?>
				</ul>
				<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		</div>
	</div>
	<div class="uk-container">
		<a class="uk-button cta" <?=G($S,2,L)?>><?=Q($S,2,L)?></a>		
	</div>
</section>
