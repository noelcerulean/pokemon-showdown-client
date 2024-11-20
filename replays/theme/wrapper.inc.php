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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8563970445792213" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.3114303833571159" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.2061529905823527" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.6240435711788161" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.6070044266013019" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.2655753229506197" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.18819176066088072"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.0487249492015156" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.0009248537988602035">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.684495525199508">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9970436469767647">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.13364618374148463">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.03216431532092212"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8100361699832455"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.03315899478926432"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5480901354101015"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.9522559009309493"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.40223277799701185"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.27198646246527836"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.7207896243160625"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.42724175028437394"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9804474334904165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.7140498316923556"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.6048662471253543"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.3637517025012551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.9596404072013545"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.9472605412808286"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.5228536734592382"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.814078647529364"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.784268810172233"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.91169726186186"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
