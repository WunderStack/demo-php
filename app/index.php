<?php
$isWunderPreview = getenv('IS_WUNDERPREVIEW');
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="/favicon.ico" />
  <link rel="stylesheet" href="/styles.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/0.7.3/webcomponents.min.js"></script>
  <title>WunderPreview Example</title>
</head>
<body class="antialiased">
  <div class="relative bg-silver-md">
    <main class="relative max-w-5xl mx-auto">
      <div class="flex flex-col min-h-screen lg:flex-row lg:items-center lg:p-8">
        <div class="flex flex-col flex-grow bg-white lg:shadow-2xl lg:rounded-lg lg:overflow-hidden">
          <div class="h-2 bg-gradient-to-r from-accent to-accent-gradient"></div>
          <header class="flex-grow flex flex-col justify-center p-12">
            <div class="pl-0 grid md:grid-cols-3 text-center flex items-center space-y-8 md:space-y-0">
              <div class="flex flex-col items-center space-y-8">
                <img src="logo.svg" class="w-24 h-24" />
                <h1 class="font-light text-2xl md:text-4xl text-accent">WunderPreview</h1>
              </div>
              <div class="self-end pb-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-10 w-10 mx-auto">
                  <g>
                    <path class="fill-current text-red" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                  </g>
                </svg>
              </div>
              <div class="flex flex-col items-center space-y-8">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="h-24">
                  <g>
                    <path class="fill-current text-accent" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z" />
                  </g>
                </svg>
                <h1 class="font-light text-2xl md:text-4xl text-accent">PHP</h1>
              </div>
            </div>
          </header>
          <section
            class="bg-primary py-10 px-12 text-white"
          >
            <strong>SSR response:</strong> We're currently
            <?php
            if ($isWunderPreview) {
              echo 'in WunderPreview. Env var <code class="border border-accent rounded-md p-2">IS_WUNDERPREVIEW</code> equals <code class="border border-accent rounded-md p-2">' . $isWunderPreview . '</code>';
            } else {
              echo 'not in WunderPreview. Env var <code class="border border-accent rounded-md p-2">IS_WUNDERPREVIEW</code> is not set.';
            }
            ?>
          </section>
          <section class="border-t-2 border-silver-md flex-grow flex flex-col justify-center py-10 pt-6 px-12 space-y-4">
            <div class="pl-0">
              <p class="text-slate-dk mt-1 text-sm md:text-base">
                With <a href="https://wunderpreview.com" class="underline">WunderPreview</a>, everyone on your dev team can independently preview code changes at any time. Instantly. Simplified feedback loops lead to faster development and clearer communication. Spend time creating value, not code previews.
              </p>
            </div>
            <div class="grid grid-cols-2">
              <p class="text-slate-dk mt-1 text-sm md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-3 w-3 inline">
                  <g>
                    <path class="fill-current text-gray" d="M218.101 38.101L198.302 57.9c-4.686 4.686-4.686 12.284 0 16.971L353.432 230H12c-6.627 0-12 5.373-12 12v28c0 6.627 5.373 12 12 12h341.432l-155.13 155.13c-4.686 4.686-4.686 12.284 0 16.971l19.799 19.799c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L235.071 38.101c-4.686-4.687-12.284-4.687-16.97 0z" />
                  </g>
                </svg>
                <a href="https://wunderpreview.com" class="underline">Learn more about WunderPreview.</a>
              </p>
              <p class="text-slate-dk mt-1 text-sm md:text-base md:text-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="h-3 w-3 inline">
                  <g>
                    <path class="fill-current text-gray" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                  </g>
                </svg>
                <a href="https://github.com/WunderStack/demo-php" class="underline">Fork this on GitHub</a>
              </p>
            </div>
          </section>
        </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>
