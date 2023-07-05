<br><br>

<div class="container">
    <div class="row body">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        @if(Session::has('message'))
                                            <div class="alert {{ Session::get('alert-class') }}">
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
            
                                            <h4 class="mt-0 header-title">Drivers</h4>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Driver id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>age</th>
                                                    <th>shift</th>
                                                    <th>Nid</th>
                                                    <th>spot id</th>
                                                    <th>spot name</th>
                                                    <th>government</th>
                                                    <th>city</th>
                                                    

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($drivers as $driver)
                                                    <tr>
                                                    
                                                    <td>{{ $driver->id }}</td>
                                                    <td>{{ $driver->name }}</td>
                                                    <td>{{ $driver->email }}</td>
                                                    <td>{{ $driver->phone }}</td>
                                                    <td>{{ $driver->age }}</td>
                                                    <td>{{ $driver->shift }}</td>
                                                    <td>{{ $driver->nId }}</td>
                                                    <td>{{ $driver->ambulance_spot_id }}</td>
                                                    <td>{{ $driver->spots->name }}</td>
                                                    <td>{{ $driver->spots->government }}</td>
                                                    <td>{{ $driver->spots->city }}</td>
                                                    
                                            
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                               
                             </div> <!--,end row -->

 </div>