
class Table{
	constructor(t){
		this.table = t;
		this.selections = [];
	}
}

// Demo Data
var demo_data = [
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"}
];

// Button
var $logSelected = $('#firstlogAll');
var $logSelected2 = $('#secondlogAll');

// Tables
// var testTable = new Table($('#firsttestTable'));
var t1 = {	table : $('#firsttestTable'), selections : [] };
var t2 = {	table : $('#secondtestTable'), selections : [] };


$(function() {

	{	// XHR Request
		// XHR_Init_Table();
	}

	{	// Init Test Table
		t1.table.bootstrapTable('destroy').bootstrapTable({
			data:demo_data,
			toolbar:'#toolbar',
			search:"true",
			classes:'table table-bordered',
			// showRefresh:"true",
			// showToggle:"true",
			// showFullscreen:"true",
			// showColumns:"true",
			// showColumnsToggleAll:"true",
			// detailView:"true",
			showExport:"true",
			// clickToSelect:"true",
			detailFormatter:"detailFormatter",
			minimumCountColumns:"1",
			// showPaginationSwitch:"true",
			pagination:"true",
			// onlyInfoPagination:"true",
			idField:"id",
			pageList:"[10, 25, 50, 100, all]",
			// showFooter:"true",
			sidePagination:"client",
			responseHandler:"responseHandler",

			columns:[
				// {	field: 'state', 
				// 	align: 'center', 
				// 	valign: 'middle',
				// 	checkbox: true
				// },
				{	
					field: 'username',	
					title: 'Username',	
					align: 'center'
				},{	
					field: 'lastLoggedIn', 
					title: 'Last Logged In', 
					align: 'center'
				},{	
					field: 'operate', 
					title: '<i class="fa fa-trash"></i>', 
					align: 'center', 
					width: 50,	
					widthUnit: "px", 
					clickToSelect: false, 
					events: window.operateEvents, 
					formatter: actionFormatter
			}]
		})
	
		t1.table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			t1.selections = $.map(t1.table.bootstrapTable('getSelections'), function (row) {	return row.username	})
		});

		$logSelected.click(	function () {
			console.log(JSON.stringify(t1.selections));
		})
	}

	{	// Init Test Table
		t2.table.bootstrapTable('destroy').bootstrapTable({
			data:demo_data,
			toolbar:'#toolbar2',
			search:"true",
			// showRefresh:"true",
			// showToggle:"true",
			// showFullscreen:"true",
			// showColumns:"true",
			// showColumnsToggleAll:"true",
			// detailView:"true",
			showExport:"true",
			clickToSelect:"true",
			detailFormatter:"detailFormatter",
			minimumCountColumns:"1",
			// showPaginationSwitch:"true",
			pagination:"true",
			// onlyInfoPagination:"true",
			idField:"id",
			pageList:"[10, 25, 50, 100, all]",
			// showFooter:"true",
			sidePagination:"client",
			responseHandler:"responseHandler",

			columns:[
				{	field: 'state', 
					align: 'center', 
					valign: 'middle',
					checkbox: true
				},{	
					field: 'username',	
					title: 'Username',	
					align: 'center'
				},{	
					field: 'lastLoggedIn', 
					title: 'Last Logged In', 
					align: 'center'
				},{	
					field: 'operate', 
					title: '<i class="fa fa-trash"></i>', 
					align: 'center', 
					width: 50,	
					widthUnit: "px", 
					clickToSelect: false, 
					events: window.operateEvents, 
					formatter: actionFormatter
			}]
		})
	
		t2.table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			t2.selections = $.map(t2.table.bootstrapTable('getSelections'), function (row) { return row.username })
		});

		$logSelected2.click( function () {
			console.log(JSON.stringify(t2.selections));
		})
	}
})

function XHR_Init_Table()
{
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() 
	{
		if (this.readyState == 4 && this.status == 200) 
		{
			var obj = JSON.parse(xhttp.responseText);
			console.log(obj);
			initTable(obj.data, studentTable)
		}
	};
	xhttp.open("GET", "../php/requests/get_students.php", true);
	xhttp.send();
}


{	// Handlers and formatters 
function responseHandler(res) {
	$.each(res.rows, function (i, row) {
		row.lastLoggedIn = "0000-00-00 00:00:00";
		row.id = "0";
	})
	return res
}

function actionFormatter(value, row, index) {
	return [
	'<a class="log" href="javascript:void(0)" title="Log">',
	'<i class="fa fa-trash"></i>',
	'</a>'
	].join('')
}

window.operateEvents = {
	'click .log': function (e, value, row, index) {
		console.log(JSON.stringify(row))
	}
}
}

