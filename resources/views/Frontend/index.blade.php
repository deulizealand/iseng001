@extends('Frontend.master.master')

@section('content')
<style >
.card{
  overflow: hidden !important;
}

.card-text{
  word-wrap: break-word !important;
}
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.carousel-item>img{
  max-height: 400px !important;

}
</style>
<div class="container-fluid">
  <!-- header -->
  <div class="row">
    <div class="col">

    </div>
    <div class="col-lg-10">
      <h1>BATC BALI</h1>
      <!-- @foreach($data as $slider)
        <div class="carousel-item active">
           <img src="https://i.pinimg.com/236x/4d/e1/18/4de11822ed788c8cd69865fecd74baf0.jpg" class="d-block w-100"  alt="...">
        </div>
      @endforeach -->

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://i.pinimg.com/236x/4d/e1/18/4de11822ed788c8cd69865fecd74baf0.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="https://i.pinimg.com/236x/34/3d/2e/343d2e4b4546cf162b459f2b49c2911e.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.pinimg.com/236x/f6/9e/d6/f69ed6d46178dd383989e8f4b2d9c87b.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    <div class="col">

    </div>
  </div>
  <!-- content -->
  @if($data != null)
  @foreach( $data->chunk(3) as $item => $key)
    <div class="row" style="margin-top:2%;">
        @foreach($key as $content)
            <!-- <div class="col-lg-4 d-flex align-items-stretch"> -->
             <div class="col-sm-12 col-lg-4">
              <div class="card v-100">
          <img class="card-img-top"  src="https://i.pinimg.com/236x/4d/e1/18/4de11822ed788c8cd69865fecd74baf0.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$content->title}}</h5>
            <!-- <p class="card-text "><h6>Continue Reading ...</h6></p> -->
            <a href="#" class="btn btn-primary">Lanjutkan</a>
          </div>
        </div>
            </div>
        @endforeach
    </div>
@endforeach

      @endif
  </div>


@stop
@section('script')
  <script type="text/javascript">
  alert('hwllo');

  </script>
@stop
