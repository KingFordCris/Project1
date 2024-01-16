 <!--   Core JS Files   -->
 
 @yield('script')
 <script src="{{ asset('material-kit/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('material-kit/assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('material-kit/assets/js/plugins/moment.min.js') }}"></script>
 <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
 <script src="{{ asset('material-kit/assets/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
 <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
 <script src="{{ asset('material-kit/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
 <!--	Plugin for Sharrre btn -->
 <script src="{{ asset('material-kit/assets/js/plugins/jquery.sharrre.js') }}" type="text/javascript"></script>
 <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
 <script src="{{ asset('material-kit/assets/js/material-kit.js?v=2.0.4') }}" type="text/javascript"></script>
 <script>
var setCookie = function(name, value, expiracy) {
  var exdate = new Date();
  exdate.setTime(exdate.getTime() + expiracy * 1000);
  var c_value = escape(value) + ((expiracy == null) ? "" : "; expires=" + exdate.toUTCString());
  document.cookie = name + "=" + c_value + '; path=/';
};

var getCookie = function(name) {
  var i, x, y, ARRcookies = document.cookie.split(";");
  for (i = 0; i < ARRcookies.length; i++) {
    x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
    y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
    x = x.replace(/^\s+|\s+$/g, "");
    if (x == name) {
      return y ? decodeURI(unescape(y.replace(/\+/g, ' '))) : y; //;//unescape(decodeURI(y));
    }
  }
};

$('#downloadLink').click(function() {
  $('#fader').css('display', 'block');
  setCookie('downloadStarted', 0, 100); //Expiration could be anything... As long as we reset the value
  setTimeout(checkDownloadCookie, 1000); //Initiate the loop to check the cookie.
});
var downloadTimeout;
var checkDownloadCookie = function() {
  if (getCookie("downloadStarted") == 1) {
    setCookie("downloadStarted", "false", 100); //Expiration could be anything... As long as we reset the value
    $('#fader').css('display', 'none');
  } else {
    downloadTimeout = setTimeout(checkDownloadCookie, 1000); //Re-run this function in 1 second.
  }
};
 </script>
 <script>
   $(document).ready(function() {
     //init DateTimePickers
     materialKit.initFormExtendedDatetimepickers();

     // Sliders Init
     materialKit.initSliders();
   });

//UserOages Nav
   function scrollToDownload() {
     if ($('.section-download').length != 0) {
       $("html, body").animate({
         scrollTop: $('.section-download').offset().top
       }, 1000);
     }
   }
   function scrollToDownload1() {
     if ($('.section-post').length != 0) {
       $("html, body").animate({
         scrollTop: $('.section-post').offset().top
       }, 1000);
     }
   }
   function scrollToDownload2() {
     if ($('.section-scholarships').length != 0) {
       $("html, body").animate({
         scrollTop: $('.section-scholarships').offset().top
       }, 1000);
     }
   }
//

   $(document).ready(function() {

     $('#facebook').sharrre({
       share: {
         facebook: true
       },
       enableHover: false,
       enableTracking: false,
       enableCounter: false,
       click: function(api, options) {
         api.simulateClick();
         api.openPopup('facebook');
       },
       template: '<i class="fab fa-facebook-f"></i> Facebook',
       url: 'https://demos.creative-tim.com/material-kit/index.html'
     });

     $('#googlePlus').sharrre({
       share: {
         googlePlus: true
       },
       enableCounter: false,
       enableHover: false,
       enableTracking: true,
       click: function(api, options) {
         api.simulateClick();
         api.openPopup('googlePlus');
       },
       template: '<i class="fab fa-google-plus"></i> Google',
       url: 'https://demos.creative-tim.com/material-kit/index.html'
     });

     $('#twitter').sharrre({
       share: {
         twitter: true
       },
       enableHover: false,
       enableTracking: false,
       enableCounter: false,
       buttons: {
         twitter: {
           via: 'CreativeTim'
         }
       },
       click: function(api, options) {
         api.simulateClick();
         api.openPopup('twitter');
       },
       template: '<i class="fab fa-twitter"></i> Twitter',
       url: 'https://demos.creative-tim.com/material-kit/index.html'
     });

   });


   function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}

$('.selectall').click(function() {
    if ($(this).is(':checked')) {
        $('div input').attr('checked', true);
    } else {
        $('div input').attr('checked', false);
    }
});

 </script>
     <script>
        var CRLF   = 10;
        var BULLET = String.fromCharCode(45);

        function Init() {
            if (txt.addEventListener) txt.addEventListener("input", OnInput, false);
        }

        function OnInput(event) {
            char = event.target.value.substr(-1).charCodeAt(0);
            nowLen = txt.value.length;

            if (nowLen > prevLen.value) {
                if (char == CRLF) txt.value = txt.value + BULLET + " ";
                if (nowLen == 1) txt.value = BULLET + " " + txt.value;
            }
            prevLen.value = nowLen;
        }

    </script>
    {{-- THIS IS FOR SEARCH --}}
<script type="text/javascript">
      $('#search').on('keyup' , function(){
      $value=$(this).val();
      $.ajax({
            type : 'get',
            url : '{{URL::to('result')}}',
            data : {'search':$value},
            success:function(data){
              $('tbody').html(data);
        }
      })
      
})
</script>
{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
<script src="{{ asset('js/datatable/buttons.colVis.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/dataTables.select.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/buttons.flash.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/jszip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/pdfmake.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/vfs_fonts.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/buttons.html5.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/datatable/buttons.print.min.js') }}" type="text/javascript"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy',
            'csv',
            'excel',
            {
                extend: 'pdf',
                text: 'PDF',
                messageTop: 'Generated by OSMS',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            },
            {
                extend: 'print',
                text: 'Print all',
                orientation: 'landscape',
                exportOptions: 
                {
                    modifier:
                    {
                        selected: null
                    }
                }
            }
        ],
        select: true
    } );
} );
</script>
<script>
  $(document).ready(function() {
    $('#table').DataTable( {
      dom: 'Bfrtip',
      buttons: [
        'copy',
        // 'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    } );
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
  } );
  </script>



  <script>

    function capitalize(inputField) {
  inputField.value = inputField.value.replace(/\b[a-z](?=[a-z]{1})/gi, function(letter) {
    return letter.toUpperCase();
  });
}

</script>
<script>

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
    <script type="text/javascript">

      $(document).ready(function() {
  
        $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
  
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
  
      });
  
  </script>
<script type="text/javascript">
jQuery(window).load(function(){
    jQuery('#overlay').fadeOut();
    });

</script>
    {{-- <script type="text/javascript">

      (function(){
        var myDiv = document.getElementById("myDiv"),
    
          show = function(){
            myDiv.style.display = "block";
            setTimeout(hide, 5000); // 5 seconds
          },
    
          hide = function(){
            myDiv.style.display = "none";
          };
    
        show();
      })();
    
    </script> --}}
    
