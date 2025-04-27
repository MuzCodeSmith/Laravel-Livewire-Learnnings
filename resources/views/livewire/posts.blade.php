<div>
    <table class="min-w-full divide-y divide-gray-300">
        <thead>
            <tr class="hover:bg-gray-200">
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">ID</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">User</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase ">Title</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Created</th>
                <th scope="col" class="px-6 py-3 text-start text-sm uppercase">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="hover:bg-gray-200">
                <td class="px-6 py-3 text-start text-sm ">{{$post->id}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->user->name}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->title}}</td>
                <td class="px-6 py-3 text-start text-sm ">{{$post->created_at->diffForHumans()}}</td>
                <td class="px-6 py-3 text-start text-sm ">
                    <button wire:click="deletePost({{$post->id}})" class="bg-red-500 text-white hover:bg-red-600 py-2 px-4 rounded">Delete</button>
                </td>
                @endforeach
        </tbody>
    </table>
    <div class="mt-5">
        {{$posts->links()}}
    </div>
</div>