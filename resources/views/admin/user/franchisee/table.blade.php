@extends('layouts.layout')
@section('content')
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-6">
                                           <h4 class="card-title">Staff</h4>
                                        </div>
                                        <div class="col-xl-6">
                                            <a href="/franchisee/create" class="btn btn-primary">Add+</a>
                                        </div>
                                    </div>

                                </div>
                                @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <p class="card-text">All of the data export buttons have a exportOptions option which can be used to specify information about what data should be exported and how. The options given for this parameter are passed directly to the buttons.exportData() method to obtain the required data.
                                        </p>
                                        <p>
                                            The print button will open a new window in the end user's browser and, by default, automatically trigger the print function allowing the end user to print the table. The window will be closed once the print is complete, or has been cancelled.
                                        </p> --}}


                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Location</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>

                                                        {{-- <th>View</th> --}}
                                                        <th>Active/Deactive</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                        @foreach($table as $tables)

<tr>
                                                        <td>{{ $tables->name }}</td>
                                                        <td>{{ $tables->location }}</td>
                                                         <td>{{ $tables->phone }}</td>
                                                        <td>{{ $tables->email }}</td>
                                                        {{-- <td><a href="{{ route('franchisee.view',[$tables->_id]) }}" class="btn btn-primary">View</a></td> --}}

                                                        {{-- <td><a href="{{ route('franchisee.view',[$tables->_id]) }}" class="btn btn-primary">view</a></td> --}}

                                                        <td>@if ($tables->isActive == 1)
                                                           <a href="{{ route('franchisee.deactive',[$tables->_id]) }}" class="btn btn-danger">Deactivate</a>
                                                           @else
                                                           <a href="{{ route('franchisee.active',[$tables->_id]) }}" class="btn btn-success">Activate</a>
                                                        @endif</td>
                                                        <td><a href="{{ route('franchisee.edit',[$tables->_id]) }}" class="btn btn-primary">Edit</a></td>
                                                        <td><a href="{{ route('franchisee.delete',[$tables->_id]) }}" class="btn btn-primary">Delete</a></td>
</tr>
                                                          @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@stop
