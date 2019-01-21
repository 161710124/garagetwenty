<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#">
                    <img src="{{asset ('assets/Admin/assets/img/garage20.png') }}" style="width: 230px;height: 50px;" />
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li><a href="{{route('kategorii.index')}}">K A T E G O R I</a></li>

                <li><a href="{{route('merks.index')}}">M E R K</a></li>

                <li><a href="{{route('produks.index')}}">P R O D U K</a></li>

                <li><a href="{{route('fp.index')}}">F O T O P R O D U K</a></li>

                <li><a href="{{route('blog.index')}}">B L O G</a></li>

                <li><a href="{{route('chart.index')}}">C H A R T</a></li>

                <li><a href="{{route('check.index')}}">C H E C K O U T</a></li>

                <!-- <li>
                    <a href="icons.html">
                        <i class="ti-pencil-alt2"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="ti-export"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>