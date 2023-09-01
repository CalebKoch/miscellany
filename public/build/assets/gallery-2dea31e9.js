import{a as v}from"./index-0b481a1e.js";import"./_commonjsHelpers-725317a4.js";var p,n,i,s,m,o,u,y;let f,g;$(document).ready(function(){E(),D(),c()});function E(){p=$("#gallery-loader"),n=$("#gallery-images"),i=$("#gallery-search"),f=$("#bulk-delete"),g=$("form#gallery-bulk"),o=document.getElementById("gallery-form"),$(".uploader"),s=$(".progress"),$("#file-upload"),m=$(".gallery-error");let r=$("#gallery-config");u=r.data("max"),y=r.data("error"),i.on("blur",function(e){e.preventDefault(),h()}).bind("keydown",function(e){e.key==="Enter"&&(e.preventDefault(),h())}),o.ondrop=e=>{if(e.preventDefault(),e.stopPropagation(),e.dataTransfer.items){let t=new FormData,a=0;if([...e.dataTransfer.items].forEach((d,F)=>{d.kind==="file"&&(t.append("file[]",d.getAsFile()),a++)}),a>u){w();return}let l=$('input[name="folder_id"]');l&&t.append("folder_id",l.val()),b(t),o.classList.remove("drop-shadow","dropping")}else[...e.dataTransfer.files].forEach((t,a)=>{})},o.ondragover=e=>{e.preventDefault(),o.classList.add("drop-shadow","dropping")},o.ondragleave=e=>{o.classList.remove("drop-shadow","dropping")},g.submit(function(e){e.preventDefault();var t=new FormData;$.each($('li[data-selected="1"]'),function(l){t.append("file[]",$(this).data("id"))});let a=$('input[name="folder_id"]');return a&&t.append("folder_id",a.val()),$.ajax({url:$(this).attr("action"),method:"POST",context:this,data:t,cache:!1,contentType:!1,processData:!1}).done(function(l){return $('li[data-selected="1"]').remove(),document.getElementById("bulk-destroy-dialog").close(),f.addClass("btn-disabled"),window.showToast(l.toast),!1}),!1})}function h(){n.hide(),p.show(),$.ajax({url:i.data("url")+"?q="+i.val()}).done(function(r){p.hide(),n.html(r).show(),c()})}function D(){o.onchange=r=>{r.preventDefault();let e=document.getElementById("file-upload");if(e.files.length>u){w();return}var t=new FormData;Array.from(e.files).forEach(l=>{t.append("file[]",l)});let a=$('input[name="folder_id"]');a&&t.append("folder_id",a.val()),b(t)}}const w=()=>{window.showToast(y,"error")},b=r=>{var e={headers:{"Content-Type":"multipart/form-data"},onUploadProgress:function(t){let a=Math.round(t.loaded*100/t.total);$('[role="progressbar"]').css("width",a+"%")}};s.show(),v.post(o.action,r,e).then(function(t){s.hide(),t.data.success&&(t.data.images.forEach(a=>{$("li[data-folder]").last().length===1?$(a).insertAfter($("li[data-folder]").last()):n.prepend(a)}),k(t.data.storage),c())}).catch(function(t){if(s.hide(),t.response&&t.response.data.message){m.text(t.response.data.message).fadeToggle();let a=t.response.data.errors;Object.keys(a).forEach(d=>{window.showToast(a[d],"error")})}c()})};function c(){$("#gallery-images li").unbind("click").on("click",function(r){if(r.shiftKey){if(!$(this).data("id"))return;$(this).toggleClass("border-2 border-blue-500"),$(this).attr("data-selected")==="1"?$(this).attr("data-selected",""):$(this).attr("data-selected",1),T();return}let e=$(this).data("folder");if(e){window.location=e;return}window.openDialog("primary-dialog",$(this).data("url"))})}const T=()=>{$('li[data-selected="1"]').length===0?f.addClass("btn-disabled"):f.removeClass("btn-disabled")},k=r=>{let e=document.getElementById("storage-progress");e.style.width=r.percentage+"%",e.className=r.progress;let t=document.getElementById("storage-used");t.innerHTML=r.used};
