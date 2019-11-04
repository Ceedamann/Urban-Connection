@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{route('tags.create')}}" class="btn btn-success">Add tag</a>
    </div>

    <div class="card card-default">
        <div class="card-header">tags</div>
             <div class="card-body">
            @if($tags->count()>0)
            <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Posts count</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>
                                    {{$tag->name}}
                                </td>
                                <td>
                                {{$tag->posts->count()}}
                                </td>
                                <td>
                                    <a href="{{route('tags.edit', $tag-> id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm" onclick="handleDelete({{$tag->id}})">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form action="" method="POST" id="deletetagForm">
                                    @csrf
                                     @method('DELETE')
                                    <h5 class="modal-title" id="deleteModalLabel">Delete tag</h5>                       
                        
                                    <div class="modal-body">
                                        <p class="text-center text-bold">Are you sure??</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                    </div>                                                                        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            <h3 class="text-center">No tags yet</h3>
            @endif

@stop

@section('scripts')
    <script>
    function handleDelete(id){        
        var form = document.getElementById('deletetagForm')
        form.action = '/tags/'+ id   
        $("#deleteModal").modal('show')          

    }
    </script>
@stop