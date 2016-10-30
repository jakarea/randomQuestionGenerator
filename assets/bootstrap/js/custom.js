//$(window).load(function() {
//    var code;
//    var title;
//    var titles;
//    var value;
//    var htm;
//
//    $("#code").keyup(function() {
//        code = $("#code").val();
//        if (code.length > 0) {
//            $.ajax({
//                url: "http://localhost:8000/api/course?code=" + code,
//                dataType: 'json',
//                success: function(data) {
//                    pushData(data);
//                }
//            }); //.ajax end
//        }
//    }); //keyup end
//
//    $("#title").keyup(function() {
//        title = $("#title").val();
//        if (title.length > 0) {
//            console.log(title);
//            $.ajax({
//                url: "http://localhost:8000/api/course?title=" + title,
//                dataType: 'json',
//                success: function(data) {
//                    pushData(data);
//                }
//            }); //.ajax end
//        }
//    }); //keyup end
//
//    //select course from dropdown
//
//    $('#results li').click(function(event) {
//        $('#course_id').val(event.target.id);
//    });
//
//    // Generate html to showing search results
//    function pushData(titles) {
//        console.log(titles);
//        $('#results').empty();
//        for (var i in titles) {
//            value = titles[i];
//            htm = "<li class='course_item' id=" + titles[i]['course_id'] + ">" + titles[i]['title'] + "</li>";
//            $('#results').append(htm);
//        }
//    }
//    $('course_item').click(function(){
//        console.log("this");
//    });
//});

$( function() {
    $( "#datepicker" ).datepicker();
} );
