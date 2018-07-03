<style>
	ul li {
    	cursor: pointer
	}
</style>
<div class="row">
	<div class="col-lg-12 gc-area" style="padding:0px 30px 10px 30px">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-table"></i> Menu Management</h3>
			</div>
		    <div class="box-body" style="padding: 0px">
				<ul class='example' class="list-group">
	              <li class="list-group-item">
	                First
	                <ul class="list-group">
	                	<li class="list-group-item">
	                		test
	                	</li>
	                </ul>
	              </li>
	              <li  class="list-group-item">
	                Second
	              </li>
	              <li  class="list-group-item">Fourth</li>
	              <li  class="list-group-item">Fifth</li>
	              <li class="list-group-item">Sixth</li>
	            </ul>
		    </div>
		</div>
	</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $(function  () {
		  var group =  $("ul.example").sortable({
		  })
		}); 
    });
    
</script>

