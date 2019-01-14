@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-4">                 

                       <!-- Page Content -->
  
              <div class="col-lg-12">
                <div class="row">
      
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        {{-- default refarence location = public --}}
                      <a href="#"><img class="card-img-top" src="/product_image/clothes1.png" alt="" width="500px"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="#">Hindi Tshirts</a>
                          <hr>
                        </h4>
                        <h5>$6</h5>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="/product_image/clothes2.png" alt="" width="500px"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="#">Hindi letters Tshirts</a>
                          <hr>
                        </h4>
                        <h5>$10</h5>
                      </div>
                    </div>
                  </div>
      
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="#"><img class="card-img-top" src="/product_image/clothes3.png" alt="" width="500px"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="#">Chai Tshirts</a>
                          <hr>
                        </h4>
                        <h5>$13</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
      
              </div>
              <!-- /.col-lg-9 -->
      
                </div>
    </div>
</div>
@endsection
