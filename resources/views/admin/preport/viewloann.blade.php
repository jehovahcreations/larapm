@extends('layouts.layout')
@section('content')
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="" style="padding: 3%">
                                     <div class="row">
                                        <div class="col-6">
                                           <h2 class="card-title">{{ $table->name }}</h2>
                                           <p><b>Phone : </b>{{ $table->phone }}</p>
                                           <p><b>Parent : </b>{{ $table->parent }}</p>
                                           <p><b>Email : </b>{{ $table->email }}</p>
                                           <p><b>Address : </b>{{ $table->address }}</p>
                                        </div>
                                        <div class="col-6">
                                            <img class="round float-right" src="data:image/png;base64,{{ $table->photo }}" alt="avatar" height="170" width="170">
                                        </div>
                                    </div>
                                </div>
                                @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
                            </div>
                        </div>
                    </div>
                </section>
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="" style="padding: 3%">
                                     <div class="row">
                                        <div class="col-6">
                                           <h2 class="card-title">Bank Account Details</h2>
                                           <p><b>Bank name : </b>{{ $table->bank }}</p>
                                           <p><b>Account Number : </b>{{ $table->account }}</p>
                                           <p><b>IFSC : </b>{{ $table->ifsc }}</p>
                                        </div>
                                        <div class="col-6">
                                            <img class="round float-right" src="data:image/png;base64,{{ $table->signature }}" alt="avatar" height="170" width="170">
                                        </div>
                                    </div>
                                </div>
                                @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
                            </div>
                        </div>
                    </div>
                </section>
                 <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="" style="padding: 3%">
                                     <div class="row">
                                        <div class="col-6">
                                           <h2 class="card-title">Proofs</h2>
                                           <p>{{ $table->addType }}</p>
                                           <img class="round float-right" src="data:image/png;base64,{{ $table->adressproof }}" alt="avatar" height="170" width="170">

                                        </div>
                                        <div class="col-6">
                                           <p>{{ $table->idType }}</p>
                                           <img class="round float-right" src="data:image/png;base64,{{ $table->idproof }}" alt="avatar" height="170" width="170">
                                        </div>
                                    </div>
                                </div>
                                @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
                            </div>
                        </div>
                    </div>
                </section>
@stop
