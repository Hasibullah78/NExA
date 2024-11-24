@if (Auth::user()->role==2)
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures notprint">
    <div class="nano notprint">
        <div class="nano-content notprint">
            <ul>
                <div class="logo"><a href="#"><!-- <img src="assets/images/logo.png" alt="" /> --><span>NExA</span></a></div>
                <li><a href="{{ url('/dashboard') }}"><i class="ti-home"></i> Dashboard </a></li>

                {{-- <li id="emp"><a class="sidebar-sub-toggle" ><i class="ti-user"></i> Employees <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="/employee/all">All_Employees</a></li>
                        <li><a href="/employee/allocated">Allocated_Employees</a></li>



                    </ul>
                </li> --}}

                {{-- <li><a class="sidebar-sub-toggle"><i class=""><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack-fill" viewBox="0 0 16 16">
                    <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1"/>
                  </svg></i> Items <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('items/category/all') }}">Item_Categories</a></li>
                        <li><a href="{{ url('/items/all') }}">All_Items</a></li>



                    </ul>
                </li> --}}
                <li>
                    <a class="sidebar-sub-toggle"><i class=""><svg  width="16" height="16" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
                    <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                  </svg></i> Positions <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('positions/add') }}">Add_Position</a></li>
                        {{-- <li><a href="{{ url('positions/view') }}">View_&_Edit</a></li> --}}
                    </ul>
                </li>

                <li><a href="/employee/add"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                  </svg></i> Add_Employee </a></li>
                <li><a href="/items/add/category"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                  </svg></i> Add_Category </a></li>
                <li><a href="/items/add"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                  </svg></i> Add_Items </a></li>


                <li><a href="/items/allocate"><i class="ti-user"> </i> Allocate_Item_to_EMP </a></li>



                {{-- <li>
                    <a class="sidebar-sub-toggle"><i class=""><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                      </svg></i> User Management <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('/register') }}">Register User</a></li>
                        <li><a href="{{ url('/view') }}">View_&_Edit</a></li>
                    </ul>
                </li> --}}



                  {{-- <li><a href="#"><i class="ti-download"></i> Generate Report </a></li> --}}






        </div>
    </div>
</div>


@endif
@if (Auth::user()->role==1)
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures notprint">
    <div class="nano notprint">
        <div class="nano-content notprint">
            <ul>
                <div class="logo"><a href="#"><!-- <img src="assets/images/logo.png" alt="" /> --><span>NExA</span></a></div>
                <li><a href="{{ url('/dashboard') }}"><i class="ti-home"></i> Dashboard </a></li>

                <li id="emp"><a class="sidebar-sub-toggle" ><i class="ti-user"></i> Employees <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="/employee/all">All_Employees</a></li>
                        <li><a href="/employee/allocated">Allocated_Employees</a></li>



                    </ul>
                </li>

                <li><a class="sidebar-sub-toggle"><i class=""><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack-fill" viewBox="0 0 16 16">
                    <path d="M2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm.5 3a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m2 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1"/>
                  </svg></i> Items <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('items/category/all') }}">Item_Categories</a></li>
                        <li><a href="{{ url('/items/all') }}">All_Items</a></li>



                    </ul>
                </li>
                <li>
                    <a class="sidebar-sub-toggle"><i class=""><svg  width="16" height="16" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
                    <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
                  </svg></i> Positions <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('positions/add') }}">Add_Position</a></li>
                        <li><a href="{{ url('positions/view') }}">View_&_Edit</a></li>
                    </ul>
                </li>

                <li><a href="/employee/add"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                  </svg></i> Add_Employee </a></li>
                <li><a href="/items/add/category"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                  </svg></i> Add_Category </a></li>
                <li><a href="/items/add"><i class=""> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/>
                  </svg></i> Add_Items </a></li>


                <li><a href="/items/allocate"><i class="ti-user"> </i> Allocate_Item_to_EMP </a></li>



                <li>
                    <a class="sidebar-sub-toggle"><i class=""><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                      </svg></i> User Management <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="{{ url('/register') }}">Register User</a></li>
                        <li><a href="{{ url('/view') }}">View_&_Edit</a></li>
                    </ul>
                </li>



                  <li><a href="#"><i class="ti-download"></i> Generate Report </a></li>






        </div>
    </div>
</div>

@endif


