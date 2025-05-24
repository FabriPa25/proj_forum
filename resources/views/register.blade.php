<x-layout>
    <x-navbar></x-navbar>
       
            <div class="container">
                <div class="row justify-content-center mt-5 ">
                    <div class="col-4 col-md-4 card-register">
                        <form action="{{'register'}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="text-center fs-3 mb-3">Registrazione</h5>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>

                            <div class="form-group mt-3">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Register</button>
                        </form>
                            <p class="mt-3 text-center">Hai già un account? <a href="{{'login'}}">Login</a></p>
                    </div>
                </div>
            </div>
</x-layout>