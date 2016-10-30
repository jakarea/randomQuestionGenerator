//var baseurls = $("#baseurls").attr('href');
var baseurls = "http://localhost/laravel/public/";

//console.log(baseurls);
//console.log('asas');
var App ={
    baseurl:baseurls
};
new BloodhoundTypeahead({
    selector: '#title',
    endpoint: App.baseurl+'/api/course/%QUERY',
    value: 'title',
    selectMode: true,
    onSelect: function($el, obj){
        $("#title").val(obj.title);
        $("#code").val(obj.code);
        $("#credite").val(obj.credite);
        $("#course_id").val(obj.course_id);
    },
    emptySelector: "#course_id"
});
new BloodhoundTypeahead({
    selector: '#code',
    endpoint: App.baseurl+'/api/code/%QUERY',
    value: 'code',
    selectMode: true,
    onSelect: function($el, obj){
        $("#title").val(obj.title);
        $("#code").val(obj.code);
        $("#credite").val(obj.credite);
        $("#course_id").val(obj.course_id);
    },
    emptySelector: "#course_id"
});