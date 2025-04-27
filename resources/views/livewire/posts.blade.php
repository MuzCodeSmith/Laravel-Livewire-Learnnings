<div>
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr class="hover:bg-gray-200">
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">ID</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">User</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase ">Title</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="hover:bg-gray-200">
                <td class="px-6 py-3 text-start text-sm ">{{$post->id}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->user->name}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->title}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->created_at->diffForHumans()}}</td>
                @endforeach
        </tbody>
    </table>
    <div class="mt-5">
        {{$posts->links()}}
    </div>
</div>