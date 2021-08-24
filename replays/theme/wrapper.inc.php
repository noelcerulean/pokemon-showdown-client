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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.907698048211385" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.40043484539531127" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.8546202574291331" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6103218945005515" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.42326857646752014" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.32186575327234457" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.6081473406248628"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.5804369884383536" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8915597102700985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.006892972351592697">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.5530854949784973">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.6378494720536478">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7777148381671715"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.14628091507042784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.25356347975869054"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24201146906017112"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.39796389312908254"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2680438889841146"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.22647119710089614"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.99055665775384"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.24691509984162097"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5535805593678531"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.32448397650227734"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9314168919066537"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6978603674916939"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.42981984600042966"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.3794954705675002"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.154205937091751"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6427450044254484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3416871822126659"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.8239221727104233"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
