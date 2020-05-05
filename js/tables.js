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


{	// Handlers and formatters 
	function responseHandler(res) {
		$.each(res.rows, function (i, row) {
			row.lastLoggedIn = JSON.stringify(lastLoggedIn);
			row.id = "0";
		})
		return res
	}
	
	function actionFormatter(value, row, index) {
		return [
			'<a class="log" href="javascript:void(0)" title="remove">',
			'<i class="fa fa-trash"></i>',
			'</a>'
		].join('')
	}

	function dateTimeFormatter(value, row, index) {
		return JSON.stringify(value);
	}
	
	
	function class_operatorFormatter(value, row, index) {
		return [
			'<a class="log" href="javascript:void(0)" title="Log">',
			'<i class="fa fa-minus"></i>',
			'</a>'
		].join('')
	}
	
	
	function class_actionFormatter(value, row, index) {
		return [
			'<a class="reset btn btn-primary btn-sm mx-1" href="javascript:void(0)" title="reset">',
			'Reset Password',
			'</a>'
		].join('')
	}
	
	function admin_actionFormatter(value, row, index) {
		return [
			'<a class="reset btn btn-primary btn-sm mx-1" href="javascript:void(0)" title="reset">',
			'Reset Password',
			'</a>'
		].join('')
	}
	
	window.operateEvents = {
		'click .log': function (e, value, row, index) {
			console.log(JSON.stringify(row))
		}
	}
	}
	

// Button
var $logSelected = $('#firstlogAll');
var $logSelected2 = $('#secondlogAll');

// Tables
var table = [];
table['one'] = { table : $('#firsttestTable'), selections : [], parameters: {} };
table['two'] = { table : $('#secondtestTable'), selections : [], parameters: {} };
table['students'] = { table : $('#students'), selections : [], parameters: {} };
table['classes'] = { table : $('#classes'), selections : [], parameters: {} };
table['school_accounts'] = { table : $('#school_accounts'), selections : [], parameters: {} };
table['research_accounts'] = { table : $('#research_accounts'), selections : [], parameters: {} };
table['lightTemp'] = { table : $('#lightTemp'), selections : [], parameters: {} };

// @BUG	The button actions dont always log the correct selection

// Set Table Parametres
table['students'].parameters = {
	// data:demo_data,
	toolbar:'#toolbar_students',
	search:"true",
	classes:'table table-bordered',
	// showRefresh:"true",
	// showToggle:"true",
	// showFullscreen:"true",
	// showColumns:"true",
	// showColumnsToggleAll:"true",
	// detailView:"true",
	// showExport:"true",
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
	responseHandler:"responseHandler"
}
table['students'].parameters.columns = [
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
}]


table['classes'].parameters = {
	data:demo_data,
	toolbar:'#toolbar_classes',
	search:"true",
	classes:'table table-bordered table-sm',
	// showRefresh:"true",
	// showToggle:"true",
	// showFullscreen:"true",
	// showColumns:"true",
	// showColumnsToggleAll:"true",
	// detailView:"true",
	// showExport:"true",
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
	responseHandler:"responseHandler"
}
table['classes'].parameters.columns = [
	{	field: 'state', 
		align: 'center', 
		valign: 'middle',
		checkbox: true
	},{	
		field: 'username',	
		title: 'Student',	
		align: 'center'
	},{	
		field: 'lastLoggedIn', 
		title: 'Last Logged In', 
		align: 'center'
	},{	
		field: 'action', 
		title: 'Action', 
		align: 'center',
		width: 13,	
		widthUnit: "%", 
		formatter: class_actionFormatter
	},{	
		field: 'operate', 
		// title: '<i class="fa fa-minus"></i>', 
		align: 'center', 
		width: 50,	
		widthUnit: "px", 
		clickToSelect: false, 
		events: window.operateEvents, 
		formatter: class_operatorFormatter
}]


