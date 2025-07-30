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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8112632479988899" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9400302411198869" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.09475912492983096" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.8979868949499821" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.1597236195875742" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.9369733495928434" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.37651832744673897"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.2842792009328097" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.05277468504156091">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7999728366540242">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9743595384759496">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.9836549528198479">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8430217306289132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.612248383805901"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.3798184592013103"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.457280103393195"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.10655630353138656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.6236822539915305"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5896443212919389"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.5749637607579705"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5108911427887282"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.8659438846360066"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7430574751316557"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.5652497946929909"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.37268631993628976"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.16889952350347803"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.08091037016505553"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5442950375663829"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.4634474410055678"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.9627553278219969"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.6685375179919912"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
