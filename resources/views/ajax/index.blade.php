@extends('layouts.decor')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<input type="text" name="" id="region">
			<button onclick="region_save()">save</button>
		</div>
	</div>
</div>
<script type="text/javascript">
function region_save()
{
  var name=$("#region").val();
  if(!name){
    return;
  }
  
  $.ajax({
        cache: false,
        type : 'GET',
        url: '/region/save',
        dataType: 'json',
        data:{
           'name': name, 
        }, 
        success: function(connect) {
           alert("normala");
        },
        error:function(){
           alert('error');
        }
     });
}
</script>