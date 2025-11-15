/**
 * Pokemon Showdown Dex Data
 *
 * A collection of data and definitions for src/battle-dex.ts.
 *
 * Larger data has their own files in data/, so this is just for small
 * miscellaneous data that doesn't need its own file.
 *
 * Licensing note: PS's client has complicated licensing:
 * - The client as a whole is AGPLv3
 * - The battle replay/animation engine (battle-*.ts) by itself is MIT
 *
 * @author Guangcong Luo <guangcongluo@gmail.com>
 * @license MIT
 */

/**
 * String that contains only lowercase alphanumeric characters.
 */
type ID = string & {__isID: true};

const BattleNatures: {[k in NatureName]: {plus?: StatName, minus?: StatName}} = {
	Adamant: {
		plus: 'atk',
		minus: 'spa',
	},
	Bashful: {},
	Bold: {
		plus: 'def',
		minus: 'atk',
	},
	Brave: {
		plus: 'atk',
		minus: 'spe',
	},
	Calm: {
		plus: 'spd',
		minus: 'atk',
	},
	Careful: {
		plus: 'spd',
		minus: 'spa',
	},
	Docile: {},
	Gentle: {
		plus: 'spd',
		minus: 'def',
	},
	Hardy: {},
	Hasty: {
		plus: 'spe',
		minus: 'def',
	},
	Impish: {
		plus: 'def',
		minus: 'spa',
	},
	Jolly: {
		plus: 'spe',
		minus: 'spa',
	},
	Lax: {
		plus: 'def',
		minus: 'spd',
	},
	Lonely: {
		plus: 'atk',
		minus: 'def',
	},
	Mild: {
		plus: 'spa',
		minus: 'def',
	},
	Modest: {
		plus: 'spa',
		minus: 'atk',
	},
	Naive: {
		plus: 'spe',
		minus: 'spd',
	},
	Naughty: {
		plus: 'atk',
		minus: 'spd',
	},
	Quiet: {
		plus: 'spa',
		minus: 'spe',
	},
	Quirky: {},
	Rash: {
		plus: 'spa',
		minus: 'spd',
	},
	Relaxed: {
		plus: 'def',
		minus: 'spe',
	},
	Sassy: {
		plus: 'spd',
		minus: 'spe',
	},
	Serious: {},
	Timid: {
		plus: 'spe',
		minus: 'atk',
	},
};
const BattleStatIDs: {[k: string]: StatName | undefined} = {
	HP: 'hp',
	hp: 'hp',
	Atk: 'atk',
	atk: 'atk',
	Def: 'def',
	def: 'def',
	SpA: 'spa',
	SAtk: 'spa',
	SpAtk: 'spa',
	spa: 'spa',
	spc: 'spa',
	Spc: 'spa',
	SpD: 'spd',
	SDef: 'spd',
	SpDef: 'spd',
	spd: 'spd',
	Spe: 'spe',
	Spd: 'spe',
	spe: 'spe',
};
/** Stat short names */
const BattleStatNames = {
	hp: 'HP',
	atk: 'Atk',
	def: 'Def',
	spa: 'SpA',
	spd: 'SpD',
	spe: 'Spe',
} as const;

const BattleBaseSpeciesChart = [
	"unown", "burmy", "shellos", "gastrodon", "deerling", "sawsbuck", "vivillon", "flabebe",
	"floette", "florges", "furfrou", "minior", "alcremie", "pokestarufo", "pokestarbrycenman",
	"pokestarmt", "pokestarmt2", "pokestartransport", "pokestargiant", "pokestarhumanoid",
	"pokestarmonster", "pokestarf00", "pokestarf002", "pokestarspirit", "pokestarblackdoor",
	"pokestarwhitedoor", "pokestarblackbelt", "trapinch", "hypno", "typhlosion", "raichu",
	"pikachu", "pichu", "blacephalon", "bastiodon", "samurott", "mamoswine", "breloom", "sableye",
	"solrock", "simisage", "bulbasaur", "ivysaur", "venusaur", "garchomp", "mightyena", "parasectfnf",
	"sableyefnf", "aromatissefnf", "heatmor", "gengar", "vespiquen", "delcatty", "aurorus",
	"octillery", "rampardos", "mothim", "maractus", "gliscor", "spiritomb", "emolga", "vibrava",
	"flygon", "dialga", "royalynx", "kurstraw", "pangshi", "shuckle", "clefgar", "lanturn", "golisopod",
	"dewott", "marshadow", "dewottlutryla", "raichumalachite", "decidueyeapollo", "altaria",
	"fraxurefrenzy", "medicham", "turbann", "swirlix", "misdreavus", "ninetales", "clefable",
	"poliwrath", "hydreigon", "infernape", "drapion", "parasect", "xurkitree", "lumineon", "roseradearmored",
	"sablechamp", "bombseal", "diggersby", "golisopodmusashi", "blissey", "espeon", "umbreon", "granbull",
	"glaceon", "leafeon", "vaporeon", "flareon", "jolteon", "longeon", "sylveon", "eevee", "ariados", "hoopa",
	"haunter", "ursaring", "probopass", "charjabug", "teddiursaarmored", "cubone", "kecleon", "kabutops",
	"claydol", "azumarill", "seismitoad", "chesnaughtdelta", "cranidosdelta", "raichualola", "amoonguss",
	"arthrogon", "shelgon", "ampharos", "salazzle", "electrodefnf", "baki", "boldorefnf", "gigalithfnf",
	"drowzee", "marill", "electrode", "saurbot", "kiwuit", "gravking", "spinda", "reuniclus", "dwebblefnf",
	"salamence", "trevenant", "dustox", "primarina", "darmanitan", "typhlosionvesuvius", "chatot", "cashino",
	"wobbuffet", "gorochu", "emolgadelta", "archebot", "zangoose", "seviper", "sledgesparce",
	"charino", "fearno", "wiggno", "venono", "ano", "krokono", "noivern", "meowsticroyal", "furfrouprincess",
	"incineroar", "seaking", "heatmorhuangshan", "noctowl", "starmie", "orneridge", "lugito",
	"despotide", "lycanrocmidnight", "espurr", "chandelure", "cofagrigus", "primeape", "wurmple",
	"enchantice", "madamme", "musleeb", "sindle", "fofoam", "scrafty", "stantler", "passimian",
	"bellossom", "ludisc", "deoxys", "sunflora", "bunmochi", "terrofunfaizer", "tapufini", "mienfoo",
	"magmortar", "oricoriopau", "gourgeist", "kartana", "sewaddle", "escavalier", "swampert", "numpuff",
	"phasmatch", "torkoalfnf", "lickitung", "pachirisu", "scizor", "illumise", "lileep", "durant", "sceptile",
	"dedenne", "hitmonwu", "typenull", "forretress", "klang", "ferrothorn", "rutherium", "basculinbluestriped",
	"ditto", "simisear", "murkrow", "excadrill", "gigalith", "avalugg", "togekiss", "ludicolo", "manaphy", "toxicroak",
	"raptopea", "clawitzer", "hawlucha", "miltank", "rapidash", "steenee", "vikavolt", "togetic", "joltik",
	"pelipper", "piloswine", "smeargle", "froslass", "bisharp", "shedinja", "araquanid", "aromatissefnf", "fowlfrost",
	"grumpig", "steeneedelta", "gourgeistlarge", "dragonairarmored", "wigglytuff", "skiploom", "dragonite",
] as ID[];

