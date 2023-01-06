<?php $S='ofertaOut1';?>
<section class="oferta out" id="oferta">
	<div class="uk-container">
		<figure class="logo"><img <?=G($S,1,D)?>></figure>
		<h1 <?=G($S,2,T)?>><?=Q($S,2,T)?></h1>
		<h3 <?=G($S,3,T)?>><?=Q($S,3,T)?></h3>
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


<?php $S='doresIn';?>
<section class="dores out">
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


<?php $S='garantiaIn';?>
<section class="garantia out">
	<div class="uk-container">
		<div class="content">
			<figure class="produto"><img <?=G($S,4,M)?>></figure>
			<div class="texto">
				<h2 <?=G($S,1,E)?>><?=Q($S,1,E)?></h2>
				<div class="text" <?=G($S,2,E)?>><?=Q($S,2,E)?></div>
			</div>
		</div>
	</div>
</section>


<?php $S='ofertaOut2';?>
<section class="oferta out">
	<div class="uk-container">
		<h2 <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>
		<h3 <?=G($S,3,T)?>><?=Q($S,3,T)?></h3>
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


<?php $S='entregaOut';?>
<section class="entrega">
	<div class="uk-container">
		<img <?=G($S,3,M)?>>
	</div>
</section>


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