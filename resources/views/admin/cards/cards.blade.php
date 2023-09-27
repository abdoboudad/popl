@extends('admin.layouts.layout')
@section('content')

<div class="panel panel-flat">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="bg-blue">
                    <th>#</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Latest update</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cards as $card)
                    <tr>
                        <td>{{ $card->id }}</td>
                        <td>{{ $card->user->name }}</td>
                        <td>{{ date('d-m-Y',strtotime($card->created_at))  }}</td>
                        <td>{{ date('d-m-Y',strtotime($card->updated_at))  }}</td>
                        <td>
                                <ul class="icons-list">
                                    <li class="text-primary-600"><a href={{ route('cards.edit',$card->id) }}><i class="icon-pencil7"></i></a></li>
                                    <li class="text-danger-600">
                                        <form action="{{ route('cards.destroy',$card->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('do you want to delete this item?')" style="background: transparent;border:0;"><i class="icon-trash"></i></button>
                                        </form>
                                    </li>
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