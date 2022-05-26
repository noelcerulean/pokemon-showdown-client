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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.12320863544276683" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.0780785406184894" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8385940617162282" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.30692965339493616" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.053914855208812895" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8558428996603356" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.35190600751082246"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5245132480209143" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9437988017682617">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.012777859634520938">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.32908208989718846">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.7302831325363273">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14002022756408117"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.38526642115008625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.708138937218302"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5367603742071017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3314840090416431"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.658443863144685"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.4896858339481527"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9316879787088184"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.358611676875904"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.30774783879717393"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.615505282106354"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.42744538104335605"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.9391517641796983"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.2963661956012402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.15214390924732402"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5829746686243167"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.31725584108926896"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.010307642939733741"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.22318701944966302"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
