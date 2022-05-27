@extends('layouts.layout')
@section('content')
 <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Staff</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal"action="/staff/update" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <div class="row">
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Franchisee</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                 <fieldset class="form-group">
                                                                    <select class="form-control" id="" name="parent">
                                                                       {{-- // @foreach($table as $tables) --}}
                                                                        @foreach ($table as $tables)
                                                                           <option value="{{ $tables->phone }}">{{ $tables->location }}</option>
                                                                           @endforeach
                                                                       </select>
                                                                   </fieldset>
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Name</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="name" class="form-control" name="name" placeholder="Heading" value="{{ $data->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Phone</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="decp" class="form-control" name="phone" placeholder="Decription"value="{{ $data->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Email</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="decp" class="form-control" name="email" placeholder="Decription" value="{{ $data->email }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Address</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="name" class="form-control" name="address" placeholder="Heading" value="{{ $data->address }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Bank Name</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="decp" class="form-control" name="bank" placeholder="Decription" value="{{ $data->bank }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Account No</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="decp" class="form-control" name="account" placeholder="Decription" value="{{ $data->account }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>IFSC Code</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="text" id="name" class="form-control" name="ifsc" placeholder="Heading" value="{{ $data->ifsc }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Aadhar Card</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="image" name="adressproof" class="custom-file-input">
                                                             <input type="hidden" id="name" class="form-control" name="adressproof1" placeholder="Heading" value="{{ $data->adressproof }}">

                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Pan Card</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="image" name="idproof" class="custom-file-input">
                                                              <input type="hidden" id="name" class="form-control" name="idproof1" placeholder="Heading" value="{{ $data->idproof }}">

                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Photo</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="image" name="photo" class="custom-file-input">
                                                             <input type="hidden" id="name" class="form-control" name="photo1" placeholder="Heading" value="{{ $data->photo }}">

                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Upload Signature</span>
                                                            </div>
                                                            <div class="col-md-8">
                                                               <input type="file" id="image" name="signature" class="custom-file-input">
                                                            <input type="hidden" id="name" class="form-control" name="signature1" placeholder="Heading" value="{{ $data->signature }}">
                                                            <input type="hidden" id="name" class="form-control" name="id" placeholder="Heading" value="{{ $data->_id }}">

                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 </section>
@stop
