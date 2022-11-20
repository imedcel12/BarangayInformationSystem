<div class="bg-light border-right" id="sidebar-wrapper" style="width: 280px;">

    @include('layouts.image')

    <div class="list-group pt-3 mt-1 ">
        <li class="list-none"><a href="/dashboard"
                class="list-group-item list-group-item-action bg-light text-adjust {{ request()->is('dashboard*') ? 'active-page' : '' }}"><i
                    class="fa fa-home fa-lg icon-adjust"></i> Dashboard</a> </li>
        <li class="list-none"><a href="/resident"
                class="list-group-item list-group-item-action bg-light text-adjust {{ request()->is('resident*') ? 'active-page' : '' }}"><i
                    class="fa fa-user-o fa-lg icon-adjust"></i> Resident Information</a> </li>


        <li class="list-none"><a href="/senior_citizen"
                class="list-group-item list-group-item-action bg-light text-adjust {{ request()->is('senior_citizen*') ? 'active-page' : '' }}"><i
                    class="fa fa-user-o fa-lg icon-adjust"></i> Senior Citizen</a> </li>



        <li class="list-none"><a href="/blotter"
                class="list-group-item list-group-item-action bg-light text-adjust {{ request()->is('blotter*') ? 'active-page' : '' }}"><i
                    class="fa fa-folder fa-lg icon-adjust"></i> Blotters Record</a> </li>
        <li class="list-none"><a href="/schedule"
                class="list-group-item list-group-item-action bg-light text-adjust {{ request()->is('schedule*') ? 'active-page' : '' }}"><i
                    class="fa fa-suitcase fa-lg icon-adjust"></i> Settlement Schedule</a> </li>



        <li class="list-none ">
            <button id="dropdown-btn"
                class="dropdown-btn list-group-item list-group-item-action bg-light text-adjust  {{ request()->is('certificate*') ? 'active-page' : '' }}"><i
                    class="fa fa-certificate fa-lg icon-adjust"></i>Certificates
                <span class="fa fa-caret-down align"></span>
            </button>
            <div class="dropdown-container list-group {{ request()->is('certificate*') ? 'active' : '' }}"
                id="dropdown-btns">
                <a href="/certificate_clearance"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_clearance*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Clearance</a>

                <a href="/certificate_residency"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_residency*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Residency</a>

                <a href="/certificate_indigency"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_indigency*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Indigency</a>


                <a href="/certificate_business"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_business*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Business</a>

                <a href="/certificate_unemployment"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_unemployment*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Unemployed</a>

                <a href="/certificate_unifast"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_unifast*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Unifast</a>

                <a href="/certificate_job_seeker"
                    class="list-group-item list-group-item-action text-light  bg-dark {{ request()->is('/certificate_job_seeker*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Job-Seeker</a>
            </div>


        </li>
        <li class="list-none">
            <button id="dropdown-btn"
                class="dropdown-btn list-group-item list-group-item-action bg-dark text-light text-adjust  {{ request()->is('setting*') ? 'active-page' : '' }}"><i
                    class="fa fa-wrench fa-lg icon-adjust"></i>Setting
                <span class="fa fa-caret-down align"></span>
            </button>
            <div class="dropdown-container  list-group {{ request()->is('setting*') ? 'active' : '' }}"
                id="dropdown-btns">
                <a href="/setting/account"
                    class="list-group-item list-group-item-action bg-dark text-light  {{ request()->is('setting/account*') ? 'active-page' : '' }}"><i
                        class="fa fa-address-card fa-lg icon-adjust"></i>Account</a>
                <a href="/setting/maintenance"
                    class="list-group-item list-group-item-action bg-dark text-light  {{ request()->is('setting/maintenance*') ? 'active-page' : '' }}"><i
                        class="fa fa-cog fa-lg icon-adjust "></i> Barangay </a>
            </div>

        </li>

    </div>
</div>


<script>
    /*
  function routeToDashboard(){
        console.log("asdsa")
        event.preventDefault();
        $('#dashboards').click(function() {
     window.location.hash = 'dashboard';
     return false;
     });

        $.ajax({

            url:"/dashboard",
            type:'get',
            data:{


            },
             success:function(data){
                $("#body").html(data);

             }



        })

    }

    function addclasss(){
        alert(1);
        $( "#dashboards" ).addClass( 'asdasd');
        $("dashboards").attr("class", "asdasd");

    }

*/
</script>
