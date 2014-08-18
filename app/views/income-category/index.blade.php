@extends('layout.default')
@section('content')

  <!-- LIST OF INCOME CATEGORIES-->
  @if(Session::has('message'))
    {{ HTML::userupdate(Session::get('message')) }}
  @endif
<?php echo file_get_contents('php://input'); ?>
  <div class="row">
    <div class="col-xs-9 col-sm-offset-4 col-sm-3">
      <h2>Income Categories</h2>
    </div>
    <div class="col-xs-3 col-sm-1">
      <h3>{{ link_to('income-category?newcat=new', 'New', ['class' => 'glyphicon glyphicon-plus']) }}</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-offset-4 col-sm-4">
      <table class="table">
        <thead>
          <tr>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="sortable">
          @if(isset($_GET['category']))
              {{ Form::open(array('route'=> array('income-category.update', $_GET['category']), 'method'=>'PUT')) }}
              @foreach($categories as $catId=>$catVal)
                @if($_GET['category'] == $catId)
                  <tr id="{{ 'item_'. $_GET['category'] }}">
                    <td>{{ Form::text('category_name', $catVal) }} <br>{{ $errors->first('category_name') }}</td>
                    <td>
                      {{ Form::submit('Save', ['category'=>$catId, 'class'=>'btn btn-success btn-sm', 'name' => 'submit_' . $_GET['category'], 'title'=>'Save']) }}&nbsp;
                      {{ link_to('income-category', 'Cancel', ['class'=>'btn btn-default btn-sm', 'title'=>'Cancel']) }}
                    </td>
                  </tr>
                @else
                  <tr>  
                    <td>{{ $catVal }}</td>
                    <td>{{ HTML::linkAction('IncomeCategoryController@index', '', ['category'=>$catId], ['class'=>'glyphicon glyphicon-pencil shadow pointer', 'title'=>'Edit']) }}&nbsp;&nbsp; {{ Form::button('', ['category'=>$catId, 'type'=>'submit', 'class'=>'glyphicon glyphicon-trash shadow pointer', 'name' => 'delete' . $_GET['category'], 'title'=>'Delete', 'onclick' => 'confirm("For now this is just going to delete no matter what you pick.")']) }} </td>
                  </tr>
                @endif
            @endforeach
            {{ Form::close() }}
          @else
              <?php $i = 1; ?>
              {{ Form::open(array('route'=> array('income-category.destroy', $categories[$i]), 'method'=>'DELETE', 'id'=>'sortable')) }}
              @foreach($categories as $catId=>$catVal)
              <tr id="{{ 'item_'. $i }}">  
                <td>{{ $catVal }}</td>
                <td>{{ HTML::linkAction('IncomeCategoryController@index', '', ['category'=>$catId], ['class'=>'glyphicon glyphicon-pencil shadow pointer', 'title'=>'Edit']) }}&nbsp;&nbsp; {{ Form::button('', ['category'=>$catId, 'type'=>'submit', 'class'=>'glyphicon glyphicon-trash shadow pointer', 'title'=>'Delete', 'onclick' => 'confirm("For now this is just going to delete no matter what you pick.")']) }} </td>
              </tr>
              <?php $i++; ?>
              @endforeach
              {{ Form::close() }}
          @endif
          <tr>
          @if(isset($_GET['newcat']) && $_GET['newcat'] == 'new')
              {{ Form::open(array('route'=>'income-category.store')) }}  
                <td>{{ Form::text('category_name', '') }} <br> {{ $errors->first('income') }}</td>
                <td>
                  {{ Form::submit('Save', ['class'=>'btn btn-success btn-sm', 'title'=>'Save']) }}&nbsp;
                  {{ link_to('income-category', 'Cancel', ['class'=>'btn btn-default btn-sm', 'title'=>'Cancel']) }}
                </td>
              {{ Form::close() }}
          @endif
          </tr>
        </tbody>
      </table>
      <div class="result">hi </div>
    </div>
  </div>
@stop
