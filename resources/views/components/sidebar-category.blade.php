<div class="col-lg-3 d-none d-lg-block">
    <div class="row">
        <div class="col-lg-3" style=" height: 1050px; background-color: #000000">
            <div class="sidebar-category">
                <div class="sidebar-category-logo">
                    <a href="{{ route('home') }}"> <img class="" src={{ asset('assets/images/img/sidebar/logo1.png') }} alt=""></a>
                </div>

                <ul class="sidebar_nav_list">
                    @if (session()->has('customer'))
                    <li>
                        <a href="{{ route('profile') }}">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{url('profile')}}">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                    </li>


                    @foreach ($categorys as $category)
                    <li class="sidebar_nav_list_cat">
                        <a class="{{ Request::segment(2) == $category->slug ? 'active' : '' }} sidebar_nav_list_cat" href="{{ route('category-select-list', ['slug' => $category->slug, 'id' => $category->id]) }}">
                            <i class='{{ $category->icon }}'></i>
                        </a>
                    </li>
                    @endforeach

                </ul>

            </div>
        </div>

        <div class="col-lg-9" style="padding-left: 0;">
            <div class="category">
                <div class="category-child">
                    <div class="title-category">
                        Category
                    </div>

                    <div class="list-product-category">
                        <ul>
                            @foreach ($categorys as $category)
                            @php
                            $catCount = \App\Models\Product::catCount($category->id);
                            @endphp
                            <li>
                                <a class=" {{ Request::segment(2) == $category->slug ? 'active' : '' }} list-product-category-name " href="{{ route('category-select-list', ['slug' => $category->slug, 'id' => $category->id]) }}">
                                    {{ $category->name }}
                                </a>
                                <span class="list-product-category-number" style="position: absolute; right: 50px; text-align: center; color: #ffff; line-height: 20px ;font-weight: bold; width: 35px; height: 20px; background: #6C3EB8; border-radius: 15px;">
                                    {{ $catCount }}
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="category-child " style="background-color: #272729; border-bottom: solid #ffff 2px">
                    <div class="title-category" style="background-color: #424244">
                        Brand
                    </div>

                    <div class="list-product-category">
                        <ul>
                            @foreach ($brands as $brand)
                            @php
                            $brandCount = \App\Models\Product::brandCount($brand->id);
                            @endphp
                            <li>
                                <a class=" {{ Request::segment(2) == $brand->slug ? 'active' : '' }} list-product-category-name" href="{{ route('category-select-list1', ['slug' => $brand->slug, 'id' => $brand->id]) }}">
                                    {{ $brand->name }}</a>
                                <span class="list-product-category-number" style="position: absolute; right: 50px; text-align: center; color: #ffff; line-height: 20px ;font-weight: bold; width: 35px; height: 20px; background: #424244; border-radius: 15px; ">
                                    {{ $brandCount }}</span>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <div class="category-child " style="background-color: #272729; ">
                    <div class="title-category" style="background-color: #424244">
                        Filter
                    </div>

                    <div class="list-product-category" style="">
                        <div class="title-filter" style="padding-left: 60px; padding-bottom: 20px; font-weight: bold">
                            Price</div>
                        <form action="">
                            <div id="slider-range" style="width: 230px; position: absolute; left: -35px;"></div>
                            <input type="text" id="amount" readonly style="border:0; color:#6C3EB8; font-weight:bold; background-color: #272729;width: 100px; margin-left: 40px; margin-top: 20px">
                            <input type="hidden" name="start-price" id="start-price">
                            <input type="hidden" name="end-price" id="end-price">
                            <button type="submit" class="btn btn-primary" name="filter-range" value="Price" style="margin-left: 40px; margin-top: 20px">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</div>

@section('script-sidebar-category')

<script>
        $("#slider-range").slider({
            orientation: "horizontal",
            range: true,
            min: 0,
            max: 1000,
            values: [300, 700],
            step: 5,
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                $("#start-price").val(ui.values[0]);
                $("#end-price").val(ui.values[1]);

            }
        });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));
</script>
@endsection