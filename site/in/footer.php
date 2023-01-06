<!-- Footer !-->
<?php $S='footerIn';?>
<footer class="footer" id="footer">
	<div class="seguro">
		<div class="uk-container">
			<?php for($i=1;$i<=3;$i++): ?>
			<div class="card">
				<span <?=G($S,"a$i",T)?>><?=Q($S,"a$i",T)?></span>
				<h4 <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></h4>
				<p <?=G($S,"c$i",T)?>><?=Q($S,"c$i",T)?></p>
			</div>
			<?php endfor; ?>
		</div>
	</div>
	<div class="contato">
		<ul class="uk-container">
			<li class="left">
				<h4>FALE CONOSCO</h4>
				<p <?=G($S,1,T)?>><?=Q($S,1,T)?></p>
				<a <?=G($S,2,L)?> target="_blank">
					<i class="bi bi-whatsapp"></i>
					<?=Q($S,2,L)?>
				</a>
				<a <?=G($S,3,L)?> target="_blank">
					<i class="bi bi-whatsapp"></i>
					<?=Q($S,3,L)?>
				</a>
			</li>
			<li class="center">
				<h4>ENTREGA GARANTIDA</h4>
				<p <?=G($S,4,T)?>><?=Q($S,4,T)?></p>
				<a <?=G($S,5,L)?> target="_blank">
					<i class="bi bi-truck"></i>
					<?=Q($S,5,L)?>
				</a>
			</li>
			<li class="right">
				<h4>COMPRA 100% SEGURA</h4>
				<img <?=G($S,6,M)?>>
			</li>
		</div>
	</ul>
	<div class="aviso">
		<div class="uk-container">
			<h2 <?=G($S,7,T)?>><?=Q($S,7,T)?></h2>
			<p <?=G($S,8,A)?>><?=Q($S,8,A)?></p>
		</div>
	</div>
	<div class="copi">
		<div class="uk-container">
			<a href="http://artrogotaoficial.com/politica-de-privacidade" target="_blank" <?='';//G($S,9,L)?>><?=Q($S,9,L)?></a>
			<a href="http://artrogotaoficial.com/termos-e-condicoes" target="_blank" <?='';//G($S,10,L)?>><?=Q($S,10,L)?></a>
			<a href="http://artrogotaoficial.com/estudos-relacionados" target="_blank" <?='';//G($S,11,L)?>><?=Q($S,11,L)?></a>
		</div>
	</div>
</footer>
<!-- Footer !-->