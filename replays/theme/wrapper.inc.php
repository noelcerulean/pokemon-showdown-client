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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5116771226652339" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.6190383284108709" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.9970422851514051" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.5854972548049135" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.46923221031218" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.41632682430039925" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.28206495695962097"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.504112081450115" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8052130970645752">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7831954394065965">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.15972056181360195">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.39341336682764516">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8705384221656391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.2204390177572162"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7987581690798828"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4216298609868425"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.929027115112022"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7665901491497211"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.8372771738725586"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.33223095880672515"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.3401298319370438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6461185996735099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.24535665507835636"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.9469538227648104"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.013403393230196903"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.1101033599883583"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.2519307580066321"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2914650546379778"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6929222026385595"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9300088984514376"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6758892473034537"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
