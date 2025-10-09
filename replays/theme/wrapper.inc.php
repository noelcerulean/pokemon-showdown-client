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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.7759802440081294" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4017997237889013" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.6333110343439385" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.0028294046751049517" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.9110902900077229" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14966855190234063" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.670969056273609"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6114947875587942" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8491923726014412">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0873167904574188">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.36709410826604305">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8624728431034712">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.44478236927515447"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.5236919126596009"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7347643728500293"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7107364609762992"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5329919464883965"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.33063523897071545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.9999829694427824"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.19225556888997763"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9652922422761236"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.40414889220280625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7779314924517116"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9213668459818463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.7444824662202858"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.6437998943018701"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6185743231846512"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.9871353834133174"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.07194965357029415"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.09226643725037276"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.3330697196970738"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
