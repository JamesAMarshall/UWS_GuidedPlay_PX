//------------------------------------------
// @Global Variables 


//------------------------------------------
// @Page Management 
{
	function GoToPage(page_element)
	{
		var page = document.getElementById(page_element);
		var pages = document.getElementsByClassName("page");

		for (let index = 0; index < pages.length; index++) {
			const element = pages[index];
			element.classList.add("d-none");
		}		

		page.classList.remove("d-none");
	}

}


//------------------------------------------
// @XHTTP Requests
{
	function PHP_Request(method, path, callback, formData = null)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				var obj = JSON.parse(xhttp.responseText);
				callback(obj);
			}
		};
		xhttp.open(method, path, true);

		if(formData) xhttp.send(formData);
		else 		 xhttp.send();
	}

	function CheckSession()
	{
		PHP_Request("GET", "../php/requests/check_session.php", DirectTo);
	}
}

//------------------------------------------
// @Validation
{

	function SetError(errorId, visible)
	{
		var error = document.getElementById(errorId);
		
		if(error.classList.contains("invalid-feedback"))
		{
			error.style.display = (visible) ? "inline" : "none";
		}
		else
		{
			error.style.visibility = (visible) ? "visible" : "hidden";
		}
	}

	{ // Input Validation Functions
		// Default validation checks if input element is empty
		function DefaultValidation(elementId) 
		{ 
			var input = document.getElementById(elementId);
			var isInputValid;
			
			// Does input element contain a value
			isInputValid = CheckRequired(input);

			// Show or hide the corresponding error span based on isInputValid
			SetError(elementId + "_error", !isInputValid);

			return isInputValid;
		}

		// Default validation checks if input element is empty
		function ValidateUsername(elementId) 
		{ 	
			console.log("Currently username is validation just uses DefaultValidation(). To be changed in the future");
			return DefaultValidation(elementId);
		}

		// Validates an input to meet the requirements of a passowrd
		function ValidatePassword(elementId)
		{
			var passwordConditions = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
			var input = document.getElementById(elementId);
			var isInputValid;
			
			// Does the input value match the regular expression
			isInputValid = input.value.match(passwordConditions);
			
			// Show or hide the corresponding error span based on isInputValid
			SetError(elementId + "_error", !isInputValid);

			return isInputValid;
		} 

		// Validates a password with another to ensure they match
		function ValidateConfirmPassword(elementId, passwordId)
		{
			var passwordConditions = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=\S+$).{6,20}$/;
			var input = document.getElementById(elementId);
			var password = document.getElementById(passwordId);
			var isInputValid;
			
			// Does the input value match the regular expression
			isInputValid = input.value.match(passwordConditions);
			
			// Compare Confirm password with password input
			if(input.value != password.value) isInputValid = false;

			// Show or hide the corresponding error span based on isInputValid
			SetError(elementId + "_error", !isInputValid);

			return isInputValid;
		}
	}

	// Check the input element isn't empty
	function CheckRequired(val) 
	{ 
		var val_len = val.value.length;
		if (val_len == 0 || val.value ==  null) {
				val.focus();
				return false;
		}
		return true;
	}

	function ValidateFile(){}
	
}

