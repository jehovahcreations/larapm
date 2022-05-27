@extends('layouts.layout')
@section('content')
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-6">
                                           <h4 class="card-title">Crypto</h4>
                                        </div>
                                        <div class="col-xl-6">
                                            {{-- <a href="/staff/create" class="btn btn-primary">Add+</a> --}}
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
                                                        <th>UserID</th>
                                                        <th>Parent</th>
                                                        <th>Phone</th>
                                                        <th>Bank</th>
                                                        <th>Point</th>
                                                         <th>Date</th>
                                                        <th>Status</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                        @foreach($table as $tables)

<tr>
                                                        <td>{{ $tables->name }}</td>
                                                        <td>{{ $tables->user }}</td>
                                                         <td>{{ $tables->parent }}</td>
                                                        <td>{{ $tables->phone }}</td>
                                                        <td>{{ $tables->subMenu }}</td>
                                                         <td>{{ $tables->point }}</td>
                                                        <td>{{ $tables->date->toDateTime()->format('d-m-Y H:i:s') }}</td>
                                                        {{-- <td><a href="{{ route('preport.view',[$tables->_id]) }}" class="btn btn-primary">View</a></td> --}}

                                                            {{-- <td><a href="{{ ('preport.view',[$tables->_id]) }}" class="btn btn-primary">view</a></td> --}}

                                                        <td>@if ($tables->status == 1)
                                                           <a href="{{ route('preport.initatecrypto',[$tables->_id]) }}" class="btn btn-warning">Initated</a>
                                                           @elseif ($tables->status == 2)
                                                           <a href="{{ route('preport.processcrypto',[$tables->_id]) }}" class="btn btn-warning">Processing</a>
                                                            @elseif ($tables->status == 3)
                                                           <a href="{{ route('preport.approvecrypto',[$tables->_id]) }}" class="btn btn-success">Approved</a>
                                                           @elseif ($tables->status == 4)
                                                           <a href="{{ route('preport.rejectcrypto',[$tables->_id]) }}" class="btn btn-danger">Rejected</a>

                                                        @endif</td>
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
