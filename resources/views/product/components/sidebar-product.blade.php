<div class="col-lg-3 d-none d-lg-block">
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_gamegear">
                    <a href="{{route('home')}}"><img class="logo_gamegear_title" src={{asset('assets/images/img/sidebar/logo_gamegear1.png')}} alt=""></a>
                </div>

                <div class="sidebar_catalog">
                    <span class="sidebar_catalog_child">Go to catalog</span>
                </div>
            </div>

            <ul class="sidebar_nav_list">
                @if (session()->has('customer'))
                <li>
                    <a href="{{route('profile')}}">
                        <i class='bx bx-user'></i>
                        <span class="sidebar_link">Profile</span>
                    </a>
                    <!-- <span class="tooltip">Profile</span> -->
                </li>
                @endif

                <li>
                    <a href="#">
                        <i class='bx bx-heart'></i>
                        <span class="sidebar_link">Favorite</span>
                    </a>
                    <!-- <span class="tooltip">Profile</span> -->
                </li>

            </ul>

            <div style="color: aliceblue;" class="sidebar_cataory">
                <span class="sidebar_cataory_child">Catagory</span>
            </div>

            <ul class="sidebar_nav_list">
                
                @foreach ($categorys as $category)
                <li>
                    <a href="{{route('category-select-list', ['slug' => $category ->slug, 'id' => $category ->id])}}">
                        <i class='{{$category->icon}}'></i>
                        <span class="sidebar_link">{{$category->name}}</span>
                    </a>
    
                </li>
                    
                @endforeach

            </ul>

            {{-- <div>
                <img class="img-fluid w-100" src="{{asset('assets/images/img/poster1.png')}}" alt="">
        </div>

        <div>
            <img class="img-fluid w-100" src="{{asset('assets/images/img/poster1.png')}}" alt="">
        </div> --}}

        <div class="sidebar_social">
            <li>
                <a href="#">
                    <i class='bx bxl-twitter'></i>
                </a>
                <!-- <span class="tooltip">Profile</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bxl-facebook-square'></i>

                </a>
                <!-- <span class="tooltip">Profile</span> -->
            </li>
            <li>
                <a href="#">
                    <i class='bx bxl-instagram'></i>
                </a>
                <!-- <span class="tooltip">Profile</span> -->
            </li>

        </div>

        <div style="color: #ffff;" class="sidebar_help">
            <a href="{{route('contactUs')}}"><span class="sidebar_help_contact">Contact</span></a>
            <a href="{{route('about')}}"><span class="sidebar_help_aboutus">About us</span></a>
        </div>

    </div>
</div>

</div>