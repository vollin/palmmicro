<?php

/*
http://www.szse.cn/api/report/ShowReport/data?SHOWTYPE=JSON&CATALOGID=1945_LOF&txtQueryKeyAndJC=162411
[
{"metadata":
	{"catalogid":"1945_LOF",
	 "name":"LOF基金列表",
	 "excel":"xlsx",
	 "pagetype":"vertical",
	 "subname":"2020-09-11",
	 "tabkey":"tab1",
	 "csskey":[{"csskey":"main"}],
	 "pagesize":10,
	 "pageno":1,
	 "pagecount":1,
	 "recordcount":1,
	 "showrecordcount":false,
	 "header":"<table>\n\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t<td class=\"link1\">\n\t\t\t\t\t\t\t\t(点击<u>代码</u>查询行情，点击<u>简称</u>查询公告)\n\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</table>",
	 "footer":"",
	 "reporttype":null,
	 "tabcss":null,
	 "conditions":[{"label":"代码或简称",
 					"name":"txtQueryKeyAndJC",
 					"hidden":"0",
 					"defaultValue":"162411",
 					"labelstyle":"1",
 					"required":"false",
 					"inputType":"text",
 					"typeAhead":"/shortname/gethangqing?dataType=JJ&input=",
 					"options":null,
 					"property":null,
 					"maxlength":null,
 					"otherProperties":null
 				  }],
 	 "colStyle":{"sys_key":{"align":"center","group":"false"},
             	 "kzjcurl":{"align":"center","group":"false"},
             	 "nhzs":{"align":"left","group":"false"},
             	 "dqgm":{"align":"right","group":"false"},
             	 "glrmc":{"align":"left","group":"false"},
             	 "cxjqhq":{"align":"center","group":"false"},
             	 "zxjjjz":{"align":"center","group":"false"}
             	},
     "cols":{"sys_key":"证券代码",
         	 "kzjcurl":"证券简称",
         	 "nhzs":"拟合指数",
         	 "dqgm":"当前规模<br>（万份）",
         	 "glrmc":"基金管理人",
         	 "cxjqhq":"查询近期行情",
         	 "zxjjjz":"最新基金净值"
         	},
     "colspan":0,
     "notes":null,
     "topHeader":""
    },
 "data":
	[{"sys_key":"<a href='http://www.szse.cn/market/trend/index.html?code=162411'><u>162411</u></a>",
	  "kzjcurl":"<a href='http://www.szse.cn/disclosure/fund/notice/index.html?stock=162411&name=华宝油气' title='点击简称查询公告'><u>华宝油气</u></a> <a href='javascript:void(0);' encode-open='/main/disclosure/ETFgg/sgshqd/index.shtml?txtJCorDH=162411'></a>",
	  "nhzs":"SPSIOPTR ",
	  "dqgm":"877,189.37",
	  "glrmc":"华宝基金管理有限公司",
	  "cxjqhq":"<a href='javascript:void(0);' a-back=1 a-param='/ShowReport/data?SHOWTYPE=JSON&CATALOGID=1815_fund_child&TABKEY=tab1&txtDm=162411'>查看</a>",
	  "zxjjjz":"<a href='javascript:void(0);' a-back=1 a-param='/ShowReport/data?SHOWTYPE=JSON&CATALOGID=1785_child&TABKEY=tab1&txtDm=162411'>查看</a>"
	}],
 "error":null
},
{
"metadata":
	{"catalogid":"1945_LOF",
	 "name":"LOF最新净值列表",
	 "excel":"xlsx",
	 "pagetype":"vertical",
	 "subname":"",
	 "tabkey":"tab2",
	 "csskey":[{"csskey":"main"}],
	 "pagesize":10,
	 "pageno":1,
	 "pagecount":1,
	 "recordcount":1,
	 "showrecordcount":false,
	 "header":"<table>\n\t\t\t\t\t\t<tr>\n\t\t\t\t\t\t\t<td class=\"link1\">\n\t\t\t\t\t\t\t(点击<u>代码</u>查询行情，点击<u>简称</u>查询公告)\n\t\t\t\t\t\t\t</td>\n\t\t\t\t\t\t</tr>\n\t\t\t\t\t</table>",
	 "footer":"",
	 "reporttype":null,
	 "tabcss":null,
	 "conditions":[{"label":"","name":"txtQueryKeyAndJC","hidden":"1","defaultValue":"162411","labelstyle":"1","required":"false","inputType":"text","typeAhead":"","options":null,"property":null,"maxlength":null,"otherProperties":null}],
	 "colStyle":{"jzrq":{"align":"center","group":"false"},"jjdm":{"align":"center","group":"false"},"jjjc":{"align":"center","group":"false"},"jjjz":{"align":"right","group":"false"}},
	 "cols":{"jzrq":"净值日期","jjdm":"基金代码","jjjc":"基金简称","jjjz":"单位基金净值<br>（元）"},
	 "colspan":0,
	 "notes":null,
	 "topHeader":""
	},
 "data":[{"jzrq":"2020-09-10","jjdm":"162411","jjjc":"华宝油气","jjjz":"0.2443"}],
 "error":null
}
]

Array( 
[0] => Array ( 
	[metadata] => Array ( [catalogid] => 1945_LOF 
						  [name] => LOF基金列表 
						  [excel] => xlsx 
						  [pagetype] => vertical 
						  [subname] => 2020-09-11 
						  [tabkey] => tab1 
						  [csskey] => Array ( [0] => Array ( [csskey] => main ) ) 
						  [pagesize] => 10 
						  [pageno] => 1 
						  [pagecount] => 1 
						  [recordcount] => 1 
						  [showrecordcount] => 
						  [header] => (点击代码查询行情，点击简称查询公告)
						  [footer] => 
						  [reporttype] => 
						  [tabcss] => 
						  [conditions] => Array ( [0] => Array ( [label] => 代码或简称 [name] => txtQueryKeyAndJC [hidden] => 0 [defaultValue] => 162411 [labelstyle] => 1 [required] => false [inputType] => text [typeAhead] => /shortname/gethangqing?dataType=JJ&input= [options] => [property] => [maxlength] => [otherProperties] => ) ) 
						  [colStyle] => Array ( [sys_key] => Array ( [align] => center [group] => false ) [kzjcurl] => Array ( [align] => center [group] => false ) [nhzs] => Array ( [align] => left [group] => false ) [dqgm] => Array ( [align] => right [group] => false ) [glrmc] => Array ( [align] => left [group] => false ) [cxjqhq] => Array ( [align] => center [group] => false ) [zxjjjz] => Array ( [align] => center [group] => false ) ) 
						  [cols] => Array ( [sys_key] => 证券代码 [kzjcurl] => 证券简称 [nhzs] => 拟合指数 [dqgm] => 当前规模（万份） [glrmc] => 基金管理人 [cxjqhq] => 查询近期行情 [zxjjjz] => 最新基金净值 ) 
						  [colspan] => 0 
						  [notes] => 
						  [topHeader] => ) 
	[data] => Array ( [0] => Array ( [sys_key] => 162411 
									 [kzjcurl] => 华宝油气 
									 [nhzs] => SPSIOPTR 
									 [dqgm] => 877,189.37 
									 [glrmc] => 华宝基金管理有限公司 
									 [cxjqhq] => 查看 
									 [zxjjjz] => 查看 ) ) 
	[error] => 
	) 
[1] => Array ( 
	[metadata] => Array ( [catalogid] => 1945_LOF 
						  [name] => LOF最新净值列表 
						  [excel] => xlsx 
						  [pagetype] => vertical 
						  [subname] => 
						  [tabkey] => tab2 
						  [csskey] => Array ( [0] => Array ( [csskey] => main ) ) 
						  [pagesize] => 10 
						  [pageno] => 1 
						  [pagecount] => 1 
						  [recordcount] => 1 
						  [showrecordcount] => 
						  [header] => (点击代码查询行情，点击简称查询公告)
						  [footer] => 
						  [reporttype] => 
						  [tabcss] => 
						  [conditions] => Array ( [0] => Array ( [label] => [name] => txtQueryKeyAndJC [hidden] => 1 [defaultValue] => 162411 [labelstyle] => 1 [required] => false [inputType] => text [typeAhead] => [options] => [property] => [maxlength] => [otherProperties] => ) ) 
						  [colStyle] => Array ( [jzrq] => Array ( [align] => center [group] => false ) [jjdm] => Array ( [align] => center [group] => false ) [jjjc] => Array ( [align] => center [group] => false ) [jjjz] => Array ( [align] => right [group] => false ) ) 
						  [cols] => Array ( [jzrq] => 净值日期 [jjdm] => 基金代码 [jjjc] => 基金简称 [jjjz] => 单位基金净值（元） ) 
						  [colspan] => 0 
						  [notes] => 
						  [topHeader] => ) 
	[data] => Array ( [0] => Array ( [jzrq] => 2020-09-10 
									 [jjdm] => 162411 
									 [jjjc] => 华宝油气 
									 [jjjz] => 0.2443 ) ) 
	[error] => 
	) 
) 1
*/

