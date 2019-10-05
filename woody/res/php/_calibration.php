<?php
require_once('_stock.php');
require_once('_emptygroup.php');
require_once('/php/ui/calibrationparagraph.php');

function EchoAll()
{
	global $acct;
	
    if ($ref = $acct->EchoStockGroup())
    {
    	if ($ref->HasData())
    	{
    		EchoCalibrationParagraph($ref, $acct->GetStart(), $acct->GetNum(), $acct->IsAdmin());
    	}
    }
    $acct->EchoLinks('calibration');
}    

function EchoMetaDescription()
{
	global $acct;
	
  	$str = $acct->GetStockDisplay().CALIBRATION_HISTORY_DISPLAY;
    $str .= '页面. 用于查看, 比较和调试估算的股票价格或者基金净值之间的校准情况. 最新的校准时间一般会直接显示在该股票或者基金的页面.';
    EchoMetaDescriptionText($str);
}

function EchoTitle()
{
	global $acct;
	
  	$str = $acct->GetSymbolDisplay().CALIBRATION_HISTORY_DISPLAY;
  	echo $str;
}

    $acct = new SymbolAcctStart();

?>

