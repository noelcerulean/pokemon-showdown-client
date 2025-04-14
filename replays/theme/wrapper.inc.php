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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7914025292186488" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9427292031439505" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7567595217643122" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.36239342957837595" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8806871753401244" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.08436282359245384" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.8685234984069405"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.9337020091629611" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5906829416752668">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6908458214795605">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.7167806106504466">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9175491245729757">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4673940140012032"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.08181673739979178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.06380229583687957"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1573477000408443"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.032711289963919254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.023208278189247755"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.19885960187695062"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.25068884678639836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4143988009661954"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.2341135823333358"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.776826571278262"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.025479553131676713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.8792705690944493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.13020786958632713"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.5635428801298676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6037596667278238"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9600310321242509"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.975960205578027"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7997753325071626"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
