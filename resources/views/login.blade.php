<x-layout>
    <x-navbar></x-navbar>
            <div class="container">
                <div class="row justify-content-center mt-5">
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




                <div class="d-flex justify-content-center mt-5">
                    <a href="/" class="home-button">Torna alla Home</a>
                </div>



</x-layout>