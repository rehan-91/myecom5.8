


@if (session('success'))

<div class="callout callout-success">
                
	{{session('success')}}

</div>
@endif

@if(session('info'))
  <div class="callout callout-info">
  	{{session('info')}}
  </div>
  @endif

  @if(session('danger'))
  <div class="callout callout-danger">
  	{{session('danger')}}
  </div>
  @endif
  
@if(count($errors)>0)
    <div class="alert alert-warning">
    	<ul>
    @foreach($errors->all() as $error)	
    <li>
    	{{$error}}
    </li>
    @endforeach
    </ul>
</div>
@endif