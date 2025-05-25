<x-layout>
    <x-navbar></x-navbar>
    <h1 class="text-center mt-5">Pannello di controllo</h1>

            @if (session('success'))
                    <div class="alert alert-success text-center  mt-5 w-25 mx-auto">
                        {{ session('success') }}
                    </div>
                @endif

    <div class="container mt-5">
        <div class="row justify-content-around">
            <div class="col-4">
                <h3 class="text-center mb-4">I tuoi dati</h3>
                        <table class="table mb-5 text-center">
                            <tr>
                                <td>Nome:</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                        </table>

                    <form action="{{ route('user.update', Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>

                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3 w-100">Aggiorna</button>
                        
                    </form>
                     
                    
                    <form action="{{ route('user.destroy', Auth::user()->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare il tuo account? Questa azione è irreversibile.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3 w-100">Elimina account</button>
                    </form>

            </div>
            

            <div class="col-4">
                <h3 class="text-center mb-4">Le discussioni della community</h3>
                   <table class="table">
                       @foreach ($posts as $post)
                       <tr>
                           <td class="text-center">{{$post->title}}</td>
                           <td class=""><a href="{{route('details', $post->id)}}">Vai</a></td>
                       </tr>
                       @endforeach
                   </table>

            </div>
        </div>
    </div>





</x-layout>