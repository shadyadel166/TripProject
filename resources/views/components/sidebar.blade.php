<!-- =============== Navigation ================ -->
<x-headerDashborad></x-headerDashborad>


    <div class="navigation">
        <ul>
            <li>
                <a href="landigpage">
                    <span class="icon">
                        <ion-icon name="logo-apple"></ion-icon>
                    </span>
                    <span class="title">DEMON PLANE</span>
                </a>
            </li>

            <li>
                <a href="dashboard">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="customerDashborad">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Customers</span>
                </a>
            </li>

            <li>
                <a href="/trip">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="title">Trips</span>
                </a>
            </li>



            <li>
                <a class="nav-link" href="{{ route('logout') }}">
                <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
