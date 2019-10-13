<?php
require_once('stockdisp.php');
require_once('table.php');

class TableColumnCalibration extends TableColumn
{
	function TableColumnCalibration()
	{
        parent::TableColumn('校准值', 100);
	}
}

class TableColumnChange extends TableColumn
{
	function TableColumnChange()
	{
        parent::TableColumn(STOCK_DISP_CHANGE, 70, 'red');
        $this->AddUnit();
	}
}

function GetTableColumnChange()
{
	$col = new TableColumnChange();
	return $col->GetDisplay();
}

class TableColumnClose extends TableColumn
{
	function TableColumnClose()
	{
        parent::TableColumn('收盘价', 70, 'purple');
	}
}

function GetTableColumnClose()
{
	$col = new TableColumnClose();
	return $col->GetDisplay();
}

class TableColumnDate extends TableColumn
{
	function TableColumnDate($strPrefix = false)
	{
        parent::TableColumn('日期', 100, false, $strPrefix);
	}
}

function GetTableColumnDate()
{
	$col = new TableColumnDate();
	return $col->GetDisplay();
}

class TableColumnError extends TableColumn
{
	function TableColumnError()
	{
        parent::TableColumn('误差', 60);
        $this->AddUnit();
	}
}

function GetTableColumnError()
{
	$col = new TableColumnError();
	return $col->GetDisplay();
}

class TableColumnEst extends TableColumn
{
	function TableColumnEst($strPrefix = false)
	{
        parent::TableColumn(STOCK_DISP_EST, 80, 'magenta', $strPrefix);
	}
}

function GetTableColumnEst()
{
	$col = new TableColumnEst();
	return $col->GetDisplay();
}

class TableColumnOfficalEst extends TableColumnEst
{
	function TableColumnOfficalEst()
	{
        parent::TableColumnEst(STOCK_DISP_OFFICIAL);
	}
}

class TableColumnName extends TableColumn
{
	function TableColumnName()
	{
        parent::TableColumn('名称', 270);
	}
}

class TableColumnNetValue extends TableColumn
{
	function TableColumnNetValue($strPrefix = false)
	{
        parent::TableColumn(STOCK_DISP_NETVALUE, 90, 'olive', $strPrefix);
	}
}

function GetTableColumnNetValue()
{
	$col = new TableColumnNetValue();
	return $col->GetDisplay();
}

class TableColumnPremium extends TableColumn
{
	function TableColumnPremium($strPrefix = false)
	{
        parent::TableColumn(STOCK_DISP_PREMIUM, 70, 'orange', $strPrefix);
        $this->AddUnit();
	}
}

function GetTableColumnPremium()
{
	$col = new TableColumnPremium();
	return $col->GetDisplay();
}

class TableColumnPrice extends TableColumn
{
	function TableColumnPrice()
	{
        parent::TableColumn(STOCK_DISP_PRICE, 70, 'blue');
	}
}

function GetTableColumnPrice()
{
	$col = new TableColumnPrice();
	return $col->GetDisplay();
}

class TableColumnRatio extends TableColumn
{
	function TableColumnRatio($strPrefix = false)
	{
        parent::TableColumn(STOCK_DISP_RATIO, 80, false, $strPrefix);
	}
}

class TableColumnAhRatio extends TableColumnRatio
{
	function TableColumnAhRatio()
	{
        parent::TableColumnRatio('AH');
	}
}

class TableColumnHaRatio extends TableColumnRatio
{
	function TableColumnHaRatio()
	{
        parent::TableColumnRatio('HA');
	}
}

class TableColumnSma extends TableColumn
{
	function TableColumnSma()
	{
        parent::TableColumn('均线', 90, 'indigo');
	}
}

function GetTableColumnSma()
{
	$col = new TableColumnSma();
	return $col->GetDisplay();
}

class TableColumnSymbol extends TableColumn
{
	function TableColumnSymbol($strPrefix = false)
	{
        parent::TableColumn('代码', 80, 'maroon', $strPrefix);
	}
}

function GetTableColumnSymbol()
{
	$col = new TableColumnSymbol();
	return $col->GetDisplay();
}

class TableColumnTime extends TableColumn
{
	function TableColumnTime()
	{
        parent::TableColumn('时间', 50);
	}
}

function GetTableColumnTime()
{
	$col = new TableColumnTime();
	return $col->GetDisplay();
}

function GetTableColumnOfficalEst()
{
	return STOCK_DISP_OFFICIAL.GetTableColumnEst();
}

function GetTableColumnOfficalPremium()
{
	return STOCK_DISP_OFFICIAL.GetTableColumnPremium();
}

function GetTableColumnFairPremium()
{
	return STOCK_DISP_FAIR.GetTableColumnPremium();
}

function GetTableColumnRealtimeEst()
{
	return STOCK_DISP_REALTIME.GetTableColumnEst();
}

function GetTableColumnRealtimePremium()
{
	return STOCK_DISP_REALTIME.GetTableColumnPremium();
}

class TableColumnMyStock extends TableColumn
{
	function TableColumnMyStock($strSymbol)
	{
        parent::TableColumn(GetMyStockLink($strSymbol));
	}
}

function GetTransactionTableColumn()
{
    return array(GetTableColumnDate(), GetTableColumnSymbol(), '数量', GetTableColumnPrice(), '交易费用', '备注', '操作');
}

?>
