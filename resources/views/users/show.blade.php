
@extends ('layout')



@section ('content')

<div class="container">
    <h1>ALL USERS</h1>
</div>

<div id="wrapper">
   
	<div id="page" class="container">
		
                @foreach ($users as $user) 
                <div id="content">
                    <div class="title">
                        <ul>
                            <li>{{ $user->title  }}
                
                            </li>
                        </ul>
                </div>
            </div>
	
                @endforeach
				
		
            
           

		</div>
</div>


@endsection