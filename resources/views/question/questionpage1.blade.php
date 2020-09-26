<x-template>
	<div id="wizard" class="row">
		<h3>helo</h3>
		<section>helo woorld</section>

		<h3>helo</h3>
		<section>helo woorld</section>

		<h3>helo</h3>
		<section>helo woorld</section>

		<h3>helo</h3>
		<section>helo woorld</section>
	</div>
	

	<x-slot name="script">
			<script>

				$(document).ready(function(){
					$('#wizard').steps({
						 headerTag: "h3",
						    bodyTag: "section",
						    transitionEffect: "slide"
					});





				$(".timebar").animate({ width: "0%" }, 1000, "linear");
				 setTimeout(h, 1000);

				 $(".form-check").click(function(){
			    	$('.form-check').data('clicked', true);
			    		// console.log($('.form-check').data('clicked'));
					});


				function h(){
					if($('.form-check').data('clicked')) {
				    	// alert('yes');

				    	if ($("input[value='1']").prop("checked")){
									//console.log('1');
									$("input[value='1']").parent('.form-check').addClass('affect');

									$("input[value='1']").parent('.form-check').css('color','green');

									$("input[value='2']").parent('.form-check').removeClass('affect');
									$("input[value='3']").parent('.form-check').removeClass('affect');
									$("input[value='2']").parent('.form-check').css('color','purple');
									$("input[value='3']").parent('.form-check').css('color','purple');
									// ans=$("input[value='1']").val();
								}
								 if ($("input[value='2']:checked").prop("checked")){
									//console.log('2');
									$("input[value='2']").parent('.form-check').addClass('affect');

									$("input[value='2']").parent('.form-check').css('color','green');

									$("input[value='1']").parent('.form-check').removeClass('affect');
									$("input[value='3']").parent('.form-check').removeClass('affect');
									$("input[value='1']").parent('.form-check').css('color','purple');
									$("input[value='3']").parent('.form-check').css('color','purple');

									// ans=$("input[value='2']:checked").val();
								}

								 if($("input[value='3']").prop("checked")){
									//console.log('3');
									$("input[value='3']").parent('.form-check').addClass('affect');

									$("input[value='3']").parent('.form-check').css('color','green');

									$("input[value='2']").parent('.form-check').removeClass('affect');
									$("input[value='1']").parent('.form-check').removeClass('affect');
									$("input[value='2']").parent('.form-check').css('color','purple');
									$("input[value='1']").parent('.form-check').css('color','purple');
									// ans=$("input[value='3']:checked").val();
								}
								var ans=$('.form-check input[type="radio"]:checked').val();
								console.log(ans);
					}else{
						var ans=0;
						console.log(ans);
					}
				}

				
			})
				
			</script>
	</x-slot>
	
</x-template>