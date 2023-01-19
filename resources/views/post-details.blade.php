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
        <span></span>
        <div class="flex gap-4">
          <a href="/" class="shadow-md p-2 transition-shadow hover:shadow-pink-500">See all posts</a>
          <a href="/" class="shadow-md p-2 transition-shadow hover:shadow-purple-500">Create new post</a>
        </div>
      </div>

      <div id="post" class="mt-10">

        <h1 class="text-xl font-semibold text-purple-500">{{$post['title']}}</h1>
        <p class="text-xs font-semibold"><span>Author:</span> {{$post['author']}} at {{$post['created_at']}}</p>

        <div id="post-content" class="mt-6">
            {!! $post['content'] !!}
        </div>
      </div>

    </div>
  </div>
</body>
@vite('resources/js/app.js')

</html>