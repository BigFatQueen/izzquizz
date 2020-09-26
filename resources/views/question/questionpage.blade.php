<x-template>
	<div class="container-fluid" id="wizard">
		<h2 class="mb-0">{{$quizz->title}}</h2>
		<p class="mb-5">There is a time limit! Give it all of you!</p>
		@php $i=1; @endphp
		@foreach($questions as $q)

		<div>
			<div class="list-group">

			  <a href="#" class="list-group-item list-group-item-action">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1 ml-3">Question NO.({{$i++}})</h5>
			      <small>3 days ago</small>
			    </div>
			    <section>
				    <div class="timebar"></div>
				    <h6 class="ml-4 mt-4">{{$q->description}}</h6>
				    <div class="col-md-6 mt-3">
						<div class="estimate ml-5">
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" name="estimate" id="exampleRadios1" value="1" checked>
								  <label class="form-check-label pl-2" for="exampleRadios1">
								    {{$q->estimateAns_One}}
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" name="estimate" id="exampleRadios2" value="2">
								  <label class="form-check-label pl-2" for="exampleRadios2">
								     {{$q->estimateAns_Two}}
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" name="estimate" id="exampleRadios3" value="3">
								  <label class="form-check-label pl-2" for="exampleRadios3">
								     {{$q->estimateAns_Three}}
								  </label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="exampleRadios" name="estimate" id="exampleRadios3" value="4">
								  <label class="form-check-label pl-2" for="exampleRadios3">
								     {{$q->estimateAns_Four}}
								  </label>
								</div>
							
						</div>
				    </div>
				</section>
			  </a>
			  
			</div>
		</div>
		@endforeach
	</div>
	

	<x-slot name="script">
			<script>

				$(document).ready(function(){
					$('#wizard').steps({
						 headerTag: "h5",
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