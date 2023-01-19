<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>  
  <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-full pt-10 pb-10 min-h-screen bg-white">
    <div class="m-4 mt-0 max-w-full ml-10 mr-10">
      <p class="text-md text-white">This app simulate a blog interaction just to practice PHP, Laravel, MySQL and Tailwind</p>
    </div>

    <div class="max-w-full bg-white p-6 mt-auto mb-auto mr-10 ml-10 rounded-sm shadow-lg border-8 border-purple-600/60">
      <div class="flex justify-between">
        <h1 class="text-xl font-normal text-purple-600 under">Your posts</h1>
        <a href="/new-post" class="shadow-md p-2 transition-shadow hover:shadow-purple-500">Create new post</a>
      </div>


      @if($posts) 
        <div class="mt-8 grid grid-cols-3 gap-3">
          @foreach ($posts as $post)
            <div class="border-4 border-purple-400">
              <a class="flex flex-col w-full h-full p-2" href="/posts/{{$post['id']}}">
                <h1 class="text-xl text-bold text-purple-600 mb-2 truncate">{{$post['title']}}</h1>
                <p>Author: {{$post['author']}}</p>
                @if ($post['created_at'])
                <p>Created at: {{$post['created_at']}}</p>
                @endif
                {{-- <div class="truncate">{!! $post['content'] !!}</div> --}}
              </a>
            </div>
          @endforeach
        </div>
      @else
        <a href="/new-post" class="block text-lg mt-10 underline transition-colors text-pink-600 hover:text-purple-500">Click here to create your first post</a>
      @endif
    </div>
  </div>
</body>
@vite('resources/js/app.js')

</html>