const BattlePokemonIconIndexes: {[id: string]: number} = {
	egg: 900 + 1,
	pikachubelle: 900 + 2,
	pikachulibre: 900 + 3,
	pikachuphd: 900 + 4,
	pikachupopstar: 900 + 5,
	pikachurockstar: 900 + 6,
	pikachucosplay: 900 + 7,
	unownexclamation: 900 + 8,
	unownquestion: 900 + 9,
	unownb: 900 + 10,
	unownc: 900 + 11,
	unownd: 900 + 12,
	unowne: 900 + 13,
	unownf: 900 + 14,
	unowng: 900 + 15,
	unownh: 900 + 16,
	unowni: 900 + 17,
	unownihearts: 900 + 17,
	unownihero: 900 + 17,
	unownj: 900 + 18,
	unownk: 900 + 19,
	unownl: 900 + 20,
	unownm: 900 + 21,
	unownn: 900 + 22,
	unowno: 900 + 23,
	unownp: 900 + 24,
	unownq: 900 + 25,
	unownr: 900 + 26,
	unowns: 900 + 27,
	unownt: 900 + 28,
	unownu: 900 + 29,
	unownv: 900 + 30,
	unownw: 900 + 31,
	unownx: 900 + 32,
	unowny: 900 + 33,
	unownz: 900 + 34,
	castformrainy: 900 + 35,
	castformshadowrainy: 900 + 35,
	castformsnowy: 900 + 36,
	castformshadowsnowy: 900 + 36,
	castformsunny: 900 + 37,
	castformshadowsunny: 900 + 37,
	deoxysattack: 900 + 38,
	deoxysdefense: 900 + 39,
	deoxysspeed: 900 + 40,
	burmysandy: 900 + 41,
	burmytrash: 900 + 42,
	wormadamsandy: 900 + 43,
	wormadamtrash: 900 + 44,
	cherrimsunshine: 900 + 45,
	shelloseast: 900 + 46,
	gastrodoneast: 900 + 47,
	rotomfan: 900 + 48,
	rotomfrost: 900 + 49,
	rotomheat: 900 + 50,
	rotommow: 900 + 51,
	rotomwash: 900 + 52,
	giratinaorigin: 900 + 53,
	shayminsky: 900 + 54,
	unfezantf: 900 + 55,
	basculinbluestriped: 900 + 56,
	basculinbluestripedhero: 900 + 56,
	darmanitanzen: 900 + 57,
	darmanizen: 900 + 57,
	deerlingautumn: 900 + 58,
	deerlingsummer: 900 + 59,
	deerlingwinter: 900 + 60,
	sawsbuckautumn: 900 + 61,
	sawsbucksummer: 900 + 62,
	sawsbuckwinter: 900 + 63,
	frillishf: 900 + 64,
	jellicentf: 900 + 65,
	tornadustherian: 900 + 66,
	thundurustherian: 900 + 67,
	landorustherian: 900 + 68,
	kyuremblack: 900 + 69,
	kyuremwhite: 900 + 70,
	keldeoresolute: 900 + 71,
	meloettapirouette: 900 + 72,
	vivillonarchipelago: 900 + 73,
	vivilloncontinental: 900 + 74,
	vivillonelegant: 900 + 75,
	vivillonfancy: 900 + 76,
	vivillongarden: 900 + 77,
	vivillonhighplains: 900 + 78,
	vivillonicysnow: 900 + 79,
	vivillonjungle: 900 + 80,
	vivillonmarine: 900 + 81,
	vivillonmodern: 900 + 82,
	vivillonmonsoon: 900 + 83,
	vivillonocean: 900 + 84,
	vivillonpokeball: 900 + 85,
	vivillonpolar: 900 + 86,
	vivillonriver: 900 + 87,
	vivillonsandstorm: 900 + 88,
	vivillonsavanna: 900 + 89,
	vivillonsun: 900 + 90,
	vivillontundra: 900 + 91,
	pyroarf: 900 + 92,
	flabebeblue: 900 + 93,
	flabebeorange: 900 + 94,
	flabebewhite: 900 + 95,
	flabebeyellow: 900 + 96,
	floetteblue: 900 + 97,
	floetteeternal: 900 + 98,
	floetteorange: 900 + 99,
	floettewhite: 900 + 100,
	floetteyellow: 900 + 101,
	florgesblue: 900 + 102,
	florgesorange: 900 + 103,
	florgeswhite: 900 + 104,
	florgesyellow: 900 + 105,
	furfroudandy: 900 + 106,
	furfroudebutante: 900 + 107,
	furfroudiamond: 900 + 108,
	furfrouheart: 900 + 109,
	furfroukabuki: 900 + 110,
	furfroulareine: 900 + 111,
	furfroumatron: 900 + 112,
	furfroupharaoh: 900 + 113,
	furfroustar: 900 + 114,
	meowsticf: 900 + 115,
	aegislashblade: 900 + 116,
	xerneasneutral: 900 + 117,
	hoopaunbound: 900 + 118,
	rattataalola: 900 + 119,
	raticatealola: 900 + 120,
	raichualola: 900 + 121,
	raichualolasuntan: 900 + 121,
	sandshrewalola: 900 + 122,
	sandslashalola: 900 + 123,
	vulpixalola: 900 + 124,
	ninetalesalola: 900 + 125,
	diglettalola: 900 + 126,
	dugtrioalola: 900 + 127,
	meowthalola: 900 + 128,
	persianalola: 900 + 129,
	geodudealola: 900 + 130,
	graveleralola: 900 + 131,
	golemalola: 900 + 132,
	grimeralola: 900 + 133,
	mukalola: 900 + 134,
	exeggutoralola: 900 + 135,
	marowakalola: 900 + 136,
	greninjaash: 900 + 137,
	zygarde10: 900 + 138,
	zygardecomplete: 900 + 139,
	oricoriopompom: 900 + 140,
	oricoriopau: 900 + 141,
	oricoriopaumalefic: 900 + 141,
	oricoriosensu: 900 + 142,
	lycanrocmidnight: 900 + 143,
	lycanrocmidnighthugwolf: 900 + 143,
	wishiwashischool: 900 + 144,
	miniormeteor: 900 + 145,
	miniororange: 900 + 146,
	minioryellow: 900 + 147,
	miniorgreen: 900 + 148,
	miniorblue: 900 + 149,
	miniorindigo: 900 + 150,
	miniorviolet: 900 + 151,
	magearnaoriginal: 900 + 152,
	pikachuoriginal: 900 + 153,
	pikachuhoenn: 900 + 154,
	pikachusinnoh: 900 + 155,
	pikachuunova: 900 + 156,
	pikachukalos: 900 + 157,
	pikachualola: 900 + 158,
	pikachupartner: 900 + 159,
	lycanrocdusk: 900 + 160,
	necrozmaduskmane: 900 + 161,
	necrozmadawnwings: 900 + 162,
	necrozmaultra: 900 + 163,
	pikachustarter: 900 + 164,
	eeveestarter: 900 + 165,
	meowthgalar: 900 + 166,
	ponytagalar: 900 + 167,
	rapidashgalar: 900 + 168,
	farfetchdgalar: 900 + 169,
	weezinggalar: 900 + 170,
	mrmimegalar: 900 + 171,
	corsolagalar: 900 + 172,
	zigzagoongalar: 900 + 173,
	linoonegalar: 900 + 174,
	darumakagalar: 900 + 175,
	darmanitangalar: 900 + 176,
	darmanitangalarzen: 900 + 177,
	yamaskgalar: 900 + 178,
	stunfiskgalar: 900 + 179,
	cramorantgulping: 900 + 180,
	cramorantgorging: 900 + 181,
	toxtricitylowkey: 900 + 182,
	sinisteaantique: 854,
	polteageistantique: 855,
	alcremierubycream: 900 + 183,
	alcremiematchacream: 900 + 184,
	alcremiemintcream: 900 + 185,
	alcremielemoncream: 900 + 186,
	alcremiesaltedcream: 900 + 187,
	alcremierubyswirl: 900 + 188,
	alcremiecaramelswirl: 900 + 189,
	alcremierainbowswirl: 900 + 190,
	eiscuenoice: 900 + 191,
	indeedeef: 900 + 192,
	morpekohangry: 900 + 193,
	zaciancrowned: 900 + 194,
	zamazentacrowned: 900 + 195,
	slowpokegalar: 900 + 196,
	slowbrogalar: 900 + 197,
	zarudedada: 900 + 198,
	pikachuworld: 900 + 199,
	articunogalar: 900 + 200,
	zapdosgalar: 900 + 201,
	moltresgalar: 900 + 202,
	slowkinggalar: 900 + 203,
	calyrexice: 900 + 204,
	calyrexshadow: 900 + 205,

	//fnf shadowmons
	espeondaybreak: 1380 + 0,
	umbreonnocturne: 1380 + 1,
	braixennonzerda: 1380 + 2,
	bulbasaursaur: 1380 + 3,
	carbinkfloatamo: 1380 + 4,
	eelektrossmrlamprey: 1380 + 5,
	emboardynamite: 1380 + 6,
	hakamoojacinto: 1380 + 7,
	kecleongenocalypse: 1380 + 8,
	kingdrakmarxdra: 1380 + 9,
	miloticlothraxia: 1380 + 10,
	porygon2poryexe: 1380 + 11,
	raichumalachite: 1380 + 12,
	raichumalachiteberserker: 1380 + 12,
	simisearhanuman: 1380 + 13,
	soarsparcealfred: 1380 + 14,
	typhlosionvesuvius: 1380 + 15,
	typhlosionvesuviuselden: 1380 + 15,
	vaporeonlinguine: 1380 + 16,
	wooperwooperoth: 1380 + 17,
	yanmegazumbra: 1380 + 18,
	enteibismuth: 1380 + 19,
	suicuneopal: 1380 + 20,
	raikoujasper: 1380 + 21,
	hoohrainbow: 1380 + 22,
	jirachiwishmaker: 1380 + 23,
	aegislashzato: 1380 + 24,
	cameruptmaxie: 1380 + 25,
	chikoritaminty: 1380 + 26,
	decidueyeapollo: 1380 + 27,
	decidueyeapollotoga: 1380 + 27,
	decidueyeapollopride: 1380 + 27,
	dewottlutryla: 1380 + 28,
	dewottlutryladress: 1380 + 28,
	dewottlutrylawedding: 1380 + 28,
	fraxurefrenzy: 1380 + 29,
	fraxurefrenzydeity: 1380 + 29,
	golisopodmusashi: 1380 + 30,
	golisopodmusashistache: 1380 + 30,
	honchkrowgodfather: 1380 + 31,
	kurstrawcrona: 1380 + 32,
	meganiumaniseed: 1380 + 33,
	sceptilemoscho: 1380 + 34,
	zweilousterror: 1380 + 35,
	jolteonradiatori: 1380 + 36,
	glaceonmanicotti: 1380 + 37,
	flareonlasagna: 1380 + 38,
	leafeontagliatelle: 1380 + 39,
	sylveonfarfalle: 1380 + 40,
	eeveedurum: 1380 + 41,
	gyaradosalarix: 1380 + 42,
	gyaradosalarixmega: 1380 + 43,
	golurktitan: 1380 + 44,
	longeonspaghetti: 1380 + 45,
	snoruntsherbet: 1380 + 46,
	arongoldie: 1380 + 47,
	furfrouprincess: 1380 + 48,
	furfrouprincessparty: 1380 + 48,
	furfrouprincesspomp: 1380 + 48,
	furfrouprincesspunk: 1380 + 48,
	furfrouprincessphobos: 1380 + 48,
	furfrouprincesspersei: 1380 + 48,
	garchompxeon: 1380 + 49,
	gourgeistdemitri: 1380 + 50,
	heatmorhuangshan: 1380 + 51,
	heatmorhuangshanbracelet: 1380 + 51,
	lileepgoober: 1380 + 52,
	marilldredge: 1380 + 53,
	meowsticroyal: 1380 + 54,
	meowsticroyalpride: 1380 + 54,
	meowsticroyalrelic: 1380 + 54,
	mukthesludge: 1380 + 55,
	noiverneyrie: 1380 + 56,
	ribombeeshura: 1380 + 57,
	shroomishgeastrales: 1380 + 58,
	spinaraksugar: 1380 + 59,
	castformatom: 1380 + 60,
	castformatomrainy: 1380 + 61,
	castformatomsandy: 1380 + 62,
	castformatomshady: 1380 + 63,
	castformatomsmoggy: 1380 + 64,
	castformatomsnowy: 1380 + 65,
	castformatomsunny: 1380 + 66,
	mareaniebarbara: 1380 + 67,
	dittomini: 1380 + 68,
	zapdosstrato: 1380 + 69,
	moltresthermo: 1380 + 70,
	articunoexo: 1380 + 71,
	roboheeyemcurio: 1380 + 72,
	lugiaseafoam: 1380 + 73,

	//fnf shadowmons skins icons
	raichumalachiterockstar: 1464 + 0,

	///fnf special mons
	granbullnobunaga: 1476 + 0,
	haxorusshredder: 1476 + 1,
	alomomolamedella: 1476 + 2,
	feebasvanessa: 1476 + 3,
	pickpossumpopo: 1476 + 4,

	//fnf custom mons
	parasfnf: 1488 + 0,
	parasectfnf: 1488 + 1,
	parasectfnfsunset: 1488 + 1,
	parasectfnfsakura: 1488 + 1,
	parasectfnfcream: 1488 + 1,
	stucksparce: 1488 + 2,
	sledgesparce: 1488 + 3,
	sledgesparcegoldmine: 1488 + 3,
	snugsparce: 1488 + 4,
	soarsparce: 1488 + 5,
	aromatissefnf: 1488 + 6,
	aromatissefnfhero: 1488 + 6,
	sunfloramega: 1488 + 7,
	vespiquenarmored: 1488 + 8,
	drild: 1488 + 9,
	turtottle: 1488 + 10,
	tropetite: 1488 + 11,
	turbann: 1488 + 12,
	turbannswag: 1488 + 12,
	phioneprimal: 1488 + 13,
	kurstraw: 1488 + 14,
	kurstrawmelon: 1488 + 14,
	pangshi: 1488 + 15,
	pangshimelon: 1488 + 15,
	venustoise: 1488 + 16,
	granbullarmored: 1488 + 17,
	numeldelta: 1488 + 18,
	cameruptdelta: 1488 + 19,
	forretressdelta: 1488 + 20,
	magnezonemega: 1488 + 21,
	warcass: 1488 + 22,
	cranidosdelta: 1488 + 23,
	cranidosdeltavoid: 1488 + 23,
	rampardosdelta: 1488 + 24,
	shieldondelta: 1488 + 25,
	bastiodondelta: 1488 + 26,
	clefgar: 1488 + 27,
	clefgartongue: 1488 + 27,
	clefgarmint: 1488 + 27,
	clefgarmelon: 1488 + 27,
	clefgarsludgebomb: 1488 + 27,
	cofagrigusmega: 1488 + 28,
	rooskhan: 1488 + 29,
	baki: 1488 + 30,
	bakibeach: 1488 + 30,
	bakidonuts: 1488 + 30,
	furretmega: 1488 + 31,
	starmiemega: 1488 + 32,
	wolfman: 1488 + 33,
	warwolf: 1488 + 34,
	sablechamp: 1488 + 35,
	sablechampmrsex: 1488 + 35,
	sablechampbeach: 1488 + 35,
	sablechampbeachtan: 1488 + 35,
	toxicroakarmored: 1488 + 36,
	voltorbfnf: 1488 + 37,
	electrodefnf: 1488 + 38,
	electrodefnfbeach: 1488 + 38,
	venonatfnf: 1488 + 39,
	manomoth: 1488 + 40,
	lickitungfnf: 1488 + 41,
	lickilickyfnf: 1488 + 42,
	samsarula: 1488 + 43,
	robodachi: 1488 + 44,
	longeon: 1488 + 45,
	longeonpixie: 1488 + 45,
	growlithefnf: 1488 + 46,
	arcaninefnf: 1488 + 47,
	medipom: 1488 + 48,
	quiksilk: 1488 + 49,
	cubonealola: 1488 + 50,
	vanillitefnf: 1488 + 51,
	vanillishfnf: 1488 + 52,
	vanilluxefnf: 1488 + 53,
	goodramega: 1488 + 54,
	magcargoarmored: 1488 + 55,
	royalynx: 1488 + 56,
	royalynxholly: 1488 + 56,
	royalynxjolly: 1488 + 56,
	emolgadelta: 1488 + 57,
	emolgadeltaastalos: 1488 + 57,
	emolgadeltaglitches: 1488 + 57,
	pinecodelta: 1488 + 58,
	sableyefnf: 1488 + 59,
	sableyefnfrattlehead: 1488 + 59,
	sableyefnfboneclub: 1488 + 59,
	roseradearmored: 1488 + 60,
	roseradearmoredsummer: 1488 + 60,
	roseradearmoredrenegade: 1488 + 60,
	bombseal: 1488 + 61,
	bombsealfiesta: 1488 + 61,
	allnown: 1488 + 62,
	roboheeyem: 1488 + 63,
	arthrogon: 1488 + 64,
	arthrogonbeach: 1488 + 64,
	castformsandy: 1488 + 65,
	castformshadowsandy: 1488 + 65,
	castformsmoggy: 1488 + 66,
	castformshadowsmoggy: 1488 + 66,
	saurbot: 1488 + 67,
	saurbotbeach: 1488 + 67,
	boomba: 1488 + 68,
	mindow: 1488 + 69,
	anchorage: 1488 + 70,
	gorochu: 1488 + 71,
	gorochujooj: 1488 + 71,
	minamai: 1488 + 72,
	marelstorm: 1488 + 73,
	slugnami: 1488 + 74,
	joltikdelta: 1488 + 75,
	galvantuladelta: 1488 + 76,
	ivysaurarmored: 1488 + 77,
	viropath: 1488 + 78,
	trevenantmega: 1488 + 79,
	dwebblefnf: 1488 + 80,
	dwebblefnficecream: 1488 + 80,
	crustlefnf: 1488 + 81,
	kiwuit: 1488 + 82,
	kiwuitbeach: 1488 + 82,
	sableyefnfmegay: 1488 + 83,
	bounsweetdelta: 1488 + 84,
	steeneedelta: 1488 + 85,
	steeneedeltakomainu: 1488 + 85,
	tsareenadelta: 1488 + 86,
	goomyarmored: 1488 + 87,
	gravking: 1488 + 88,
	gravkingbeach: 1488 + 88,
	gravkingbeachgrill: 1488 + 88,
	teddiursaarmored: 1488 + 89,
	teddiursaarmoredhoneyed: 1488 + 89,
	teddiursaarmoredsailor: 1488 + 89,
	archebot: 1488 + 90,
	archebotskirmisher: 1488 + 90,
	archebotskull: 1488 + 90,
	kirliaarmored: 1488 + 91,
	kirliaarmoredweaver: 1488 + 92,
	phasmatch: 1488 + 93,
	phasmatchsinner: 1488 + 93,
	phasphorus: 1488 + 94,
	rapidashmega: 1488 + 95,
	cherrimprimal: 1488 + 96,
	blockodile: 1488 + 97,
	crocodobe: 1488 + 98,
	crocky: 1488 + 99,
	numpuff: 1488 + 100,
	numpuffmrzerker: 1488 + 100,
	tympoledelta: 1488 + 101,
	palpitoaddelta: 1488 + 102,
	seismitoaddelta: 1488 + 103,
	hypnomega: 1488 + 104,
	eclipsol: 1488 + 105,
	musharnanightmare: 1488 + 106,
	osteoskhan: 1488 + 107,
	bunmochi: 1488 + 108,
	bunmochiwicked: 1488 + 108,
	utsuki: 1488 + 109,
	typhlosionarmored: 1488 + 110,
	chespindelta: 1488 + 111,
	quilladindelta: 1488 + 112,
	chesnaughtdelta: 1488 + 113,
	chesnaughtdeltauranium: 1488 + 113,
	dicee: 1488 + 114,
	rollette: 1488 + 115,
	cashino: 1488 + 116,
	cashinovintage: 1488 + 116,
	nuzleafarmored: 1488 + 117,
	vikavoltfnf: 1488 + 118,
	rudoodle: 1488 + 119,
	rutherium: 1488 + 120,
	rutheriumhero: 1488 + 120,
	huojara: 1488 + 121,
	ignajara: 1488 + 122,
	torkoalfnf: 1488 + 123,
	torkoalfnforange: 1488 + 123,
	steeneedeltaarmored: 1488 + 124,
	sableyefnfmegax: 1488 + 125,
	hitmonwu: 1488 + 126,
	hitmonwuskull: 1488 + 126,
	hitmonwukomainu: 1488 + 126,
	roggenrolafnf: 1488 + 127,
	boldorefnf: 1488 + 128,
	boldorefnfprism: 1488 + 128,
	gigalithfnf: 1488 + 129,
	gigalithfnfprism: 1488 + 129,
	aromacosta: 1488 + 130,
	chinglingarmored: 1488 + 131,
	ignajaraarmored: 1488 + 132,
	chinchoufnf: 1488 + 133,
	lureturn: 1488 + 134,
	seward: 1488 + 135,
	billbie: 1488 + 136,
	jaggebill: 1488 + 137,
	orneridge: 1488 + 138,
	orneridgewoodpecker: 1488 + 138,
	orneridgeebony: 1488 + 138,
	drashimi: 1488 + 139,
	tsushimi: 1488 + 140,
	tobishimi: 1488 + 141,
	regigigasprimal: 1488 + 142,
	gogoatmega: 1488 + 143,
	castformshady: 1488 + 144,
	castformshadowshady: 1488 + 144,
	skarmorymega: 1488 + 145,
	lugito: 1488 + 146,
	lugitoluigi: 1488 + 146,
	lugitohero: 1488 + 146,
	synopede: 1488 + 147,
	lunapede: 1488 + 148,
	cameruptdeltamega: 1488 + 149,
	fowlfrost: 1488 + 150,
	fowlfrostjockey: 1488 + 150,
	dragonairarmored: 1488 + 151,
	dragonairarmoredpride: 1488 + 151,
	gargoliant: 1488 + 152,
	despotide: 1488 + 153,
	despotidedespopride: 1488 + 153,
	flymolcky: 1488 + 154,
	flymolckyrascal: 1488 + 154,
	gothigearna: 1488 + 155,
	remoraidfnf: 1488 + 156,
	portamora: 1488 + 157,
	opossie: 1488 + 158,
	possamado: 1488 + 159,
	pickpossum: 1488 + 160,
	celebiwithered: 1488 + 161,
	primeapearmored: 1488 + 162,
	peatot: 1488 + 163,
	raptopea: 1488 + 164,
	raptopeakomainu: 1488 + 164,
	arachgrape: 1488 + 165,
	tarazzpula: 1488 + 166,
	warpharos: 1488 + 167,
	scraftymega: 1488 + 168,
	porygonzmega: 1488 + 169,
	enchantice: 1488 + 170,
	enchanticegothic: 1488 + 170,
	enchanticepeach: 1488 + 170,
	luvdiscfnf: 1488 + 171,
	shorelorn: 1488 + 172,
	omniverum: 1488 + 173,
	madamme: 1488 + 174,
	madammegothic: 1488 + 174,
	madammepreppy: 1488 + 174,
	terrofunfaizer: 1488 + 175,
	terrofunfaizermalefic: 1488 + 175,
	honchkrowmega: 1488 + 176,
	spiritombmega: 1488 + 177,
	sorceroma: 1488 + 178,
	mewtwoarmored: 1488 + 179,
	musleeb: 1488 + 180,
	musleebvera: 1488 + 180,
	musleeblotus: 1488 + 180,
	musleebdribble: 1488 + 180,
	musleebhexa: 1488 + 180,
	musleebdolly: 1488 + 180,
	musleebhana: 1488 + 180,
	musleebseeds: 1488 + 180,
	musleebbloom: 1488 + 180,
	musleebmianju: 1488 + 180,
	musleebkim: 1488 + 180,
	musleebmeemo: 1488 + 180,
	musleebveraonesie: 1488 + 180,
	musleebkimmiracleseed: 1488 + 180,
	sindle: 1488 + 181,
	sindlelighthouse: 1488 + 181,
	sindlegroveil: 1488 + 181,
	sindlerex: 1488 + 181,
	sindlesuneater: 1488 + 181,
	sindledeeva: 1488 + 181,
	sindleapophis: 1488 + 181,
	sindlepeacemaker: 1488 + 181,
	sindlecoily: 1488 + 181,
	sindleliege: 1488 + 181,
	sindleliegepoisontouch: 1488 + 181,
	sindleserph: 1488 + 181,
	fofoam: 1488 + 182,
	fofoampaz: 1488 + 182,
	fofoamcarmalot: 1488 + 182,
	fofoamgort: 1488 + 182,
	fofoamriptide: 1488 + 182,
	fofoamastra: 1488 + 182,
	fofoamboba: 1488 + 182,
	fofoamsusie: 1488 + 182,
	fofoamcarmalothero: 1488 + 182,
	fofoamastraarmthrust: 1488 + 182,
	soareon: 1488 + 183,
	arctric: 1488 + 184,
	ledianmega: 1488 + 185,
	ariadosmega: 1488 + 186,
	capito: 1488 + 187,
	festijest: 1488 + 188,
	kasako: 1488 + 189,
	parakasa: 1488 + 190,
	drifnofnf: 1488 + 191,
	slumburus: 1488 + 192,
	slumburustherian: 1488 + 193,
	chronoklang: 1488 + 194,
	lilaquin: 1488 + 195,
	vaicora: 1488 + 196,
	hytan: 1488 + 197,

	//hypnomons
	ano: 304,
	anonose: 304,
	axno: 610,
	azumano: 184,
	bagno: 371,
	baneno: 354,
	bonsno: 438,
	bulbano: 1,
	bunno: 427,
	butterno: 12,
	charino: 6,
	charinoystone: 6,
	dewno: 87,
	drifno: 426,
	ekno: 23,
	fearno: 22,
	fearnobeak: 22,
	fearnowings: 22,
	fearnobeakwings: 22,
	flyno: 330,
	fraxno: 611,
	fraxnohappy: 611,
	gliscno: 472,
	gravno: 75,
	herano: 214,
	hitmonno: 237,
	houndno: 228,
	hypdian: 166,
	hypganium: 154,
	hypgar: 207,
	hypgong: 87,
	hyplotic: 350,
	hypmie: 121,
	hypnodash: 78,
	hypsicott: 547,
	hyptuff: 40,
	ivyno: 2,
	jirachno: 385,
	kangasno: 115,
	krokono: 552,
	krokonoswag: 552,
	kyuno: 646,
	lantno: 171,
	ledyno: 165,
	luxino: 404,
	machno: 66,
	machono: 67,
	mantno: 226,
	marno: 183,
	meganino: 154,
	mimeno: 439,
	misdreano: 200,
	molno: 146,
	mudno: 258,
	onno: 95,
	phanpno: 231,
	pichno: 172,
	pidgeono: 17,
	pilosno: 221,
	pinsno: 127,
	pinsnohappy: 127,
	rapidno: 78,
	sandno: 27,
	sandsno: 28,
	senno: 161,
	scizno: 212,
	shupno: 353,
	skarmno: 227,
	slowkno: 199,
	slugno: 218,
	smoono: 238,
	stantno: 234,
	starno: 121,
	sunflono: 192,
	togetno: 176,
	tyno: 236,
	venono: 49,
	venonomothman: 49,
	venuno: 3,
	vileno: 45,
	wiggno: 40,
	wiggnohappy: 40,
	woopno: 194,
	zoruno: 570,
	zuno: 41,

	gumshoostotem: 735,
	raticatealolatotem: 900 + 120,
	marowakalolatotem: 900 + 136,
	araquanidtotem: 752,
	lurantistotem: 754,
	salazzletotem: 758,
	vikavolttotem: 738,
	togedemarutotem: 777,
	mimikyutotem: 778,
	mimikyubustedtotem: 778,
	ribombeetotem: 743,
	kommoototem: 784,

	venusaurmega: 1116 + 0,
	charizardmegax: 1116 + 1,
	charizardmegay: 1116 + 2,
	blastoisemega: 1116 + 3,
	beedrillmega: 1116 + 4,
	pidgeotmega: 1116 + 5,
	alakazammega: 1116 + 6,
	slowbromega: 1116 + 7,
	gengarmega: 1116 + 8,
	kangaskhanmega: 1116 + 9,
	pinsirmega: 1116 + 10,
	gyaradosmega: 1116 + 11,
	aerodactylmega: 1116 + 12,
	mewtwomegax: 1116 + 13,
	mewtwomegay: 1116 + 14,
	ampharosmega: 1116 + 15,
	steelixmega: 1116 + 16,
	scizormega: 1116 + 17,
	heracrossmega: 1116 + 18,
	houndoommega: 1116 + 19,
	tyranitarmega: 1116 + 20,
	sceptilemega: 1116 + 21,
	blazikenmega: 1116 + 22,
	swampertmega: 1116 + 23,
	gardevoirmega: 1116 + 24,
	sableyemega: 1116 + 25,
	mawilemega: 1116 + 26,
	aggronmega: 1116 + 27,
	medichammega: 1116 + 28,
	manectricmega: 1116 + 29,
	sharpedomega: 1116 + 30,
	cameruptmega: 1116 + 31,
	altariamega: 1116 + 32,
	banettemega: 1116 + 33,
	absolmega: 1116 + 34,
	glaliemega: 1116 + 35,
	salamencemega: 1116 + 36,
	metagrossmega: 1116 + 37,
	latiasmega: 1116 + 38,
	latiosmega: 1116 + 39,
	kyogreprimal: 1116 + 40,
	groudonprimal: 1116 + 41,
	rayquazamega: 1116 + 42,
	lopunnymega: 1116 + 43,
	garchompmega: 1116 + 44,
	lucariomega: 1116 + 45,
	abomasnowmega: 1116 + 46,
	gallademega: 1116 + 47,
	audinomega: 1116 + 48,
	dianciemega: 1116 + 49,
	charizardgmax: 1116 + 50,
	butterfreegmax: 1116 + 51,
	pikachugmax: 1116 + 52,
	meowthgmax: 1116 + 53,
	machampgmax: 1116 + 54,
	gengargmax: 1116 + 55,
	kinglergmax: 1116 + 56,
	laprasgmax: 1116 + 57,
	eeveegmax: 1116 + 58,
	snorlaxgmax: 1116 + 59,
	garbodorgmax: 1116 + 60,
	melmetalgmax: 1116 + 61,
	corviknightgmax: 1116 + 62,
	orbeetlegmax: 1116 + 63,
	drednawgmax: 1116 + 64,
	coalossalgmax: 1116 + 65,
	flapplegmax: 1116 + 66,
	appletungmax: 1116 + 67,
	sandacondagmax: 1116 + 68,
	toxtricitygmax: 1116 + 69,
	toxtricitylowkeygmax: 1116 + 69,
	centiskorchgmax: 1116 + 70,
	hatterenegmax: 1116 + 71,
	grimmsnarlgmax: 1116 + 72,
	alcremiegmax: 1116 + 73,
	copperajahgmax: 1116 + 74,
	duraludongmax: 1116 + 75,
	eternatuseternamax: 1116 + 76,
	venusaurgmax: 1116 + 77,
	blastoisegmax: 1116 + 78,
	rillaboomgmax: 1116 + 79,
	cinderacegmax: 1116 + 80,
	inteleongmax: 1116 + 81,
	urshifugmax: 1116 + 82,
	urshifurapidstrikegmax: 1116 + 83,

	syclant: 1308 + 0,
	revenankh: 1308 + 1,
	pyroak: 1308 + 2,
	fidgit: 1308 + 3,
	stratagem: 1308 + 4,
	arghonaut: 1308 + 5,
	kitsunoh: 1308 + 6,
	cyclohm: 1308 + 7,
	colossoil: 1308 + 8,
	krilowatt: 1308 + 9,
	voodoom: 1308 + 10,
	tomohawk: 1308 + 11,
	necturna: 1308 + 12,
	mollux: 1308 + 13,
	aurumoth: 1308 + 14,
	malaconda: 1308 + 15,
	cawmodore: 1308 + 16,
	volkraken: 1308 + 17,
	plasmanta: 1308 + 18,
	naviathan: 1308 + 19,
	crucibelle: 1308 + 20,
	crucibellemega: 1308 + 21,
	kerfluffle: 1308 + 22,
	pajantom: 1308 + 23,
	jumbao: 1308 + 24,
	caribolt: 1308 + 25,
	smokomodo: 1308 + 26,
	snaelstrom: 1308 + 27,
	equilibra: 1308 + 28,
	astrolotl: 1308 + 29,
	miasmaw: 1308 + 30,
	chromera: 1308 + 31,

	syclar: 1344 + 0,
	embirch: 1344 + 1,
	flarelm: 1344 + 2,
	breezi: 1344 + 3,
	scratchet: 1344 + 4,
	necturine: 1344 + 5,
	cupra: 1344 + 6,
	argalis: 1344 + 7,
	brattler: 1344 + 8,
	cawdet: 1344 + 9,
	volkritter: 1344 + 10,
	snugglow: 1344 + 11,
	floatoy: 1344 + 12,
	caimanoe: 1344 + 13,
	pluffle: 1344 + 14,
	rebble: 1344 + 15,
	tactite: 1344 + 16,
	privatyke: 1344 + 17,
	nohface: 1344 + 18,
	monohm: 1344 + 19,
	duohm: 1344 + 20,
	// protowatt: 1344 + 21,
	voodoll: 1344 + 22,
	mumbao: 1344 + 23,
	fawnifer: 1344 + 24,
	electrelk: 1344 + 25,
	smogecko: 1344 + 26,
	smoguana: 1344 + 27,
	swirlpool: 1344 + 28,
	coribalis: 1344 + 29,
	justyke: 1344 + 30,
	solotl: 1344 + 31,
	miasmite: 1344 + 32,

	// gen 9
	nymble: 1308 + 32,
	lokix: 1308 + 33,
};

