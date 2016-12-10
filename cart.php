<div class="panel panel-default">
	<div class="panel-heading">Your Cart </div>
	<div class="panel-body">
		<table class="table table-striped task-table"> 
			<thead>
				<th>Item name</th>
				<th>Price</th>
			</thead>
			<tbody>
				@foreach ($tasks as $task)
				<tr>
					<td class="table-text"><div>item name</div></td>
					<td class="table-text"><div>item price</div></td>
					<td>
						<form action="{{url('delete')}}/{{$task->id}}" method="POST">
       					    <button class="btn btn-danger">Delete Task</button>
   						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
