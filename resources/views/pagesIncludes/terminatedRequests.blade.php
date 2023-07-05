<br><br>
<div class="container">
    <div class="row body">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Terminated Requests</h4>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>request id</th>
                                                    <th>user id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>adress</th>
                                                    <th>age</th>
                                                    <th>gender</th>
                                                    <th>Nid</th>

                                                     -
                                                    <th>government</th>
                                                    <th>city</th>
                                                    <!-- <th>driver name</th> -->
                                                    <th>hospital name</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($terminatedRequests as $tRequest)
                                                    <tr>
                                                    
                                                    <td>{{ $tRequest->id }}</td>
                                                    <td>{{ $tRequest->user_model_id }}</td>


                                                    <td>{{ $tRequest->name  }}</td>
                                                    <td>{{ $tRequest->email }}</td>
                                                    <td>{{ $tRequest->phone }}</td>
                                                    <td>{{ $tRequest-> address }}</td>
                                                    <td>{{ $tRequest->age }}</td>
                                                    <td>{{ $tRequest->gender }}</td>
                                                    <td>{{ $tRequest->nId }}</td>

                                                    <!-- <td>{{ $tRequest->name }}</td> -->
                                                    <td>{{ $tRequest->government  }}</td>
                                                    <td>{{ $tRequest->city  }}</td>
                                                    <!-- <td>{{ $tRequest-> name }}</td> -->
                                                    <td>{{ $tRequest->hospital_name }}</td>
                                            
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                               
                             </div> <!--,end row -->
 </div>