@extends ('layout')



@section ('content')
<div id="wrapper">
	<div
        id="page"
        class="container"
        >
<h1>index page</h1>
        @foreach ($books as $book)
	<div class="content">
        <div class="title">
			<h2>
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                </a>
             </h2>
    </div>
				
                
            
                @endforeach

        </div>
</div>
	@endsection		