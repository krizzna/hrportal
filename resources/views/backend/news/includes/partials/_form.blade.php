<div class="box-body">
    <div class="form-group">
	{!! Form::text('title', null, ['placeholder' => 'Enter title here', 'class' => 'form-control', 'required' => 'required']) !!}
    </div><!--form control-->
    <div class="form-group">
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div><!--form control-->
</div>

<div class="box-footer">
    <div class="pull-left">
	<a href="{{route('admin.news.post.index')}}" class="btn btn-danger">Cancel</a> {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!} 
    </div>
</div>
