<div id="main-content" class="flex-grow-1 m-3">
    <nav class="navbar navbar-expand-lg sticky-top shadow-sm main-header">
        <div class="container-fluid">
            <button class="btn btn-outline-secondary d-md-none me-2" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <i class="fas fa-bars"></i>
            </button>

            <button id="sidebarToggle" class="btn btn-outline-secondary d-none d-md-inline-block me-3">
                <i class="fas fa-bars"></i>
            </button>

            <span class="navbar-brand text-capitalize text-white mb-0 h1 d-none d-sm-inline-block">Reward </span>

             <ul class="navbar-nav ms-auto">
                <li class="nav-item mb-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle fa-lg me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                        <!--<li><a class="dropdown-item" href="{{route('user.GenerateTicket')}}"><i-->
                        <!--            class="fas fa-headset fa-fw me-2"></i>Support</a></li>-->
                        <li><a class="dropdown-item" href="{{route('user.profile')}}"><i
                                    class="fas fa-user-edit fa-fw me-2"></i>Edit Account</a></li>
                        <li><a class="dropdown-item" href="{{route('user.ChangePass')}}"><i
                                    class="fas fa-shield-alt fa-fw me-2"></i>Security</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                    class="fas fa-sign-out-alt fa-fw me-2"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="top-video">
        <video class="top" src="video/top.mp4" type="video/mp4" muted autoplay loop plays-inline
            poster="video/poster.png"></video>
    </div>

    
    <div class="card mt-3">
        <div class="card-header">
            <h3>Reward </h3>
        </div>
        <div class="card-body">

            <div class="row mb-4">
                <div class="col-md-4" style="margin-bottom:16px">
                    <div class="card">
                        <div class="card-body">
                            <h5>Leg A</h5>
<h2 class="mb-0">${{ Auth::user()->teamA }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-bottom:16px">
                    <div class="card">
                        <div class="card-body">
                            <h5>Leg B</h5>
<h2 class="mb-0">${{ Auth::user()->teamB }}</h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4" style="margin-bottom:16px">
                    <div class="card">
                        <div class="card-body">
                            <h5>Leg C</h5>
                            <h2 class="mb-0">${{ Auth::user()->other_team }}</h2>
                        </div>
                    </div>
                </div> -->
            </div>


        <!-- Reward Table -->
<h4 class="mb-4 mt-5 text-white">Reward Business </h4>
<div class="table-responsive">
    <table class="table text-center align-middle">
            <tr>
                <th style="color:#007f3d;">LEG A</th>
                <th style="color:#007f3d;">LEG B</th>
                <th style="color:#007f3d;">REWARD</th>
                <th style="color:#007f3d;">STATUS</th>
            </tr>
        </thead>
        <tbody style="">
            <tr>
                <td>$1,000</td>
                <td>$1,000</td>
                <td>$51</td>
                <td><span class="badge bg-success">{{ $level1_status }}</span></td>
            </tr>
            <tr>
                <td>$2,500</td>
                <td>$2,500</td>
                <td>$111</td>
                <td><span class="badge bg-secondary">{{ $level2_status }}</span></td>
            </tr>
            <tr>
                <td>$5,000</td>
                <td>$5,000</td>
                <td>$251</td>
                <td><span class="badge bg-secondary">{{ $level3_status }}</span></td>
            </tr>
            <tr>
                <td>$10,000</td>
                <td>$10,000</td>
                <td>$501</td>
                <td><span class="badge bg-secondary">{{ $level4_status }}</span></td>
            </tr>
            <tr>
                <td>$15,000</td>
                <td>$15,000</td>
                <td>$751</td>
                <td><span class="badge bg-secondary">{{ $level5_status }}</span></td>
            </tr>
            <tr>
                <td>$20,000</td>
                <td>$20,000</td>
                <td>$1100</td>
                <td><span class="badge bg-secondary">{{ $level6_status }}</span></td>
            </tr>
             <tr>
                <td>$30,000</td>
                <td>$30,000</td>
                <td>$1500</td>
                <td><span class="badge bg-secondary">{{ $level7_status }}</span></td>
            </tr>
             <tr>
                <td>$40,000</td>
                <td>$40,000</td>
                <td>$2100</td>
                <td><span class="badge bg-secondary">{{ $level8_status }}</span></td>
            </tr>
             <tr>
                <td>$50,000</td>
                <td>$50,000</td>
                <td>$3000</td>
                <td><span class="badge bg-secondary">{{ $level9_status }}</span></td>
            </tr>
            <tr>
                <td>$75,000</td>
                <td>$75,000</td>
                <td>$4000</td>
                <td><span class="badge bg-secondary">{{ $level10_status }}</span></td>
            </tr>
             <tr>
                <td>$1,00,000</td>
                <td>$1,00,000</td>
                <td>$7500</td>
                <td><span class="badge bg-secondary">{{ $level11_status }}</span></td>
            </tr>
             <tr>
                <td>$1,25,000</td>
                <td>$1,25,000</td>
                <td>$9000</td>
                <td><span class="badge bg-secondary">{{ $level12_status }}</span></td>
            </tr>
             <tr>
                <td>$1,50,000</td>
                <td>$1,50,000</td>
                <td>$11000</td>
                <td><span class="badge bg-secondary">{{ $level13_status }}</span></td>
            </tr>
             <tr>
                <td>$1,75,000</td>
                <td>$1,75,000</td>
                <td>$15000</td>
                <td><span class="badge bg-secondary">{{ $level14_status }}</span></td>
            </tr>
             <tr>
                <td>$2,00,000</td>
                <td>$2,00,000</td>
                <td>$24000</td>
                <td><span class="badge bg-secondary">{{ $level15_status }}</span></td>
            </tr>
        </tbody>
    </table>
</div>
<!-- End Reward Table -->

        </div>
    </div>
   
</div>

@include('layouts.upnl.sidebar')


<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="{{asset('')}}assets/js/dash.js"></script>


<script>
    window.addEventListener('load', function () {
        // All resources (images, scripts, stylesheets, etc.) are loaded
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer) {
            // Add the 'hidden' class to trigger the fade-out animation
            preloaderContainer.classList.add('hidden');

            // Optional: If you want to completely remove the preloader from the DOM
            // after the transition, you can listen for the 'transitionend' event.
            preloaderContainer.addEventListener('transitionend', function () {
                if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer)
                    .opacity === '0') {
                    preloaderContainer.style.display = 'none'; // Or preloaderContainer.remove();
                }
            }, {
                once: true
            }); // {once: true} ensures the event listener is removed after it fires
        }

        if (content) {
            content.style.display = 'block'; // Or any other display type you need, e.g., 'flex'
            // If you used opacity for content:
            // content.style.opacity = '1';
            // content.style.visibility = 'visible';
        }
    });

    // Fallback in case 'load' event doesn't fire or takes too long (e.g., for broken images)
    // You might want to adjust the timeout duration
    setTimeout(function () {
        const preloaderContainer = document.querySelector('.preloader-container');
        const content = document.querySelector('.content');

        if (preloaderContainer && !preloaderContainer.classList.contains('hidden')) {
            console.warn("Preloader timeout reached. Forcing hide.");
            preloaderContainer.classList.add('hidden');
            if (preloaderContainer.style.opacity === '0' || getComputedStyle(preloaderContainer).opacity ===
                '0') {
                preloaderContainer.style.display = 'none';
            }
            if (content) {
                content.style.display = 'block';
            }
        }
    }, 10000); // 10 seconds timeout as an example

</script>

</body>

</html>
