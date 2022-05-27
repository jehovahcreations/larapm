@extends('layouts.layout')
@section('content')
 <section id="basic-horizontal-layouts">
                    {{-- <div class="row match-height"> --}}
                        <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="col-4">
                                        <h4 class="card-title">Data</h4>
                                    </div>
                                    <div class="col-4">

                                        <button class="btn btn-danger" id="portbutton" onClick="window.location.reload();">Disconnected</button>

                                    </div>
                                    <div class="col-4">
                                        <p id="host"></p>
                                    </div>

                                </div>
                                {{-- <div class="card-content"> --}}
                                    <div class="card-body">
                                        <form class="form form-horizontal" id="contactForm" method="POST" ">
                                            {{-- {{csrf_field()}} --}}

                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>VID</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="number" id="vid" class="form-control" maxlength="12" name="vid" placeholder="Heading" required value="{{ $table->vid ?? '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Name</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" id="name" class="form-control" name="name" placeholder="Decription" required value="{{ $table->name ?? '' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>DOB</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="date" id="dob" class="form-control" name="dob" placeholder="Decription" required value="{{ $table->dob ?? '' }}">
                                                                <input type="hidden" id="data" name="data" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>gender</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" id="gender" class="form-control" name="gender" placeholder="Decription" required value="{{ $table->gender ?? '' }}">
                                                                <input type="hidden" id="data" name="data" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>gender</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" id="uid" class="form-control" name="uid" placeholder="Decription" required value="{{ $table->id ?? '' }}">
                                                                <input type="hidden" id="data" name="data" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Gender</span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <fieldset class="form-group">
                                                                    <select class="form-control" id="gender" name="gender" required value="{{ $table->gender ?? '' }}">
                                                                        <option value="{{ $table->gender }}" {{ (Input::old("title") == $key ? "selected":"") }}>{{ $val }}</option>

                                                                       {{-- // @foreach($table as $tables) --}}
                                                                        {{-- @foreach ($table as $tables)
                                                                           <option value="{{ $tables->menuID }}">{{ $tables->menuName }}</option>
                                                                           @endforeach --}}
                                                                       {{-- </select>
                                                                   </fieldset>
                                                          </div>
                                                        </div>
                                                    </div>  --}}
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
                                            </div>
                                        </form>
<div id="success-message"></div>
                                        <div class="col-md-8 offset-md-4">
                                            <button class="btn btn-warning" onClick="rama();" id="">Scan</button>
                                            <button class="btn btn-warning" onClick="captureFPAuth();" id="killer" style="visibility: hidden">Scan</button>
                                            <button type="submit" form="contactForm" value="Submit" class="btn btn-danger" id="myCheck" style="visibility: hidden">Save</button>
                                            {{-- <button type="submit" class="btn btn-primary mr-1 mb-1" style="visibility: hidden">Submit</button> --}}
                                            <button type="reset" class="btn btn-outline-warning mr-1 mb-1" >Reset</button>
                                        </div>
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

                    {{-- <input type="button" id="btnRDInfo" onclick="benet()"/>
                    <input type="button" id="btnCapture" onclick="captureFPAuth()"/> --}}
                    <script>
                     document.addEventListener("DOMContentLoaded", function(event) {

                        benet();

                      });
                    </script>

                    <script type="text/javascript">
                    function rdservice(newport) {
                     var newport = newport;
                     var port;
                     var urlStr = '';
                     urlStr = 'http://localhost:'+newport+'/';
                     getJSON_rd(urlStr,
                     function (err, data) {
                     if (err == null) {
                        document.getElementById('port').value = 200;
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(data, "application/xml");
                        var txt=doc.getElementsByTagName("RDService")[0].getAttribute("status");
                        // alert(txt);
                        if(txt == 'READY'){
                        var mybtn = document.getElementById('portbutton');
                        mybtn.innerHTML = 'Connected';
                        mybtn.className = 'btn btn-success'
                        document.getElementById('portval').value = urlStr;
                        document.getElementById('host').innerHTML = 'url :'+ urlStr;
                        }

                     } else {
                      // alert(urlStr);
                     // document.getElementById('port').value = "0";
                    }});
                     }
                    var getJSON_rd = function (url, callback) {
                     var xhr = new XMLHttpRequest();
                     xhr.open('RDSERVICE', url, true);
                     xhr.responseType = 'text';
                     xhr.onload = function () {
                     var status = xhr.status;
                    // document.getElementById('port').value = status;
                     if (status == 200) {


                     callback(null, xhr.response);
                     } else {
                     callback(null,'status');
                     }
                     };
                     xhr.send();
                     };

                     async function benet(){

                        for (let i = 11100; i < 11105; i++) {
                         if(document.getElementById('port').value == 0){
                           // document.getElementById('host').innerHTML = '';
                           rdservice(i);
                         }else{
                             return i;
                         }
                        }
                     };
                     function timer(ms) { return new Promise(res => setTimeout(res, ms)); };

                     async function rama() {

                        for (var start = 1; start < 7; start++)
                         setTimeout(function () { document.getElementById("killer").click();  }, 3000 * start);

                     }

                     async function captureFPAuth() {
                       // const timer = ms => new Promise(res => setTimeout(res, ms))


                     var port;
                     var urlStr = '';

                     urlStr = document.getElementById('portval').value+'rd/capture';

                    getJSONCapture(urlStr,

                     function (err, data) {

                     if (err != null) {
                     alert('Something went wrong: ' + err);
                     } else {
                         document.getElementById('data').value=data;
                         document.getElementById("myCheck").click();
                    // alert('Response:-' + String(data));
                     }
                     }
                     );

                     }
                     var getJSONCapture = function (url, callback) {
                     var name = document.getElementById('name').value;
                     var vid = document.getElementById('vid').value;
                     var dob = document.getElementById('dob').value;
                     var gender = document.getElementById('gender').value;
                     let result1 = dob.substring(0, 4);
                     //alert(result);
                     var xhr = new XMLHttpRequest();
                     xhr.open('CAPTURE', url, true);
                    xhr.responseType = 'text'; //json
                    var InputXml = '<PidOptions ver="1.0"><Demo lang=""><Pi ms="E" mv="100" name="'+name+'" gender="'+gender+'" dob="'+result1+'"/></Demo><Opts fCount="1" fType="0" iCount="0" iType="" pCount="0" pType=""  format="0" pidVer="2.0" timeout="10000" otp="" wadh="" posh="" env="P"/></PidOptions>';
                     xhr.onload = function () {
                     var status = xhr.status;
                     if (status == 200) {
                     callback(null, xhr.response);
                     } else {
                     callback(status);
                     }
                     };
                     xhr.send(InputXml);

                     }
     $('#contactForm').on('submit',function(e){
        e.preventDefault();

        let name = $('#name').val();
        let vid = $('#vid').val();
        let dob = $('#dob').val();
        let data = $('#data').val();
        let gender = $('#gender').val();

        $.ajax({
          url: "{{url('/image/post')}}",
          type:"POST",
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            vid:vid,
            dob:dob,
            data:data,
            gender:gender,
          },
          success:function(response){
            console.log(response);
            if (response) {
             $('#success-message').text(response.success);
             // $("#contactForm")[0].reset();
            // alert('success')
            }
          },
          error: function(response) {
            // $('#name-error').text(response.responseJSON.errors.name);
            // $('#email-error').text(response.responseJSON.errors.email);
            // $('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
            // $('#subject-error').text(response.responseJSON.errors.subject);
            // $('#message-error').text(response.responseJSON.errors.message);
           // alert('fail')
           }
         });
        });


                    </script>
 </section>
@stop
