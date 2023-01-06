<?php 
	$titler = '';
	$description = '';
	if(empty($rota)):
		$titler = SEO['titulo'];
		$description = SEO['descricao'];
	else:
		if(!empty(SEO['titler'][$rota])):
			$titler = SEO['titler'][$rota];
		endif;
		if(!empty(SEO['description'][$rota])):
			$description = SEO['description'][$rota];
		endif;
	endif;
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.">
<link rel="icon" href="<?=SRC?>img/fav.png">
<title><?=(isset($titler))?$titler:'';?></title>
<meta name="description" content="<?=(isset($description))?$description:'';?>">
<meta itemprop="url" content="<?=URL?>">
<link rel="canonical" href="<?=URL?>">
<meta itemprop="image" content="<?=SRC?>img/capa.png">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=URL?>">
<meta property="og:title" content="<?=(isset($titler))?$titler:'';?>">
<meta property="og:description" content="<?=(isset($description))?$description:'';?>">
<meta property="og:image" content="<?=SRC?>img/capa.png">
<meta property="og:site_name" content="<?=(isset($titler))?$titler:'';?>">
<meta property="og:locale" content="pt_BR">	
<meta name="author" content="Randiclecio Moura">
<meta name="robots" content="index, follow">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.18/css/uikit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.15.18/js/uikit.min.js"></script>

<link rel="stylesheet" href="<?=URL.'/src/main.css'.V?>" type="text/css" media="all"/>
<link rel="stylesheet" href="<?=URL.'/src/site.css'.V?>" type="text/css" media="all"/>
<link rel="stylesheet" href="<?=URL.'/src/adv.css'.V?>" type="text/css" media="all"/>
<link rel="stylesheet" href="<?=URL.'/src/outs.css'.V?>" type="text/css" media="all"/>
<?php if(!empty($rota)&&$rota!='adv'):?>
<?php endif;?>


<?php 
	if(empty($rota)):
		echo (isset(SEO['head']))?stripslashes(SEO['head']):'';
	else:
		if(!empty(SEO['pixels'][$rota])):
			echo SEO['pixels'][$rota];
		endif;
	endif;
?>