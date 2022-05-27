@extends('layouts.layout')
@section('content')
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-xl-6">
                                           <h4 class="card-title">Menu</h4>
                                        </div>
                                        <div class="col-xl-6">
                                            <a href="/submenu/create" class="btn btn-primary">Add+</a>
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
                                                        <th>Main menu</th>
                                                        <th>Sub Menu</th>
                                                        <th>Sub menu ID</th>
                                                        <th>Image</th>
                                                        <th>URL</th>
                                                        <th>Point</th>
                                                        <th>Data URL</th>
                                                        <th>Form ID</th>
                                                        <th>Field 1</th>
                                                        <th>Field 2</th>
                                                        <th>Field 3</th>
                                                        <th>Field 4</th>
                                                         <th>Field 5</th>
                                                        <th>Vendor</th>
                                                        <th>Amount</th>
                                                        <th>Active/Deactive</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                        @foreach($table as $tables)

<tr>
                                                        <td>{{ $tables->mainmenu }}</td>
                                                        <td>{{ $tables->menuName }}</td>
                                                         <td>{{ $tables->menuID }}</td>
                                                        <td><img src="{{ $tables->image }}" width='30%' alt="Image Preview" /></td>

                                                        <td>{{ $tables->url }}</td>
                                                        <td>{{$tables->points }}</td>
                                                         <td>{{$tables->dataurl }}</td>
                                                        <td>{{ $tables->formid }}</td>
                                                        <td>{{$tables->field1 }}</td>
                                                        <td>{{ $tables->field2 }}</td>
                                                        <td>{{$tables->field3 }}</td>
                                                        <td>{{ $tables->field4 }}</td>
                                                        <td>{{$tables->field5 }}</td>
                                                        <td>{{ $tables->vendor }}</td>
                                                        <td>{{$tables->amount }}</td>
                                                        <td>@if ($tables->isActive == 1)
                                                           <a href="{{ route('submenu.deactive',[$tables->_id]) }}" class="btn btn-danger">Deactivate</a>
                                                           @else
                                                           <a href="{{ route('submenu.active',[$tables->_id]) }}" class="btn btn-success">Activate</a>
                                                        @endif</td>
                                                        {{-- <td><a href="{{ route('submenu.edit',[$tables->_id]) }}" class="btn btn-primary">Edit</a></td> --}}
                                                        <td><a href="{{ route('submenu.delete',[$tables->_id]) }}" class="btn btn-primary">Delete</a></td>
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
