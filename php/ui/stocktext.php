<?php

// Text display UI

// ****************************** MyStockReference class functions *******************************************************

function _textVolume($strVolume)
{
    if (intval($strVolume) > 0)
    {
        $str = '成交量:'.$strVolume.'股'.WX_EOL;
    }
    else
    {
        $str = '';
    }
    return $str;
}

function TextFromExtendedTradingReferencce($ref)
{
    $str = ConvertChineseDescription($ref->strDescription, true).':'.$ref->strPrice.' '.$ref->strDate.' '.$ref->strTime.WX_EOL;
    if ($ref->strVolume)	$str .= _textVolume($ref->strVolume);
    return $str;
}

function TextFromStockReference($ref)
{
    if ($ref->bHasData == false)        return false;

    $str = ConvertChineseDescription($ref->strDescription, true).WX_EOL;
    $str .= $ref->strExternalLink.WX_EOL;
    $str .= '现价:'.$ref->strPrice.' '.$ref->strDate.' '.$ref->strTime.WX_EOL;
    $str .= '涨跌:'.$ref->GetPercentageText($ref->fPrevPrice).WX_EOL;
    if ($ref->strOpen)		$str .= '开盘价:'.$ref->strOpen.WX_EOL;
    if ($ref->strHigh)		$str .= '最高:'.$ref->strHigh.WX_EOL;
    if ($ref->strLow)		$str .= '最低:'.$ref->strLow.WX_EOL;
    if ($ref->strVolume)	$str .= _textVolume($ref->strVolume);
    
    if ($ref->extended_ref)
    {
        $str .= TextFromExtendedTradingReferencce($ref->extended_ref);
    }
    
    return $str;
}

function TextFromAhReference($ref, $hshare_ref, $hadr_ref)
{
	$str = TextFromStockReference($ref);
	if ($hshare_ref)
	{
		$str .= 'A股代码:'.GetMyStockRefLink($hshare_ref->a_ref, true).WX_EOL;
		$str .= 'H股代码:'.GetMyStockRefLink($hshare_ref, true).WX_EOL;
	}
	if ($hadr_ref)
	{
		$str .= 'ADR代码:'.GetMyStockRefLink($hadr_ref->adr_ref, true).WX_EOL;
		if ($hshare_ref == false)	$str .= 'H股代码:'.GetMyStockRefLink($hadr_ref, true).WX_EOL;
	}
	if ($hshare_ref)		$str .= 'AH比价:'.round_display($hshare_ref->GetAhRatio()).WX_EOL;
	if ($hadr_ref)		$str .= 'ADRH比价:'.round_display($hadr_ref->GetAdrhRatio()).WX_EOL;
	return $str;
}

function _textPremium($stock_ref, $fEst)
{
    $str = '估值:'.$stock_ref->GetPriceText($fEst);
    if ($stock_ref->bHasData)
    {
        $str .= ' 溢价:'.$stock_ref->GetPercentageText($fEst);
    }
    return $str;
}

function TextFromFundReference($ref)
{
    if ($ref->bHasData == false)                return false;

    $strName = $ref->strDescription.WX_EOL.$ref->GetStockSymbol().WX_EOL;
    $stock_ref = $ref->stock_ref;
    if ($stock_ref)
    {
        if (($str = TextFromStockReference($stock_ref)) == false)
        {
            $str = $strName;
        }
    }
    else
    {
        $str = $strName;
    }
    
    $str .= '净值:'.$ref->strPrevPrice.' '.$ref->strDate.WX_EOL;
    if ($ref->strOfficialDate)
    {
        $str .= '官方'._textPremium($stock_ref, $ref->fPrice).' '.$ref->strOfficialDate.WX_EOL;
    }
    if ($ref->fFairNetValue)
    {
        $str .= '参考'._textPremium($stock_ref, $ref->fFairNetValue).WX_EOL;
    }
    if ($ref->fRealtimeNetValue)
    {
        $str .= '实时'._textPremium($stock_ref, $ref->fRealtimeNetValue).WX_EOL;
    }
    return $str;
}

?>
