import{S as p}from"./sortable.esm-be94e56d.js";import{d as v}from"./mention-5d95822d.js";var u=-1e3,s=!1,i;$(document).ready(function(){if(g(),$("#add_attribute_target").length===0)return;b();let t=$("[data-max-fields]");t.length===1&&(s=t.data("max-fields"),i=$(".alert-too-many-fields"))});function b(){var t=$("#add_attribute_target");c(),$(".add_attribute").click(function(a){if(a.preventDefault(),s!==!1)if($("form :input").length+4>s){i.show();return}else i.hide();u-=1;let d=$($(this).data("template")).clone().removeClass("hidden").removeAttr("id"),n=d.html().replace(/\$TMP_ID\$/g,u);return d.html(n).insertBefore(t),c(),v(),!1}),$("#attributes-delete-all-confirm-submit").click(function(a){return a.preventDefault(),$(this).siblings('input[name="delete-all-attributes"]').val(1),$("#entity-attributes-all .attribute_delete").click(),$("#attributes-delete-all-confirm").modal("hide"),i&&i.hide(),!1}),$.each($('[data-toggle="private"]'),function(){$(this).hasClass("fa-lock")?$(this).prop("title",$(this).data("private")):$(this).prop("title",$(this).data("public"))})}function c(){let t=document.querySelector(".entity-attributes");p.create(t,{handle:".input-group-addon"}),$.each($(".attribute_delete"),function(){$(this).unbind("click"),$(this).on("click",function(){$(this).parent().parent().parent().remove(),i&&i.hide()})}),$('[data-toggle="private"]').unbind("click").click(function(){$(this).hasClass("fa-lock")?($(this).removeClass("fa-lock").addClass("fa-unlock-alt").prop("title",$(this).data("public")),$(this).prev("input:hidden").val("0")):($(this).removeClass("fa-unlock-alt").addClass("fa-lock").prop("title",$(this).data("private")),$(this).prev("input:hidden").val("1"))}),$('[data-toggle="star"]').unbind("click").click(function(){$(this).hasClass("fa-regular")?($(this).removeClass("fa-regular").addClass("fa-solid").prop("title",$(this).data("entry")),$(this).prev("input:hidden").val("1")):($(this).removeClass("fa-solid").addClass("fa-regular").prop("title",$(this).data("tab")),$(this).prev("input:hidden").val("0"))})}var f,e;function g(){let t=$('[name="live-attribute-config"]');if(t.length===0)return;f=t.data("live"),e=$("#live-attribute-modal");let a=1;$.each($(".live-edit"),function(){$(this).addClass("live-edit-parsed"),$(this).attr("data-uid",a),a++}),$(".live-edit-parsed").unbind("click").click(function(){let d=$(this).data("id");$(this).data("uid");let n=f+"?id="+d+"&uid="+$(this).data("uid");$.ajax({url:n}).done(function(o){let h={};e.find(".modal-content").html(o),e.modal(h),e.find("form").submit(function(m){return m.preventDefault(),$.ajax({method:"POST",context:this,url:$(this).attr("action"),data:$(this).serialize()}).done(function(l){e.find(".modal-content").html(""),e.modal("hide");let r=$('[data-uid="'+l.uid+'"]');r.html(l.value),l.value?r.removeClass("empty-value"):r.addClass("empty-value"),window.showToast(l.success)}).fail(function(l){console.error("live-edit-error",l),e.find(".modal-content").html(""),e.modal("hide")}),!1})})})}
