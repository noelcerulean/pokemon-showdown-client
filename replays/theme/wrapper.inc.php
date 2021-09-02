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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5155347350624215" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.24660812053041892" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7177816681131926" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.57110155877818" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.12541759289241083" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.09926505911038275" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.24248254642858957"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6439494507575738" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9486408718237596">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8338124172140617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6718345341865952">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.23607376352909126">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9564916357901765"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.7147848002199513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.19050126657397382"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6941550036662347"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.31315539095186096"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.888293148472322"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.20164495744851663"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.9886545156481443"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4017278739787815"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.3592388332918648"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8787976344325437"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6718610604015796"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48580613329630995"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.43319794222174535"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.8273656077034832"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6733278117451138"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.5954084284560219"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.5287878156762011"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.013636483024449975"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
