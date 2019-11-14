@extends('layouts.app')
@section('content')
<body style="border-width:15px;border-style: solid;border-color: navy">
        @foreach($career as $career)
            <div style="margin-left: 60px;text-align: justify; text-justify: inter-word; margin-right:60px;">
                <h1 id="text">{{$career->Title}}</h1>
                <p id="text" style="text-align: justify; text-justify: inter-word;">Please Specify the job that you are applying for.<br>If you feel like you are eligible for any future positions then you can just drop your information along with you cv below.</p>
            </div>
            <div style="margin-left: 60px;text-align: justify; text-justify: inter-word; margin-right:60px;">

            <h2 id="text">{{$career->JobTitle}}</h2>
            <p id="text1">{{$career->JobDescription}}
            </p>
            <h3 id="text">Deadline</h3>
            <p id="text"> {{$career->Deadline}} </p>
            <h3 id="text">Requirements</h3>
            
            @endforeach
            @foreach($requirement as $req)
            <ul id="text2">
                <li>{{$req->requirement}}</li>
            </ul>
            @endforeach
    </div>

    <h4 style='margin-left:60px;text-align: justify; text-justify: inter-word; margin-right:60px;'>Fill the form to apply for the position.</h4>
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-8 effect-2 jumbotron">
                @if (\Illuminate\Support\Facades\Session::has('error'))
                    <div class="alert alert-danger">
                        {!! session('error') !!}
                    </div>
                @endif
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
                    <form action="{{route('send')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group col-lg-6">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('name')}}</span>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Citizenship Number/National ID number:</label>
                                <input type="text" name="idnum" class="form-control" id="idnum" placeholder="Your ID" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('idnum')}}</span>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Mobile number:</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder=""/>
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('phone')}}</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder=""/>
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('email')}}</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Father's Name:</label>
                                <input type="text" class="form-control" name="fathername" id="fathername" placeholder=""/>
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('fathername')}}</span>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Mother's Name:</label>
                                <input type="text" class="form-control" name="mothername" id="mothername" placeholder=""/>
                                <div class="validation"></div>
                                <span style="color: red">{{$errors->first('mothername')}}</span>
                            </div>

                        </div>
                        <div class="form-group" style="border-style: solid;border-color: #dde2f0" >
                            <div class="form-group col-lg-6">
                                <label><h4>Address:</h4></label><br>
                                <label>District:</label>
                                <input type="text" class="form-control" name="district" id="district" placeholder="" data-rule="district" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('district')}}</span>

                            <div class="form-group col-lg-6">
                                <label>Municipality:</label>
                                <input type="text" class="form-control" name="municipality" id="municipality" placeholder="" data-rule="municipality" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('municipality')}}</span>

                            <div class="form-group col-lg-6">
                                <label>Ward:</label>
                                <input type="text" class="form-control" name="ward" id="ward" placeholder="" data-rule="ward" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('ward')}}</span>
                            <div class="form-group col-lg-6">
                                <label>Street:</label>
                                <input type="text" class="form-control" name="street" id="street" placeholder="" />
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('street')}}</span>
                            <div class="form-group col-lg-6">
                                <label>ZIP Code:</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder=""/>
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('zip')}}</span>
                        </div>
                    <div style="padding-left: 15px;">
                        <div>
                            <label>Have you ever convicted of a criminal charges?</label><br>
                            <input type="radio" name="criminal" value="yes" id="criminal" placeholder=""/>Yes
                            <input type="radio" name="criminal" value="no" id="criminal" placeholder=""/>No
                            <div class="validation"></div>
                            <span style="color: red">{{$errors->first('criminal')}}</span>
                        </div>
                        <div>
                            <label>Have you ever been discharged from duty due to lack of discipline?</label><br>
                            <input type="radio" name="duty" value="yes" id="duty" placeholder=""/>Yes
                            <input type="radio" name="duty" value="no" id="duty" placeholder=""/>No
                            <div class="validation"></div>
                            <span style="color: red">{{$errors->first('duty')}}</span>
                        </div>
                        <div>
                            <label>Are you ready to work under target pressure with deadline? </label><br>
                            <input type="radio" name="deadline" value="yes" id="deadline" placeholder=""/>Yes
                            <input type="radio" name="deadline" value="no" id="deadline" placeholder=""/>No
                            <div class="validation"></div>
                            <span style="color: red">{{$errors->first('deadline')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Skills</label>
                            <input type="text" class="form-control" name="skills" id="skills" placeholder="Mention maximum 10 skills"/>
                            <div class="validation"></div>
                        </div>
                        <span style="color: red">{{$errors->first('skills')}}</span>
                        <div class="form-group">
                            <label>Languages Known:</label>
                            <input type="text" class="form-control" name="language" id="language" placeholder="Mention maximum known"/>
                            <div class="validation"></div>
                        </div>

                    </div>
                        <span style="color: red">{{$errors->first('language')}}</span>
                        <div class="form-group col-lg-6">
                            <label>Expected salary:</label>
                            <input type="text" class="form-control" name="salary" id="salary" placeholder=""/>
                            <div class="validation"></div>
                            <span style="color: red">{{$errors->first('salary')}}</span>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Total work experience:</label>
                            <input type="text" class="form-control" name="work" id="work" placeholder=""/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Education:</label>
                            <input type="text" class="form-control" name="education" id="education" placeholder=""/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label>University:</label>
                            <input type="text" class="form-control" name="university" id="university" placeholder=""/>
                            <div class="validation"></div>
                        </div>
                        <div style="padding-left:15px">
                            <div class="form-group">
                                <label>Applying for:</label>
                                <select name="apply">
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="IOS Developer">IOS Developer</option>
                                    <option value="Android Developer">Android Developer</option>
                                    <option value="Software Developer">Software Developer</option>
                                    <option value="Research and Development">Research and Development</option>
                                    <option value="Sales & Marketing">Sales & Marketing</option>
                                    <option value="HR & Administration">HR & Administration</option>
                                    <option value="Acoounts & Audit">Accounts & Audit</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Other Department">Other Department</option></option>
                                    
                                </select>
                                <div class="validation"></div>
                            </div>
                            <span style="color: red">{{$errors->first('apply')}}</span>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea type="text" name="message" id="message" class="form-control" rows="5" placeholder="Enter any queries"></textarea>
                                <span style="color: red">{{$errors->first('message')}}</span>
                            </div>
                            <div class="form-group">
                                <label for="idimg">Upload your national ID/Citizenship:</label>
                                <input type="file" name="idimg" class="btn btn-default">
                            </div>
                            <div class="form-group">
                                <label for="cv">Upload your CV:</label>
                                <input type="file" name="cv" class="btn btn-default">
                            </div>
                            <div class="form-group">
                                <label for="pp">Upload your recent PP size image:</label>
                                <input type="file" name="pp" class="btn btn-default">
                            </div>
                            <div class="form-group float-right">
                                <button class="btn btn-primary float-left">Submit</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

@endsection

