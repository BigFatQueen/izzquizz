<x-template>
	<div class="row">
    @foreach($quizzs as $quizz)
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-bold text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">{{$quizz->title}}</p>
                      <p class="card-title">{{count($quizz->questions)}}<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a href="{{route('quizz.start',$quizz->id)}}" class="btn btn-default">
                    <i class="nc-icon nc-atom text-info"></i>
                  Start it!
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
    @endforeach 
        </div>
        <x-slot name="script"></x-slot>
</x-template>