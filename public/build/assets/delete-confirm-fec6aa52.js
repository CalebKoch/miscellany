function a(){$.each($(".delete-confirm"),function(){$(this).click(function(r){let i=$(this).data("name"),e=$(this).data("delete-target"),t=$(this).data("target");$(t).find(".target-name").text(i),$(this).data("mirrored")?$("#delete-confirm-mirror").show():$("#delete-confirm-mirror").hide(),$(this).data("recoverable")?($(t).find(".permanent").hide(),$(t).find(".recoverable").show()):($(t).find(".recoverable").hide(),$(t).find(".permanent").show()),e&&$(".delete-confirm-submit").data("target",e)})}),$.each($(".delete-confirm-submit"),function(r){$(this).unbind("click"),$(this).click(function(i){var e=$(this).data("target");e?($("#"+e+" input[name=remove_mirrored]").val($("#delete-confirm-mirror-checkbox").is(":checked")?1:0),$("#"+e).submit()):$("#delete-confirm-form").submit()})})}export{a as d};
