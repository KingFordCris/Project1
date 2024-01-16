@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
    <div>  <br>
        <p><div class="text-center col-md-12"> <img src="{{ asset('material-kit/assets/img/logo/osdw_logo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:right;position:sticky;height:1.1in;padding-right:2in">
            <img src="{{ asset('material-kit/assets/img/logo/csulogo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:left;position:sticky;height:1in;padding-left:2in">
            Republic of the Phillipines <br><b>CAGAYAN STATE UNIVERSITY <br> <br>OFFICE OF THE STUDENT DEVELOPMENT AND WELFARE</b> <hr style="border-style:double;border-width: 5px;">     
        </div></p>
        <form class="container" method="POST" action="{{ route('OSMS_scholars.update',$scholar->id) }}">
            <fieldset>
            {{ csrf_field() }}
            {{ method_field('PATCH')}}
                    <p class="text-center"><b>SCHOLAR/GRANTEE DATA SHEET <br> 
                        <input class="text-right" type="text" name="sem"   value="{{$scholar->sem}}" style="width:5.8%;" required>SEMESTER, S.Y.  20
                        <input class="text-left" type="number" name="sy"   value="{{ $scholar->sy}}" style="width:3.8%;" required><small class="text-danger">{{ $errors->first('sy') }}</small> - 20
                        <input class="text-left" name="sy2" type="number"   value="{{ $scholar->sy2 }}" style="width:3.8%;" required><small class="text-danger">{{ $errors->first('sy2') }}</small></b></p><br><br>
                <div class="form-group col-md-13">
                    <label for="type">NAME OF SCHOLARSHIP</label>
                    <select name="scholarship_id" class="form-control" required>
                        <option value="{{$scholar->scholarship->id}}">{{$scholar->scholarship->name}}</option>
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
                    <input type="text" class="form-control" id="fname" name="fname"  onkeyup="javascript:capitalize(this);" required  value="{{$scholar->fname }}" placeholder="">
                    <small class="text-danger">{{ $errors->first('fname') }}</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="lname">LAST NAME</label>
                    <input type="text" class="form-control " id="lname" name="lname" onkeyup="javascript:capitalize(this);" required  value="{{$scholar->lname }}" placeholder="">
                    <small class="text-danger">{{ $errors->first('lname') }}</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="mname">MIDDLE NAME</label>
                    <input type="text" class="form-control" id="mname" name="mname"  onkeyup="javascript:capitalize(this);" required  value="{{$scholar->mname}}" placeholder="">
                    <small class="text-danger">{{ $errors->first('mname') }}</small>
                </div>
                </div>
                <div class="form-row" id="basicInfo">
                    <div class="form-group col-md-3">
                    <label for="course">COURSE</label>
                    <select id="course" name="course" required class="form-control" >
                        <option value="{{$scholar->course}}">{{$scholar->course}}</option>
                        <option>...</option>
                        @foreach ($courses as $course)
                        <option>{{$course->courseAbbr}}</option>
                        @endforeach
                    </select>
                    <small class="text-danger">{{ $errors->first('course') }}</small>
                </div>
                    <div class="form-group col-md-2">
                        <label for="yrLevel">YEAR LEVEL</label>
                        <select id="yrLevel" name="yrLevel" required   class="form-control">
                            <option value="{{$scholar->yrLevel}}">{{$scholar->yrLevel}}</option>
                            <option>...</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                        </select>
                        <small class="text-danger">{{ $errors->first('yrLevel') }}</small>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="sex">SEX</label>
                        <select id="sex" name="sex" required class="form-control" >
                        <option value="{{$scholar->sex}}">{{$scholar->sex}}</option>
                        <option>...</option>
                        <option>Male</option>
                        <option>Female</option>
                        </select>   
                        <small class="text-danger">{{ $errors->first('sex') }}</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bDate">BIRTHDATE</label>
                        {{-- <input type="date"  class="form-control required" id="bDate" name="bDate" placeholder=""> --}}
                        <input type="date" class="form-control" required value="{{ $scholar->bDate }}" name="bDate">
                        <small class="text-danger">{{ $errors->first('bDate') }}</small>
                    </div>
                    <div class="form-group col-md-1">
                        <label for="age">AGE</label>
                        <input type="number" class="form-control required" id="age" name="age" required value="{{ $scholar->age}}" placeholder="" >
                        <small class="text-danger">{{ $errors->first('age') }}</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="bPlace">BIRTHPLACE</label>
                        <input type="text" class="form-control required" id="bPlace" onkeyup="javascript:capitalize(this);" name="bPlace" required value="{{ $scholar->bPlace}}" placeholder="">
                        <small class="text-danger">{{ $errors->first('bPlace') }}</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">STATUS</label>
                        <select name="status" id="status" class="form-control{{ $errors->has('status') ? ' has-error' : '' }}" >
                            <option value="{{ $scholar->status }}">{{ $scholar->status }}</option>
                            <option value="">...</option>
                            <option value="single">Single</option>
                            <option value="merried">Married</option>
                            <option value="widow">Widow</option>
                        </select>
                        <small class="text-danger">{{ $errors->first('status') }}</small>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="religion">RELIGION</label>
                        <input type="text" class="form-control required" id="religion" onkeyup="javascript:capitalize(this);" name="religion" required value="{{ $scholar->religion }}" placeholder="">
                        <small class="text-danger">{{ $errors->first('religion') }}</small>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="contactNum">CONTACT NO.</label>
                        <input type="text" class="form-control" id="contactNum" name="contactNum" onkeyup="javascript:capitalize(this);" required value="{{ $scholar->contactNum }}" placeholder="">
                        <small class="text-danger">{{ $errors->first('contactNum') }}</small>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="citizen">CITIZENSHIP</label>
                        <input type="text" class="form-control" id="citizen" name="citizen" onkeyup="javascript:capitalize(this);" required value="{{ $scholar->citizen }}" placeholder="">
                        <small class="text-danger">{{ $errors->first('citizen') }}</small>
                    </div>
                    <div class="form-group col-md-7">
                        <label for="homeAdd">HOME ADDRESS</label>
                        <input type="text" class="form-control" id="homeAdd" name="homeAdd" onkeyup="javascript:capitalize(this);" required value="{{ $scholar->homeAdd }}" placeholder="St/Brgy, Town/Municipality, Provice">
                        <small class="text-danger">{{ $errors->first('homeAdd') }}</small>
                    </div>
                </div>
            </fieldset>
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
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="acad1" value="{{ $scholar->acad1 }}" /><small class="text-danger">{{ $errors->first('acad1') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="acad2" value="{{ $scholar->acad2 }}" /><small class="text-danger">{{ $errors->first('acad2') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="date" name="acad3" value="{{ $scholar->acad3 }}" /><small class="text-danger">{{ $errors->first('acad3') }}</small></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="school1" value="{{$scholar->school1 }}" /><small class="text-danger">{{ $errors->first('school1') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="school2" value="{{ $scholar->school2 }}" /><small class="text-danger">{{ $errors->first('school2') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="date" name="school3" value="{{ $scholar->school3 }}" /><small class="text-danger">{{ $errors->first('school3') }}</small></td>
                        </tr>
                        <tr>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="dy1" value="{{ $scholar->dy1 }}" /><small class="text-danger">{{ $errors->first('dy1') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="text" name="dy2" value="{{$scholar->dy2 }}" /><small class="text-danger">{{ $errors->first('dy2') }}</small></td>
                            <td><input style="width:100%" onkeyup="javascript:capitalize(this);" type="date" name="dy3" value="{{$scholar->dy3 }}" /><small class="text-danger">{{ $errors->first('dy3') }}</small></td>
                        </tr>
                    </tbody>
                 </table>
                
                 <div class="form-row col-md-12">
                    <div class="form-group col-md-4">
                        <label for="highestgrade" >HIGHEST GRADE:</label>
                        <input type="number" class="form-control required" id="grade" name="highestgrade" value="{{ $scholar->highestgrade }}" placeholder="00" required>
                        <small class="text-danger">{{ $errors->first('highestgrade') }}</small>    
                    </div>
                        <div class="form-group col-md-4">
                                <label for="lowestgrade">LOWEST GRADE:</label>
                                <input type="number" class="form-control required" id="grade" name="lowestgrade" value="{{ $scholar->lowestgrade }}" placeholder="00" required>
                                <small class="text-danger">{{ $errors->first('lowestgrade') }}</small>
                            </div>
                        <div class="form-group col-md-4">
                                <label for="generalaverage">GENERAL AVERAGE (rounded):</label>
                                <input type="number" class="form-control required" id="grade" name="average" value="{{ $scholar->average }}" placeholder="00" required>
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
                                        @if ($scholar->f_liv == "Living")
                                        <input class="form-check-input" type="checkbox" name="f_liv" checked   value="Living">Living
                                        @else
                                        <input class="form-check-input" type="checkbox" name="f_liv"    value="Living">Living
                                        @endif
                                      <span class="form-check-sign">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                
                                        <label class="form-check-label">
                                                @if ($scholar->f_dec == "Deceased")
                                                <input class="form-check-input" type="checkbox" name="f_dec" checked   value="Deceased">Deceased
                                                @else
                                                <input class="form-check-input" type="checkbox" name="f_dec"    value="Deceased">Deceased
                                                @endif
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                </div>
                                </p></th>
                            <th>MOTHER <p style=" text-align:justify"> 
                                    <div class="form-check">
                                        <label class="form-check-label">
                                                @if ($scholar->m_liv == "Living")
                                                <input class="form-check-input" type="checkbox" name="m_liv" checked   value="Living">Living
                                                @else
                                                <input class="form-check-input" type="checkbox" name="m_liv"    value="Living">Living
                                                @endif
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                    
                                            <label class="form-check-label">
                                                    @if ($scholar->m_dec == "Deceased")
                                                    <input class="form-check-input" type="checkbox" name="m_dec" checked   value="Deceased">Deceased
                                                    @else
                                                    <input class="form-check-input" type="checkbox" name="m_dec"  value="Deceased">Deceased
                                                    @endif
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
                            <td><input  style="width:100%" type="text" name="f_name"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->f_name }}" /></td>
                            <td><input style="width:100%" type="text" name="m_name"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->m_name }}" /></td>
                        </tr>

                        <tr>
                            <td>Age:</td>
                            <td><input style="width:100%" type="number"  name="f_age"    value="{{ $scholar->f_age }}" /></td>
                            <td><input style="width:100%" type="number" name="m_age"    value="{{ $scholar->m_age }}" /></td>
                        </tr>

                        <tr>
                            <td>Address:</td>
                            <td><input style="width:100%" type="text" name="f_address"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->f_address }}" /></td>
                            <td><input style="width:100%" type="text" name="m_address"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->m_address }}" /></td>
                        </tr>

                        <tr>
                            <td>Birthdate:</td>
                            <td><input style="width:100%"  type="date" name="f_birthdate"    value="{{ $scholar->f_birthdate }}" /></td>
                            <td><input style="width:100%" type="date" name="m_birthdate"    value="{{ $scholar->m_birthdate }}" /></td>
                        </tr>

                        <tr>
                            <td>Occupation:</td>
                            <td><input style="width:100%" type="text" name="f_occupation" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->f_occupation }}" /></td>
                            <td><input style="width:100%" type="text" name="m_occupation" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->m_occupation }}" /></td>
                        </tr>

                        <tr>
                            <td>Office Address:</td>
                            <td><input style="width:100%" type="text" name="f_office" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->f_office }}" /></td>
                            <td><input style="width:100%" type="text" name="m_office"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->m_office }}" /></td>
                        </tr>

                        <tr>
                            <td>Educational Attainment:</td>
                            <td>
                                <select style="width:100%"  name="f_educational"   >
                                    <option>{{$scholar->f_educational}}</option>
                                    <option>Secondary Graduate</option>
                                    <option>Secondary UnderGraduate</option>
                                    <option>Tertiary  Graduate</option>
                                    <option>Tertiary UnderGraduate</option>
                                </select>
                            </td>
                            <td>
                                <select style="width:100%"  name="m_educational"    >
                                <option>{{$scholar->m_educational}}</option>
                                <option>Secondary Graduate</option>
                                <option>Secondary UnderGraduate</option>
                                <option>Tertiary  Graduate</option>
                                <option>Tertiary UnderGraduate</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Contact Number</td>
                            <td><input style="width:100%" type="contact" name="f_contact#"    value="{{ $scholar->f_office }}" /></td>
                            <td><input style="width:100%" type="contact" name="m_contact#"    value="{{$scholar->m_office }}" /></td>
                        </tr>

                        <tr>
                            <td>Monthly/Annual Income</td>
                            <td><input style="width:100%" type="number" name="f_monthly"    value="{{$scholar->f_monthly }}" /></td>
                            <td><input style="width:100%" type="number" name="m_monthly"    value="{{ $scholar->m_monthly }}" /></td>
                        </tr>

                        <tr>
                            <td>Brothers/Sisters</td>
                            <td>Name<input style="width:100%" type="text" name="bs_name1"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->bs_name1 }}" />
                                    <input style="width:100%" type="text" name="bs_name2"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->bs_name2 }}" />
                                    <input style="width:100%" type="text" name="bs_name3"  onkeyup="javascript:capitalize(this);"  value="{{ $scholar->bs_name3 }}" />
                                    <input style="width:100%" type="text" name="bs_name4" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->bs_name4 }}" />
                                    <input style="width:100%" type="text" name="bs_name5" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->bs_name5 }}" />
                                    <input style="width:100%" type="text" name="bs_name6" onkeyup="javascript:capitalize(this);"   value="{{ $scholar->bs_name6 }}" />
                            </td>
                            <td>Age<input style="width:100%" type="number" name="bs_age1"    value="{{ $scholar->bs_age1 }}" />
                                   <input style="width:100%" type="number" name="bs_age2"    value="{{ $scholar->bs_age2 }}" />
                                   <input style="width:100%" type="number" name="bs_age3"  value="{{ $scholar->bs_age3 }}" />
                                   <input style="width:100%" type="number" name="bs_age4"  value="{{ $scholar->bs_age4 }}" />
                                   <input style="width:100%" type="number" name="bs_age5"value="{{ $scholar->bs_age5 }}" />
                                   <input style="width:100%" type="number" name="bs_age6"  value="{{ $scholar->bs_age6 }}" />
                            </td>
                        </tr>
                    </tbody>
                 </table>
            <p style="float: right;color:white" >
               
                    <button class="btn btn-primary btn-round pull-right" type="submit" onclick="return confirm('Are you sure you want save changes?'); "><i class="material-icons">clear</i>Update</button> 
                    <a href="/all/scholars" class="btn btn-danger btn-round pull-right" onclick="return confirm('Discard Changes?'); "><i class="material-icons">done</i>Back</a>          
            </p>
        </div>
    </form>
@endsection
