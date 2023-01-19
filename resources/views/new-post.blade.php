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
        <h1 class="text-xl font-normal text-purple-600 under">Create your post</h1>
        <a href="/" class="shadow-md p-2 transition-shadow hover:shadow-pink-500">See all posts</a>
      </div>

      <form method="post" action="/new-post">
        @csrf
        <div class="mt-3">
          <label class="mt-8 fs-small text-sm">Title</label>
          <input
            class="placeholder:italic  bg-white w-full border border-slate-300 rounded-md py-2 pl-3 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
            placeholder="Title" type="text" name="title" />
        </div>

        <div class="mt-4">
          <div class="fs-small text-sm">Author name</div>
          <select
            class=" bg-white w-full border border-slate-300 rounded-md py-2 pl-3 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" 
            name="author">
            <option value="Matheus Felizardo">Matheus Felizardo</option>
            <option value="Jéssica Felizardo">Jéssica Felizardo</option>
          </select>
        </div>

        <div class="mt">

        </div>

        <div class="mt-8">
          <div class="fs-small text-sm mb-2 flex gap-2 items-center">
            <span>Content</span>
            <button type="button" id="html_preview_btn" class="px-2 py-1 text-xs text-white font-bold  bg-purple-300 rounded-full">Live Preview</button>
          </div>

          <div id="post_preview_container" class="grid-cols-2 gap-2">
            <textarea id="post" name="content" class="placeholder:italic resize-none bg-white w-full border border-slate-300 rounded-md py-2 pl-3 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm min-h-[250px]"></textarea>

            <div id="html_preview" class="hidden p-4 shadow-sm rounded-md border border-purple-900">
            </div>
          </div>
        </div>
        <button class="
          px-4
          py-2
          mt-4
          text-sm text-white
          bg-purple-500
          rounded-sm
          shadow-md
          hover:bg-purple-600
        ">
          Submit
        </button>
      </form>

    </div>
  </div>
</body>
@vite('resources/js/app.js')

</html>