const BattlePokemonIconIndexesLeft: {[id: string]: number} = {
	pikachubelle: 1200 + 0,
	pikachupopstar: 1200 + 1,
	clefairy: 1200 + 2,
	clefable: 1200 + 3,
	jigglypuff: 1200 + 4,
	wigglytuff: 1200 + 5,
	dugtrioalola: 1200 + 6,
	poliwhirl: 1200 + 7,
	poliwrath: 1200 + 8,
	mukalola: 1200 + 9,
	kingler: 1200 + 10,
	croconaw: 1200 + 11,
	cleffa: 1200 + 12,
	igglybuff: 1200 + 13,
	politoed: 1200 + 14,
	unownb: 1200 + 15,
	unownc: 1200 + 16,
	unownd: 1200 + 17,
	unowne: 1200 + 18,
	unownf: 1200 + 19,
	unowng: 1200 + 20,
	unownh: 1200 + 21,
	unownj: 1200 + 22,
	unownk: 1200 + 23,
	unownl: 1200 + 24,
	unownm: 1200 + 25,
	unownn: 1200 + 26,
	unownp: 1200 + 27,
	unownq: 1200 + 28,
	unownquestion: 1200 + 29,
	unownr: 1200 + 30,
	unowns: 1200 + 31,
	unownt: 1200 + 32,
	unownv: 1200 + 33,
	unownz: 1200 + 34,
	sneasel: 1200 + 35,
	teddiursa: 1200 + 36,
	roselia: 1200 + 37,
	zangoose: 1200 + 38,
	seviper: 1200 + 39,
	castformsnowy: 1200 + 40,
	castformshadowsnowy: 1200 + 40,
	absolmega: 1200 + 41,
	absol: 1200 + 42,
	regirock: 1200 + 43,
	torterra: 1200 + 44,
	budew: 1200 + 45,
	roserade: 1200 + 46,
	magmortar: 1200 + 47,
	togekiss: 1200 + 48,
	rotomwash: 1200 + 49,
	shayminsky: 1200 + 50,
	emboar: 1200 + 51,
	pansear: 1200 + 52,
	simisear: 1200 + 53,
	drilbur: 1200 + 54,
	excadrill: 1200 + 55,
	sawk: 1200 + 56,
	lilligant: 1200 + 57,
	garbodor: 1200 + 58,
	solosis: 1200 + 59,
	vanilluxe: 1200 + 60,
	amoonguss: 1200 + 61,
	klink: 1200 + 62,
	klang: 1200 + 63,
	klinklang: 1200 + 64,
	litwick: 1200 + 65,
	golett: 1200 + 66,
	golurk: 1200 + 67,
	kyuremblack: 1200 + 68,
	kyuremwhite: 1200 + 69,
	kyurem: 1200 + 70,
	keldeoresolute: 1200 + 71,
	meloetta: 1200 + 72,
	greninja: 1200 + 73,
	greninjaash: 1200 + 74,
	furfroudebutante: 1200 + 75,
	barbaracle: 1200 + 76,
	clauncher: 1200 + 77,
	clawitzer: 1200 + 78,
	sylveon: 1200 + 79,
	klefki: 1200 + 80,
	zygarde: 1200 + 81,
	zygarde10: 1200 + 82,
	zygardecomplete: 1200 + 83,
	dartrix: 1200 + 84,
	steenee: 1200 + 85,
	tsareena: 1200 + 86,
	comfey: 1200 + 87,
	miniormeteor: 1200 + 88,
	minior: 1200 + 89,
	miniororange: 1200 + 90,
	minioryellow: 1200 + 91,
	miniorgreen: 1200 + 92,
	miniorblue: 1200 + 93,
	miniorviolet: 1200 + 94,
	miniorindigo: 1200 + 95,
	dhelmise: 1200 + 96,
	necrozma: 1200 + 97,
	marshadow: 1200 + 98,
	pikachuoriginal: 1200 + 99,
	pikachupartner: 1200 + 100,
	necrozmaduskmane: 1200 + 101,
	necrozmadawnwings: 1200 + 102,
	necrozmaultra: 1200 + 103,
	stakataka: 1200 + 104,
	blacephalon: 1200 + 105,
};

