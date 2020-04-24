
@extends ('layout')



@section ('content')

<div class="container">
    <h1>SELECTED BOOKS</h1>
</div>

<div id="wrapper">
   
	<div id="page" class="container">
		
                
                <div id="content">
                    <div class="title">
                       
                            <h2>{{ $book->title  }}</h2>
                
                           
                </div>
            </div>
	
             
				
		
            
           

		</div>
</div>


@endsection