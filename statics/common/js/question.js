$(function(){
  var box = $(".box");
  var box_len = $(box).length;
  $("#counter").find("span").text(box_len);
  
  var check = $(box).find("input[type='checkbox']");  
  $(check).prop("checked",false);

  $(check).on("change",function(){
    $(this).parent("label").siblings("label").children("input").prop("checked",false);
    var radio_checked = $(box).find("input[type='checkbox']:checked").size();
    $("#counter").find("span").text(box_len-radio_checked);
    $(this).parent("label").toggleClass("checked").siblings("label").removeClass("checked");
  });
});


