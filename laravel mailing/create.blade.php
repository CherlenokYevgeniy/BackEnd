<form action="show" class="login-container" method="GET">
					@csrf
				    <p><input type="text" name="name" placeholder="Name"></p>

				    <p><input type="text" name="surname" placeholder="Surname"></p>

				    <p style="font-size: 14px;text-align: center;"></p>

				    <p><input type="submit" value="Submit"></p>

				  </form>

@if($errors->any())
<div>
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>

</div>
@endif