table['school_accounts'].parameters = {
	data:demo_data,
	toolbar:'#toolbar_school_accounts',
	search:"true",
	classes:'table table-bordered table-sm',
	// showRefresh:"true",
	// showToggle:"true",
	// showFullscreen:"true",
	// showColumns:"true",
	// showColumnsToggleAll:"true",
	// detailView:"true",
	// showExport:"true",
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
	responseHandler:"responseHandler"
}
table['school_accounts'].parameters.columns = [
	{	field: 'state', 
		align: 'center', 
		valign: 'middle',
		checkbox: true
	},{	
		field: 'username',	
		title: 'Username',	
		align: 'center'
	},{
		field: 'accountType',	
		title: 'Account Type',	
		align: 'center',
		width: 20,
		widthUnit: "%"
	},{	
		field: 'lastLoggedIn', 
		title: 'Last Logged In', 
		align: 'center',
		width: 20,
		widthUnit: "%"
	},{	
		field: 'actions', 
		title: 'Actions', 
		align: 'center',
		width: 13,
		widthUnit: "%",
		formatter: admin_actionFormatter
	},{	
		field: 'operate', 
		// title: '<i class="fa fa-trash"></i>', 
		align: 'center', 
		width: 50,	
		widthUnit: "px", 
		clickToSelect: false, 
		events: window.operateEvents, 
		formatter: actionFormatter
}]


table['research_accounts'].parameters = {
	data:demo_data,
	toolbar:'#toolbar_research_accounts',
	search:"true",
	classes:'table table-bordered table-sm',
	// showRefresh:"true",
	// showToggle:"true",
	// showFullscreen:"true",
	// showColumns:"true",
	// showColumnsToggleAll:"true",
	// detailView:"true",
	// showExport:"true",
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
	responseHandler:"responseHandler"
}
table['research_accounts'].parameters.columns = [
	{	field: 'state', 
		align: 'center', 
		valign: 'middle',
		checkbox: true
	},{	
		field: 'username',	
		title: 'Username',	
		align: 'center'
	},{
		field: 'accountType',	
		title: 'Account Type',	
		align: 'center',
		width: 20,
		widthUnit: "%"
	},{	
		field: 'lastLoggedIn', 
		title: 'Last Logged In', 
		align: 'center',
		width: 20,
		widthUnit: "%"
	},{	
		field: 'actions', 
		title: 'Actions', 
		align: 'center',
		width: 13,
		widthUnit: "%",
		formatter: admin_actionFormatter
	},{	
		field: 'operate', 
		// title: '<i class="fa fa-trash"></i>', 
		align: 'center', 
		width: 50,	
		widthUnit: "px", 
		clickToSelect: false, 
		events: window.operateEvents, 
		formatter: actionFormatter
}]


table['lightTemp'].parameters = {
	data:demo_data,
	toolbar:'#toolbar_lightTemp',
	search:"true",
	classes:'table table-bordered table-sm',
	// showRefresh:"true",
	// showToggle:"true",
	// showFullscreen:"true",
	showColumns:"true",
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
	sidePagination:"client"
}
table['lightTemp'].parameters.columns = [
	{	
		field: 'deviceId',	
		title: 'Device'
	},{
		field: 'username',	
		title: 'Uploader'
	},{	
		field: 'plotNumber', 
		title: 'Plot Num'
	},{	
		field: 'dateTime', 
		title: 'Date Time'
		// formatter: dateTimeFormatter
	},{	
		field: 'temp', 
		title: 'Temp C'
	},{	
		field: 'intensity', 
		title: 'Light'
	},{	
		field: 'couplerDetached', 
		title: 'Coupler Detached'
	},{	
		field: 'couplerAttached', 
		title: 'Coupler Attached'
	},{	
		field: 'hostConnected', 
		title: 'Host Connected'
	},{	
		field: 'stopped', 
		title: 'Stopped'
	},{	
		field: 'endOfFile', 
		title: 'End Of File'
}]


