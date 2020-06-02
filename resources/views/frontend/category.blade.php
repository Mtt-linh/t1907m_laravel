@extends("frontend.layout")
@section("Content")
    <section class="page-info-section set-bg" data-setbg="{{asset("img/page-info-bg/3.jpg")}}}>
        <h2>{{$category->__get("category_name")}}</h2>
    </section>

    <section class="elements-section">
        <div class="container">
            <!-- element -->
            <div class="element">
                <h2 class="el-title">Buttons</h2>
                <button class="site-btn mr-3 mb-3">Send</button>
                <button class="site-btn sb-line mr-3 mb-3">Send</button>
                <button class="site-btn sb-shap"><span>Send</span></button>
            </div>
            <!-- element -->
            <div class="element">
                <h2 class="el-title">Accordions & Tabs</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Accordions -->
                        <div id="accordion" class="accordion-area">
                            <div class="panel">
                                <div class="panel-header" id="headingOne">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">Pellentesque vel neque finibus elit iaculis finibus</button>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p>Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui.  </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header" id="headingTwo">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">arcu in libero pretium, porttitor placerat</button>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p>Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-header active" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">Etiam vehicula arcu in libero pretium</button>
                                </div>
                                <div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                        <p>Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tab-element">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Pellentesque</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">arcu in libero</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="true">Etiam vehicula </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <!-- single tab content -->
                                <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                    <p>Maecenas facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui. Proin euismod suscipit lacus, et scelerisque nisi aliquam anunc feugiat mattis quam, ut luctus enim ultrices at. Maecenas facilisis facilisis consequat. </p>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                    <p>Maecenas facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui. Proin euismod suscipit lacus, et scelerisque nisi aliquam anunc feugiat mattis quam, ut luctus enim ultrices at. Maecenas facilisis facilisis consequat. </p>
                                </div>
                                <div class="tab-pane fade show active" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                    <p>Maecenas facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel. Cras augue diam, sollicitudin sit amet felis ut, eleifend faucibus dui. Proin euismod suscipit lacus, et scelerisque nisi aliquam anunc feugiat mattis quam, ut luctus enim ultrices at. Maecenas facilisis facilisis consequat. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- element -->
            <div class="element">
                <h2 class="el-title">Loaders</h2>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
                        <div class="circle-progress" data-cptitle="Photos" data-cpid="id-1" data-cpvalue="90" data-cpcolor="#e0e0e1"></div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
                        <div class="circle-progress" data-cptitle="Love" data-cpid="id-2" data-cpvalue="100" data-cpcolor="#e0e0e1"></div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
                        <div class="circle-progress" data-cptitle="Passion" data-cpid="id-3" data-cpvalue="50" data-cpcolor="#e0e0e1"></div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 cp-item">
                        <div class="circle-progress" data-cptitle="Art" data-cpid="id-4" data-cpvalue="75" data-cpcolor="#e0e0e1"></div>
                    </div>
                </div>
            </div>
            <!-- element -->
            <div class="element">
                <h2 class="el-title">Milestones</h2>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="milestone">
                            <i class="flaticon-004-perfume"></i>
                            <div class="milestone-text">
                                <h2>123</h2>
                                <p>Perfumes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="milestone">
                            <i class="flaticon-033-lipstick-1"></i>
                            <div class="milestone-text">
                                <h2>25</h2>
                                <p>Collections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="milestone">
                            <i class="flaticon-050-powder"></i>
                            <div class="milestone-text">
                                <h2>19</h2>
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class="milestone">
                            <i class="flaticon-016-woman"></i>
                            <div class="milestone-text">
                                <h2>78</h2>
                                <p>Emploees</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- element -->
            <div class="element">
                <h2 class="el-title">Icon Boxes</h2>
                <div class="row">
                    @forelse($products as $p)
                        <div class="col-lg-3 col-sm-6">
                            <div class="step">
                                <h2>{{$p->get("product_name")}}</h2>
                                <p>{{$p->get("product_desc")}}</p>
                            </div>
                        </div>
                        @empty
                        <p>no product found.</p>
                    @endforelse
                        <div class="col-lg-3 col-sm-6">
                            <div class="step">
                                <h2>1</h2>
                                <p>Maecenas facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitu.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="step">
                                <h2>2</h2>
                                <p>Facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel.</p>
                            </div>
                        </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="step">
                            <h2>3</h2>
                            <p>Maecenas facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitu.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="step">
                            <h2>4</h2>
                            <p>Facilisis facilisis consequat. Curabitur fringilla pellentesque neque, imperdiet efficitur urna gravida vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Elements section end -->


    <!-- Newslatter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 text-white">
                    <h3>Our Newsletter</h3>
                </div>
                <div class="col-lg-9">
                    <form class="newsletter-form">
                        <input type="text" placeholder="Your E-mail">
                        <button class="site-btn sb-white">subscribe</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-muted">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>

    </section>
    @endsection
