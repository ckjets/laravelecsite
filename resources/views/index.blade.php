@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">   

                       <!-- Page Content -->

  
              <div class="col-lg-12">
      
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="/product_image/slide1.jpeg" alt="First slide" width="1500px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="/product_image/slide2.jpeg" alt="Second slide" width="1500px">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="/product_image/slide3.jpeg" alt="Third slide" width="1500px">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
      
                <div class="row">

                 
                   @foreach($items as $item)

                   <div class="col-lg-4 col-md-6 mb-4">
                      <div class="card h-100">
                          {{-- default refarence location = public --}}
                        <a href="/product/show/{{$item->id}}"><img class="card-img-top" src="/product_image/{{$item->product_image}}" alt="" width="500px"></a>
                        <div class="card-body">
                          <h4 class="card-title">
                            <a href="/product/show/{{$item->id}}">{{$item->name}}</a> 
                            <hr>
                          </h4>
                          <h5>${{$item->price}}</h5>
                        </div>
                      </div>
                    </div>
                       
                   
                   @endforeach
              
    

      
                </div>
                <!-- /.row -->
      
              </div>
              <!-- /.col-lg-9 -->
      
                </div>
    </div>
</div>
@endsection