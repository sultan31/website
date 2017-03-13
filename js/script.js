$(document).ready(function(){
					$("#insert").click(function(){
						
						$.post($("#myForm").attr("action"),$("#myForm :input").serializeArray(),function(info){
								$("#result").html(info);
						});
						
						clearinputs();
					});
					
					$("#myForm").submit(function(){
						return false;
					});
					
					function clearinputs()
					{
						$("#myForm :input").each(function(){
							$(this).val("");
						});
					}
			});

