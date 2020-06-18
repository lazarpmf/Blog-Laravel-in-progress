@extends('layouts/main')


@section('content')

	<div class="container">
		<img style="height:500px; width: 100%;" src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid" alt="Responsive image">
		<hr>
		<h1>{{$title}} <em>Just Travel</em></h1>


	

		<hr>
		<p>This site is made by three travelers who want to share and get shared some travel experiences with other people. Just Travel offers You great travel pictures, introduces You to some of the most beautifull places on the Earth, shares with You peoples' view from that places and much more. </p>
		<p>About Travel offers You to be Registered, so You can use all of its capacities.</p>
		<p>Also, Just Travel has Blog, where You can add Your favourite places. In Blog, You can comment other posts and share Your experiences! Sounds great, isn't it?</p>
		<p>So... What are You waiting for? Get Registered and enjoy!</p>
		<hr>
		<h2>Our team:</h2>
		<hr>
		<div class="card-group">
  <div class="card">
    <img style="height: 300px;" class="card-img-top" src="https://cdn.pixabay.com/photo/2012/04/26/19/47/penguin-42936__340.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">CEO of Just Travel</h5>
      <p class="card-text">Born in Berane. 25 years old. Mathemathican. Very enthusiastic. Wants to become a freelancer. </p>
      <p class="card-text"><small class="text-muted">Nickname: Laki</small></p>
      <p class="card-text"><small class="text-muted"><a href="#"><u>More about our CEO</u></a></small></p>
    </div>
  </div>
  <div class="card">
    <img style="height: 300px;" class="card-img-top" src="https://cdn.pixabay.com/photo/2013/07/12/15/55/penguin-150563__340.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Web designer</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content. Additional content.</p>
      <p class="card-text"><small class="text-muted">Nickname: Filip</small></p>
      <p class="card-text"><small class="text-muted"><a href="#"><u>More about me...</u></a></small></p>
    </div>
  </div>
  <div class="card">
    <img style="height: 300px;" class="card-img-top" src="https://cdn.pixabay.com/photo/2013/07/13/11/44/penguin-158551__340.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Part of the team</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer.</p>
      <p class="card-text"><small class="text-muted">Nickname: Danilo</small></p>
      <p class="card-text"><small class="text-muted"><a href="#"><u>More about me...</u></a></small></p>
    </div>
  </div>
</div>


	</div>


@endsection