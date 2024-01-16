@include('inc.script.notable')
@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">info</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">TUTORIALS</h3>
  </div>
</div>
<div class="container">
        <p>     
            <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#ANNOUNCEMENTS" aria-expanded="false" aria-controls="collapseExample">
             <P><i class="material-icons" style="font-size:30px">wifi_tethering</i> <br></P> ANNOUNCEMENTS AND COMMENTS
            </button>
        </p>
        <div class="collapse" id="ANNOUNCEMENTS">
            <div class="card card-body">
                <ol>
                    <li><b>ADD ANNOUNCEMENT</b></li>
                        <ul>
                            <li>Click <b>ADD ANNOUNCEMENT</b> button under <b>ANNOUNCEMENT TAB</b> in the navigation bar</li>
                            <li>Fill-up the title and body and finally click the create button to finish.</li>
                        </ul> 
                    <li><b>VIEW ANNOUNCEMENT</b></li>
                        <ul>
                            <li>Click <b>VIEW ANNOUNCEMENTS</b> under <b>ANNOUNCEMENT TAB</b> to view all the announcements or</li>
                            <li>click on the Home Button to view annoucements in the index.</li>
                        </ul>
                    <li><b>MANAGE ANNOUNCEMENTS</b></li>
                        <ul>
                            <li>Click on the <b>MANAGE ANNOUNCEMENTS</b> under the <b>ANNOUNCEMENT TAB</b> edit the nessesary changes click save</li>
                            <li>Click Ok button on the down-left dialog box to finish</li>
                            <li>Click Cancel button on the down-right dialog box to go back</li>
                        </ul>
                    <li><b>COMMENTS</b></li>
                        <ul>
                            <li>To add a comment first you must open a post by clicking on the title or comments link of an announcement.</li>
                            <li>Comments can be viewed on the lower part of an announcement or comments section.</li>
                            <li>Enter your comment press <b> ADD COMMENT</b> click <b>OK</b> to submit.</li>
                            <li>You can <b>EDIT</b> and/or <b>DELETE</b> your own comment inside the post.</li>
                        </ul>
                    <li><b>IMPORTANT TO REMEMBER</b></li>
                    <ul>
                        <li>Upon deletion of such announcement all the COMMENTS on it will also be DELETED </li>
                        <li>In the HOME TAB, announcements are only limited to 5 to avoid very long page</li>
                    </ul>
                </ol>
            </div>
        </div>
        <p>     
            <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#REQUEST" aria-expanded="false" aria-controls="collapseExample">
                <P><i class="material-icons" style="font-size:30px">how_to_reg</i> <br></P> SCHOLARS
            </button>
        </p>
        <div class="collapse" id="REQUEST">
                <div class="card card-body">
                    <ol>
                        <li><b>REQUEST</b></li>
                        <ul>
                            <li>On the <b>REQUEST</b> link under the <b>SCHOLAR TAB</b> is a table of all the applicants of scholars that are pending for approval.</li>
                            <li>On this link, there are several actions you can do just like <b>VIEW PROFILE</b> to check their profile, <b>CONFIRM APPLICATION</b> to approve their scholarship application <br>
                                and <b>DELETE APPLICATION</b> if you will not accept their application.</li>
                            <li>The <b>STATUS COLUMN</b> is a column to identify if the REQUESTED SCHOLAR APPLICANT has already a record, If the request is &apos; <B style="color:green">Good</B> &apos; meaning the scholar do not have any records yet while if &apos; <b style="color:red"># Record</b> &apos; is indicated it means the user who submits the
                                application has already a record as a scholar or has another request application, below is the description</li>
                            
                        </ul>
                        <li><b>MANAGE SCHOLARS</b></li>
                        <ul>
                            <li>On the <b>MANAGE SCHOLARS</b> link under the <b>SCHOLAR TAB</b> is a table of all the <b>APPROVED SCHOLARS</b>.</li>
                            <li>Actions are almost the same on request link, can <b>VIEW PROFILE</b> to check the profile of the scholar, <b>DELETE SCHOLAR</b> to permanently delete a scholar from the scholarship and
                                <b>EDIT PROFILE</b> to modify the given information in the profile of a particular scholar.</li>
                            <li>The <b>REMARKS COLUMN</b> is a column to identify if the SCHOLAR has already a record, If the scholar is &apos; <B style="color:green">Good</B> &apos; meaning the scholar has only one record yet while if  &apos; <b style="color:red"># Record</b> &apos; indicates the 
                                scholar has more than 1 records, below is the description</li>
                        </ul>
                        <li><b>IMPORTANT TO REMEMBER</b></li>
                        <ul>
                            <li>Before <b>APPROVING</b> an <b>APPLICATION</b>, verify if the <b>REQUIREMENTS</b> are already passed to avoid repetition of the process and future error in making reports.</li>
                            <li>Same is through with <b>DELETING</b> of application or scholar, must be careful on doing this action because if the recod was deleted it will never be retrieved.</li>
                        </ul>
                    </ol>
                </div>
            </div>
            <p>     
                    <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#SCHOLARSHIPS" aria-expanded="false" aria-controls="collapseExample">
                        <P ><i class="material-icons" style="font-size:30px">school</i> <br> </P>SCHOLARSHIPS
                    </button>
                </p>
                <div class="collapse" id="SCHOLARSHIPS">
                        <div class="card card-body">
                            <ol>
                                <li><b>ADD SCHOLARSHIP</b></li>
                                <ul>
                                    <li>Click on <b>ADD SCHOLARSHIP</b> under <b>SCHOLARSHIP TAB</b> to enter in the page to add new scholarship.</li>
                                    <li>Fill up all the required fields and finally click <b>CREATE</b> button and press OK to save the new scholarship.</li>
                                    <li>click <b>CANCEL</b> if you wish not to save.</li>
                                </ul>
                                <li><b>VEW SCHOLARSHIPS</b></li>
                                <ul>
                                    <li>Click <b>VIEW SCHOLARSHIPS</b> under <b>SCHOLARSHIPS TAB</b> to enter in the table of all created scholarships.</li>
                                    <li>Under the action column, you can <b>VIEW, EDIT</b> and <b>DELETE</b> scholarships.
                                        <ul>
                                        <li><b>VIEW</b> - it will show the information of the scholar as well as all the SCHOLARS of this particular scholarship.</li>
                                        <li><b>EDIT</b> - to modify the information of a  particular scholarship.</li>
                                        <li><b>DELETE</b> - to permanently remove or delete the scholarship as well as all the scholars in it.</li>
                                    </ul>
                                    </li>
                                </ul>
                                <li><b>GENERATE REPORT</b></li>
                                <ul>
                                    <li>Click <b>GENERATE REPORT</b> under <b>SCHOLARSHIPS TAB</b> to enter in the table of all scholarships.</li>
                                    <li>under the <b>GENERATE REPORT</b> column, a button will link you to view all the scholars on a particular scholarship.</li>
                                    <li><b>LIST OF FILES THAT CAN BE GENERATED</b>
                                        <ul>
                                            <li><b>COPY</b> - if this button was triggered it will copy all the data inside the table that can be pasted to any table editing program like MS Excel.</li>
                                            <LI><b>CSV</b> - .csv files are like .xlxs file but formatted in plain text, just click this button to download .csv file of the table.</LI>
                                            <li><b>EXCEL</b> - excel is one of the most common types of file in table formatting that can be formatted whatever you wish to. Click this button to download the .xlxs file of the table.</li>
                                            <LI><b>PDF</b> - pdf files are known to compile a document that can be not edited anymore, click this button to download the pdf file of the table.</LI>
                                            <li><b>PRINT ALL</b> - this button will trigger the printing page to print the table data.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </ol>
                        </div>
                    </div>
                    <p>     
                            <button class="btn btn-success btn-block" data-toggle="collapse" data-target="#ACCOUNTS" aria-expanded="false" aria-controls="collapseExample">
                                <P ><i class="material-icons" style="font-size:30px">account_circle</i> <br> </P>ACCOUNTS
                            </button>
                        </p>
                        <div class="collapse" id="ACCOUNTS">
                                <div class="card card-body">
                                    <ol>
                                        <li><b>ACCOUNTS REQUEST</b></li>
                                        <ul>
                                            <li>Click <b>ACCOUNTS REQUEST</b> under <b>ACCOUNTS TAB</b> to enter in the table of all <b>UNACTIVATED ACCOUNTS</b>.</li>
                                            <li>Under the privilege column, it identifies if the account is a user or superuser privilege.
                                                <ul>
                                                    <li><b class="text-primary">USER</b>- this means it is an ordinary account that can browse the user pages.</li>
                                                    <li><b class="text-warning">SUPERUSER/ADMIN</b>- meaning it is an administrator account that will manage the system. </li>
                                                </ul>
                                            </li>
                                            <li>Under the status column, it identifies if the account is already sctivated.
                                                    <ul>
                                                        <li><b class="text-danger">Inactive</b>- this indicates that the account is not yet activated and cannot yet login to the system.</li>
                                                        <li><b class="text-success">Active</b>- the account can access and login to the system.</li>
                                                    </ul>
                                                </li>
                                            <li>Under action column there are 2 commands can be done <b>ACTIVATE ACCOUNT</b>  - to allow the user to enter in the system or <b>DELETE ACCOUNT</b> - to remove the account permanently</li>
                                        </ul>
                                        <li><b>MANAGE ACCOUNTS</b></li>
                                        <ul>
                                            <li>Click <b>MANAGE ACCOUNTS</b> under <b>ACCOUNTS TAB</b> to enter in the table of all <b>ACCOUNTS</b>.</li>
                                            <li>columns are almost the same with request accounts, the only difference is the action column, instead of confirming you can <b>DEACTIVE</b> accounts.</li>
                                        </ul>
                                    </ol>
                                </div>
                            </div>
</div>
@endsection