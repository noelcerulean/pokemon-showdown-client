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
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/font-awesome.css?0.06465465989016872" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/panels.css?0.9261195610477893" />
	<link rel="stylesheet" href="//fnf-showdown.herokuapp.com/theme/main.css?0.5969591612396306" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/battle.css?0.15658084946687256" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/replay.css?0.5926176493274817" />
	<link rel="stylesheet" href="//fnf-showdown-client.herokuapp.com/style/utilichart.css?0.035293664159741" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/?0.36175426941083777"><img src="//fnf-showdown.herokuapp.com/images/pokemonshowdownbeta.png?0.7123511898360273" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5575352183034123">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4756872957236584">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//fnf-showdown.herokuapp.com/ladder/?0.09747230241110705">Ladder</a></li>
				<li><a class="button nav-last" href="//fnf-showdown.herokuapp.com/forums/?0.32061913010236953">Forum</a></li>
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
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6775138264461522"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/lodash.core.js?0.0945536975364687"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/backbone.js?0.544021992945068"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3885682746928423"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//fnf-showdown-client.herokuapp.com/js/lib/jquery-cookie.js?0.6798006623197144"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9125188760898459"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-sound.js?0.791191762819069"></script>
	<script src="//fnf-showdown-client.herokuapp.com/config/config.js?0.09149148523772865"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battledata.js?0.4221365088328275"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini.js?0.5206322661593199"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex-mini-bw.js?0.03471849939205507"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/graphics.js?0.32040451451968943"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/pokedex.js?0.6748765661064975"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/items.js?0.8348219597031152"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/moves.js?0.6465266779717391"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/abilities.js?0.6617579280226551"></script>
	<script src="//fnf-showdown-client.herokuapp.com/data/teambuilder-tables.js?0.6805454058668166"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle-tooltips.js?0.03293538803468299"></script>
	<script src="//fnf-showdown-client.herokuapp.com/js/battle.js?0.7303004398179829"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
