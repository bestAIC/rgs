<? $json = '[
	{
		"name": "Госстраховский",
		"img":"/static/theme/images/deposit/card/1.png",
		"class":"_gosstrakh",
		"url": "/static/deposit/gosstrakh.php",
		"descr": "Классический вклад для получения высокого дохода при фиксированных сумме и сроке вклада",
		"strahovoi": "",
		"monthly": "N",
		"cashin": "N",
		"cashout": "N",
		"rur": {
			"91":{
				"5000": 8.00
			},
			"181_366":{
				"5000": 8.00
			},
			"367":{
				"5000": 7.00
			}
		},
		"usd": {
			"91":{
				"100": 0.75
			},
			"181_366":{
				"100": 1.80
			},
			"367":{
				"100": 1.85
			}
		},
		"eur": {
			"91":{
				"100": 0.20
			},
			"181_366":{
				"100": 0.60
			},
			"367":{
				"100": 0.60
			}
		}
	},
	{
	"name": "Госстраховский VIP",
		"url": "/personal/deposits/gosstrakhovskiy-vip/",
		"descr": "Вклад для состоятельных клиентов с возможностью получения высокого дохода при фиксированных сумме и сроке вклада",
		"strahovoi": "",
		"monthly": "N",
		"img":"/static/theme/images/deposit/card/6.png",
		"class":"_gosstrakh-vip",
		"cashin": "N",
		"cashout": "N",
		"rur": {
			"91":{
				"1000000": 8.10
			},
			"181_366":{
				"1000000": 8.10
			},
			"367":{
				"1000000": 7.10
			}
		},
		"usd": {
			"91":{
				"15000": 0.85
			},
			"181_366":{
				"15000": 1.90
			},
			"367":{
				"15000": 1.95
			}
		},
		"eur": {
			"91":{
				"15000": 0.30
			},
			"181_366":{
				"15000": 0.70
			},
			"367":{
				"15000": 0.70
			}
		}
	},
	{
	"name": "Накопительный",
	"url": "/static/deposit/save.php",
	"img":"/static/theme/images/deposit/card/2.png",
	"class":"_save",
	"descr": "Вклад с возможностью пополнения и льготными условиями при досрочном расторжении ",
	"strahovoi": "",
	"monthly": "Y",
	"cashin": "Y",
	"cashout": "N",
	"rur": {
	"271":{
	"5000": 7.00
	},
	"367":{
	"5000": 7.00
	}
	},
	"usd": {
	"367":{
	"100": 1.50
	}
	},
	"eur": {
	"367":{
	"100": 0.40
	}
	}
	},
	{
	"name": "Универсальный",
	"url": "/static/deposit/universal.php",
	"img":"/static/theme/images/deposit/card/3.png",
	"class":"_universal",
	"descr": "Вклад с возможностью частичного снятия без потери процентов, а так же пополнения по ставке вклада",
	"strahovoi": "",
	"monthly": "Y",
	"cashin": "Y",
	"cashout": "Y",
	"rur": {
	"367":{
	"30000": 7.00,
	"300000": 7.20
	}
	},
	"usd": {
	"367":{
	"500": 1.20,
	"5000": 1.30
	}
	},
	"eur": {
	"367":{
	"500": 0.20,
	"5000": 0.30
	}
	}
	},
	{
	"name": "Универсальный VIP",
	"url": "/personal/deposits/universalnyy-vip/",
	"descr": "Вклад для состоятельных клиентов с возможностью пополнения и снятия средств до неснижаемого остатка",
	"strahovoi": "",
	"monthly": "Y",
	"cashin": "Y",
	"img":"/static/theme/images/deposit/card/7.png",
	"class":"_universal-vip",
	"cashout": "Y",
	"rur": {
	"367":{
	"1000000": 7.30
	}
	},
	"usd": {
	"367":{
	"15000": 1.40
	}
	},
	"eur": {
	"367":{
	"15000": 0.40
	}
	}
	},
	{
	"name": "Инвестиционный",
	"url": "/static/deposit/invest.php",
	"descr": "Высокодоходный вклад с возможностью получить страховую защиту жизни и здоровья или дополнительный доход от вложения средств в ПИФы",
	"strahovoi": "",
	"img":"/static/theme/images/deposit/card/4.png",
	"class":"_invest",
	"monthly": "N",
	"cashin": "N",
	"cashout": "N",
	"rur": {
	"91":{
	"25000": 9.50
	},
	"181":{
	"25000": 9.50
	},
	"367":{
	"25000": 9.00
	}
	}
	},
	{
	"name": "Пенсионный доход",
	"url": "/static/deposit/pensoin.php",
	"descr": "Разработан специально для пенсионеров: высокий процент при небольших суммах с возможностью пополнения.",
	"strahovoi": "",
	"img":"/static/theme/images/deposit/card/5.png",
	"class":"_pension",
	"monthly": "Y",
	"cashin": "Y",
	"cashout": "N",
	"rur": {
	"181_366":{
	"0": 7.60
	},
	"367":{
	"0": 7.00
	}
	},
	"usd": {
	"181_366":{
	"0": 1.60
	},
	"367":{
	"0": 1.60
	}
	},
	"eur": {
	"181_366":{
	"0": 0.50
	},
	"367":{
	"0": 0.50
	}
	}
	}]';
	/*$json = '[{
	"name": "Госстраховский",
	"img":"/static/theme/images/deposit/card/1.png",
	"class":"_gosstrakh",
	"url": "/static/deposit/gosstrakh.php",
	"descr": "Классический вклад для получения высокого дохода при фиксированных сумме и сроке вклада",
	"strahovoi": "",
	"monthly": "N",
	"cashin": "N",
	"cashout": "N",
	"rur": {
			"91":{
				"5000": 8.00
			},
			"181_366":{
				"5000": 8.00
			},
			"367":{
				"5000": 7.00
			}
	}
	
	}]';*/
	echo $json;
?>