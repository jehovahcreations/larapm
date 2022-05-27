@extends('layouts.layout')
@section('content')
 <section id="basic-horizontal-layouts">
                    {{-- <div class="row match-height"> --}}
                        <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="col-4">
                                        <h4 class="card-title">Upload Data</h4>
                                    </div>
                                    {{-- <div class="col-4">

                                        <button class="btn btn-danger" id="portbutton" onClick="window.location.reload();">Disconnected</button>

                                    </div> --}}
                                    <div class="col-4">
                                        <p id="host"></p>
                                    </div>

                                </div>
                                {{-- <div class="card-content"> --}}
                                    <div class="card-body">
                                        <form class="form form-horizontal"action="/image/create" method="post" enctype="multipart/form-data">
                                            {{-- {{csrf_field()}} --}}

                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Aadhar front</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="addar" name="addar" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Aadhar back</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="addarb" name="addarb" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Pancard</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="pan" name="pan" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Bank Passboom</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="pass" name="pass" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <img src="#" id="category-img-tag" width="200px" />
                                                    </div>
                                                    <input type="hidden" id="id" name="id" value="{{ $id  ?? ''}}"" required>
                                                    <input type="hidden" id="vid" name="vid" value="{{ $vid  ?? ''}}" required>


                                                     {{-- <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Image</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="image" name="image" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div> --}}



                                                </div>
                                                <div class="col-md-8 offset-md-4">
                                                <button type="submit"  value="Submit" class="btn btn-danger" >Save</button>
                                                </div>
                                            </div>
                                        </form>
<div id="success-message"></div>
                                        {{-- <div class="col-md-8 offset-md-4">
                                            <button class="btn btn-warning" onClick="rama();" id="">Scan</button>
                                            <button class="btn btn-warning" onClick="captureFPAuth();" id="killer" style="visibility: hidden">Scan</button>
                                            <button type="submit" form="contactForm" value="Submit" class="btn btn-danger" id="myCheck" style="visibility: hidden">Save</button>
                                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1" >Reset</button>
                                        </div> --}}
                                    </div>
                                {{-- </div> --}}
                            </div>

                        {{-- </div> --}}
                        {{-- <div class="col-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-4">

                                        <button class="btn btn-danger" id="portbutton" onClick="window.location.reload();">Disconnected</button>

                                    </div>
                                    <div class="col-4">
                                        <p id="host"></p>
                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-warning" onClick="captureFPAuth();">Scan</button>

                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    </div>
                    <input type="hidden" id="port" value="0">
                    <input type="hidden" id="portval">

                    <script>
                         function readURL(input) {
                         if (input.files && input.files[0]) {
                             var reader = new FileReader();

                              reader.onload = function (e) {
                             $('#category-img-tag').attr('src', e.target.result);
                              }

                              reader.readAsDataURL(input.files[0]);
                              }
                             }

                           $("#addar").change(function(){
                           readURL(this);
                         });
                         $("#addarb").change(function(){
                           readURL(this);
                         });
                         $("#pass").change(function(){
                           readURL(this);
                         });
                         $("#pan").change(function(){
                           readURL(this);
                         });

                    </script>

                    {{-- <input type="button" id="btnRDInfo" onclick="benet()"/>
                    <input type="button" id="btnCapture" onclick="captureFPAuth()"/> --}}

 </section>
@stop
