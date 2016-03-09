$(function(){
	// 日历
    $('.form_datetime').datetimepicker({
        format:"yyyy-mm-dd hh:ii:ss",
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        format:"yyyy-mm-dd hh:ii:ss",
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        format:"yyyy-mm-dd hh:ii:ss",
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    $(".icon-arrow-left").addClass("glyphicon glyphicon-arrow-left");
    $(".icon-arrow-right").addClass("glyphicon glyphicon-arrow-right");
    $(".datetimepicker").css("margin-top","30px");
    $('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd hh:ii'
    });
    $('#datetimepicker').datetimepicker(); 

})
