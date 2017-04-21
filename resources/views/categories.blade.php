

@extends('welcome')
@section('content')
<ul>
    @foreach($categories as $category)
    <li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
    @endforeach
</ul>
<form method="POST">
  <div class="form-group">
    <label>Category name</label>
    <input id="tx" name="name" type="text" class="form-control" placeholder="...">
  </div>
  <div class="btn-group" role="group" aria-label="...">
      <button id="b1" disabled="" type="submit" class="btn btn-default">Create</button>
    
    <button type="reset" class="btn btn-default">Cancel</button>
  </div>
</form>
<script>
    $('#tx').on('keyup',function(){
        var name=$('#tx').val();
      
        if (name.length>0)
        {
            $('#b1').removeAttr('disabled');
            
        }
        if (name.length===0)
        {
            $('#b1').attr('disabled','true');
            
        }
        
    });
</script>
@stop

