webpackJsonp(["app/js/classroom-manage/course-manage/index"],{0:function(e,a){e.exports=jQuery},"1dc821166b9aaaf0b4d1":function(e,a,s){"use strict";function o(e){return e&&e.__esModule?e:{default:e}}var c=s("8f840897d9471c8c1fbd"),t=o(c),n=s("b334fd7e4c5a19234db2"),r=o(n);$(".course-list-group").on("click",".close",function(){confirm(Translator.trans("classroom.manage.delete_course_hint"))&&$.post($(this).data("url"),function(e){e.success?((0,r.default)("success",Translator.trans("classroom.manage.delete_course_success_hint")),window.location.reload()):(0,r.default)("danger",Translator.trans("classroom.manage.delete_course_fail_hint")+":"+e.message)})}),(0,t.default)({element:"#course-list-group",itemSelector:"li",ajax:!1},function(e){$("#courses-form").submit()})}},["1dc821166b9aaaf0b4d1"]);