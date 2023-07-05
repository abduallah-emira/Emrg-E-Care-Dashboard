<br><br>

<div class="container">
    <div class="row body">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">admins</h4>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>admin id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>age</th>
                                                    <th>Nid</th>
                                                    
                                                    

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($admins as $admin)
                                                    <tr>
                                                    
                                                    <td>{{ $admin->id }}</td>
                                                    <td>{{ $admin->name }}</td>
                                                    <td>{{ $admin->email }}</td>
                                                    <td>{{ $admin->phone }}</td>
                                                    <td>{{ $admin->age }}</td>
                                                    <td>{{ $admin->nId }}</td>
                                                    
                                            
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                               
                             </div> <!--,end row -->

 </div>