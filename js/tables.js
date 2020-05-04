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
var table = [];
table['one'] = { table : $('#firsttestTable'), selections : [] };
table['two'] = { table : $('#secondtestTable'), selections : [] };
table['three'] = { table : $('#students'), selections : [] };
table['four'] = { table : $('#classes'), selections : [] };

// @BUG	The button actions dont always log the correct selection


$(function() {

	{	// XHR Request
		// XHR_Init_Table();
	}
	
	if(table['one'])
	{	// Init Test Table
		table['one'].table.bootstrapTable('destroy').bootstrapTable({
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
				{	field: 'state', 
					align: 'center', 
					valign: 'middle',
					checkbox: true
				},
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
	
		table['one'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			table['one'].selections = $.map(table['one'].table.bootstrapTable('getSelections'), function (row) {	return row.username	})
		});

		$logSelected.click(	function () {
			console.log(JSON.stringify(table['one'].selections));
		})
	}

	if(table['two'])
	{	// Init Test Table
		table['two'].table.bootstrapTable('destroy').bootstrapTable({
			data:demo_data,
			toolbar:'#toolbar2',
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
	
		table['two'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			table['two'].selections = $.map(table['two'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		});

		$logSelected2.click( function () {
			console.log(JSON.stringify(table['two'].selections));
		})
	}

	if(table['three'])
	{	// Init Test Table
		table['three'].table.bootstrapTable('destroy').bootstrapTable({
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
	
		table['three'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			table['three'].selections = $.map(table['three'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		});

		$('#logAll').click( function () {
			console.log(JSON.stringify(table['three'].selections));
		})
	}

	if(table['four'])
	{	// Init Test Table
		table['four'].table.bootstrapTable('destroy').bootstrapTable({
			data:demo_data,
			toolbar:'#toolbar2',
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
	
		table['four'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			table['four'].selections = $.map(table['four'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		});

		$('#logAll2').click( function () {
			console.log(JSON.stringify(table['four'].selections));
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