//------------------------------------------
// @Table Code
{
	var table = [];
	var emptydata = {};

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
		
		function accountTypeFormatter(value, row, index) {
			var type;
			switch (value) {
				case "0" : type = "Student"; break;
				case "1" : type = "Teacher"; break;
				case "2" : type = "Community"; break;
				case "3" : type = "Researcher"; break;
				case "4" : type = "Admin Researcher"; break;
				case "5" : type = "Admin Teacher"; break;
				default: type = "Error"; break;
			}
			return type;
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
		
		function s_admin_actionFormatter(value, row, index) {
			return [
				'<button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Set Account Type </button>',
				'<div class="dropdown-menu">',
				'<a class="set_to_student dropdown-item" href="javascript:void(0)" title="">Student</a>',
				'<a class="set_to_teacher dropdown-item" href="javascript:void(0)" title="">Teacher</a>',
				'<a class="set_to_teacherAdmin dropdown-item" href="javascript:void(0)" title="">Admin</a>',
				'</div>',
				'<a class="reset btn btn-primary btn-sm mx-1" href="javascript:void(0)" title="reset">',
				'Reset Password',
				'</a>',
				'<a class="log btn btn-sm border-danger" href="javascript:void(0)" title="Log">',
				'<i class="fa fa-trash mx-1"></i>',
				'</a>'
			].join('')
		}
		
		function r_admin_actionFormatter(value, row, index) {
			return [
				'<button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Set Account Type </button>',
				'<div class="dropdown-menu">',
				'<a class="set_to_researcher dropdown-item" href="javascript:void(0)" title="">Researcher</a>',
				'<a class="set_to_researcherAdmin dropdown-item" href="javascript:void(0)" title="">Admin</a>',
				'</div>',
				'<a class="reset btn btn-primary btn-sm mx-1" href="javascript:void(0)" title="reset">',
				'Reset Password',
				'</a>',
				'<a class="log btn btn-sm border-danger" href="javascript:void(0)" title="Log">',
				'<i class="fa fa-trash mx-1"></i>',
				'</a>'
			].join('')
		}
	
	
		function studentActionFormatter(value, row, index) {
			return [
				'<a class="add_student btn btn-primary btn-sm mx-1" href="javascript:void(0)" title="add">',
				'Add to Class',
				'</a>'
			].join('')
		}
	
		window.operateEvents = {
			'click .log': function (e, value, row, index) {
				Deactivate(row.username);
			},
			'click .set_to_student': function (e, value, row, index) {
				SetAccount(0,row.username);
			},
			'click .set_to_teacher': function (e, value, row, index) {
				SetAccount(1,row.username);
			},
			'click .set_to_teacherAdmin': function (e, value, row, index) {
				SetAccount(5,row.username);
			},
			'click .set_to_researcherAdmin': function (e, value, row, index) {
				SetAccount(4,row.username);
			},
			'click .set_to_researcher': function (e, value, row, index) {
				SetAccount(3,row.username);
			},
			'click .reset': function (e, value, row, index) {
				ResetPassword(row.username);
			},
			'click .add_student': function (e, value, row, index) {
				var c = document.getElementById("input_classId").value;
				AddStudentToClass(row.username, c);
			}
		}
	}	

	if(page == "school")
	{
		table['schoolaccounts'] = { table : $('#school_accounts'), selections : [], parameters: {} };

		table['schoolaccounts'].parameters = {
			data:emptydata,
			toolbar:'#toolbar_school_accounts',
			search:"true",
			classes:'table table-bordered table-sm',
			sortable: "true",
			showRefresh:"true",
			detailFormatter:"detailFormatter",
			minimumCountColumns:"1",
			pagination:"true",
			idField:"id",
			pageList:"[10, 25, 50, 100, all]",
			sidePagination:"client",
			responseHandler:"responseHandler"
		}
		table['schoolaccounts'].parameters.columns = [
			{	
				field: 'state', 
				align: 'center', 
				valign: 'middle',
				width: 50,	
				widthUnit: "px", 
				checkbox: true
			},{	
				field: 'username',	
				title: 'Username',
				sortable: "true",
				align: 'center'
			},{
				field: 'accountType',	
				title: 'Account Type',	
				align: 'center',
				width: 15,
				widthUnit: "%",
				sortable: "true",
				formatter: accountTypeFormatter
			},{	
				field: 'lastLoggedIn', 
				title: 'Last Logged In', 
				align: 'center',
				sortable: "true",
				width: 20,
				widthUnit: "%"
			},{	
				field: 'actions', 
				title: 'Actions', 
				align: 'center',
				width: 29,
				widthUnit: "%",
				events: window.operateEvents, 
				formatter: s_admin_actionFormatter
		}]
	}

	if(page == "research")
	{
		table['sensordata'] = { table : $('#sensordata_table'), selections : [], parameters: {} };
		table['observationdata'] = { table : $('#observation_table'), selections : [], parameters: {} };
		table['research_accounts'] = { table : $('#research_accounts'), selections : [], parameters: {} };

		{ // LightTemp Table
			table['sensordata'].parameters = {
				data:emptydata,
				toolbar:'#sensordata_toolbar',
				search:"true",
				classes:'table table-bordered table-sm',
				showColumns:"true",
				showExport:"true",
				detailFormatter:"detailFormatter",
				minimumCountColumns:"1",
				pagination:"true",
				idField:"id",
				pageList:"[10, 25, 50, 100, all]",
				sidePagination:"client"
			}
			table['sensordata'].parameters.columns = [
				{	
					field: 'deviceId',	
					title: 'Device',
					align: 'center'
				},{
					field: 'username',	
					title: 'Uploader'
				},{	
					field: 'plotNumber', 
					title: 'Plot',
					align: 'center'
				},{	
					field: 'dateTime', 
					title: 'Date Time',
					align: 'center'
					// formatter: dateTimeFormatter
				},{	
					field: 'temp', 
					title: 'Temp C',
					width: '80',
					widthUnit:'px'
				},{	
					field: 'intensity', 
					title: 'Light'
				},{	
					field: 'couplerDetached', 
					title: 'Detached',
					align: 'center'
				},{	
					field: 'couplerAttached', 
					title: 'Attached',
					align: 'center'
				},{	
					field: 'hostConnected', 
					title: 'Host Connected',
					align: 'center'
				},{	
					field: 'stopped', 
					title: 'Stopped',
					align: 'center'
				},{	
					field: 'endOfFile', 
					title: 'End Of File',
					align: 'center'
			}]
		}

		{ // Observation Table
			table['observationdata'].parameters = {
				data:emptydata,
				toolbar:'#observation_toolbar',
				search:"true",
				classes:'table table-bordered table-sm',
				showColumns:"true",
				showExport:"true",
				detailFormatter:"detailFormatter",
				minimumCountColumns:"1",
				pagination:"true",
				idField:"id",
				pageList:"[10, 25, 50, 100, all]",
				sidePagination:"client"
			}
			table['observationdata'].parameters.columns = [
				{	
					field: 'observationId',	
					title: 'Id',
					align: 'center'
				},{
					field: 'username',	
					title: 'User'
				},{
					field: 'weather',	
					title: 'Weather'
				},{
					field: 'temperature',	
					title: 'Temperature'
				},{
					field: 'wind',	
					title: 'Wind'
				},{
					field: 'animal',	
					title: 'Animals'
				},{
					field: 'anim_plant',	
					title: 'Plants Visited'
				},{
					field: 'harvest_plant',	
					title: 'Harvestable Plants'
				},{
					field: 'size',	
					title: 'Size'
				},{
					field: 'location',	
					title: 'Location'
				},{
					field: 'healthy_plant',	
					title: 'Healthy Plant'
				},{
					field: 'reason',	
					title: 'Reason'
			}]
		}
		
		{ // Accounts
			table['research_accounts'].parameters = {
				data:emptydata,
				toolbar:'#toolbar_research_accounts',
				search:"true",
				classes:'table table-bordered table-sm',
				showRefresh:"true",
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
				{	
					field: 'state', 
					align: 'center', 
					valign: 'middle',
					width: 50,	
					widthUnit: "px", 
					checkbox: true
				},{	
					field: 'username',	
					title: 'Username',
					sortable: "true",
					align: 'center'
				},{
					field: 'accountType',	
					title: 'Account Type',	
					align: 'center',
					width: 15,
					widthUnit: "%",
					sortable: "true",
					formatter: accountTypeFormatter
				},{	
					field: 'lastLoggedIn', 
					title: 'Last Logged In', 
					align: 'center',
					sortable: "true",
					width: 20,
					widthUnit: "%"
				},{	
					field: 'actions', 
					title: 'Actions', 
					align: 'center',
					width: 29,
					widthUnit: "%",
					events: window.operateEvents, 
					formatter: r_admin_actionFormatter
			}]
		}

	}

	function InitTable(table, data)
	{
		table.parameters.data = data;
		table.table.bootstrapTable('destroy').bootstrapTable(table.parameters);

		table.table.on('check.bs.table uncheck.bs.table ' + 'check-all.bs.table uncheck-all.bs.table', function () {
			table.selections = $.map(table.table.bootstrapTable('getSelections'), function (row) { return row.username })
		});

		table.table.bootstrapTable('hideLoading');
	}

	function Set_Table_LightTempData(response)
	{
		if(response.success)
		{
			if(response.result)
			{
				console.log("Setting Up table");
				InitTable(table['sensordata'], response.result);
			}
		}
	}

	function Set_Table_SchoolAccounts(response)
	{
		if(response.success)
		{
			if(response.result)
			{
				console.log("Setting Up table");
				InitTable(table['schoolaccounts'], response.result);
			}
		}
	}

	function Set_Table_ResearchAccounts(response)
	{
		if(response.success)
		{
			if(response.result)
			{
				console.log("Setting Up table");
				InitTable(table['research_accounts'], response.result);
			}
		}
	}

	function Set_Table_ObservationData(response)
	{
		if(response.success)
		{
			if(response.result)
			{
				console.log("Setting Up table");
				InitTable(table['observationdata'], response.result);
			}
		}
	}

	function GetClass()
	{
		var classId = document.getElementById("input_classId");
		var formData = new FormData();
		formData.append("classId", classId.value);


		PHP_Request("POST", "../php/requests/get_class.php", console.log, formData);

	}

	function SetAccount(accountType, user)
	{
		console.log("Set:" + JSON.stringify(user) + "'s accountType To: Student");
				
		var formData = new FormData();
		formData.append("username", user);
		formData.append("accountType", accountType);

		PHP_Request("POST", "../php/requests/set_accounttype.php", console.log, formData);
	}

	function ResetPassword(user)
	{
		console.log("Reset:" + JSON.stringify(user) + "'s Password");
				
		var formData = new FormData();
		formData.append("username", user);

		PHP_Request("POST", "../php/requests/set_password.php", console.log, formData);
	}

	function Deactivate(user)
	{
		console.log("Deactivate:" + JSON.stringify(user) + "'s Account");
				
		var formData = new FormData();
		formData.append("username", user);

		PHP_Request("POST", "../php/requests/set_accountdeactive.php", console.log, formData);
	}

	function AddStudentToClass(user, classId)
	{
		console.log("Add:" + JSON.stringify(user) + "To class");
				
		var formData = new FormData();
		formData.append("username", user);
		formData.append("classId", classId);

		PHP_Request("POST", "../php/requests/set_addStudentToClass.php", console.log, formData);
	}
	
}

