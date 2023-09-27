@extends('admin.layouts.layout')
@section('content')

<div class="panel panel-flat">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="bg-blue">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d-m-Y',strtotime($user->created_at))  }}</td>
                        <td>
                                <ul class="icons-list">
                                    <li class="text-primary-600"><a href={{ route('users.edit',$user->id) }}><i class="icon-pencil7"></i></a></li>
                                    <li class="text-danger-600">
                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('do you want to delete this item?')" style="background: transparent;border:0;"><i class="icon-trash"></i></button>
                                        </form>
                                    <li class="text-teal-600"><a href="#"><i class="icon-cog7"></i></a></li>
                                </ul>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
                
            </tbody>
        </table>
    </div>

</div>
@endsection