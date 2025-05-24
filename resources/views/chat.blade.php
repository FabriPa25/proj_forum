<x-layout>
    <x-navbar></x-navbar>
        <h1 class="text-center mt-5">Chat</h1>




    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <!-- Chat Container -->
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <strong></strong>
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Condividi i tuoi pensieri e divertiti.</p>
                    </div>

                        <div id="chat-messages" class="card-body" style="height: 400px; overflow-y: auto; background-color: #f9f9f9;">
                            @foreach ($chats as $chat)
                                <div class="d-flex mb-3 {{ $chat->user_id == auth()->id() ? 'justify-content-end'  : 'justify-content-start' }}">
                                    <div class="p-3 chat-bubble w-50 ms-3 me-3" 
                                        style="max-width: 70%;  background-color: {{ $chat->user_id == auth()->id() ? '#9edbd7' : '#9ec5db'}};">
                                        <strong class="ms-3">{{ $chat->user->name }}</strong>
                                        <p class="mb-0 text-center">{{ $chat->message }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    <!-- Form invio nuovo messaggio -->
                    <div class="card-footer">
                        <form action="{{route('chat.post')}}" method="POST">
                            @csrf
                            <div class="input-group">
                                <textarea name="message" class="form-control" placeholder="Scrivi un messaggio..." required></textarea>
                                <button class="btn btn-primary" type="submit">Invia</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="d-flex justify-content-center mt-5">

        <a href="/" class="home-button">Torna alla Home</a>
    </div>

      <!-- mantiene lo scroll della chat sull'ultimo messaggio -->

<script>
    const chatMessages = document.getElementById('chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;  
</script>

</x-layout>