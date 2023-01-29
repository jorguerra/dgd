<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    <div class="relative">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <img src="https://cms-dgd-prod.s3-us-west-2.amazonaws.com/uploads/filer_public_thumbnails/filer_public/f1/ba/f1ba6bcd-f57b-4c26-bfa7-7b58c58cbb9c/dgd.png__223x70_q85_height-70_subsampling-2_width-223.png">
            </div>
        </div>
        @inertia
    </div>
  </body>
</html>