//------------------------------------------
// @Account Management
{
	function Login()
	{
		var valid = true;

		valid = ValidateUsername("login_username") ? valid : false;
		valid = ValidatePassword("login_password") ? valid : false;
	
		if(!valid) return;
		else console.log("LogIn credentials are valid");

		var username = document.getElementById("login_username").value;
		var password = document.getElementById("login_password").value;
	
		var formData = new FormData();
		formData.append("username", username);
		formData.append("password", password);

		PHP_Request("POST", "../php/requests/check_login.php", DirectTo,  formData);
	}

	function Signup()
	{
		var valid = true;

		valid = ValidateUsername("signup_username") ? valid : false;
		valid = ValidatePassword("signup_password") ? valid : false;
		valid = ValidateConfirmPassword("signup_confirmPassword", "signup_password") ? valid : false;
	
		if(!valid) return;
		else console.log("SignUp credentials are valid");

		var username = document.getElementById("signup_username").value;
		var password = document.getElementById("signup_password").value;
	
		var formData = new FormData();
		formData.append("username", username);
		formData.append("password", password);

		PHP_Request("POST", "../php/requests/set_newaccount.php", DirectTo,  formData);
	}

	function Logout()
	{
		PHP_Request("GET", "../php/requests/set_logout.php", DirectTo);
	}

	function DirectTo(response)
	{
		// console.log(response);

		if(response.success)
		{
			if(response.session.accountType != null)
			{
				if(response.session.user)
				{
					user = response.session.user;
					// console.log(user);
				}


				switch (response.session.accountType) {
					case "0":
					case "1":
					case "5":{
						window.location.assign("../html/school.php");
						break;
					}
					case "3":
					case "4":{
						window.location.assign("../html/research.php");
						break;
					}
					case 0:
						case 1:
						case 2:{
							window.location.assign("../html/school.php");
							break;
						}
						case 3:
						case 4:{
							window.location.assign("../html/research.php");
							break;
						}
					default:
						break;
				}
			}
			else
			{
				return;
			}
		}
		else { window.location.assign("../index.php"); }
		


	}

	function GetUser(response)
	{
		if(response.result)
		{
			var user_element = document.getElementById("username");
			user_element.innerHTML = response.result;
			// console.log("Set");
		}
	}
}


