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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.34651548292915413" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.47344402149700415" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5809604773519239" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.749749818070311" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.16227316989693663" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.31625578113617836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.637008768709411"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.1647329152596364" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4157203302385093">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2297872875719571">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.13529747077883414">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.0868672199093099">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.08932401345349872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8250291141812733"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.14288674364195852"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6059077292404522"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.43129978416444703"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9070245163890567"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3975914584364466"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.6983059939196279"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3740965764882489"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5956583570178045"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9553581714497055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.835936036456784"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5612190583517587"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0904496076772412"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.26207648013317586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.7112960676451001"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.8426203889349366"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8443115621457342"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.893359174548302"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