const BattleAvatarNumbers: {[k: string]: string} = {
	1: 'lucas',
	2: 'dawn',
	3: 'youngster-gen4dp',
	4: 'lass-gen4dp',
	5: 'camper',
	6: 'picnicker',
	7: 'bugcatcher-gen4dp',
	8: 'aromalady',
	9: 'twins-gen4dp',
	10: 'hiker-gen4',
	11: 'battlegirl-gen4',
	12: 'fisherman-gen4',
	13: 'cyclist-gen4',
	14: 'cyclistf-gen4',
	15: 'blackbelt-gen4dp',
	16: 'artist-gen4',
	17: 'pokemonbreeder-gen4',
	18: 'pokemonbreederf-gen4',
	19: 'cowgirl',
	20: 'jogger',
	21: 'pokefan-gen4',
	22: 'pokefanf-gen4',
	23: 'pokekid',
	24: 'youngcouple-gen4dp',
	25: 'acetrainer-gen4dp',
	26: 'acetrainerf-gen4dp',
	27: 'waitress-gen4',
	28: 'veteran-gen4',
	29: 'ninjaboy',
	30: 'dragontamer',
	31: 'birdkeeper-gen4dp',
	32: 'doubleteam',
	33: 'richboy-gen4',
	34: 'lady-gen4',
	35: 'gentleman-gen4dp',
	36: 'madame-gen4dp',
	37: 'beauty-gen4dp',
	38: 'collector',
	39: 'policeman-gen4',
	40: 'pokemonranger-gen4',
	41: 'pokemonrangerf-gen4',
	42: 'scientist-gen4dp',
	43: 'swimmer-gen4dp',
	44: 'swimmerf-gen4dp',
	45: 'tuber',
	46: 'tuberf',
	47: 'sailor',
	48: 'sisandbro',
	49: 'ruinmaniac',
	50: 'psychic-gen4',
	51: 'psychicf-gen4',
	52: 'gambler',
	53: 'guitarist-gen4',
	54: 'acetrainersnow',
	55: 'acetrainersnowf',
	56: 'skier',
	57: 'skierf-gen4dp',
	58: 'roughneck-gen4',
	59: 'clown',
	60: 'worker-gen4',
	61: 'schoolkid-gen4dp',
	62: 'schoolkidf-gen4',
	63: 'roark',
	64: 'barry',
	65: 'byron',
	66: 'aaron',
	67: 'bertha',
	68: 'flint',
	69: 'lucian',
	70: 'cynthia-gen4',
	71: 'bellepa',
	72: 'rancher',
	73: 'mars',
	74: 'galacticgrunt',
	75: 'gardenia',
	76: 'crasherwake',
	77: 'maylene',
	78: 'fantina',
	79: 'candice',
	80: 'volkner',
	81: 'parasollady-gen4',
	82: 'waiter-gen4dp',
	83: 'interviewers',
	84: 'cameraman',
	85: 'reporter',
	86: 'idol',
	87: 'cyrus',
	88: 'jupiter',
	89: 'saturn',
	90: 'galacticgruntf',
	91: 'argenta',
	92: 'palmer',
	93: 'thorton',
	94: 'buck',
	95: 'darach',
	96: 'marley',
	97: 'mira',
	98: 'cheryl',
	99: 'riley',
	100: 'dahlia',
	101: 'ethan',
	102: 'lyra',
	103: 'twins-gen4',
	104: 'lass-gen4',
	105: 'acetrainer-gen4',
	106: 'acetrainerf-gen4',
	107: 'juggler',
	108: 'sage',
	109: 'li',
	110: 'gentleman-gen4',
	111: 'teacher',
	112: 'beauty',
	113: 'birdkeeper',
	114: 'swimmer-gen4',
	115: 'swimmerf-gen4',
	116: 'kimonogirl',
	117: 'scientist-gen4',
	118: 'acetrainercouple',
	119: 'youngcouple',
	120: 'supernerd',
	121: 'medium',
	122: 'schoolkid-gen4',
	123: 'blackbelt-gen4',
	124: 'pokemaniac',
	125: 'firebreather',
	126: 'burglar',
	127: 'biker-gen4',
	128: 'skierf',
	129: 'boarder',
	130: 'rocketgrunt',
	131: 'rocketgruntf',
	132: 'archer',
	133: 'ariana',
	134: 'proton',
	135: 'petrel',
	136: 'eusine',
	137: 'lucas-gen4pt',
	138: 'dawn-gen4pt',
	139: 'madame-gen4',
	140: 'waiter-gen4',
	141: 'falkner',
	142: 'bugsy',
	143: 'whitney',
	144: 'morty',
	145: 'chuck',
	146: 'jasmine',
	147: 'pryce',
	148: 'clair',
	149: 'will',
	150: 'koga',
	151: 'bruno',
	152: 'karen',
	153: 'lance',
	154: 'brock',
	155: 'misty',
	156: 'ltsurge',
	157: 'erika',
	158: 'janine',
	159: 'sabrina',
	160: 'blaine',
	161: 'blue',
	162: 'red',
	163: 'red',
	164: 'silver',
	165: 'giovanni',
	166: 'unknownf',
	167: 'unknown',
	168: 'unknown',
	169: 'hilbert',
	170: 'hilda',
	171: 'youngster',
	172: 'lass',
	173: 'schoolkid',
	174: 'schoolkidf',
	175: 'smasher',
	176: 'linebacker',
	177: 'waiter',
	178: 'waitress',
	179: 'chili',
	180: 'cilan',
	181: 'cress',
	182: 'nurseryaide',
	183: 'preschoolerf',
	184: 'preschooler',
	185: 'twins',
	186: 'pokemonbreeder',
	187: 'pokemonbreederf',
	188: 'lenora',
	189: 'burgh',
	190: 'elesa',
	191: 'clay',
	192: 'skyla',
	193: 'pokemonranger',
	194: 'pokemonrangerf',
	195: 'worker',
	196: 'backpacker',
	197: 'backpackerf',
	198: 'fisherman',
	199: 'musician',
	200: 'dancer',
	201: 'harlequin',
	202: 'artist',
	203: 'baker',
	204: 'psychic',
	205: 'psychicf',
	206: 'cheren',
	207: 'bianca',
	208: 'plasmagrunt-gen5bw',
	209: 'n',
	210: 'richboy',
	211: 'lady',
	212: 'pilot',
	213: 'workerice',
	214: 'hoopster',
	215: 'scientistf',
	216: 'clerkf',
	217: 'acetrainerf',
	218: 'acetrainer',
	219: 'blackbelt',
	220: 'scientist',
	221: 'striker2',
	222: 'brycen',
	223: 'iris',
	224: 'drayden',
	225: 'roughneck',
	226: 'janitor',
	227: 'pokefan',
	228: 'pokefanf',
	229: 'doctor',
	230: 'nurse',
	231: 'hooligans',
	232: 'battlegirl',
	233: 'parasollady',
	234: 'clerk',
	235: 'clerk-boss',
	236: 'backers',
	237: 'backersf',
	238: 'veteran',
	239: 'veteranf',
	240: 'biker',
	241: 'infielder',
	242: 'hiker',
	243: 'madame',
	244: 'gentleman',
	245: 'plasmagruntf-gen5bw',
	246: 'shauntal',
	247: 'marshal',
	248: 'grimsley',
	249: 'caitlin',
	250: 'ghetsis-gen5bw',
	251: 'depotagent',
	252: 'swimmer',
	253: 'swimmerf',
	254: 'policeman',
	255: 'maid',
	256: 'ingo',
	257: 'alder',
	258: 'cyclist',
	259: 'cyclistf',
	260: 'cynthia',
	261: 'emmet',
	262: 'hilbert-wonderlauncher',
	263: 'hilda-wonderlauncher',
	264: 'hugh',
	265: 'rosa',
	266: 'nate',
	267: 'colress',
	268: 'beauty-gen5bw2',
	269: 'ghetsis',
	270: 'plasmagrunt',
	271: 'plasmagruntf',
	272: 'iris-gen5bw2',
	273: 'brycenman',
	274: 'shadowtriad',
	275: 'rood',
	276: 'zinzolin',
	277: 'cheren-gen5bw2',
	278: 'marlon',
	279: 'roxie',
	280: 'roxanne',
	281: 'brawly',
	282: 'wattson',
	283: 'flannery',
	284: 'norman',
	285: 'winona',
	286: 'tate',
	287: 'liza',
	288: 'juan',
	289: 'guitarist',
	290: 'steven',
	291: 'wallace',
	292: 'bellelba',
	293: 'benga',
	294: 'ash',
	'#bw2elesa': 'elesa-gen5bw2',
	'#teamrocket': 'teamrocket',
	'#yellow': 'yellow',
	'#zinnia': 'zinnia',
	'#clemont': 'clemont',
	'#wally': 'wally',
	breeder: 'pokemonbreeder',
	breederf: 'pokemonbreederf',
	'hilbert-dueldisk': 'hilbert-wonderlauncher',
	'hilda-dueldisk': 'hilda-wonderlauncher',
	'nate-dueldisk': 'nate-wonderlauncher',
	'rosa-dueldisk': 'rosa-wonderlauncher',

	1001: '#1001',
	1002: '#1002',
	1003: '#1003',
	1005: '#1005',
	1010: '#1010',
};