//------------------------------------------
// @School
//------------------------------------------
{
	function SetSchoolPage()
	{
		CheckSession();
		PHP_Request("GET", "../php/requests/get_currentuser.php", GetUser);
		PHP_Request("GET", "../php/requests/get_schoolaccounts.php", Set_Table_SchoolAccounts);
	}

	//------------------------------------------
	// @Observation
	{

		var weather = { question:"q1", answer:""};
		var temp = { question:"q2", answer:""};
		var wind = { question:"q3", answer:""};
		var animals = { question:"q4", answer:null};
		var harvestable = { question:"q6", answer:null};
		var healthy =  { question:"q9", answer:null};
		
		q5_i = -1;
		q7_i = -1;
		q8_i = -1;
		q10_i = -1;

		if(page == "school")
		{
			ClearSelection("q1");
			ClearSelection("q2");
			ClearSelection("q3");
			ClearSelection("q4");
			ClearSelection("q5");
			ClearSelection("q6");
			ClearSelection("q7");
			ClearSelection("q8");
			ClearSelection("q9");
			ClearSelection("q10");
		}


		var q = "q1";

		{
			function Next()
			{
				console.log("Next called on "+q);
				switch (q) {
					case "q1": {
						weather.answer = GetAnswer(q);
						// console.log(weather.answer);

						if(weather.answer)
						{
							q="q2";
							GoToPage(q);
							SetBar('bar', 10);
							SetError("q1_invalid", false);
						}
						else { SetError("q1_invalid", true); }
						break;
					}
					case "q2": {
						temp.answer = GetAnswer(q);
						console.log(temp.answer);
						if(temp.answer)
						{
							q="q3";
							GoToPage(q);
							SetBar('bar', 20);
							SetError("q2_invalid", false);
						}
						else { SetError("q2_invalid", true); }
	
						break;
					}
					case "q3": {
						wind.answer =  GetAnswer(q);
						// console.log(wind.answer);
						if(wind.answer)
						{
							q="q4";
							GoToPage(q);
							SetBar('bar', 30);
							SetError("q3_invalid", false);
						}
						else { SetError("q3_invalid", true); }
						break;
					}
					case "q4": {
						if(!animals.answer)
						{
							animals.answer = GetAnswer(q, "animals");
						}
						else
						{
							var answer = GetAnswer(q, "animals");

							if(answer)
							{
								for (let i = 0; i < animals.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].animal == animals.answer[i].animal) {
											isInAnswer = true;
										}
	
										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + animals.answer[i].animal);
											animals.answer.splice(i,1);
										}	
									}
								}
	
								for (let i = 0; i < animals.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].animal == animals.answer[i].animal) {
											answer.splice(j,1);
										}
									}
								}
	
								for (let index = 0; index < answer.length; index++) {
									const element = answer[index];
									animals.answer.push(element);
								}
							}
							else
							{
								animals.answer = answer;
							}
						}

						if(animals.answer)
						{
							animal_name.innerHTML = animals.answer[0].animal;
							q="q5";
							SetBar('bar', 40);
							q5_i=-1;
							GoToPage(q);
						}
						else
						{
							q="q6";
							GoToPage(q);
						}
	
						break;
					}
					case "q5": {
						q5_i++;
						
						animals.answer[q5_i].plants = GetAnswer(q, "animal-plants");
						if(animals.answer[q5_i].plants)
						{
							if(q5_i+1 < animals.answer.length)
							{	
								animal_name.innerHTML = animals.answer[q5_i+1].animal;
								SetSelection(q, animals.answer[q5_i+1].plants);
								console.log(((q5_i+1)/animals.answer.length) / 0.1);
								SetBar('bar', 40 + ((q5_i+1)/animals.answer.length) / 0.1);
							}
							else
							{
								q="q6";
								SetBar('bar', 50);
								GoToPage(q);
							}
							SetError("q5_invalid", false);
						}
						else
						{
							SetError("q5_invalid", true);
							q5_i--;
						}
						break;
					}
					case "q6": {
						if(!harvestable.answer)
						{
							harvestable.answer = GetAnswer(q, "harvestable");
						}
						else
						{
							var answer = GetAnswer(q, "harvestable");
							if(answer)
							{
								for (let i = 0; i < harvestable.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == harvestable.answer[i].plant) {
											isInAnswer = true;
										}

										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + harvestable.answer[i].plant);
											harvestable.answer.splice(i,1);
										}	
									}
								}

								for (let i = 0; i < harvestable.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == harvestable.answer[i].plant) {
											console.log("cleared" + answer[j].plant + " from answer");
											answer.splice(j,1);
										}
									}
								}

								if(answer.length > 0)
								{
									for (let index = 0; index < answer.length; index++) {
										const element = answer[index];
										console.log("added" + harvestable.answer[index].plant + " to harvestable");
										harvestable.answer.push(element);
									}
								}
							}
							else
							{
								harvestable.answer = answer;
							}
						}


						
						if(harvestable.answer)
						{
							harvest_plant.innerHTML = harvestable.answer[0].plant;
							q="q7";
							// console.log("Go To "+ q +  "[" + q7_i + "]");
							SetBar('bar', 60);
							GoToPage(q);
						}
						else
						{
							q="q9"
							SetBar('bar', 80);
							GoToPage(q);
						}
						break;
					}
					case "q7": {
						q7_i++;	
						harvestable.answer[q7_i].size = GetAnswer(q);

						if(harvestable.answer[q7_i].size)
						{
							if(q7_i+1 < harvestable.answer.length)
							{
								harvest_plant.innerHTML = harvestable.answer[q7_i+1].plant;
								SetSelection(q, harvestable.answer[q7_i+1].size);
								SetBar('bar', 60 + ((q7_i+1)/harvestable.answer.length) / 0.1);
							}	
							else
							{
								plant_location.innerHTML = harvestable.answer[0].plant;						
								q="q8";
								SetBar('bar', 70);
								GoToPage(q);
							}
							SetError("q7_invalid", false);
						}
						else
						{
							SetError("q7_invalid", true);
							q7_i--;
						}

						break;
					}
					case "q8": {
						q8_i++;
						harvestable.answer[q8_i].location = GetAnswer(q);
						if(harvestable.answer[q8_i].location)
						{
							if(q8_i+1 < harvestable.answer.length)
							{
								plant_location.innerHTML = harvestable.answer[q8_i+1].plant;
								SetSelection(q, harvestable.answer[q8_i+1].location);
								SetBar('bar', 70 + ((q8_i+1)/harvestable.answer.length) / 0.1);
							}
							else
							{
								q="q9";
								SetBar('bar', 80);
								GoToPage(q);
							}
							SetError("q8_invalid", false);
						}
						else
						{
							SetError("q8_invalid", true);
							q8_i--;
						}

						break;
					}
					case "q9": {
						if(!healthy.answer)
						{
							healthy.answer = GetAnswer(q, "healthy");
						}
						else
						{
							var answer = GetAnswer(q, "healthy");
							if(answer)
							{
								for (let i = 0; i < healthy.answer.length; i++) {
									var isInAnswer = false;
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == healthy.answer[i].plant) {
											isInAnswer = true;
										}
	
										if(!isInAnswer && j == answer.length-1)	{
											console.log("spliced" + healthy.answer[i].plant);
											healthy.answer.splice(i,1);
										}	
									}
								}
	
								for (let i = 0; i < healthy.answer.length; i++) {
									for (let j = 0; j < answer.length; j++) {
										if(answer[j].plant == healthy.answer[i].plant) {
											console.log("cleared" + answer[j].plant + " from answer");
											answer.splice(j,1);
										}
									}
								}
	
								if(answer.length > 0)
								{
									for (let index = 0; index < answer.length; index++) {
										const element = answer[index];
										console.log("added" + healthy.answer[index].plant + " to healthy");
										healthy.answer.push(element);
									}
								}
							}
							else
							{
								healthy.answer = answer;
							}
						}


						if(healthy.answer)
						{
							healthy_plant.innerHTML = healthy.answer[0].plant;
							SetBar('bar', 90);
							q="q10";
							GoToPage(q);
						}
						else
						{
							SetBar('bar', 100);
							q="q_submit"
							GoToPage(q);
						}
						break;
					}
					case "q10": {
						q10_i++;
						healthy.answer[q10_i].reason = GetAnswer(q, "healthy-reasons");
						if(healthy.answer[q10_i].reason)
						{
							if(healthy.answer[q10_i].reason.length == 2)
							{
								if(q10_i+1 < healthy.answer.length)
								{
									healthy_plant.innerHTML = healthy.answer[q10_i+1].plant;
									SetSelection(q, healthy.answer[q10_i+1].reason);
									SetBar('bar', 90 + ((q10_i+1)/healthy.answer.length) / 0.1);
								}
								else
								{
									SetBar('bar', 100);
									q="q_submit"
									GoToPage(q);
								}
								SetError("q10_invalid",false);
							}
							else
							{
								SetError("q10_invalid",true);
								q10_i--;
							}
						}
						else
						{
							SetError("q10_invalid",true);
							q10_i--;
						}

						break;
					}
					default:
						break;
				}
			}
	
			function Previous()
			{
				console.log("Previous called on "+q);
				switch (q) {
					case "q1": {
						SetBar('bar', 0);
						break;
					}
					case "q2": {
						q="q1";
						GoToPage(q);
						SetBar('bar', 10);
						break;
					}
					case "q3": {
						q="q2";
						GoToPage(q);
						SetBar('bar', 20);
						break;
					}
					case "q4": {
						q="q3";
						GoToPage(q);
						SetBar('bar', 30);
						break;
					}
					case "q5": {
						if(q5_i < 0)
						{
							q="q4";
							GoToPage(q);
							SetBar('bar', 40);
						}
						else
						{
							animals.answer[q5_i+1].plants = GetAnswer(q, "heatlhy-reasons");
							console.log();
							animal_name.innerHTML = animals.answer[q5_i].animal;
							SetSelection(q, animals.answer[q5_i].plants);
							SetBar('bar', 40 + ((q5_i+1)/animals.answer.length) / 0.1);
							q5_i--;
						}
						break;
					}
					case "q6": {
						if(!animals.answer)
						{
							q="q4";
							GoToPage(q);
							SetBar('bar', 40);
						}
						else
						{
							q="q5";
							q5_i--;
							GoToPage(q);
							SetBar('bar',50);
						}
						break;
					}
					case "q7": {
						if(q7_i < 0)
						{
							q="q6";
							GoToPage(q);
							SetBar('bar', 60);
						}
						else
						{
							harvestable.answer[q7_i+1].size = GetAnswer(q);
							harvest_plant.innerHTML = harvestable.answer[q7_i].plant;
							SetSelection(q, harvestable.answer[q7_i].size);
							SetBar('bar', 60 + ((q7_i+1)/harvestable.answer.length) / 0.1);
							q7_i--;
						}
	
						break;
					}
					case "q8": {
						if(q8_i < 0)
						{
							q="q7";
							q7_i--;
							harvest_plant.innerHTML = harvestable.answer[harvestable.answer.length-1].plant;
							SetBar('bar', 70);
							GoToPage(q);
						}
						else
						{
							harvestable.answer[q8_i+1].location = GetAnswer(q);
							harvest_plant.innerHTML = harvestable.answer[q8_i].location;
							SetSelection(q, harvestable.answer[q8_i].location);
							SetBar('bar', 70 + ((q8_i+1)/harvestable.answer.length) / 0.1);
							q8_i--;
						}
						break;
					}
					case "q9": {
						if(!harvestable.answer)
						{
							q="q6";
							GoToPage(q);
							SetBar('bar', 60);
						}
						else
						{
							q="q8";
							q8_i--;
							GoToPage(q);
							SetBar('bar', 80);
						}
						break;
					}
					case "q10": {
						if(q10_i < 0)
						{
							q="q9";
							GoToPage(q);
							SetBar('bar', 90);
						}
						else
						{
							healthy.answer[q10_i+1].reason = GetAnswer(q, "healthy-reasons");
							healthy_plant.innerHTML = healthy.answer[q10_i].plant;
							SetSelection(q, healthy.answer[q10_i].reason);
							SetBar('bar', 90 + ((q10_i+1)/healthy.answer.length) / 0.1);
							q10_i--;
						}
						break;
					}
					case "q_submit": {
						if(!healthy.answer){
							q="q9";
							SetBar('bar', 90);
							GoToPage(q);
						}
						else
						{
							q10_i--;
							q="q10";
							SetBar('bar', 100);
							GoToPage(q);
						}
						break;
					}
					default:
						break;
				}
			}
		}

		function SubmitObservation()
		{
			var formData = new FormData();

			var answers = [weather.answer, temp.answer, wind.answer, animals.answer, harvestable.answer, healthy.answer];
			var json = JSON.stringify(answers);

			formData.append("answers", json);

			PHP_Request("POST", "../../php/requests/set_observation.php", console.log,  formData);
		}

		function ValidateSelection(name, checkbox)  
		{  
			var checkboxes = document.getElementsByName(name);  
			
			var numberOfCheckedItems = 0;
			for(var i = 0; i < checkboxes.length; i++)  
			{  
				if(checkboxes[i].checked)  
					numberOfCheckedItems++;  
			}  

			if(numberOfCheckedItems > 2)
			{
				checkbox.checked = false;
				return false;
			}
		} 

		function SetSelection(name, selections)
		{
			console.log("Set " + name + "'s selection to ");
			console.log(selections);
			if(selections)
			{
				if(Array.isArray(selections))
				{
					$.each($("input[name='" + name + "']"), function(){
						if(selections.length > 0)
						{
							for (let index = 0; index < selections.length; index++) {
								// const element = selections[index];
								if($(this).val() == selections[index])
								{
									$(this).prop('checked',true);
									return;
								}
								else
								{
									$(this).prop('checked',false);	
								}
							}
						}
						else
						{
							$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
						}
					});


				}
				else
				{
					$.each($("input[name='" + name + "']"), function(){
						if($(this).val() == selections)
						{
							$(this).prop('checked',true);	
						}
						else
						{
							$(this).prop('checked',false);	
						}
					});			
				}
			}
			else
			{
				$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
			}
		}

		function ClearSelection(name)
		{
			$.each($("input[name='" + name + "']:checked"), function(){ $(this).prop('checked',false);	});
		}

		function GetAnswer(name, answerToGet = "")
		{

				switch(answerToGet){
					case"animals":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( {animal:$(this).val(), plants:null});
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"animal-plants":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( $(this).val() );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"harvestable":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( { plant:$(this).val(), size:"", location:""} );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"healthy":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( { plant:$(this).val(), reason:null} );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}
					case"healthy-reasons":{
						var array = [];
						$.each($("input[name='" + name + "']:checked"), function(){
							array.push( $(this).val() );
						});
						if(array.length == 0) return null;
						else return array;
						break;
					}

					default: {
						return $("input[name = " + name + "]:checked").val();
						break;
					}
				}


				
			


		}

		// var i = 0;
		// function MoveBar(bar, percent) {
		// 	if (i == 0) {
		// 		i = 1;
		// 		var elem = document.getElementById(bar);
		// 		var width = 10;
		// 		var id = setInterval(frame, 10);
		// 		function frame() {
		// 			if (width >= 50) {
		// 				clearInterval(id);
		// 				i = 0;
		// 			} else {
		// 				width++;
		// 				elem.style.width = width + "%";
		// 				elem.innerHTML = width  + "%";
		// 			}
		// 		}
		// 	}
		// }

		function SetBar(bar, percent) {
			var elem = document.getElementById(bar);
			elem.style.width = percent + "%";
			elem.innerHTML = percent  + "%";
		}

	}
	
	//------------------------------------------
	// @Class Management
	{
	
	}
}


