<? $json = '{
		"gosstrakh":{
			"monthly":"Y",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":5000,
				"max":1000000,
				"step":1000,
				"value":50000,
				"monthlyMin":5000,
				"monthlyMax":100000,
				"monthlyStep":1000,
				"monthlyValue":10000,
				"periodsCounter":5,
				"periods":{
					"91":{
						"5000": 8.20
					},
					"181":{
						"5000": 8.20
					},
					"271":{
						"5000": 8.20
					},
					"367":{
						"5000": 7.00
					},
					"732":{
						"5000": 7.00
					}
				}
			},
			"usd": {
				"min":100,
				"max":100000,
				"step":100,
				"value":10000,
				"monthlyMin":100,
				"monthlyMax":10000,
				"monthlyStep":100,
				"monthlyValue":1000,
				"periodsCounter":5,
				"periods":{
					"91":{
						"100": 0.75
					},
					"181":{
						"100": 1.80
					},
					"271":{
						"100": 1.80
					},
					"367":{
						"100": 1.85
					},
					"732":{
						"100": 1.85
					}
				}
			},
			"eur": {
				"min":100,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":5,
				"monthlyMin":50,
				"monthlyMax":10000,
				"monthlyStep":50,
				"monthlyValue":1000,
				"periods":{
					"91":{
						"100": 0.20
					},
					"181":{
						"100": 0.60
					},
					"271":{
						"100": 0.60
					},
					"367":{
						"100": 0.60
					},
					"732":{
						"100": 0.60
					}	
				}
			}
		},
		"gosstrakh-vip":{
			"monthly":"N",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":1000000,
				"max":50000000,
				"step":50000,
				"value":15000000,
				"periodsCounter":5,
				"periods":{
					"91":{
						"1000000": 8.30
					},
					"181":{
						"1000000": 8.30
					},
					"271":{
						"1000000": 8.30
					},
					"367":{
						"1000000": 7.10
					},
					"732":{
						"1000000": 7.10
					}
				}
			},
			"usd": {
				"min":15000,
				"max":100000,
				"step":1000,
				"value":30000,
				"periodsCounter":5,
				"periods":{
					"91":{
						"15000": 0.85
					},
					"181":{
						"15000": 1.90
					},
					"271":{
						"15000": 1.90
					},
					"367":{
						"15000": 1.95
					},
					"732":{
						"15000": 1.95
					}
				}
			},
			"eur": {
				"min":15000,
				"max":100000,
				"step":10000,
				"value":30000,
				"periodsCounter":5,
				"periods":{
					"91":{
						"15000": 0.30
					},
					"181":{
						"15000": 0.70
					},
					"271":{
						"15000": 0.70
					},
					"367":{
						"15000": 0.70
					},
					"732":{
						"15000": 0.70
					}	
				}
			}
		},
		"save":{
			"monthly":"Y",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":5000,
				"max":1000000,
				"step":1000,
				"value":50000,
				"periodsCounter":2,
				"periods":{
					"271":{
						"5000": 7.00
					},
					"367":{
						"5000": 7.00
					}
				}
			},
			"usd": {
				"min":100,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"100": 1.50
					}
				}
			},
			"eur": {
				"min":100,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"100": 0.40
					}
				}
			}
		},
		"universal":{
			"monthly":"Y",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":30000,
				"max":1000000,
				"step":1000,
				"value":100000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"30000": 7.00,
						"300000": 7.20
					}
				}
			},
			"usd": {
				"min":500,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"500": 1.20,
						"5000": 1.30
					}
				}
			},
			"eur": {
				"min":500,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"500": 0.20,
						"5000": 0.30
					}
				}
			}
		},
		"universal-vip":{
			"monthly":"Y",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":1000000,
				"max":50000000,
				"step":50000,
				"value":15000000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"1000000": 7.30
					}
				}
			},
			"usd": {
				"min":15000,
				"max":100000,
				"step":1000,
				"value":30000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"15000": 1.40
					}
				}
			},
			"eur": {
				"min":15000,
				"max":100000,
				"step":1000,
				"value":30000,
				"periodsCounter":1,
				"periods":{
					"367":{
						"15000": 0.40
					}
				}
			}
		},
		"invest":{
			"monthly":"N",
			"currency":{
				"rur":"₽"
			},
			"rur": {
				"min":25000,
				"max":1000000,
				"step":1000,
				"value":75000,
				"periodsCounter":3,
				"periods":{
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
			}
		},
		"pensoin":{
			"monthly":"Y",
			"currency":{
				"rur":"₽",
				"usd":"$",
				"eur":"€"
			},
			"rur": {
				"min":1000,
				"max":1000000,
				"step":1000,
				"value":50000,
				"periodsCounter":4,
				"periods":{
					"181":{
						"1000": 7.60
					},
					"271":{
						"1000": 7.60
					},
					"367":{
						"1000": 7.00
					},
					"732":{
						"1000": 7.00
					}
				}
			},
			"usd": {
				"min":50,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":4,
				"periods":{
					"181":{
						"50": 1.60
					},
					"271":{
						"50": 1.60
					},
					"367":{
						"50": 1.60
					},
					"732":{
						"50": 1.60
					}
				}
			},
			"eur": {
				"min":50,
				"max":100000,
				"step":100,
				"value":10000,
				"periodsCounter":4,
				"periods":{
					"181":{
						"50": 0.50
					},
					"271":{
						"50": 0.50
					},
					"367":{
						"50": 0.50
					},
					"732":{
						"50": 0.50
					}	
				}
			}
		}
	}';
	echo $json;
?>