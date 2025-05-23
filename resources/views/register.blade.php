<x-layout>
    <x-navbar></x-navbar>
        <h1 class="text-center">Home</h1>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-4">
                        <form action="{{'login'}}" method="POST" enctype="">
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

                    </div>
                </div>
            </div>
</x-layout>