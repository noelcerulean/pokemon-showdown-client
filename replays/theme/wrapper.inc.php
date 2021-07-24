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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.5788656329846391" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.15302865547354827" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1326677291266496" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.39276008415900976" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.024125964992576243" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8551784419873512" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.26020951492795485"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.17468246294878775" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7314559022969211">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19185491228268137">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9401437616630886">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.4481742023705111">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.44055604323295494"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.8009403718053834"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.7300145659251642"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6020750914649224"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.3732390996576911"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3036971725859199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.7467044205906015"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.34473176805331085"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.08288955051124192"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.6350998803639656"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.2671467009026438"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.38318807116354736"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.2669923762490145"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.744716953902467"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.11101590403937256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.2356825613454463"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6432594678236676"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.3060029552715362"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.07885289137871743"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
