<x-layout>
    <x-navbar></x-navbar>
           
           <div class="container-fluid">
               <div class="row justify-content-center">
                   <div class="col-6 col-md-6">
                       <div class="card mb-3 card-forum mx-auto">
                           <div class="card-header text-center">pubblicato il:  {{$post->updated_at->format('d/m/Y H:i')}} </div>
                           <div class="card-body">
                               <h5 class="card-title text-center mb-3">{{$post->title}}</h5>
                               <p class="card-text text-center mb-5">{{$post->content}}</p>
                               <div class="d-flex justify-content-center mb-4 save-img">
                                   <img class="text-center" src="{{Storage::url($post->image)}}" alt="non disponibile">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>


@if(session('success'))
    <div class="alert alert-success text-center w-25 mx-auto">
        {{ session('success') }}
    </div>
@endif
@error('message')
    <div class="alert alert-danger text-center">{{ $message }}</div>
@enderror


    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">


                <!-- Commenti -->
                <h4 class="mb-3">Commenti</h4>

                @if ($post->messages->count())
                    @foreach ($post->messages as $message)
                        <div class="card card-forum mb-3 border-start border-white border-3 shadow-sm">
                            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Anonimo</span>

                                
                                <small class="text-muted">{{ $message->updated_at->format('d/m/Y H:i') }}</small>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">{{ $message->message }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-info text-center">
                        Nessun commento disponibile.
                    </div>
                @endif

                <!-- Form per commentare -->
                <div class="card mt-5 shadow-sm">
                    <div class="card-header">
                        Aggiungi un commento
                    </div>
                    <div class="card-body">
                        <form action="{{ route('message.post', $post->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Scrivi il tuo commento qui..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Invia commento</button>
                        </form>
                    </div>
                </div>

                <!-- Pulsante torna al forum -->
                <div class="text-center mt-4">
                    <a href="{{ route('forum') }}" class="btn btn-secondary">← Torna al forum</a>
                </div>
            </div>
        </div>
    </div>






















</x-layout>