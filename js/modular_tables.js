var demo_data = [
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"},
	{"username": 'Test', "lastLoggedIn": "0"}
];


// Whats does a table need
/*
	table element

*/

class Table{
	constructor(t){
		this.table = t;
		this.data = null;
		this.columns = null;
		this.selections = null;
	}

	Init(){
		this.table.bootstrapTable('destroy').bootstrapTable({
			data:this.data,
			columns:this.columns
		})
	
		this.table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			// save your data, here just save the current page
			this.selections = this.table.bootstrapTable('getSelections')
			
			// push or splice the selections if you want to save all data selections
		})

	}
}


var testTable01 = $('#testTable')

var $logSelected = $('#logAll')
var $idFeild = 'username'
var selections = []




testTable01_columns = 
[
	{	field: 'state', checkbox: true, align: 'center', valign: 'middle'}, 
	{	field: 'username',	title: 'Username',	align: 'center'}, 
	{	field: 'lastLoggedIn', title: 'Last Logged In', align: 'center'}, 
	{	field: 'operate', title: '<i class="fa fa-trash"></i>', align: 'center', width: 50,	widthUnit: "px", clickToSelect: false, events: window.operateEvents, formatter: actionFormatter}
]





function getIdSelections() {
	return $.map($table.bootstrapTable('getSelections'), function (row) {
	return row.username
	})
}

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

function initTable(data, $table, columns) {
	$table.bootstrapTable('destroy').bootstrapTable({
		data:data,
		columns:columns
	})

	$table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// save your data, here just save the current page
		selections = getIdSelections($table)
		// push or splice the selections if you want to save all data selections
	})



	$logSelected.click(	function () {
		console.log(JSON.stringify(selections));
	})
}

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

var table = new Table($('#testTable'));
table.data = demo_data;
table.columns = testTable01_columns;
table.Init();

$(function() {

	// XHR_Init_Table();
	
	// var options = new Option();
	// var options = testTable01;
	// console.log(options[0].dataset);
	// console.log(options[0]);
	$logSelected.click(	function () {
		console.log(JSON.stringify(table.selections));
	})

	console.log(table);



	// initTable(demo_data, testTable01, testTable01_columns)
})

console.log(table);

