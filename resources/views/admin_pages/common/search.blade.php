<form action="{{ url()->current() }}" method="POST" role="search">
	@csrf 
	<div class="input-group">
		<input type="text" class="form-control" name="q" value="{{ old('q') }}" placeholder="Search users"> 
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</span>
	</div>
</form>