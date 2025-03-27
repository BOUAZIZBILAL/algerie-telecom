 <!-- Sidebar -->
 <nav class="navbar-vertical navbar">
     <div class="nav-scroller">
         <!-- Brand logo -->
         <a class="navbar-brand" href="index.html">
            <img src="{{ asset('admin_assets/images/brand/logo/') }}"
             alt="Algérie Télécom"
             style="width: 200px; display: block; margin: 0 auto;" />
        </a>
         <!-- Navbar nav -->
         <ul class="navbar-nav flex-column" id="sideNavbar">
             <!-- Nav item -->
<li class="nav-item">
    <a class="nav-link has-arrow" href="#" onclick="return false;">
        <i data-feather="home" class="nav-icon icon-xs me-2"></i>Dashboard
    </a>
</li>



             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Layouts & Pages</div>
             </li>


             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navPages" aria-expanded="false"
                     aria-controls="navPages">
                     <i data-feather="users" class="nav-icon icon-xs me-2">
                     </i> Pages
                 </a>

                 <div id="navPages" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="/profile">
                                 -Profile
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow   "
                                 href="pages/settings.html">
                                 -Settings
                             </a>

                         </li>               
                     </ul>
                 </div>

              </li>


             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navAuthentication" aria-expanded="false"
                     aria-controls="navAuthentication">
                     <i data-feather="lock" class="nav-icon icon-xs me-2">
                     </i> Data center
                 </a>
                 <div id="navAuthentication" class="collapse  "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/sign-in.html"> -Servers</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/sign-up.html"> -Data Storage</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link  "
                                 href="pages/forget-password.html">
                                 -Hardware Status
                             </a>
                         </li>

                     </ul>
                 </div>
             </li>
             

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow  "
                     href="docs/accordions.html">
                     <i data-feather="package" class="nav-icon icon-xs me-2">
                     </i> History
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link has-arrow " href="#!"
                     data-bs-toggle="collapse" data-bs-target="#navMenuLevel" aria-expanded="false"
                     aria-controls="navMenuLevel">
                     <i data-feather="corner-left-down" class="nav-icon icon-xs me-2">
                     </i> System Alerts
                 </a>
                 <div id="navMenuLevel" class="collapse "
                     data-bs-parent="#sideNavbar">
                     <ul class="nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                 aria-controls="navMenuLevelSecond">
                                  Notifications
                             </a>
                             <div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!">-Warning Notifications</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link"
                                             href="#!">-System Updates</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link has-arrow "
                                 href="#!" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThree"
                                 aria-expanded="false" aria-controls="navMenuLevelThree">
                                 Team Collaboration
                             </a>
                             <div id="navMenuLevelThree" class="collapse "
                                 data-bs-parent="#navMenuLevel">
                                 <ul class="nav flex-column">
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!" data-bs-toggle="collapse"
                                             data-bs-target="#navMenuLevelThreeOne" aria-expanded="false"
                                             aria-controls="navMenuLevelThreeOne">
                                             -Task Assignment
                                         </a>
                                         <div id="navMenuLevelThreeOne"
                                             class="collapse collapse "
                                             data-bs-parent="#navMenuLevelThree">
                                             <ul class="nav flex-column">
                                                 <li class="nav-item">
                                                     <a class="nav-link "
                                                         href="#!">
                                                   -Team Communication            </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link "
                                             href="#!"> -Team Roles</a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </li>  

             <!-- Nav item -->
             <li class="nav-item">
                 <div class="navbar-heading">Documentation</div>
             </li>

             <!-- Nav item -->
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/index.html">
                     <i data-feather="clipboard" class="nav-icon icon-xs me-2">
                     </i> Rapports
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link has-arrow "
                     href="docs/changelog.html">
                     <i data-feather="git-pull-request" class="nav-icon icon-xs me-2">
                     </i> To-Do-list
                 </a>
             </li>
         </ul>
     </div>
 </nav>
