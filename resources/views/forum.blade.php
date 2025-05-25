<x-layout>
    <x-navbar></x-navbar>
  
        <h1 class="text-center mt-5">Forum Attivi</h1>
   
        
@if (session('success'))
    <div class="alert alert-success text-center fs-4 mt-5 w-25 mx-auto">
        {{ session('success') }}
    </div>
@endif

        <div class="container mt-5">
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                <div class="col-6 col-md-6 col-lg-4">


                <div class="card mb-3 mt-5 card-forum mx-auto">
                    <div class="card-header text-center">pubblicato il:  {{$post->updated_at->format('d/m/Y H:i')}} </div>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-3">{{$post->title}}</h5>
                        <p class="card-text text-center mb-5 text-truncate">{{$post->content}}</p>
                        <div class="d-flex justify-content-center mb-4 save-img">
                            <img class="text-center" src="{{Storage::url($post->image)}}" alt="non disponibile">
                        </div>
                        
                        <div class="d-flex justify-content-center mb-2">
                              <a href="{{route('details', $post->id)}}" class="btn text-center home-button">Vai al forum</a>
                        </div>
                      
                    </div>
                </div>


                </div>

                @endforeach
            </div>
        </div>


    <div class="d-flex justify-content-center mt-5 mb-5">
        <a href="/" class="home-button">Torna alla Home</a>
    </div>
        
</x-layout>