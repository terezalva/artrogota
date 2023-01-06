<?php $S='doresIn';?>
<section class="dores">
	<div class="uk-container">
		<h2 u<?=G($S,1,T)?>><?=Q($S,1,T)?></h2>
		<h3 u<?=G($S,2,T)?>><?=Q($S,2,T)?></h3>
		<ul>
			<?php for($i=1;$i<=3;$i++): ?>
			<li>
				<div class="video" u<?=G($S,"c$i",I)?>><?=Q($S,"c$i",I)?></div>
				<h4 <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></h4>
				<p <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></p>
			</li>
			<?php endfor; ?>
		</ul>
	</div>
</section>