type StatName = 'hp' | 'atk' | 'def' | 'spa' | 'spd' | 'spe';
type NatureName = 'Adamant' | 'Bashful' | 'Bold' | 'Brave' | 'Calm' | 'Careful' | 'Docile' | 'Gentle' |
	'Hardy' | 'Hasty' | 'Impish' | 'Jolly' | 'Lax' | 'Lonely' | 'Mild' | 'Modest' | 'Naive' | 'Naughty' |
	'Quiet' | 'Quirky' | 'Rash' | 'Relaxed' | 'Sassy' | 'Serious' | 'Timid';
type StatNameExceptHP = 'atk' | 'def' | 'spa' | 'spd' | 'spe';
type TypeName = 'Normal' | 'Fighting' | 'Flying' | 'Poison' | 'Ground' | 'Rock' | 'Bug' | 'Ghost' | 'Steel' |
	'Fire' | 'Water' | 'Grass' | 'Electric' | 'Psychic' | 'Ice' | 'Dragon' | 'Dark' | 'Fairy' | '???' | 'Shadow';
type StatusName = 'par' | 'psn' | 'frz' | 'slp' | 'brn';
type BoostStatName = 'atk' | 'def' | 'spa' | 'spd' | 'spe' | 'evasion' | 'accuracy' | 'spc';
type GenderName = 'M' | 'F' | 'N';

