<div class="border border-gray-600 rounded-lg p-3">
    <div class="flex items-center justify-between w-full">
        <p>User Name:{{$user->name}}</p>
        <div class="flex items-center space-x-4">
            <a href="{{route('user.edit',$user->id)}}">Edit</a>
            <a href="{{route('user.delete',$user->id)}}">Delete</a>
            <a href="{{route('user.view',$user->id)}}">View</a>
            <a href="{{route('user.audit',$user->id)}}">Audits</a>
        </div>
    </div>
    <div >
        <p>
            User Email:  {{$user->email}}
        </p>
    </div>
</div>
