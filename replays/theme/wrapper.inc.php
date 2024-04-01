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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5662117086690357" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.4203580698203293" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7963050830677345" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.1891571954674549" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6166649341676045" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8224951621342023" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.012315785726607853"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.6394730145634804" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6571717302715003">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2875020811649278">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.452809282722082">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.3585527398262389">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7223494727125139"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.37229463292029497"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.42605287335192465"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6931931391199864"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6490676972570453"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.11167717529085319"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.3202674292314953"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.338820589632173"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.10957266171509428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9725129242410178"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.8224599615034653"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4557378733608084"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.5758769760350311"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.18006536824237074"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6779310782309651"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.4942643628973944"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.9200732971321073"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.14959784750992577"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.18686221636689182"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
