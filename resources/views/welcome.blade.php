<x-layout>
    <x-navbar></x-navbar>


                <!-- benvenuto -->

 <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-12 p-2 text-center fs-3 card-login">

                   <p class="text-center">Benvenuto nel Forum! <br>
                    La tua nuova zona di confronto, chiacchiere e scoperte.

                    Se sei registrato, sei già dei nostri: qui puoi creare nuove discussioni, condividere idee, dubbi o curiosità con tutta la community.
                    Hai voglia di fare due chiacchiere in tempo reale? La sezione Chat ti aspetta per scambiare messaggi al volo con gli altri membri! <br>

                    <h3 class="mt-3"> Condividi  Parla  Connettiti. </h3><br>

                    Che tu voglia imparare qualcosa, confrontarti o semplicemente passare un po’ di tempo in buona compagnia: sei nel posto giusto.

                    Inizia una nuova discussione… oppure saluta nella chat. Il forum è tuo! </p>
          </div>
    </div>
 </div>




        @guest
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4 col-md-4 card-login">
                        <form action="{{'register'}}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <h5 class="text-center fs-3 mb-3">Login</h5>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>



                            <button type="submit" class="btn btn-primary mt-3">Login</button>
                        </form>
                            <p class="mt-3 text-center">Non hai un account? <a href="{{'register'}}">Registrati</a></p>
                    </div>
                </div>
            </div>
        @endguest




        



</x-layout>