interface Effect {
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly effectType: 'Item' | 'Move' | 'Ability' | 'Species' | 'PureEffect';
	/**
	 * Do we have data on this item/move/ability/species?
	 * WARNING: Always false if the relevant data files aren't loaded.
	 */
	readonly exists: boolean;
}

class PureEffect implements Effect {
	readonly effectType = 'PureEffect';
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly exists: boolean;
	constructor(id: ID, name: string) {
		this.id = id;
		this.name = name;
		this.gen = 0;
		this.exists = false;
	}
}

class Item implements Effect {
	// effect
	readonly effectType = 'Item';
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly exists: boolean;

	readonly num: number;
	readonly spritenum: number;
	readonly desc: string;
	readonly shortDesc: string;

	readonly megaStone: string;
	readonly megaEvolves: string;
	readonly zMove: string | true | null;
	readonly zMoveType: TypeName | '';
	readonly zMoveFrom: string;
	readonly zMoveUser: readonly string[] | null;
	readonly onPlate: TypeName;
	readonly onMemory: TypeName;
	readonly onDrive: TypeName;
	readonly fling: any;
	readonly naturalGift: any;
	readonly isPokeball: boolean;
	readonly itemUser?: readonly string[];

	constructor(id: ID, name: string, data: any) {
		if (!data || typeof data !== 'object') data = {};
		if (data.name) name = data.name;
		this.name = Dex.sanitizeName(name);
		this.id = id;
		this.gen = data.gen || 0;
		this.exists = ('exists' in data ? !!data.exists : true);

		this.num = data.num || 0;
		this.spritenum = data.spritenum || 0;
		this.desc = data.desc || data.shortDesc || '';
		this.shortDesc = data.shortDesc || this.desc;

		this.megaStone = data.megaStone || '';
		this.megaEvolves = data.megaEvolves || '';
		this.zMove = data.zMove || null;
		this.zMoveType = data.zMoveType || '';
		this.zMoveFrom = data.zMoveFrom || '';
		this.zMoveUser = data.zMoveUser || null;
		this.onPlate = data.onPlate || '';
		this.onMemory = data.onMemory || '';
		this.onDrive = data.onDrive || '';
		this.fling = data.fling || null;
		this.naturalGift = data.naturalGift || null;
		this.isPokeball = !!data.isPokeball;
		this.itemUser = data.itemUser;

		if (!this.gen) {
			if (this.num >= 577) {
				this.gen = 6;
			} else if (this.num >= 537) {
				this.gen = 5;
			} else if (this.num >= 377) {
				this.gen = 4;
			} else {
				this.gen = 3;
			}
		}
	}
}

