// var $table = $('#table')
var studentTable = $('#students')
var classTable = $('#classes')

var $remove = $('#remove')
var $logSelected = $('#logAll')
var $idFeild = 'username'
var selections = []

function getIdSelections($table) {
	return $.map($table.bootstrapTable('getSelections'), function (row) {
	return row.username
	})
}

function responseHandler(res) {
	$.each(res.rows, function (i, row) {
		// row.state = $.inArray(row.username, selections) !== -1;
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
	// 'click .like': function (e, value, row, index) {
	// alert('You click like action, row: ' + JSON.stringify(row))
	// },
	// 'click .remove': function (e, value, row, index) {
	// $table.bootstrapTable('remove', {
	// 	field: 'id',
	// 	values: [row.id]
	// })
	// },
	'click .log': function (e, value, row, index) {
	console.log(JSON.stringify(row))
	}
}

function initTable(data, $table) {
	$table.bootstrapTable('destroy').bootstrapTable({
		// height: 550,
		data:data,
		locale: $('#locale').val(),
		columns:[{
			field: 'state',
			checkbox: true,
			align: 'center',
			valign: 'middle'
		}
		// , 
		// {
		// 	title: 'ID',
		// 	field: 'id',
		// 	align: 'center',
		// 	valign: 'middle',
		// 	width: 50,
		// 	widthUnit: "px"
		// }
		, 
		{
			field: 'username',
			title: 'Username',
			align: 'center'
		}
		, 
		{
			field: 'lastLoggedIn',
			title: 'Last Logged In',
			align: 'center'
		}
		, 
		{
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

	$table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
		// $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)
		// save your data, here just save the current page
		selections = getIdSelections($table)
		// push or splice the selections if you want to save all data selections
	})

	// $remove.click(function () {
	// 	var ids = getIdSelections()
	// 	$table.bootstrapTable('remove', {
	// 		field: $idFeild,
	// 		values: ids
	// 	})
	// 	$remove.prop('disabled', true)
	// })


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

$(function() {

	// XHR_Init_Table();

	$logSelected.click(	function () {
		console.log(JSON.stringify(selections));
	})
	var data = 
	[
		{
			"username": 'Test',
			"lastLoggedIn": "0",
		}
		,
		{
			"username": 'Test',
			"lastLoggedIn": "0",
		}
		,
		{
			"username": 'Test',
			"lastLoggedIn": "0",
		}
		,
		{
			"username": 'Test',
			"lastLoggedIn": "0",
		}
	]
	initTable(data, studentTable)
	initTable(data, classTable)

	

	// $('#locale').change(initTable)
})








// $(function() {
// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() 
// 	{
// 		if (this.readyState == 4 && this.status == 200) 
// 		{
// 			var obj = JSON.parse(xhttp.responseText);
// 			console.log(obj);
// 			intialiseTable(obj.data);
// 		}
// 	};
// 	xhttp.open("GET", "../php/requests/get_students.php", true);
// 	xhttp.send();
// })

// var $table = $('#students');

// function intialiseTable(data){

//     $table.bootstrapTable({data: data});

// 	$table.bootstrapTable({
// 		data: data,
// 		columns:
// 			[{
// 			  title: 'Username',
// 			  field: 'username',
// 			}, {
// 			  title: 'Last Logged In',
// 			  feild: 'lastLoggedIn',
// 			  formatter:dateFormatter
// 			}]
// 	});
// }

// function dateFormatter(){
// 	return lastLoggedIn;
// }

// intialiseTable(null);

// $(function() {
// 	var $table = $('#students');
// 	var data = 
// 	[
// 		{'username': "test", 'lastloggedIn': 'Item1'},
// 		{'username': "test", 'lastloggedIn': 'Item2'},
// 		{'username': "test", 'lastloggedIn': 'Item3'},
// 		{'username': "test", 'lastloggedIn': 'Item4'},
// 		{'username': "test", 'lastloggedIn': 'Item5'}
//     ]
//     $table.bootstrapTable({data: data});
// })


// function Table_TempData()
// {
// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() 
// 	{
// 		if (this.readyState == 4 && this.status == 200) 
// 		{
// 			var obj = JSON.parse(xhttp.responseText);
// 			console.log(obj);

// 			var $table = $('#example');
// 			$table.bootstrapTable({data: data});
// 		}
// 	};
// 	xhttp.open("GET", "../php/requests/get_students.php", true);
// 	xhttp.send();
// }

// function Table_TempData()
// {
// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() 
// 	{
// 		if (this.readyState == 4 && this.status == 200) 
// 		{
// 			var obj = JSON.parse(xhttp.responseText);
// 			console.log(obj);
// 			$('#example').DataTable( {
// 				"data" : obj.data,
// 				columns: [
// 					{ "data": "plotNumber" },
// 					{ "data": "temp" }
// 				]
// 			} );
// 		}
// 	};
// 	xhttp.open("GET", "../php/requests/get_lightTempData.php", true);
// 	xhttp.send();
// }


// function Table_Students()
// {
// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() 
// 	{
// 		if (this.readyState == 4 && this.status == 200) 
// 		{
// 			var obj = JSON.parse(xhttp.responseText);
// 			console.log(obj);

// 			$('#example').DataTable( {
// 				"data" : obj.data,
// 				columns: [
// 					{ "data": "username" },
// 					{ "data": "lastLoggedIn" }
// 				]
// 			} );
// 		}
// 	};
// 	xhttp.open("GET", "../php/requests/get_students.php", true);
// 	xhttp.send();
// }


// function Table_Classes()
// {
// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() 
// 	{
// 		if (this.readyState == 4 && this.status == 200) 
// 		{
// 			var obj = JSON.parse(xhttp.responseText);
// 			console.log(obj);

// 			$('#example2').DataTable( {
// 				"data" : obj.data,
// 				columns: [
// 					{ "data": "classId" },
// 					{ "data": "className" },
// 					{ "data": "teacher_username" }
// 				]
// 			} );
// 		}
// 	};
// 	xhttp.open("GET", "../php/requests/get_classes.php", true);
// 	xhttp.send();
// }