function GetSzseUrl()
{
	return 'http://www.szse.cn/';
}

function SzseGetLofShares($ref)
{
	$strDigitA = $ref->GetDigitA();
	if ($strDigitA == false)					return;
	if (substr($strDigitA, 0, 2) != '16')	return;
	
	$sql = new EtfSharesHistorySql($ref->GetStockId());
	$strDate = $ref->GetDate();
	if ($sql->GetRecord($strDate))	return;
	
	$strUrl = GetSzseUrl().'api/report/ShowReport/data?SHOWTYPE=JSON&CATALOGID=1945_LOF&txtQueryKeyAndJC='.$strDigitA;
   	if ($str = url_get_contents($strUrl))
    {
   		$ar = json_decode($str, true);
   		$ar0 = $ar[0];
   		if (isset($ar0['metadata']))
   		{
   			$arMetaData = $ar0['metadata'];
   			if ($arMetaData['subname'] == $strDate)
   			{
   				if (isset($ar0['data']))
   				{
   					$arData = $ar0['data'];
   					$arData0 = $arData[0];
   					$strClose = str_replace(',', '', $arData0['dqgm']);
   					$sql->Write($strDate, $strClose);
   					DebugString($strClose);
   				}
   				else
   				{
   					DebugString('No data');
   				}
   			}
   			else
   			{
   				DebugString('different date: '.$arMetaData['subname'].' '.$strDate);
   			}
   		}
   		else
   		{
   			DebugString('No metadata');
   		}
   	}
}

?>