interface MoveFlags {
	/** Ignores a target's substitute. */
	authentic?: 1 | 0;
	/** Power is multiplied by 1.5 when used by a Pokemon with the Strong Jaw Ability. */
	bite?: 1 | 0;
	/** Power is multiplied by 1.2 when used by a Pokemon with the Unsheathed Ability. */
	blade?: 1 | 0;
	/** Has no effect on Pokemon with the Bulletproof Ability. */
	bone?: 1 | 0;
	/** Immunity is ignored when used by a Pokemon with the Bone Master Ability. */
	bullet?: 1 | 0;
	/** The user is unable to make a move between turns. */
	charge?: 1 | 0;
	/** Makes contact. */
	contact?: 1 | 0;
	/** When used by a Pokemon, other Pokemon with the Dancer Ability can attempt to execute the same move. */
	dance?: 1 | 0;
	/** Thaws the user if executed successfully while the user is frozen. */
	defrost?: 1 | 0;
	/** Can target a Pokemon positioned anywhere in a Triple Battle. */
	distance?: 1 | 0;
	/** Prevented from being executed or selected during Gravity's effect. */
	gravity?: 1 | 0;
	/** Prevented from being executed or selected during Heal Block's effect. */
	heal?: 1 | 0;
	/** Power is multiplied by 1.2 when used by a Pokemon with the Striker Ability. */
	kick?: 1 | 0;
	/** Activates the Luminesce Ability. */
	light?: 1 | 0;
	/** Can be copied by Mirror Move. */
	mirror?: 1 | 0;
	/** Unknown effect. */
	mystery?: 1 | 0;
	/** Prevented from being executed or selected in a Sky Battle. */
	nonsky?: 1 | 0;
	/** Has no effect on Grass-type Pokemon, Pokemon with the Overcoat Ability, and Pokemon holding Safety Goggles. */
	powder?: 1 | 0;
	/** Blocked by Detect, Protect, Spiky Shield, and if not a Status move, King's Shield. */
	protect?: 1 | 0;
	/** Power is multiplied by 1.5 when used by a Pokemon with the Mega Launcher Ability. */
	pulse?: 1 | 0;
	/** Power is multiplied by 1.2 when used by a Pokemon with the Iron Fist Ability. */
	punch?: 1 | 0;
	/** If this move is successful, the user must recharge on the following turn and cannot make a move. */
	recharge?: 1 | 0;
	/** Bounced back to the original user by Magic Coat or the Magic Bounce Ability. */
	reflectable?: 1 | 0;
	/** Can be stolen from the original user and instead used by another Pokemon using Snatch. */
	snatch?: 1 | 0;
	/** Has no effect on Pokemon with the Soundproof Ability. */
	sound?: 1 | 0;
	/** Has no effect on Pokemon with the Jetstream Ability. */
	wind?: 1 | 0;
}

type MoveTarget = 'normal' | 'any' | 'adjacentAlly' | 'adjacentFoe' | 'adjacentAllyOrSelf' | // single-target
	'self' | 'randomNormal' | // single-target, automatic
	'allAdjacent' | 'allAdjacentFoes' | // spread
	'allySide' | 'foeSide' | 'all'; // side and field

class Move implements Effect {
	// effect
	readonly effectType = 'Move';
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly exists: boolean;

	readonly basePower: number;
	readonly accuracy: number | true;
	readonly pp: number;
	readonly type: TypeName;
	readonly category: 'Physical' | 'Special' | 'Status';
	readonly priority: number;
	readonly target: MoveTarget;
	readonly flags: Readonly<MoveFlags>;
	readonly critRatio: number;

	readonly desc: string;
	readonly shortDesc: string;
	readonly isNonstandard: string | null;
	readonly isZ: ID;
	readonly zMove?: {
		basePower?: number,
		effect?: string,
		boost?: {[stat in StatName]?: number},
	};
	readonly isMax: boolean | string;
	readonly maxMove: {basePower: number};
	readonly ohko: true | 'Ice' | null;
	readonly recoil: number[] | null;
	readonly heal: number[] | null;
	readonly multihit: number[] | number | null;
	readonly hasCrashDamage: boolean;
	readonly noPPBoosts: boolean;
	readonly secondaries: ReadonlyArray<any> | null;
	readonly num: number;

