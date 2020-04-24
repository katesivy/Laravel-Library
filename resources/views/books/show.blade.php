
@extends ('layout')



@section ('content')

<div class="container">
    <h1>ALL BOOKS</h1>
</div>

<div id="wrapper">
   
	<div id="page" class="container">
		
                @foreach ($books as $book) 
                <div id="content">
                    <div class="title">
                        <ul>
                            <li>{{ $book->title  }}
                
                            </li>
                        </ul>
                </div>
            </div>
	
                @endforeach
				
		
            
           

		</div>
</div>


@endsection