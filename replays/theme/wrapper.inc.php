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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.48423552037342454" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.18723621657262046" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7726417266887802" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.12854883577808973" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.585483007484177" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.14981145566154153" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.27413725367978237"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.8379846471103287" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.603304868028395">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9736244332949318">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6361219592319101">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.08499816718868414">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.49552914954295346"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.05281786928709886"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.42481376213100064"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9490006657804699"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.5383887402180823"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39675678252304536"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.31222851745452407"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4049321775498298"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.9745955249392484"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.039040516669880176"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.202936382706435"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.548635210140523"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3914780447798927"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.7665847747015186"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.42265067074098006"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.8357906928177323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.3104140715215802"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.026553822822034112"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.31291474105178607"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
