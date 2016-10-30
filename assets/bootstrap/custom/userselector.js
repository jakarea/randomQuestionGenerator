$(document).ready(function() {
    /*$("input[name='user_ids']").change( function () {
            var user_id = $("input[name='user_ids']:checked").val();
            var i= '#h_'+user_id;
            var h = $(i).attr('href');
            console.log(h);
        $("#get-view").attr('href',h);
            //$("input[name='user_reg_id']").val(user_id);
    });*/

    $(".check-radio").on('click',function(){
        var sss = $(this).find("#optionsRadios2").prop('checked', true);
    });
    $(".selectmember").on('click',function(){
        var url = $(this).find("a").attr('href');
        $("#get-view").attr('href',url);

    });


    $( ".datepicker" ).datepicker('option', 'dateFormat', 'yy-mm-dd');

});