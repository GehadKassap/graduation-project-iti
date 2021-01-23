<!DOCTYPE html>
<html>
    <head>
       
		<title>Admin|orders-deatils</title>
		
        <!--*************Internal style sheet****************-->
        <link rel="stylesheet" type="text/css" href="{{ url('/css/admin/admin-orders-details.css')}}" />

        
    </head>

<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">
<!--start side menue--------------------------------------------------------->
@include("admin.layouts.sidenav")

<!----------------------------------------------------------------End Side menu-->


<!--start main-contenet---------------------------------------------------------->
<div class="content-wrapper">
  <div class="container-fluid">
      <!--start order details------------------------------------------------------------->
      
  
      <div class="tab-content pt-1">
		<div class="tab-pane active" id="comp-order-tab" aria-expanded="true" role="tablist" aria-labelledby="complete-order">
		@foreach($order as $order)
			<div class="card">
				<div class="card-header">
					<h4 class="card-title text-center">Order Details {{$order->fullname}}</h4>
				</div>
			</div>

			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<div class="d-flex justify-content-around lh-condensed">
							<div class="order-details text-center ">
								<div class="order-title ">Order Number</div>
								<div class="order-info">#{{$order->id}}</div>
							</div>
							<div class="order-details text-center">
								<div class="order-title">Date</div>
								<div class="order-info">{{$order->created_at}}</div>
							</div>
							<div class="order-details text-center">
								<div class="order-title">Amount Paid</div>
								<div class="order-info">{{$order->total}} LE</div>
							</div>
							<div class="order-details text-center">
								<div class="order-title">Payment Method</div>
								<div class="order-info">cash</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card pull-up">
				<div class="card-header">
					<div class="float-left">
						<a href="#" class="btn btn-info">#{{$order->id}}</a>
					</div>
					@if($order->state =='deliver')
					<div class="float-right">
						<a href="" class="btn btn-outline-info mr-1 disabled"><i class="far fa-check-circle"></i></i>Delivered</a>
					</div>
					@elseif($order->state =='cancel')
					<div class="float-right">
						<a href="" class="btn btn-outline-danger mr-1 disabled"><i class="fas fa-times"></i></i>canceled</a>
					</div>
					@else
					<form action="{{route('change',$order->id)}}" method="get">
                        @csrf
						<div class="float-right">
                        <button type="submit" class="btn btn-outline-info mr-1"><i class="far fa-check-circle"></i>Deliver</button>
						</div>

                        </form>
						<form action="{{route('cancel',$order->id)}}" method="get">
                        @csrf
						<div class="float-right">
						<button type="submit" class="btn btn-outline-danger "><i class="fas fa-recycle"></i>cancel</button>
						</div>

                        </form>
					<!-- <div class="float-right">
						<a href="#" class="btn btn-outline-info mr-1"><i class="far fa-check-circle"></i>Deliver</a>
						<a href="#" class="btn btn-outline-danger"><i class="fas fa-recycle"></i>cancel</a>
					</div> -->
					@endif
				</div>
				<div class="card-content">
					<div class="card-body py-0">
						<div class="d-flex justify-content-between lh-condensed">
							<div class="order-details text-center">
								<div class="product-img d-flex align-items-center">
									<img class="img-fluid" style="width:200px;height:200px;" src='{{asset("product_images/$order->image")}}' alt="Card image cap">
								</div>
							</div>
							<div class="order-details">
								<h6 class="my-0">{{$order->description}}</h6>
								<small class="text-muted">{{$order->category}},{{$order->sub_category}}</small>
							</div>
							<div class="order-details">
								<div class="order-info">{{$order->price}}</div>
							</div>
							<div class="order-details">
								<h6 class="my-0">Delivered on :{{$order->updated_at}}</h6>
								<small class="text-muted">Location:{{$order->address}}</small>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
					<span class="float-left">
						<span class="text-muted">Ordered On</span>
						<strong>{{$order->created_at}}</strong>
					</span>
					<span class="float-right">
						<span class="text-muted">Ordered Amount</span>
						<strong>{{$order->total}}</strong>
					</span>
				</div>
			</div>
			@endforeach

		</div>
	</div>
	<div class=" bg-transparent">
                    <a href="{{route('orders.index')}}" class="btn btn-danger pull-up" >back</a>
                </div>

<!-------------------------------------------------------end of order details-->

  </div>

</div>
<!-------------------------------------------------------------------------end main-contenet-->
<!--start footer------------------------------------------------------------------------------>
@include("admin.layouts.footer")

<!--------------------------------------------------------------------------------end footer-->
</div>

<!-----------------------------------------------------------end of main main page wrapper----------------------------------------->

    
</body>
</html>