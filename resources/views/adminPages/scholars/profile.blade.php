@include('inc.script.table')
@extends('template.master')
@section('content')
@include('inc.errors')
    <div style="padding-right:0.5in">
        <a href="/user/request"><button class="btn btn-primary btn-sm pull-right" >BACK</button></a>
        <input type="button" class="btn btn-success btn-sm pull-right" onclick="printDiv('printableArea')" value="PRINT" />
    </div> <br> <br>
        
    <div id="printableArea" class="container"> <br>
        <p><div class="text-center col-md-12"> <img src="{{ asset('material-kit/assets/img/logo/osdw_logo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:right;position:sticky;height:1.1in;padding-right:2in">
            <img src="{{ asset('material-kit/assets/img/logo/csulogo.png') }}" alt="OSDW Logo" title="OSDW Logo" style="float:left;position:sticky;height:1in;padding-left:2in">
            Republic of the Phillipines <br><b>CAGAYAN STATE UNIVERSITY <br> <br>OFFICE OF THE STUDENT DEVELOPMENT AND WELFARE</b> <hr style="border-style:double;border-width: 5px;">     
        </div></p>
                    <p class="text-center"><b>SCHOLAR/GRANTEE DATA SHEET <br> 
                       {{$pending->sem}} SEMESTER, S.Y.  20{{ $pending->sy}} - 20{{ $pending->sy2 }}</p>
            <div style="font-size:13pt">
                <div class="form-group col-md-13">
                    <label for="type">NAME OF SCHOLARSHIP:</label>&nbsp;
                    <u>{{$pending->scholarship->name}} </u>
                    </select>
                </div>
             
                <div class="form-row" id="name">
                <div class="form-group col-md-3">
                    <label for="fname">&nbsp;FIRST NAME:</label>&nbsp;
                    <u>{{$pending->fname }}</u>
                    
                </div>
                <div class="form-group col-md-3">
                    <label for="lname">LAST NAME:</label>&nbsp;
                    <u>{{$pending->lname }}</u>
                </div>
                <div class="form-group col-md-3">
                    <label for="mname">MIDDLE NAME:</label>&nbsp;
                    <u>{{$pending->mname}}</u>
                </div>
                <div class="form-group col-md-3">
                    <label for="course">COURSE:</label>&nbsp;
                    <u>{{$pending->course}}</u>
                </div>
                </div>

                <div class="form-row" id="basicInfo">
        
                    <div class="form-group col-md-3">
                        <label for="yrLevel">YEAR LEVEL:</label>&nbsp;
                    <u> {{$pending->yrLevel}}</u>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="sex">SEX:</label>&nbsp;
                    <u> {{$pending->sex}}</u>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="bDate">BIRTHDATE</label>&nbsp;
                        {{-- <input type="date"  class="form-control required" id="bDate" name="bDate" placeholder=""> --}}
                    <u>{{ $pending->bDate }}</u>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="age">AGE:</label>&nbsp;
                    <u> {{ $pending->age}}</u>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="bPlace">&nbsp;BIRTHPLACE:</label>&nbsp;
                    <u> {{ $pending->bPlace}}</u>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="status">STATUS:</label>&nbsp;
                    <u> {{ $pending->status }}</u>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="religion">RELIGION:</label>&nbsp;
                    <u> {{ $pending->religion }}</u>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="contactNum">CONTACT #:</label>&nbsp;
                    <u>{{ $pending->contactNum }}</u>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="citizen">&nbsp;CITIZENSHIP:</label>&nbsp;
                    <u> {{ $pending->citizen }}</u>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="homeAdd">HOME ADDRESS:</label>&nbsp;
                    <u>{{ $pending->homeAdd }}</u>
                    </div>
                </div>
            </div>
                <table class="table table-hover text-center" style="width:100%;border:1px solid black;">
                    <thead>
                            <tr  style="border-style:double;border-width: 5px;"> <td colspan="3"> <b> ACADEMIC AWARDS/HONORS RECEIVED</b></td></tr>
                        <tr class="">
                            <th>NATURE/DESCRIPTION</th>
                            <th>SCHOOL</th>
                            <th>DATE/YEAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pending->acad1 }}</td>
                            <td>{{ $pending->acad2 }}</td>
                            <td>{{ $pending->acad3 }}</td>
                        </tr>
                        <tr>
                            <td>{{$pending->school1 }}</td>
                            <td>{{ $pending->school2 }}</td>
                            <td>{{ $pending->school3 }}</td>
                        </tr>
                        <tr>
                            <td>{{ $pending->dy1 }}</td>
                            <td>{{$pending->dy2 }}</td>
                            <td>{{$pending->dy3 }}</td>
                        </tr>
                   <tr  style="border-style:double;border-width: 2px;">
                    <td> 
                        <label for="highestgrade" >HIGHEST GRADE:</label>
                        {{ $pending->highestgrade }}
                    </td>
                    <td>
                        <label for="lowestgrade">LOWEST GRADE:</label>
                        {{ $pending->lowestgrade }}
                    </td>
                    <td>
                        <label for="generalaverage">GENERAL AVERAGE (rounded):</label>
                       {{ $pending->average }}
                    </td>
              
            </tr>
            </tbody>
                 </table>
                
   

                <table class="table table-hover" style="width:100%;border:1px solid black;border-collapse: collapse">
                   
                            <tr class="text-center" style="border-style:double;border-width: 5px;"> <td colspan="3"> <b> FAMILY BACKGROUND</b></td></tr>
                        <tr>
                            <tbody>
                            <th></th>
                            <th>FATHER 
                                <div class="form-check">
                                    <label class="form-check-label">
                                        @if ($pending->f_liv == "Living")
                                        <input class="form-check-input" type="checkbox" name="f_liv" checked disabled value="Living">Living
                                        @else
                                        <input class="form-check-input" type="checkbox" name="f_liv"  disabled value="Living">Living
                                        @endif
                                      <span class="form-check-sign">
                                        <span class="check"></span>
                                      </span>
                                    </label>
                                
                                        <label class="form-check-label">
                                                @if ($pending->f_dec == "Deceased")
                                                <input class="form-check-input" type="checkbox" name="f_dec" checked disabled value="Deceased">Deceased
                                                @else
                                                <input class="form-check-input" type="checkbox" name="f_dec"  disabled value="Deceased">Deceased
                                                @endif
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                </div>
                                </th>
                            <th>MOTHER
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            @if ($pending->m_liv == "Living")
                                                <input class="form-check-input" type="checkbox" name="m_liv" checked disabled value="Living">Living
                                            @else
                                                <input class="form-check-input" type="checkbox" name="m_liv"  disabled value="Living">Living
                                            @endif
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    
                                        <label class="form-check-label">
                                            @if ($pending->m_dec == "Deceased")
                                                <input class="form-check-input" type="checkbox" name="m_dec" checked disabled value="Deceased">Deceased
                                            @else
                                                <input class="form-check-input" type="checkbox" name="m_dec"  disabled value="Deceased">Deceased
                                            @endif
                                            <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                            </th>
                        </tr>
                        <tr>
                            <td>NAME:</td>
                            <td>{{ $pending->f_name }}</td>
                            <td>{{ $pending->m_name }}</td>
                        </tr>

                        <tr>
                            <td>AGE:</td>
                            <td>{{ $pending->f_age }}</td>
                            <td>{{ $pending->m_age }}</td>
                        </tr>

                        <tr>
                            <td>ADDRESS:</td>
                            <td>{{ $pending->f_address }}</td>
                            <td>{{ $pending->m_address }}</td>
                        </tr>

                        <tr>
                            <td>BIRTHDATE:</td>
                            <td>{{ $pending->f_birthdate }}</td>
                            <td>{{ $pending->m_birthdate }}</td>
                        </tr>

                        <tr>
                            <td>OCCUPATIONn:</td>
                            <td>{{ $pending->f_occupation }}</td>
                            <td>{{ $pending->m_occupation }}</td>
                        </tr>

                        <tr>
                            <td>OFFICE ADDRESS:</td>
                            <td>{{ $pending->f_office }}</td>
                            <td>{{ $pending->m_office }}</td>
                        </tr>

                        <tr>
                            <td>EDUCATIONAL ATTAINMENT:</td>
                            <td>{{$pending->f_educational}} </td>
                            <td>{{$pending->m_educational}}</tr>
                        <tr>
                            <td>CONTACT #:</td>
                            <td>{{ $pending->f_office }}</td>
                            <td>{{$pending->m_office }}</td>
                        </tr>

                        <tr>
                            <td>MONTHLY/ANNUAL INCOME</td>
                            <td>{{$pending->f_monthly }}</td>
                            <td>{{ $pending->m_monthly }}</td>
                        </tr>

                        <tr>
                            <td>BROTHERS/SISTERS</td>
                            <td><label>NAME</label><br> 
                                1.){{ $pending->bs_name1 }} <br>
                                2.){{ $pending->bs_name2 }} <br>
                                3.){{ $pending->bs_name3 }} <br>
                                4.){{ $pending->bs_name4 }} <br>
                                5.){{ $pending->bs_name5 }} <br>
                                6.){{ $pending->bs_name6 }} 
                            </td>
                            <td><label>AGE</label><br>{{ $pending->bs_age1 }}
                                   {{ $pending->bs_age2 }}<br>
                                   {{ $pending->bs_age3 }}<br>
                                   {{ $pending->bs_age4 }}<br>
                                   {{ $pending->bs_age5 }}<br>
                                   {{ $pending->bs_age6 }}
                            </td>
                        </tr>
                    </tbody>
                 </table><br>
                 <p class="text-center"><u>_______________________________________________</u> <br><b>SIGNATURE OVER PRINTED NAME</b></p>
        </div>
@endsection
