
function getcatalog() {
    var bylaw_code = document.getElementById("bylaw_basic_data_code").value;
    $.get("/classscheduling/meetings/getcoursecatalog/" + bylaw_code, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Course </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                'Course Name EN :' + " " +
                data[i]["course_name_english"]+
                " " + "|" + " " +
                'Course Name AR :' + " " +
                data[i]["course_name_arabic"]
                +" " + "|" + " "
                +'Code EN:' + " " +
                data[i]["course_code_english"]+
                " " + "|" + " " +
                'Code AR:' + " " +
                data[i]["course_code_arabic"]
                "</option>";
        }
        $("#course_code").html(select + htmlOut);
    });
}


function getbuildings() {
    var campus = document.getElementById("campus_code").value;
    $.get("/classscheduling/meetings/getbuildings/" + campus, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Buliding </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                'Name EN:' + " " + 
                data[i]["name_english"]
                +" " + "|" +" "
                +'Name AR:' + " " +
                data[i]["name_arabic"]+
                "</option>";
        }
        $("#building_code").html(select + htmlOut);
    });
}


function getrooms() {
    var campus = document.getElementById("campus_code").value;
    var building = document.getElementById("building_code").value;
    var roomtype = document.getElementById("meeting_type_code").value;
    var semester = document.getElementById("semester_code").value;
    var academic = document.getElementById("academic_year_code").value;
    var day = document.getElementById("day_code").value;
    var period = document.getElementById("period_code").value;
    $.get("/classscheduling/meetings/getrooms/" + campus + "/" + building + "/" + roomtype + "/" + semester + "/" + academic + "/" + day + "/" + period, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Room </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                data[i]["code_english"]+
                "</option>";
        }
        $("#room_code").html(select + htmlOut);
    });
}

function getinstructors() {
    var campus = document.getElementById("campus_code").value;
    var building = document.getElementById("building_code").value;
    var semester = document.getElementById("semester_code").value;
    var academic = document.getElementById("academic_year_code").value;
    var day = document.getElementById("day_code").value;
    var period = document.getElementById("period_code").value;
    $.get("/classscheduling/meetings/getinstructors/" + campus + "/" + building  + "/" + semester + "/" + academic + "/" + day + "/" + period, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Instructor </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                'Name EN:' + " " + 
                data[i]["trans_en"]
                + " " +"|"+" "
                +'Name AR:' + " " +
                data[i]["trans_ar"]
                +" " + "|" + " "
                +'Department :'+
                data[i]["trans_dep_en"] + "- "+ data[i]["trans_dep_ar"]+
                " " + "|" + " "
                +'Job Title:'+" "+
                data[i]["trans_job_en"] + "- "+ data[i]["trans_job_ar"]+
                "</option>";
        }
        $("#instructor_code").html(select + htmlOut);
    });
}

function getrelatedcourses() {
    var academic = document.getElementById("academic_year_code").value;
    var campus = document.getElementById("campus_code").value;
    var building = document.getElementById("building_code").value;
    var semester = document.getElementById("semester_code").value;
    $.get("/classscheduling/meetings/getrelatedcourses/" + academic + "/" + campus + "/" + building + "/" + semester, function (response) {
        var data = JSON.parse(response);
        var select = "<option  value =\"\" selected disabled>Choose Related Meetings </option>";
        var htmlOut = "";
        for (var i = 0; i < data.length; i++) {
            htmlOut +=
                '<option value="' +
                data[i]["id"] +
                '">' +
                'Day:' + " " +
                data[i]["name_english"] + " " + "-" + data[i]["name_arabic"] + " " + "|" + " " 
                +'P:' +" "+ data[i]["start_time"] + " " + "-" + data[i]["end_time"]
                +" " + "|" + " "+
                'Code:' + " " + data[i]["course_code_english"] + "-" + data[i]["course_code_arabic"]
                +" " + "|" + " "+
                'Name:'+ " " + data[i]["course_name_english"] + "-" + data[i]["course_name_arabic"]
                +" " + "|" + " "+
                'Type:' + " " + data[i]["type_en"] + "-" + data[i]["type_ar"]+
                "</option>";
        }
        $("#related_courses").html(select + htmlOut);
    });
}