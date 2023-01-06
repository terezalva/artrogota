<?php $S='advOut';?>
<style>
	.adv *:not(i) { font-family: 'Roboto', sans-serif; }
	#footer{display: none;}
</style>
<div class="adv">
	 <div class="mm">
		<div class="uk-container">
			<div>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div>
				<span>ASSINE JÁ</span>
				<span>MINHA CONTA</span>
				<span>E-MAIL<i uk-icon="chevron-down"></i></span>
				<a href="#" class="m2">ENTRAR<i class="bi bi-chevron-right"></i></a>
			</div>
		</div>
	</div>
	
	<div class="topo">
		<div class="uk-container">
			<div>
				<button class="uk-button">
				<i class="bi bi-list"></i>
				<span>MENU</span>
				</button>
				<a href="#" class="g1"><img src="<?=IMG?>g1.png" alt="g1"></a>
			</div>
			<a href="#" class="titulo">BEM ESTAR</a>
			<label for="">
				<input type="text" placeholder="Busca...">
				<i class="bi bi-search"></i>
			</label>
		</div>
	</div>
	
	<div class="content">
		<div class="uk-container">
			<div class="article">
				<div class="header">
					<h1 <?=G($S,1,A)?>><?=Q($S,1,A)?></h1>
					<h2 <?=G($S,2,T)?>><?=Q($S,2,T)?></h2>
					<div class="share">
						<span <?=G($S,3,T)?>><?=Q($S,3,T)?></span>
						<ul>
							<li><i class="bi bi-facebook"></i></li>
							<li><i class="bi bi-twitter"></i></li>
							<li><i class="bi bi-whatsapp"></i></li>
							<li><i class="bi bi-linkedin"></i></li>
							<li><i class="bi bi-pinterest"></i></li>
						</ul>
					</div>
					<p style="width:100%; font-size:.8rem;" <?=G($S,4,T)?>><?=Q($S,4,T)?></p>
				</div>
				
				<hr>
				
				<div class="editorial">
					<figure>
						<a <?=G($S,"5l",C)?>><?=Q($S,"5l",C)?><img <?=G($S,5,D)?>></a>
					</figure>
					<div class="txt" <?=G($S,6,E)?>><?=Q($S,6,E)?></div>

					<figure>
						<a <?=G($S,"7l",C)?>><?=Q($S,"7l",C)?><img <?=G($S,7,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,8,E)?>><?=Q($S,8,E)?></div>

					<figure>
						<a <?=G($S,"9l",C)?>><?=Q($S,"9l",C)?><img <?=G($S,9,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,10,E)?>><?=Q($S,10,E)?></div>

					<figure>
						<a <?=G($S,"11l",C)?>><?=Q($S,"11l",C)?>
						<img <?=G($S,11,M)?> style="max-width:70%;margin:0 auto !important;">
						</a>
					</figure>
					<div class="txt" <?=G($S,12,E)?>><?=Q($S,12,E)?></div>

					<figure>
						<a <?=G($S,"13l",C)?>><?=Q($S,"13l",C)?><img <?=G($S,13,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,14,E)?>><?=Q($S,14,E)?></div>

					<figure>
						<a <?=G($S,"15l",C)?>><?=Q($S,"15l",C)?><img <?=G($S,15,M)?>></a>
					</figure>
					<div class="center">
						<a class="link uk-button uk-button-danger" <?=G($S,16,L)?>><?=Q($S,16,L)?></a>
					</div>
					<br>
					<div class="txt" <?=G($S,17,E)?>><?=Q($S,17,E)?></div>
					
					<figure>
						<a <?=G($S,"18l",C)?>><?=Q($S,"18l",C)?><img <?=G($S,18,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,19,E)?>><?=Q($S,19,E)?></div>
					
					<figure>
						<a <?=G($S,"20l",C)?>><?=Q($S,"20l",C)?><img <?=G($S,20,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,21,E)?>><?=Q($S,21,E)?></div>
					
					<figure>
						<a <?=G($S,"22l",C)?>><?=Q($S,"22l",C)?><img <?=G($S,22,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,23,E)?>><?=Q($S,23,E)?></div>
					
					<figure>
						<a <?=G($S,"24l",C)?>><?=Q($S,"24l",C)?><img <?=G($S,24,M)?>></a>
					</figure>
					<div class="txt" <?=G($S,25,E)?>><?=Q($S,25,E)?></div>
					<br>
					<div class="center">
						<a class="link uk-button uk-button-danger" <?=G($S,26,L)?>><?=Q($S,26,L)?></a>
					</div>
					
					<figure>
						<a <?=G($S,"27l",C)?>><?=Q($S,"27l",C)?>
							<img <?=G($S,27,M)?> style="max-width:400px;margin:0 auto !important;" class="banner_min">
						</a>
					</figure>
					<div class="txt" <?=G($S,28,E)?>><?=Q($S,28,E)?></div>
					<br>
					<div class="center">
						<a class="link uk-button uk-button-danger" <?=G($S,29,L)?>><?=Q($S,29,L)?></a>
					</div>
				

					<br>
					<hr>
					<?php $S='advOutComments';?>
					<div class="comentarios">
						<h3 <?=G($S,1,T)?>><?=Q($S,1,T)?></h3>
						<hr>
						<p class="desc" <?=G($S,2,T)?>><?=Q($S,2,T)?></p>
						<ul>
							<?php for($i=1;$i<=4;$i++): ?>
							<li>
								<img <?=G($S,"a$i",M)?>>
								<div class="text">
									<h4 <?=G($S,"b$i",T)?>><?=Q($S,"b$i",T)?></h4>
									<span <?=G($S,"c$i",T)?>><?=Q($S,"c$i",T)?></span>
									<p <?=G($S,"d$i",T)?>><?=Q($S,"d$i",T)?></p>
								</div>
							</li>
							<?php endfor; ?>
						</ul>
						<div class="end">Este conteúdo não recebe mais comentários</div>
					</div>
				</div>
			</div>
			
			
			<?php $S='advOutAside';?>
			<div class="aside">
				<div class="conteudo">
					<h4><a href="#" class="g1"><img src="<?=IMG?>g1.png" alt="g1"></a>Últimas Notícias</h4>
					<ul>
						<?php for($i=1;$i<=3;$i++): ?>
						<li>
							<a href="<?=URL?>">
								<img <?=G($S,"e$i",M)?>>
								<p <?=G($S,"f$i",T)?>><?=Q($S,"f$i",T)?></p>
							</a>
						</li>
						<?php endfor; ?>	
					</ul>
					<figure>
						<a <?=G($S,"9l",C)?>><?=Q($S,"9l",C)?>
							<img <?=G($S,19,D)?>>
						</a>
					</figure>
				</div>
			</div>
	</div>
	</div>
</div>


