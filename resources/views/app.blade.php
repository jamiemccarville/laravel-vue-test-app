<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laracast Assets</title>
  <link rel='stylesheet' href="/css/app.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">

</head>

<body class="font-sans text-black mt-3">
  <div id="app">
    <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 3px  no-repeat">
      <h1>
        <img src="images/logo.svg" alt="Laracasts">
      </h1>
    </header>
    <div class="container px-8 pb-10">

      <main class="flex">
        <aside class="w-64 pt-8">
          <section class="mb-10">
            <h5 class="mb-5 font-bold uppercase text-base">The Brand</h5>
            <ul>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/" exact>Logo</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/colors">Colors</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/typography">Typography</router-link>
              </li>
            </ul>
          </section>
          <section>
            <h5 class="mb-5 font-bold uppercase text-base">Doodles</h5>
            <ul>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/mascot">Mascot</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/illustrations">Illustrations</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/loaders-and-animations">Loaders and Animations</router-link>
              </li>
              <li class="text-sm leading-10">
                <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
              </li>
            </ul>
          </section>

        </aside>
        <div class="flex-1 primary">
          <router-view></router-view>
        </div>
      </main>


    </div>

  </div>
  <script src="/js/app.js"></script>
</body>

</html>