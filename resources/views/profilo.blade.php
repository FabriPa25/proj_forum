<x-layout>
    <x-navbar></x-navbar>
    <h1 class="text-center mt-5">Profilo</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-md-6 card-login">
                
                <form action="{{route('profilo.post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h2 class="text-center">Ciao {{Auth::user()->name}}</h2> 
                    <p class="text-center mt-3">Crea una nuova discussione</p> 
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo del Forum</label>
                      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="content" class="form-label">Testo del Forum</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="content">
                    </div>
                    <div class="mb-3">  
                      <label for="image" class="form-label">Immagine</label>
                      <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                  </form>


            </div>
        </div>
    </div>

      
</x-layout>