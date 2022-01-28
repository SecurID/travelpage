<div class="container-fluid bg-trasparent my-3 p-3" style="position: relative;">
    <div class="row">
        <h1>{{ $location->name }} - {{ $country[0]['name'] }}</h1>
    </div>
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        @foreach ($activities as $activity)
            <div class="col">
                <div class="card h-100 shadow-sm"> <img src="https://latin-mag.com/blog/wp-content/uploads/2017/03/flagge-fahne-peru.jpg" class="card-img-top" alt="...">
                    <div class="label-top shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        {{ count($prices) }}
                    </div>
                    <div class="card-body">
                        <div class="clearfix mb-3"><u> <h2>{{ $activity->name }}</h2></u> </div>
                        <h5 class="card-title">
                            <img src="Rangeslider.jpg" class="card-img-top" alt="...">
                            <a class="btn btn-outline-success buttoncollapscard mt-3" data-bs-toggle="collapse" href="#collapseOne">
                                CHECK DETAILS
                            </a>
                        </h5>
                        <a id="addPrice" href="#"><i class="bi bi-plus-square-fill" style="font-size: 1.5rem; "></i></a>
                    </div>
                    <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
