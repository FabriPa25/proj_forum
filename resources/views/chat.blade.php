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
                        <p class="mb-0 text-muted" style="font-size: 0.9rem;">Pubblicato il: </p>
                    </div>

                    <div class="card-body" style="height: 400px; overflow-y: auto; background-color: #f9f9f9;">

                                <div class="d-flex mb-3">
                                    <div class="p-3 rounded shadow-sm" style="background-color:">
                                        <small class="text-muted d-block mb-1"></small>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>

                            <p class="text-center text-muted">Nessun commento disponibile.</p>

                    </div>

                    <!-- Form invio nuovo messaggio -->
                    <div class="card-footer">
                        <form action="" method="POST">
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


</x-layout>