//------------------------------------------
// @Research
//------------------------------------------
{
	function SetResearchPage()
	{
		CheckSession();
		page="research";
		PHP_Request("GET", "../php/requests/get_currentuser.php", GetUser);
		PHP_Request("GET", "../php/requests/get_sensordata.php", Set_Table_LightTempData);
		PHP_Request("GET", "../php/requests/get_allobservationdata.php", Set_Table_ObservationData);
		PHP_Request("GET", "../php/requests/get_researchaccounts.php", Set_Table_ResearchAccounts);
		PHP_Request("GET", "../php/requests/get_devices.php", SetDeviceId_ToDropdown);
		PHP_Request("GET", "../php/requests/get_devicetype.php", SetDeviceType_ToDropdown);
		document.getElementById('CSVFileInput').value = null;
	}


	//------------------------------------------
	// @File Uploading
	{
		function Upload(result, deviceId)
		{
			var formData = new FormData();
			formData.append("file", JSON.stringify(result.data));
			formData.append("deviceId", deviceId);
	
			PHP_Request("POST", "../php/requests/upload_csv.php", console.log, formData);
		}

		function UploadCSV(file, deviceId) {
			Papa.parse(file, { complete: function(results) {
					Upload(results, deviceId);
				}
			});
		}

		function Upload_SensorData()
		{
			var file = document.querySelector("#CSVFileInput").files[0];
			var deviceinput = document.getElementById("deviceId-dropdown");

			if(deviceinput.value != 'Choose a Device')
			{
				SetError("deviceId_error", false);
			}
			else{
				SetError("deviceId_error", true);
				ValidateSensorFile(file);
				return;
			}

			if(ValidateSensorFile(file))
			{
				UploadCSV(file, deviceinput.value);
			}
			else return false;
		}

		function UpdateChosenFile(labelelement, input){
			var label = document.getElementById(labelelement);
			var selectedFile = document.getElementById(input);
			
			if(selectedFile.files[0].name)
			{
				label.innerHTML = selectedFile.files[0].name;
				ValidateSensorFile(selectedFile.files[0]);
			}
			
		}

		function ValidateSensorFile(file){
			if(file)
			{
				SetError('csvnofile_error', false);
				if(file.name.slice((file.name.lastIndexOf(".") - 1 >>> 0) + 2) == "csv")
				{ 
					SetError("csv_error", false);
					return true; 
				}
				else
				{
					SetError("csv_error", true);
					return false;
				}
			}
			else
			{
				SetError('csvnofile_error', true);
			}
		}

		function UpdateDeviceIds()
		{
			PHP_Request("GET", "../php/requests/get_devices.php", SetDeviceId_ToDropdown)
		}

		function SetDeviceId_ToDropdown(response)
		{
			var input = document.getElementById('deviceId-dropdown');
			
			input.length = 0;

			let defaultOption = document.createElement('option');
			defaultOption.text = 'Choose a Device';
			
			input.add(defaultOption);
			input.selectedIndex = 0;

			if(response.success)
			{
				var data = response.result;
				for (let i = 0; i < data.length; i++) {
					option = document.createElement('option');
					option.text = data[i].deviceLabel;
					option.value = data[i].deviceId;
					input.add(option);
				}

			}
		}

		function SetDeviceType_ToDropdown(response)
		{
			var input = document.getElementById('devicetype-dropdown');
			
			input.length = 0;

			let defaultOption = document.createElement('option');
			defaultOption.text = 'Choose a Device Type';
			
			input.add(defaultOption);
			input.selectedIndex = 0;

			if(response.success)
			{
				var data = response.result;
				for (let i = 0; i < data.length; i++) {
					option = document.createElement('option');
					option.text = data[i].name;
					option.value = data[i].deviceTypeId;
					input.add(option);
				}

			}
		}

		function ClearDefaultOption(id)
		{
			document.getElementById(id).options[0].disabled = true;
		}

		function AddNewDevice()
		{
			var name = document.getElementById('input_deviceName');
			var type = document.getElementById('devicetype-dropdown');

			if(name.value) {
				SetError('newdevicename_error', false);
				if(type.value != 'Choose a Device Type')
				{
					SetError('newdevicetype_error', false);
					var formData = new FormData;
					formData.append("deviceLabel", name.value);
					formData.append("deviceType", type.value);
					PHP_Request("POST", "../php/requests/set_newdevice.php", SetNewDeviceReponse, formData)
				}
				else
				{
					SetError('newdevicetype_error', true);
					document.getElementById('newdevice_message').innerHTML = null;
				}
			}
			else
			{
				SetError('newdevicename_error', true);
				document.getElementById('newdevice_message').innerHTML = null;
			}

		}

		function SetNewDeviceReponse(response)
		{
			var messsageElement = document.getElementById('newdevice_message');

			if(response.success) {
				messsageElement.innerHTML = response.result;
				PHP_Request("GET", "../php/requests/get_devices.php", SetDeviceId_ToDropdown);
			}
			else
			{
				messsageElement.innerHTML = response.result;
			}
		}
	}
	//------------------------------------------
	// @Database Interface
	{

	}

	//------------------------------------------
	// @Graphing
	{

	}
}



