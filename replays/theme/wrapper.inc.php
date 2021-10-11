<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.011242421013780923" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.849716619301037" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.850842596365398" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8496652663825224" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.22670605515682385" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.3766356128644548" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27576197543045833"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.12215473955254286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8532822745278823">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7226946932348364">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.32903423499662665">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9969575488975708">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.07729145548728766"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9053103975963468"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19165870785174954"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8113055347406883"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.4147831893323537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.670891172313246"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.625918910687496"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6506654830040504"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.017854453173902662"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8801540449813448"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8369814397442654"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5625900808087185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5517470592147171"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6040787136267156"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8757367095311153"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4465153258539196"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5679148450072151"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.7533037829944069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.2691871027109336"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
