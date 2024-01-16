@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
    <div class="container">  <br>
        <p><div class="text-center col-md-12"> <img src="{{ asset('material-kit/assets/img/logo/osdw_logo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:right;position:sticky;height:1.1in;padding-right:2in">
            <img src="{{ asset('material-kit/assets/img/logo/csulogo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:left;position:sticky;height:1in;padding-left:2in">
            Republic of the Phillipines <br><b>CAGAYAN STATE UNIVERSITY <br> <br>OFFICE OF THE STUDENT DEVELOPMENT AND WELFARE</b> <hr style="border-style:double;border-width: 5px;">     
        </div></p>
        
        

        <form class="container" method="POST" action="/add/new/scholar">
            <fieldset>
            {{ csrf_field() }} 
           
                    <p class="text-center"><b>SCHOLAR/GRANTEE DATA SHEET <br> 
                        <select name="sem" id="sem" style="width:5.8%;">
                            <option value=" ">...</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </select>SEMESTER, S.Y. 20
                        {{-- <script>document.write(new Date().getFullYear())</script> - <script>document.write(new Date().getFullYear() + 1)</script> --}}
                        <input class="text-left{{ $errors->has('sy') ? ' has-error' : '' }}" type="number" name="sy" value="{{ old('sy') }}" style="width:3.8%;">
                        <small class="text-danger">{{ $errors->first('sy') }}</small> - 20
                        <input class="text-left{{ $errors->has('sy2') ? ' has-error' : '' }}" name="sy2" type="number" value="{{ old('sy2') }}" style="width:3.8%;">
                        <small class="text-danger">{{ $errors->first('sy2') }}</small>
                    </b></p><br><br>
                <div class="form-group col-md-13">
                    <label for="type">NAME OF SCHOLARSHIP</label>
                    <select name="scholarship_id" class="form-control{{ $errors->has('scholarship_id') ? ' has-error' : '' }}">
                        <option value="" >...</option>
                        @foreach($scholarships as $scholarship)
                         <option value="{{ $scholarship->id}}">{{ $scholarship->name}}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('scholarship_id') }}</small>
                </div>
             
                <div class="form-row" id="name">
                <div class="form-group col-md-4">
                    <label for="fname">FIRST NAME</label>
                    <input type="text" onkeyup="javascript:capitalize(this);" class="form-control{{ $errors->has('fname') ? ' has-error' : '' }}" id="fname" name="fname" value="{{ old('fname') }}" placeholder=""  required>
                    <small class="text-danger">{{ $errors->first('fname') }}</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="lname">LAST NAME</label>
                    <input type="text" class="form-control{{ $errors->has('lname') ? ' has-error' : '' }}" onkeyup="javascript:capitalize(this);" id="lname" name="lname" value="{{ old('lname') }}" placeholder="" required>
                    <small class="text-danger">{{ $errors->first('lname') }}</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="mname">MIDDLE NAME</label>
                    <input type="text" class="form-control{{ $errors->has('mname') ? ' has-error' : '' }}" id="mname" onkeyup="javascript:capitalize(this);" name="mname" value="{{ old('mname') }}" placeholder="" required>
                    <small class="text-danger">{{ $errors->first('mname') }}</small>
                </div>
                </div>
                <div class="form-row" id="basicInfo">
                    <div class="form-group col-md-3">
                    <label for="course">COURSE</label>
                    <select id="course" name="course" class="form-control{{ $errors->has('course') ? ' has-error' : '' }}" required >
                            <option>...</option>
                    @foreach ($courses as $course)
                    <option>{{$course->courseAbbr}}</option>
                    @endforeach
                    <small class="text-danger">{{ $errors->first('course') }}</small>
                    </select>
                </div>
                    <div class="form-group col-md-2">
                        <label for="yrLevel">YEAR LEVEL</label>
                        <select id="yrLevel" name="yrLevel" class="form-control{{ $errors->has('yrLevel') ? ' has-error' : '' }}" required>
                            <option>...</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                            <small class="text-danger">{{ $errors->first('yrLevel') }}</small>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sex">SEX</label>
                        <select id="sex" name="sex" class="form-control{{ $errors->has('sex') ? ' has-error' : '' }}" required>
                        <option>...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <small class="text-danger">{{ $errors->first('sex') }}</small>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bDate">BIRTHDATE</label>
                        {{-- <input type="date"  class="form-control required" id="bDate" name="bDate" placeholder=""> --}}
                        <input type="date" class="form-control{{ $errors->has('bDate') ? ' has-error' : '' }}" value="{{ old('bDate') }}" name="bDate" required>
                        <small class="text-danger">{{ $errors->first('bDate') }}</small>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="age">AGE</label>
                        <input type="number" class="form-control{{ $errors->has('age') ? ' has-error' : '' }}" id="age" name="age" value="{{ old('age') }}" placeholder="" required>
                        <small class="text-danger">{{ $errors->first('age') }}</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bPlace">BIRTHPLACE</label>
                        <input type="text" class="form-control required{{ $errors->has('bPlace') ? ' has-error' : '' }}" id="bPlace" onkeyup="javascript:capitalize(this);" name="bPlace" value="{{ old('bPlace') }}" placeholder="" required>
                        <small class="text-danger">{{ $errors->first('bPlace') }}</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">STATUS</label>
                        <select name="status" id="status" class="form-control{{ $errors->has('status') ? ' has-error' : '' }}"  required>
                            <option value="">...</option>
                            <option value="single">Single</option>
                            <option value="merried">Married</option>
                            <option value="widow">Widow</option>
                            <small class="text-danger">{{ $errors->first('status') }}</small>
                        </select>
                        {{-- <input type="text" class="form-control required" id="status" name="status" value="{{ old('status') }}" placeholder="" required> --}}
                    </div>
                    <div class="form-group col-md-3">
                        <label for="religion">RELIGION</label>
                        <input type="text" onkeyup="javascript:capitalize(this);" class="form-control{{ $errors->has('religion') ? ' has-error' : '' }}" id="religion" name="religion" value="{{ old('religion') }}" placeholder="" required>
                        <small class="text-danger">{{ $errors->first('religion') }}</small>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="contactNum">CONTACT NO.</label>
                        <input type="text" class="form-control{{ $errors->has('contactNum') ? ' has-error' : '' }}" id="contactNum" name="contactNum" value="{{ old('contactNum') }}" placeholder="+639123.." required>
                        <small class="text-danger">{{ $errors->first('contactNum') }}</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="citizen">CITIZENSHIP</label>
                        <input type="text" class="form-control{{ $errors->has('citizen') ? ' has-error' : '' }}" id="citizen" onkeyup="javascript:capitalize(this);" name="citizen" value="{{ old('citizen') }}" placeholder="" required>
                        <small class="text-danger">{{ $errors->first('citizen') }}</small>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="homeAdd">HOME ADDRESS</label>
                        <input type="text" class="form-control{{ $errors->has('homeAdd') ? ' has-error' : '' }}" id="homeAdd" name="homeAdd" onkeyup="javascript:capitalize(this);" value="{{ old('homeAdd') }}" placeholder="St/Brgy, Town City/Municipality, Provice" required>
                        <small class="text-danger">{{ $errors->first('homeAdd') }}</small>
                    </div>
                </div>
            </fieldset>

                <!--honor-->
                

                <table class="table table-hover" style="width:100%;border:2px solid black;border-collapse: collapse">
                    <thead>
                            <h4 class="text-center" style="border-style:double;border-width: 5px;"><b> ACADEMIC AWARDS/HONORS RECEIVED</b></h4>
                        <tr class="">
                            <th>NATURE/DESCRIPTION</th>
                            <th>SCHOOL</th>
                            <th>DATE/YEAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="acad1" value="{{ old('acad1') }}" /><small class="text-danger">{{ $errors->first('acad1') }}</small></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="acad2" value="{{ old('acad2') }}" /><small class="text-danger">{{ $errors->first('acad2') }}</small></td>
                            <td><input style="width:100%" type="date" onkeyup="javascript:capitalize(this);" name="acad3" value="{{ old('acad3') }}" /><small class="text-danger">{{ $errors->first('acad3') }}</small></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="school1" value="{{ old('school1') }}" /><small class="text-danger">{{ $errors->first('school1') }}</small></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="school2" value="{{ old('school2') }}" /><small class="text-danger">{{ $errors->first('school2') }}</small></td>
                            <td><input style="width:100%" type="date" onkeyup="javascript:capitalize(this);" name="school3" value="{{ old('school3') }}" /><small class="text-danger">{{ $errors->first('school3') }}</small></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="dy1" value="{{ old('dy1') }}" /><small class="text-danger">{{ $errors->first('dy1') }}</small></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="dy2" value="{{ old('dy2') }}" /><small class="text-danger">{{ $errors->first('dy2') }}</small></td>
                            <td><input style="width:100%" type="date" onkeyup="javascript:capitalize(this);"  name="dy3" value="{{ old('dy3') }}" /><small class="text-danger">{{ $errors->first('dy3') }}</small></td>
                        </tr>
                    </tbody>
                 </table>
                
                 <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                        <label for="highestgrade" >HIGHEST GRADE:</label>
                        <input type="number" class="form-control{{ $errors->has('highestgrade') ? ' has-error' : '' }}" id="grade" name="highestgrade" value="{{ old('highestgrade') }}" placeholder="00" required>
                        <small class="text-danger">{{ $errors->first('highestgrade') }}</small>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="lowestgrade">LOWEST GRADE:</label>
                                <input type="number" class="form-control{{ $errors->has('lowestgrade') ? ' has-error' : '' }}" id="grade" name="lowestgrade" value="{{ old('lowestgrade') }}" placeholder="00" required>
                                <small class="text-danger">{{ $errors->first('lowestgrade') }}</small>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="average">GENERAL AVERAGE (rounded):</label>
                                <input type="number" class="form-control{{ $errors->has('generalaverage') ? ' has-error' : '' }}" id="grade" name="average" value="{{ old('average') }}" placeholder="00" required>
                                <small class="text-danger">{{ $errors->first('average') }}</small>
                        </div>
                </div>

                <table class="table table-hover" style="width:100%;border:2px solid black;border-collapse: collapse">
                    <thead>
                            <h4 class="text-center" style="border-style:double;border-width: 5px;"><b> FAMILY BACKGROUND</b></h4>
                        <tr>

                            <th></th>
                            <th>FATHER <p style=" text-align:justify"> 
                                <div class="form-check">
                                    <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="f_liv" value="Living">Living
                                      <span class="form-check-sign">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="f_dec" value="Deceased">Deceased
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                </div>
                                </p></th>
                            <th>MOTHER <p style=" text-align:justify"> 
                                    <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="m_liv" value="Living">Living
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                    
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="checkbox" name="m_dec" value="Deceased">Deceased
                                              <span class="form-check-sign">
                                                <span class="check"></span>
                                              </span>
                                            </label>
                                    </div>
                                </p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><input  style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="f_name" value="{{ old('f_name') }}" /></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="m_name" value="{{ old('m_name') }}" /></td>
                        </tr>

                        <tr>
                            <td>Age:</td>
                            <td><input style="width:100%" type="number"  name="f_age" value="{{ old('f_age') }}" /></td>
                            <td><input style="width:100%" type="number" name="m_age" value="{{ old('m_age') }}" /></td>
                        </tr>

                        <tr>
                            <td>Address:</td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="f_address" value="{{ old('f_address') }}" /></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="m_address" value="{{ old('m_address') }}" /></td>
                        </tr>

                        <tr>
                            <td>Birthdate:</td>
                            <td><input style="width:100%"  type="date" name="f_birthdate" value="{{ old('f_birthdate') }}" /></td>
                            <td><input style="width:100%" type="date" name="m_birthdate" value="{{ old('m_birthdate') }}" /></td>
                        </tr>

                        <tr>
                            <td>Occupation:</td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="f_occupation" value="{{ old('f_occupation') }}" /></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="m_occupation" value="{{ old('m_occupation') }}" /></td>
                        </tr>

                        <tr>
                            <td>Office Address:</td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="f_office" value="{{ old('f_office') }}" /></td>
                            <td><input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="m_office" value="{{ old('m_office') }}" /></td>
                        </tr>

                        <tr>
                            <td>Educational Attainment:</td>
                            <td>
                                <select style="width:100%"  name="f_educational" >
                                    <option>...</option>
                                    <option>Secondary Graduate</option>
                                    <option>Secondary UnderGraduate</option>
                                    <option>Tertiary  Graduate</option>
                                    <option>Tertiary UnderGraduate</option>
                                </select>
                            </td>
                            <td>
                                <select style="width:100%"  name="m_educational" >
                                <option>...</option>
                                <option>Secondary Graduate</option>
                                <option>Secondary UnderGraduate</option>
                                <option>Tertiary  Graduate</option>
                                <option>Tertiary UnderGraduate</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Contact Number</td>
                            <td><input style="width:100%" type="contact" name="f_contact#" value="{{ old('f_contact') }}" /></td>
                            <td><input style="width:100%" type="contact" name="m_contact#" value="{{ old('m_contact') }}" /></td>
                        </tr>

                        <tr>
                            <td>Monthly/Annual Income</td>
                            <td><input style="width:100%" type="number" name="f_monthly" value="{{ old('f_monthly') }}" placeholder="00.00"/></td>
                            <td><input style="width:100%" type="number" name="m_monthly" value="{{ old('m_monthly') }}" placeholder="00.00" /></td>
                        </tr>

                        <tr>
                            <td>Brothers/Sisters</td>
                            <td>Name<input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name1" value="{{ old('bs_name1') }}" />
                                    <input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name2" value="{{ old('bs_name2') }}" />
                                    <input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name3" value="{{ old('bs_name3') }}" />
                                    <input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name4" value="{{ old('bs_name4') }}" />
                                    <input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name5" value="{{ old('bs_name5') }}" />
                                    <input style="width:100%" type="text" onkeyup="javascript:capitalize(this);" name="bs_name6" value="{{ old('bs_name6') }}" />
                            </td>
                            <td>Age<input style="width:100%" type="number" name="bs_age1" value="{{ old('bs_age1') }}" />
                                   <input style="width:100%" type="number" name="bs_age2" value="{{ old('bs_age2') }}" />
                                   <input style="width:100%" type="number" name="bs_age3" value="{{ old('bs_age3') }}" />
                                   <input style="width:100%" type="number" name="bs_age4" value="{{ old('bs_age4') }}" />
                                   <input style="width:100%" type="number" name="bs_age5" value="{{ old('bs_age5') }}" />
                                   <input style="width:100%" type="number" name="bs_age6" value="{{ old('bs_age6') }}" />
                            </td>
                        </tr>
                    </tbody>
                 </table>
            <p style="float: right;" >
                    <button class="btn btn-primary btn-round" type="submit" onclick="return confirm('You are about to add new scholar, make sure all the data is correct, Want to continue? '); "> <i class="material-icons">done</i>Add</button>
                    <a href="/all/scholars" class="btn btn-default btn-round pull-right" onclick="return confirm('Discard Changes?'); "><i class="material-icons">clear</i>Cancel</a>           
            </p>
        </div>
    </form>
@endsection