$(function() {

	if(table['students']){	// Student Table
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				var obj = JSON.parse(xhttp.responseText);
				console.log(obj);
				InitTable(table['students'], obj.data);
			}
		};
		xhttp.open("GET", "../php/requests/get_students.php", true);
		xhttp.send();

	}

	if(table['classes']){ // Class Table
		InitTable(table['classes'], demo_data);
	}

	if(table['school_accounts']){ // Class Table
		InitTable(table['school_accounts'], demo_data);
	}

	if(table['research_accounts']){ // Class Table
		InitTable(table['research_accounts'], demo_data);
	}

	if(table['lightTemp']){ // Class Table
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				var obj = JSON.parse(xhttp.responseText);
				console.log(obj);
				InitTable(table['lightTemp'], obj.data);
			}
		};
		xhttp.open("GET", "../php/requests/get_lightTempData.php", true);
		xhttp.send();
	}

	{
		// if(table['one'])
		// {	// Init Test Table
		// 	table['one'].table.bootstrapTable('destroy').bootstrapTable({
		// 		data:demo_data,
		// 		toolbar:'#toolbar',
		// 		search:"true",
		// 		classes:'table table-bordered',
		// 		// showRefresh:"true",
		// 		// showToggle:"true",
		// 		// showFullscreen:"true",
		// 		// showColumns:"true",
		// 		// showColumnsToggleAll:"true",
		// 		// detailView:"true",
		// 		showExport:"true",
		// 		// clickToSelect:"true",
		// 		detailFormatter:"detailFormatter",
		// 		minimumCountColumns:"1",
		// 		// showPaginationSwitch:"true",
		// 		pagination:"true",
		// 		// onlyInfoPagination:"true",
		// 		idField:"id",
		// 		pageList:"[10, 25, 50, 100, all]",
		// 		// showFooter:"true",
		// 		sidePagination:"client",
		// 		responseHandler:"responseHandler",
	
		// 		columns:[
		// 			{	field: 'state', 
		// 				align: 'center', 
		// 				valign: 'middle',
		// 				checkbox: true
		// 			},
		// 			{	
		// 				field: 'username',	
		// 				title: 'Username',	
		// 				align: 'center'
		// 			},{	
		// 				field: 'lastLoggedIn', 
		// 				title: 'Last Logged In', 
		// 				align: 'center'
		// 			},{	
		// 				field: 'operate', 
		// 				title: '<i class="fa fa-trash"></i>', 
		// 				align: 'center', 
		// 				width: 50,	
		// 				widthUnit: "px", 
		// 				clickToSelect: false, 
		// 				events: window.operateEvents, 
		// 				formatter: actionFormatter
		// 		}]
		// 	})
		
		// 	table['one'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 		table['one'].selections = $.map(table['one'].table.bootstrapTable('getSelections'), function (row) {	return row.username	})
		// 	});
	
		// 	$logSelected.click(	function () {
		// 		console.log(JSON.stringify(table['one'].selections));
		// 	})
		// }
	
		// if(table['two'])
		// {	// Init Test Table
		// 	table['two'].table.bootstrapTable('destroy').bootstrapTable({
		// 		data:demo_data,
		// 		toolbar:'#toolbar2',
		// 		search:"true",
		// 		classes:'table table-bordered',
		// 		// showRefresh:"true",
		// 		// showToggle:"true",
		// 		// showFullscreen:"true",
		// 		// showColumns:"true",
		// 		// showColumnsToggleAll:"true",
		// 		// detailView:"true",
		// 		showExport:"true",
		// 		// clickToSelect:"true",
		// 		detailFormatter:"detailFormatter",
		// 		minimumCountColumns:"1",
		// 		// showPaginationSwitch:"true",
		// 		pagination:"true",
		// 		// onlyInfoPagination:"true",
		// 		idField:"id",
		// 		pageList:"[10, 25, 50, 100, all]",
		// 		// showFooter:"true",
		// 		sidePagination:"client",
		// 		responseHandler:"responseHandler",
	
		// 		columns:[
		// 			{	field: 'state', 
		// 				align: 'center', 
		// 				valign: 'middle',
		// 				checkbox: true
		// 			},{	
		// 				field: 'username',	
		// 				title: 'Username',	
		// 				align: 'center'
		// 			},{	
		// 				field: 'lastLoggedIn', 
		// 				title: 'Last Logged In', 
		// 				align: 'center'
		// 			},{	
		// 				field: 'operate', 
		// 				title: '<i class="fa fa-trash"></i>', 
		// 				align: 'center', 
		// 				width: 50,	
		// 				widthUnit: "px", 
		// 				clickToSelect: false, 
		// 				events: window.operateEvents, 
		// 				formatter: actionFormatter
		// 		}]
		// 	})
		
		// 	table['two'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 		table['two'].selections = $.map(table['two'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		// 	});
	
		// 	$logSelected2.click( function () {
		// 		console.log(JSON.stringify(table['two'].selections));
		// 	})
		// }
	}

	{

		
		// if(table['students'])
		// {	// Init Test Table
		// 	// table['students'].table.bootstrapTable('destroy').bootstrapTable({
		// 	// 	data:demo_data,
		// 	// 	toolbar:'#toolbar_students',
		// 	// 	search:"true",
		// 	// 	classes:'table table-bordered',
		// 	// 	// showRefresh:"true",
		// 	// 	// showToggle:"true",
		// 	// 	// showFullscreen:"true",
		// 	// 	// showColumns:"true",
		// 	// 	// showColumnsToggleAll:"true",
		// 	// 	// detailView:"true",
		// 	// 	showExport:"true",
		// 	// 	// clickToSelect:"true",
		// 	// 	detailFormatter:"detailFormatter",
		// 	// 	minimumCountColumns:"1",
		// 	// 	// showPaginationSwitch:"true",
		// 	// 	pagination:"true",
		// 	// 	// onlyInfoPagination:"true",
		// 	// 	idField:"id",
		// 	// 	pageList:"[10, 25, 50, 100, all]",
		// 	// 	// showFooter:"true",
		// 	// 	sidePagination:"client",
		// 	// 	responseHandler:"responseHandler",
	
		// 	// 	columns:[
		// 	// 		{	field: 'state', 
		// 	// 			align: 'center', 
		// 	// 			valign: 'middle',
		// 	// 			checkbox: true
		// 	// 		},{	
		// 	// 			field: 'username',	
		// 	// 			title: 'Username',	
		// 	// 			align: 'center'
		// 	// 		},{	
		// 	// 			field: 'lastLoggedIn', 
		// 	// 			title: 'Last Logged In', 
		// 	// 			align: 'center'
		// 	// 	}]
		// 	// })
		
		// 	// table['students'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 	// 	table['students'].selections = $.map(table['students'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		// 	// });
	
		// 	// $('#logAll').click( function () {
		// 	// 	console.log(JSON.stringify(table['students'].selections));
		// 	// })
		// }
	
		// if(table['classes'])
		// {	// Init Test Table
		// 	table['classes'].table.bootstrapTable('destroy').bootstrapTable({
		// 		data:demo_data,
		// 		toolbar:'#toolbar_classes',
		// 		search:"true",
		// 		classes:'table table-bordered table-sm',
		// 		// showRefresh:"true",
		// 		// showToggle:"true",
		// 		// showFullscreen:"true",
		// 		// showColumns:"true",
		// 		// showColumnsToggleAll:"true",
		// 		// detailView:"true",
		// 		showExport:"true",
		// 		// clickToSelect:"true",
		// 		detailFormatter:"detailFormatter",
		// 		minimumCountColumns:"1",
		// 		// showPaginationSwitch:"true",
		// 		pagination:"true",
		// 		// onlyInfoPagination:"true",
		// 		idField:"id",
		// 		pageList:"[10, 25, 50, 100, all]",
		// 		// showFooter:"true",
		// 		sidePagination:"client",
		// 		responseHandler:"responseHandler",
	
		// 		columns:[
		// 			{	field: 'state', 
		// 				align: 'center', 
		// 				valign: 'middle',
		// 				checkbox: true
		// 			},{	
		// 				field: 'username',	
		// 				title: 'Student',	
		// 				align: 'center'
		// 			},{	
		// 				field: 'lastLoggedIn', 
		// 				title: 'Last Logged In', 
		// 				align: 'center'
		// 			},{	
		// 				field: 'action', 
		// 				title: 'Action', 
		// 				align: 'center',
		// 				width: 13,	
		// 				widthUnit: "%", 
		// 				formatter: class_actionFormatter
		// 			},{	
		// 				field: 'operate', 
		// 				// title: '<i class="fa fa-minus"></i>', 
		// 				align: 'center', 
		// 				width: 50,	
		// 				widthUnit: "px", 
		// 				clickToSelect: false, 
		// 				events: window.operateEvents, 
		// 				formatter: class_operatorFormatter
		// 		}]
		// 	})
		
		// 	table['classes'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 		table['classes'].selections = $.map(table['classes'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		// 	});
	
		// 	$('#logAll2').click( function () {
		// 		console.log(JSON.stringify(table['classes'].selections));
		// 	})
		// }
	
		// if(table['school_accounts'])
		// {	// Init Test Table
		// 	table['school_accounts'].table.bootstrapTable('destroy').bootstrapTable({
		// 		data:demo_data,
		// 		toolbar:'#toolbar_school_accounts',
		// 		search:"true",
		// 		classes:'table table-bordered table-sm',
		// 		// showRefresh:"true",
		// 		// showToggle:"true",
		// 		// showFullscreen:"true",
		// 		// showColumns:"true",
		// 		// showColumnsToggleAll:"true",
		// 		// detailView:"true",
		// 		showExport:"true",
		// 		// clickToSelect:"true",
		// 		detailFormatter:"detailFormatter",
		// 		minimumCountColumns:"1",
		// 		// showPaginationSwitch:"true",
		// 		pagination:"true",
		// 		// onlyInfoPagination:"true",
		// 		idField:"id",
		// 		pageList:"[10, 25, 50, 100, all]",
		// 		// showFooter:"true",
		// 		sidePagination:"client",
		// 		responseHandler:"responseHandler",
	
		// 		columns:[
		// 			{	field: 'state', 
		// 				align: 'center', 
		// 				valign: 'middle',
		// 				checkbox: true
		// 			},{	
		// 				field: 'username',	
		// 				title: 'Username',	
		// 				align: 'center'
		// 			},{
		// 				field: 'accountType',	
		// 				title: 'Account Type',	
		// 				align: 'center',
		// 				width: 20,
		// 				widthUnit: "%"
		// 			},{	
		// 				field: 'lastLoggedIn', 
		// 				title: 'Last Logged In', 
		// 				align: 'center',
		// 				width: 20,
		// 				widthUnit: "%"
		// 			},{	
		// 				field: 'actions', 
		// 				title: 'Actions', 
		// 				align: 'center',
		// 				width: 13,
		// 				widthUnit: "%",
		// 				formatter: admin_actionFormatter
		// 			},{	
		// 				field: 'operate', 
		// 				// title: '<i class="fa fa-trash"></i>', 
		// 				align: 'center', 
		// 				width: 50,	
		// 				widthUnit: "px", 
		// 				clickToSelect: false, 
		// 				events: window.operateEvents, 
		// 				formatter: actionFormatter
		// 		}]
		// 	})
		
		// 	table['school_accounts'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 		table['school_accounts'].selections = $.map(table['school_accounts'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		// 	});
	
		// 	$('#logAll2').click( function () {
		// 		console.log(JSON.stringify(table['school_accounts'].selections));
		// 	})
		// }
	
		// if(table['research_accounts'])
		// {	// Init Test Table
		// 	table['research_accounts'].table.bootstrapTable('destroy').bootstrapTable({
		// 		data:demo_data,
		// 		toolbar:'#toolbar_research_accounts',
		// 		search:"true",
		// 		classes:'table table-bordered table-sm',
		// 		// showRefresh:"true",
		// 		// showToggle:"true",
		// 		// showFullscreen:"true",
		// 		// showColumns:"true",
		// 		// showColumnsToggleAll:"true",
		// 		// detailView:"true",
		// 		showExport:"true",
		// 		// clickToSelect:"true",
		// 		detailFormatter:"detailFormatter",
		// 		minimumCountColumns:"1",
		// 		// showPaginationSwitch:"true",
		// 		pagination:"true",
		// 		// onlyInfoPagination:"true",
		// 		idField:"id",
		// 		pageList:"[10, 25, 50, 100, all]",
		// 		// showFooter:"true",
		// 		sidePagination:"client",
		// 		responseHandler:"responseHandler",
	
		// 		columns:[
		// 			{	field: 'state', 
		// 				align: 'center', 
		// 				valign: 'middle',
		// 				checkbox: true
		// 			},{	
		// 				field: 'username',	
		// 				title: 'Username',	
		// 				align: 'center'
		// 			},{
		// 				field: 'accountType',	
		// 				title: 'Account Type',	
		// 				align: 'center',
		// 				width: 20,
		// 				widthUnit: "%"
		// 			},{	
		// 				field: 'lastLoggedIn', 
		// 				title: 'Last Logged In', 
		// 				align: 'center',
		// 				width: 20,
		// 				widthUnit: "%"
		// 			},{	
		// 				field: 'actions', 
		// 				title: 'Actions', 
		// 				align: 'center',
		// 				width: 13,
		// 				widthUnit: "%",
		// 				formatter: admin_actionFormatter
		// 			},{	
		// 				field: 'operate', 
		// 				// title: '<i class="fa fa-trash"></i>', 
		// 				align: 'center', 
		// 				width: 50,	
		// 				widthUnit: "px", 
		// 				clickToSelect: false, 
		// 				events: window.operateEvents, 
		// 				formatter: actionFormatter
		// 		}]
		// 	})
		
		// 	table['research_accounts'].table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// 		table['research_accounts'].selections = $.map(table['research_accounts'].table.bootstrapTable('getSelections'), function (row) { return row.username })
		// 	});
	
		// 	$('#logAll2').click( function () {
		// 		console.log(JSON.stringify(table['research_accounts'].selections));
		// 	})
		// }
	}
})

function InitTable(table, data)
{
	table.parameters.data = data;
	table.table.bootstrapTable('destroy').bootstrapTable(table.parameters);

	table.table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		table.selections = $.map(table.table.bootstrapTable('getSelections'), function (row) { return row.username })
	});

	// $('#logAll').click( function () {
	// 	console.log(JSON.stringify(table.selections));
	// })
}


