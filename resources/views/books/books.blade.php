@extends ('layout')



@section ('content')



<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				@foreach ($books as $book)
				<h2>{{ $book->title }}</h2>
				@endforeach
				</div>
			
            
           

		</div>
		
	</div>
</div>


@endsection