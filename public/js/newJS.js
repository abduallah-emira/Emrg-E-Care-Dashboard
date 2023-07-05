function getprogramss() {
    var program = document.getElementById("major_code").value;
    $.get("/universitybylaws/bylawgradingschema/getprograms/" + program, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Program </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                data[i]["name_english"]
                "</option>";
        }
        $("#program_code").html(select + htmlOut);
    });
}


function getcourses() {
    var bylaw_code = document.getElementById("bylaw").value;
    $.get("/universitybylaws/equivalentcourses/getorgcourses/" + bylaw_code, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Original Course </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "Course Code EN:"+" "+
                data[i]["course_code_english"]+" "+ "|" +" "+
                "Name EN:"+" "+

                data[i]["course_name_english"]+" "+"|"+" "+
                "Code AR:"+" "+
                data[i]["course_code_arabic"]+" "+ "|" +" "+
                "Name AR:"+" "+
                data[i]["course_name_arabic"]
                "</option>";
        }
        $("#course_catalog_code").html(select + htmlOut);
    });
}


function getEquivalentcourses() {
    var bylaw_code = document.getElementById("Equivalentbylaw").value;
    $.get("/universitybylaws/equivalentcourses/getorgcourses/" + bylaw_code, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Equivalent Course </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "Course Code EN:"+" "+
                data[i]["course_code_english"]+" "+ "|" +" "+
                "Name EN:"+" "+

                data[i]["course_name_english"]+" "+"|"+" "+
                "Code AR:"+" "+
                data[i]["course_code_arabic"]+" "+ "|" +" "+
                "Name AR:"+" "+
                data[i]["course_name_arabic"]
                "</option>";
        }
        $("#equivilence_course_code").html(select + htmlOut);
    });
}


function getreq() {
    var majorsheet = document.getElementById("majorsheet_code").value;
    $.get("/universitybylaws/majorsheetreqgroupcontent/getreqdefinition/" + majorsheet, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Major Sheet Requirement Definition </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "MajorSheet Req.Definition EN:"+" "+
                data[i]["name_english"]+ " "+ "|" +" "+
                "Majorsheet Req Definition AR:"+" "+
                data[i]["name_arabic"]
                "</option>";
        }
        $("#sheet_req_code").html(select + htmlOut);
    });

}


function getreqgroup() {
    var majorsheetreq = document.getElementById("sheet_req_code").value;
    $.get("/universitybylaws/majorsheetreqgroupcontent/getreqgroup/" + majorsheetreq, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Major Sheet Requirement Group </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "MajorSheet Req.Group EN:"+" "+
                data[i]["name_english"]+ " "+ "|" +" "+
                "Majorsheet Req Group AR:"+" "+
                data[i]["name_arabic"]
                +
                " " + "|" + " "
                +"CR:"+" "+
                data[i]["number_of_credit_hours_must_complete_from_this_group"]
                "</option>";
        }
        $("#req_group_code").html(select + htmlOut);
    });

}



function getbuildings() {
    var campus = document.getElementById("campuse_code").value;
    $.get("/classscheduling/rooms/getbuildings/" + campus, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Building </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "Name EN:"+" "+
                data[i]["name_english"]+ " "+ "|" +" "+
                "Name AR:"+" "+
                data[i]["name_arabic"]
                +
                " " + "|" + " "
                +"Location:"+" "+
                data[i]["location"]
                "</option>";
        }
        $("#building").html(select + htmlOut);
    });
}

function getdepartments() {
    var faculty = document.getElementById("faculty_code").value;
    $.get("/hr/instructors/getdepartments/" + faculty, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Department </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                "Name EN:"+" "+
                data[i]["name_english"]+ " "+ "|" +" "+
                "Name AR:"+" "+
                data[i]["name_arabic"]
                +
                "</option>";
        }
        $("#department_code").html(select + htmlOut);
    });
}
