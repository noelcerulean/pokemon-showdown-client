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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.8392974413430281" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.792024032916766" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.7883882326093898" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.4010097262094703" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.8920330159149636" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8102624777707881" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.11838200199286875"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7370282921740363" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15036612964035267">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9592272561787951">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.4378529358196439">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.5604109815022962">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.15551779823776313"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.6542685105694934"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.39997826832880956"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8624233146501543"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.20644921738626132"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10296403722475667"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.2097592480438204"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4902491953289323"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.5634735636664994"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9699424607413629"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.08119207467984335"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.4697751499561471"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.295707601692639"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.0461442731908972"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6925498178055982"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.21559841077355135"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.08418161606672148"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.13970005581890188"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.5773388918095126"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
