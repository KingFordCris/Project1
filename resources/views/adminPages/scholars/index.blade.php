@include('inc.script.notable')
@extends('template.master')
@section('content')
<li class="nav-item">
        <a class="nav-link" href="/user/index">
            <i class="material-icons">event_note</i> INDEX
        </a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
        <li class="dropdown nav-item">
        
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <i class="material-icons">face</i>
          {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu dropdown-with-icons">
        <a href="/user/profile/add" class="dropdown-item">
        <i class="material-icons">layers</i> View/Edit Profile
        </a>
        <a href="/logout" class="dropdown-item">
        <i class="material-icons">content_paste</i> Log Out
        </a>
        </div>
        </li>
@endsection

@extends('template.usermaster')
@section('content')
@include('inc.errors')
    <div>  <br>
        <p><div class="text-center col-md-12"> <img src="{{ asset('material-kit/assets/img/logo/osdw_logo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:right;position:sticky;height:1.1in;padding-right:2in">
            <img src="{{ asset('material-kit/assets/img/logo/csulogo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:left;position:sticky;height:1in;padding-left:2in">
            Republic of the Phillipines <br><b>CAGAYAN STATE UNIVERSITY <br> <br>OFFICE OF THE STUDENT DEVELOPMENT AND WELFARE</b> <hr style="border-style:double;border-width: 5px;">     
        </div></p>
        
        

        <form class="container" method="POST" action="/user/profile/save">
            <fieldset>
            {{ csrf_field() }} 
           
                    <p class="text-center"><b>SCHOLAR/GRANTEE DATA SHEET <br> 
                        <input class="text-right" type="text" name="sem" value="{{ old('sem') }}" style="width:5.8%;">SEMESTER, S.Y.  20
                        <input class="text-left" type="number" name="sy" value="{{ old('sy') }}" style="width:3.8%;"> - 20
                        <input class="text-left" name="sy2" type="number" value="{{ old('sy2') }}" style="width:3.8%;"></b></p><br><br>
                <div class="form-group col-md-13">
                    <label for="type">NAME OF SCHOLARSHIP</label>
                    <select name="scholarship" class="form-control">
                        <option value="" >...</option>
                        @foreach($scholarships as $scholarship)
                         <option value="{{ $scholarship->id}}">{{ $scholarship->name}}</option>
                        @endforeach
                    </select>
                    @foreach($scholarships as $scholarship)
                    <input type="hidden" class="" name="scholarship_id" value="{{ $scholarship->id}}">
                    @endforeach
                </div>
             
                <div class="form-row" id="name">
                <div class="form-group col-md-4">
                    <label for="fname">FIRST NAME</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}" placeholder=""  required>
                    
                </div>
                <div class="form-group col-md-4">
                    <label for="lname">LAST NAME</label>
                    <input type="text" class="form-control " id="lname" name="lname" value="{{ old('lname') }}" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="mname">MIDDLE NAME</label>
                    <input type="text" class="form-control" id="mname" name="mname" value="{{ old('mname') }}" placeholder="" required>
                </div>
                </div>
                <div class="form-row" id="basicInfo">
                    <div class="form-group col-md-3">
                    <label for="course">COURSE</label>
                    <select id="course" name="course" class="form-control" required >
                        <option>...</option>
                        <option>BSIT</option>
                        <option>BSAIS</option>
                        <option>BSE</option>
                        <option>BSA</option>
                        <option>BSCRIM</option>
                        <option>BSHIM</option>
                    </select>
                </div>
                    <div class="form-group col-md-2">
                        <label for="yrLevel">YEAR LEVEL</label>
                        <select id="yrLevel" name="yrLevel" class="form-control" required>
                            <option>...</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sex">SEX</label>
                        <select id="sex" name="sex" class="form-control" required>
                        <option>...</option>
                        <option>Male</option>
                        <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bDate">BIRTHDATE</label>
                        {{-- <input type="date"  class="form-control required" id="bDate" name="bDate" placeholder=""> --}}
                        <input type="date" class="form-control" value="{{ old('bDate') }}" name="bDate" required>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="age">AGE</label>
                        <input type="number" class="form-control required" id="age" name="age" value="{{ old('age') }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bPlace">BIRTHPLACE</label>
                        <input type="text" class="form-control required" id="bPlace" name="bPlace" value="{{ old('bPlace') }}" placeholder="" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">STATUS</label>
                        <input type="text" class="form-control required" id="status" name="status" value="{{ old('status') }}" placeholder="" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="religion">RELIGION</label>
                        <input type="text" class="form-control required" id="religion" name="religion" value="{{ old('religion') }}" placeholder="" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="contactNum">CONTACT NO.</label>
                        <input type="text" class="form-control" id="contactNum" name="contactNum" value="{{ old('contactNum') }}" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="citizen">CITIZENSHIP</label>
                        <input type="text" class="form-control" id="citizen" name="citizen" value="{{ old('citizen') }}" placeholder="" required>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="homeAdd">HOME ADDRESS</label>
                        <input type="text" class="form-control" id="homeAdd" name="homeAdd" value="{{ old('homeAdd') }}" placeholder="" required>
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
                            <td><input style="width:100%" type="text" name="acad1" value="{{ old('acad1') }}" /></td>
                            <td><input style="width:100%" type="text" name="acad2" value="{{ old('acad2') }}" /></td>
                            <td><input style="width:100%" type="date" name="acad3" value="{{ old('acad3') }}" /></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="text" name="school1" value="{{ old('school1') }}" /></td>
                            <td><input style="width:100%" type="text" name="school2" value="{{ old('school2') }}" /></td>
                            <td><input style="width:100%" type="date" name="school3" value="{{ old('school3') }}" /></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" type="text" name="dy1" value="{{ old('dy1') }}" /></td>
                            <td><input style="width:100%" type="text" name="dy2" value="{{ old('dy2') }}" /></td>
                            <td><input style="width:100%" type="date" name="dy3" value="{{ old('dy3') }}" /></td>
                        </tr>
                    </tbody>
                 </table>
                
                 <div class="form-row col-md-12">
                        <div class="form-group col-md-4">
                        <label for="highestgrade" >HIGHEST GRADE:</label>
                        <input type="number" class="form-control required" id="grade" name="highestgrade" value="{{ old('highestgrade') }}" placeholder="00" required>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="lowestgrade">LOWEST GRADE:</label>
                                <input type="number" class="form-control required" id="grade" name="lowestgrade" value="{{ old('lowestgrade') }}" placeholder="00" required>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="generalaverage">GENERAL AVERAGE (rounded):</label>
                                <input type="number" class="form-control required" id="grade" name="average" value="{{ old('average') }}" placeholder="00" required>
                        
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
                            <td><input  style="width:100%" type="text" name="f_name" value="{{ old('f_name') }}" /></td>
                            <td><input style="width:100%" type="text" name="m_name" value="{{ old('m_name') }}" /></td>
                        </tr>

                        <tr>
                            <td>Age:</td>
                            <td><input style="width:100%" type="number"  name="f_age" value="{{ old('f_age') }}" /></td>
                            <td><input style="width:100%" type="number" name="m_age" value="{{ old('m_age') }}" /></td>
                        </tr>

                        <tr>
                            <td>Address:</td>
                            <td><input style="width:100%" type="text" name="f_address" value="{{ old('f_address') }}" /></td>
                            <td><input style="width:100%" type="text" name="m_address" value="{{ old('m_address') }}" /></td>
                        </tr>

                        <tr>
                            <td>Birthdate:</td>
                            <td><input style="width:100%"  type="date" name="f_birthdate" value="{{ old('f_birthdate') }}" /></td>
                            <td><input style="width:100%" type="date" name="m_birthdate" value="{{ old('m_birthdate') }}" /></td>
                        </tr>

                        <tr>
                            <td>Occupation:</td>
                            <td><input style="width:100%" type="text" name="f_occupation" value="{{ old('f_occupation') }}" /></td>
                            <td><input style="width:100%" type="text" name="m_occupation" value="{{ old('m_occupation') }}" /></td>
                        </tr>

                        <tr>
                            <td>Office Address:</td>
                            <td><input style="width:100%" type="text" name="f_office" value="{{ old('f_office') }}" /></td>
                            <td><input style="width:100%" type="text" name="m_office" value="{{ old('m_office') }}" /></td>
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
                            <td><input style="width:100%" type="number" name="f_monthly" value="{{ old('f_monthly') }}" /></td>
                            <td><input style="width:100%" type="number" name="m_monthly" value="{{ old('m_monthly') }}" /></td>
                        </tr>

                        <tr>
                            <td>Brothers/Sisters</td>
                            <td>Name<input style="width:100%" type="text" name="bs_name1" value="{{ old('bs_name1') }}" />
                                    <input style="width:100%" type="text" name="bs_name2" value="{{ old('bs_name2') }}" />
                                    <input style="width:100%" type="text" name="bs_name3" value="{{ old('bs_name3') }}" />
                                    <input style="width:100%" type="text" name="bs_name4" value="{{ old('bs_name4') }}" />
                                    <input style="width:100%" type="text" name="bs_name5" value="{{ old('bs_name5') }}" />
                                    <input style="width:100%" type="text" name="bs_name6" value="{{ old('bs_name6') }}" />
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
                    <button class="btn btn-primary btn-round" type="submit" onclick="return confirm('You are about to edit your profile, Are you sure you want to continue?'); "> <i class="material-icons">done</i>Add</button>
                    <a href="/user/index" class="btn btn-default btn-round pull-right" onclick="return confirm('Discard Changes?'); "><i class="material-icons">clear</i>Cancel</a>           
            </p>
        </div>
    </form>
@endsection
