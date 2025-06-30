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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.6787532874973516" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.5391873599545334" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.1837722103833357" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.12997490366574982" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.0881880637584942" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.8416321131523934" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.15862058545001556"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.619879648726916" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.894521990245341">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.434371362203374">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.9554042217069532">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.8337140450197298">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5914803401397517"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.9391841527166753"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.6226918662097649"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.64793643860681"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6338655468763088"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9358587153515612"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.6456223617256844"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.4942192082943191"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.07496032535405428"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.9412563579456055"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.9075952822439559"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.7023480736590817"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.09253171651876513"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.47350238137389256"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.7121159847781071"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.03849253367032235"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.35017715683162165"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.23901717984610604"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.25082160748005644"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
