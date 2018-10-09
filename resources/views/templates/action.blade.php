<form method="get" action="{{$actionEdit}}">
    <button type="submit" class="btn btn-xs btn-info">Edit</button>
     <a href="{{$url}}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-eraser"></i> Delete</a>
</form>