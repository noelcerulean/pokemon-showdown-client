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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8602624452528596" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.12773772373745507" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.628384871562796" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.3376294178890362" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.26270600685527645" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.6732214360788844" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.17175349820343078"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.18928023792406834" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5148218387183909">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6002732711279886">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.6513615534048756">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8316491748897288">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15288380788485578"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0847035527309099"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7014799719189364"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5123576098460325"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.7612944777825335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.28679728910767754"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.5468943154241697"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.3843440595355059"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.7433426753538639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.22504304614982185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7706988167976194"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.8633948722124622"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.48992698133247425"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8780541721004065"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.029302668822975608"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2247009122761885"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.7078556470578872"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.8773009088571655"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.9316104333245385"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
