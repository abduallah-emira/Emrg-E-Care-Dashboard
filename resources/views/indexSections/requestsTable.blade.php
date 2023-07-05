<div class="row body">
                                <div class="col-lg-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div style="display: inline;">
                                            <h4 class="mt-0 header-title" style="display: inline;">Processing Requests</h4>
                                           <a href="{{Route('check')}}"> <button type="button" class="btn btn-outline-secondary waves-effect" style="margin-left: 880px;" >Refresh</button></a>
                                            <br>
                                            </div>
                                            <br>
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>request id</th>
                                                    <th>user id</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>phone</th>
                                                    <th>age</th>
                                                    <th>gender</th>
                                                    <th>Nid</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($requests as $request)
                                                    <tr>
                                                    
                                                    <td>{{ $request->id }}</td>
                                                    <td>{{ $request->user_model_id }}</td>


                                                    <td>{{ $request->users->name  }}</td>
                                                    <td>{{ $request->users->email }}</td>
                                                    <td>{{ $request->users->phone }}</td>
                                                    <td>{{ $request->users->age }}</td>
                                                    <td>{{ $request->users->gender }}</td>
                                                    <td>{{ $request->users->nId }}</td>
                                            
                                                    </tr>
                                                 @endforeach
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                               
                             </div> <!--,end row -->