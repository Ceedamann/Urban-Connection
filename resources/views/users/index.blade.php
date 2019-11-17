@extends('layouts.app1')

@section('content')

<main class="py-4" style="color: black;">
        @auth
        <div class="container">
                <div class="row">
                <div class="col-md-10">
                    <div class="card card-default">
                        <div class="card-header">Users</div>
                            <div class="card-body">
                                @if($users->count()>0)
                                <table class="table">
                                    <thead>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td><img width='40px' height='40px' style='border-radius:50%' src="{{Gravatar::src($user->email)}}"></td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                {{$user->email}}
                                                </td>
                                             
                                                <td>
                                                    @if(!$user->isAdmin())
                                                    <form action="{{route('users.make-admin', $user->id)}}" method="POST">
                                                    @csrf
                                                    <button type='submit' class='btn btn-success btn-sm'>Make Admin</button>
                                                    </form>
                                                    @endif
                                                </td>
                                            </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3 class="text-center">No Users Yet</h3>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-2 mb-2">
                            <a href="{{route('posts.create')}}" class="btn btn-success">Add Post</a>
                        </div>
                    </div>



                </div>
        </div>
    </div>
        @else
           @yield('content1')
        @endauth
    </main>


@stop