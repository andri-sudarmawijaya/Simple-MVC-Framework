@extends( 'layouts.admin_master' )

@section( 'title' )
	List Users
@stop

@section( 'styles' )
	{!! $this->url->htmlLink( 'datatables/dataTables.bootstrap4.min.css') !!}
@stop

@section( 'content' )

  <div class="container">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">User</button>
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/admin/user"><span class="glyphicon glyphicon-user padding-r10"></span>List</a>
      <a class="dropdown-item" href="/admin/user/create"><span class="glyphicon glyphicon-plus padding-r10"></span>Add</a>
    </div>
  </div>
  </div>
  
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="row">
          <div class="col-sm-8 col-xs-12">
            <h4 class="panel-title">
              Shop Users
            </h4>
          </div>
          <div class="col-sm-4 col-xs-12 text-right">
            <a href="/admin/user/create" data-toggle="tooltip" title="Create">
              <span class="glyphicon glyphicon-plus"></span>
            </a>
          </div>
        </div>
      </div>

      <?php if( $this->users ): ?>
        @include( 'admin.user.includes.table' )
      <?php else: ?>
        <div class="panel-body">
          <h3>No Users</h3>	
        </div>
      <?php endif; ?>
      
    </div>
  </div>
@stop


@section( 'scripts' )
    {!! $this->url->htmlScript( 'datatables/jquery.dataTables.min.js' ) !!}
    {!! $this->url->htmlScript( 'datatables/dataTables.bootstrap4.min.js' ) !!}
    {!! $this->url->htmlScript( 'datatables-demo.js' ) !!}
@stop