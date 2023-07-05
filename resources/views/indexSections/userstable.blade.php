<br><br>
<div class="container">
<div class="row body">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">users</h4>
                                            
            
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>First Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>age</th>
                                                    <th>gender</th>
                                                    <th>Nid</th>



                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($user_models as $user)
                                                    <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->age }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->nId }}</td>
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                               
                             </div> <!--,end row -->
                             </div>