	constructor(id: ID, name: string, data: any) {
		if (!data || typeof data !== 'object') data = {};
		if (data.name) name = data.name;
		this.name = Dex.sanitizeName(name);
		this.id = id;
		this.gen = data.gen || 0;
		this.exists = ('exists' in data ? !!data.exists : true);

		this.basePower = data.basePower || 0;
		this.accuracy = data.accuracy || 0;
		this.pp = data.pp || 1;
		this.type = data.type || '???';
		this.category = data.category || 'Physical';
		this.priority = data.priority || 0;
		this.target = data.target || 'normal';
		this.flags = data.flags || {};
		this.critRatio = data.critRatio === 0 ? 0 : (data.critRatio || 1);

		// TODO: move to text.js
		this.desc = data.desc;
		this.shortDesc = data.shortDesc;
		this.isNonstandard = data.isNonstandard || null;
		this.isZ = data.isZ || '';
		this.zMove = data.zMove || {};
		this.ohko = data.ohko || null;
		this.recoil = data.recoil || null;
		this.heal = data.heal || null;
		this.multihit = data.multihit || null;
		this.hasCrashDamage = data.hasCrashDamage || false;
		this.noPPBoosts = data.noPPBoosts || false;
		this.secondaries = data.secondaries || (data.secondary ? [data.secondary] : null);

		this.isMax = data.isMax || false;
		this.maxMove = data.maxMove || {basePower: 0};
		if (this.category !== 'Status' && !this.maxMove?.basePower) {
			if (this.isZ || this.isMax) {
				this.maxMove = {basePower: 1};
			} else if (!this.basePower) {
				this.maxMove = {basePower: 100};
			} else if (['Fighting', 'Poison'].includes(this.type)) {
				if (this.basePower >= 150) {
					this.maxMove = {basePower: 100};
				} else if (this.basePower >= 110) {
					this.maxMove = {basePower: 95};
				} else if (this.basePower >= 75) {
					this.maxMove = {basePower: 90};
				} else if (this.basePower >= 65) {
					this.maxMove = {basePower: 85};
				} else if (this.basePower >= 55) {
					this.maxMove = {basePower: 80};
				} else if (this.basePower >= 45) {
					this.maxMove = {basePower: 75};
				} else  {
					this.maxMove = {basePower: 70};
				}
			} else {
				if (this.basePower >= 150) {
					this.maxMove = {basePower: 150};
				} else if (this.basePower >= 110) {
					this.maxMove = {basePower: 140};
				} else if (this.basePower >= 75) {
					this.maxMove = {basePower: 130};
				} else if (this.basePower >= 65) {
					this.maxMove = {basePower: 120};
				} else if (this.basePower >= 55) {
					this.maxMove = {basePower: 110};
				} else if (this.basePower >= 45) {
					this.maxMove = {basePower: 100};
				} else  {
					this.maxMove = {basePower: 90};
				}
			}
		}

		if (this.category !== 'Status' && !this.isZ && !this.isMax) {
			let basePower = this.basePower;
			this.zMove = {};
			if (Array.isArray(this.multihit)) basePower *= 3;
			if (!basePower) {
				this.zMove.basePower = 100;
			} else if (basePower >= 140) {
				this.zMove.basePower = 200;
			} else if (basePower >= 130) {
				this.zMove.basePower = 195;
			} else if (basePower >= 120) {
				this.zMove.basePower = 190;
			} else if (basePower >= 110) {
				this.zMove.basePower = 185;
			} else if (basePower >= 100) {
				this.zMove.basePower = 180;
			} else if (basePower >= 90) {
				this.zMove.basePower = 175;
			} else if (basePower >= 80) {
				this.zMove.basePower = 160;
			} else if (basePower >= 70) {
				this.zMove.basePower = 140;
			} else if (basePower >= 60) {
				this.zMove.basePower = 120;
			} else {
				this.zMove.basePower = 100;
			}
			if (data.zMove) this.zMove.basePower = data.zMove.basePower;
		}

		this.num = data.num || 0;
		if (!this.gen) {
			if (this.num >= 743) {
				this.gen = 8;
			} else if (this.num >= 622) {
				this.gen = 7;
			} else if (this.num >= 560) {
				this.gen = 6;
			} else if (this.num >= 468) {
				this.gen = 5;
			} else if (this.num >= 355) {
				this.gen = 4;
			} else if (this.num >= 252) {
				this.gen = 3;
			} else if (this.num >= 166) {
				this.gen = 2;
			} else if (this.num >= 1) {
				this.gen = 1;
			}
		}
	}
}

class Ability implements Effect {
	// effect
	readonly effectType = 'Ability';
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly exists: boolean;

	readonly num: number;
	readonly shortDesc: string;
	readonly desc: string;

	readonly rating: number;
	readonly isPermanent: boolean;
	readonly isNonstandard: boolean;

	constructor(id: ID, name: string, data: any) {
		if (!data || typeof data !== 'object') data = {};
		if (data.name) name = data.name;
		this.name = Dex.sanitizeName(name);
		this.id = id;
		this.gen = data.gen || 0;
		this.exists = ('exists' in data ? !!data.exists : true);
		this.num = data.num || 0;
		this.shortDesc = data.shortDesc || data.desc || '';
		this.desc = data.desc || data.shortDesc || '';
		this.rating = data.rating || 1;
		this.isPermanent = !!data.isPermanent;
		this.isNonstandard = !!data.isNonstandard;
		if (!this.gen) {
			if (this.num >= 234) {
				this.gen = 8;
			} else if (this.num >= 192) {
				this.gen = 7;
			} else if (this.num >= 165) {
				this.gen = 6;
			} else if (this.num >= 124) {
				this.gen = 5;
			} else if (this.num >= 77) {
				this.gen = 4;
			} else if (this.num >= 1) {
				this.gen = 3;
			}
		}
	}
}

class Species implements Effect {
	// effect
	readonly effectType = 'Species';
	readonly id: ID;
	readonly name: string;
	readonly gen: number;
	readonly exists: boolean;

	// name
	readonly baseSpecies: string;
	readonly forme: string;
	readonly formeid: string;
	readonly spriteid: string;
	readonly baseForme: string;

	// basic data
	readonly num: number;
	readonly types: ReadonlyArray<TypeName>;
	readonly abilities: Readonly<{
		0: string, 1?: string, H?: string, S?: string,
	}>;
	readonly baseStats: Readonly<{
		hp: number, atk: number, def: number, spa: number, spd: number, spe: number,
	}>;
	readonly weightkg: number;

	// flavor data
	readonly heightm: number;
	readonly gender: GenderName;
	readonly color: string;
	readonly genderRatio: Readonly<{M: number, F: number}> | null;
	readonly eggGroups: ReadonlyArray<string>;

	// format data
	readonly otherFormes: ReadonlyArray<string> | null;
	readonly cosmeticFormes: ReadonlyArray<string> | null;
	readonly evos: ReadonlyArray<string> | null;
	readonly prevo: string;
	readonly evoType: 'trade' | 'useItem' | 'levelMove' | 'levelExtra' | 'levelFriendship' | 'levelHold' | 'other' | '';
	readonly evoLevel: number;
	readonly evoMove: string;
	readonly evoItem: string;
	readonly evoCondition: string;
	readonly requiredItem: string;
	readonly tier: string;
	readonly isTotem: boolean;
	readonly isMega: boolean;
	readonly canGigantamax: boolean;
	readonly isPrimal: boolean;
	readonly battleOnly: string | string[] | undefined;
	readonly isNonstandard: string | null;
	readonly unreleasedHidden: boolean | 'Past';
	readonly changesFrom: string | undefined;

	constructor(id: ID, name: string, data: any) {
		if (!data || typeof data !== 'object') data = {};
		if (data.name) name = data.name;
		this.name = Dex.sanitizeName(name);
		this.id = id;
		this.gen = data.gen || 0;
		this.exists = ('exists' in data ? !!data.exists : true);
		this.baseSpecies = data.baseSpecies || name;
		this.forme = data.forme || '';
		const baseId = toID(this.baseSpecies);
		this.formeid = (baseId === this.id ? '' : '-' + toID(this.forme));
		this.spriteid = baseId + this.formeid;
		if (this.spriteid.slice(-5) === 'totem') this.spriteid = this.spriteid.slice(0, -5);
		if (this.spriteid.slice(-1) === '-') this.spriteid = this.spriteid.slice(0, -1);
		this.baseForme = data.baseForme || '';

		this.num = data.num || 0;
		this.types = data.types || ['???'];
		this.abilities = data.abilities || {0: "No Ability"};
		this.baseStats = data.baseStats || {hp: 0, atk: 0, def: 0, spa: 0, spd: 0, spe: 0};
		this.weightkg = data.weightkg || 0;

		this.heightm = data.heightm || 0;
		this.gender = data.gender || '';
		this.color = data.color || '';
		this.genderRatio = data.genderRatio || null;
		this.eggGroups = data.eggGroups || [];

		this.otherFormes = data.otherFormes || null;
		this.cosmeticFormes = data.cosmeticFormes || null;
		this.evos = data.evos || null;
		this.prevo = data.prevo || '';
		this.evoType = data.evoType || '';
		this.evoLevel = data.evoLevel || 0;
		this.evoMove = data.evoMove || '';
		this.evoItem = data.evoItem || '';
		this.evoCondition = data.evoCondition || '';
		this.requiredItem = data.requiredItem || '';
		this.tier = data.tier || '';

		this.isTotem = false;
		this.isMega = !!(this.forme && ['-mega', '-megax', '-megay'].includes(this.formeid));
		this.canGigantamax = !!data.canGigantamax;
		this.isPrimal = !!(this.forme && this.formeid === '-primal');
		this.battleOnly = data.battleOnly || undefined;
		this.isNonstandard = data.isNonstandard || null;
		this.unreleasedHidden = data.unreleasedHidden || false;
		this.changesFrom = data.changesFrom || undefined;
		if (!this.gen) {
			if (this.num >= 810 || this.formeid.startsWith('-galar')) {
				this.gen = 8;
			} else if (this.num >= 722 || this.formeid === '-alola' || this.formeid === '-fnf' || this.formeid === '-starter') {
				this.gen = 7;
			} else if (this.isMega || this.isPrimal) {
				this.gen = 6;
				this.battleOnly = this.baseSpecies;
			} else if (this.formeid === '-totem' || this.formeid === '-alolatotem') {
				this.gen = 7;
				this.isTotem = true;
			} else if (this.num >= 650) {
				this.gen = 6;
			} else if (this.num >= 494) {
				this.gen = 5;
			} else if (this.num >= 387) {
				this.gen = 4;
			} else if (this.num >= 252) {
				this.gen = 3;
			} else if (this.num >= 152) {
				this.gen = 2;
			} else if (this.num >= 1) {
				this.gen = 1;
			}
		}
	}
}

interface Type extends Effect {
	damageTaken?: AnyObject;
	HPivs?: Partial<StatsTable>;
	HPdvs?: Partial<StatsTable>;
}

if (typeof require === 'function') {
	// in Node
	(global as any).BattleBaseSpeciesChart = BattleBaseSpeciesChart;
	(global as any).BattleNatures = BattleNatures;
	(global as any).PureEffect = PureEffect;
	(global as any).Species = Species;
	(global as any).Ability = Ability;
	(global as any).Item = Item;
	(global as any).Move = Move;
}
