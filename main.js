import './style.scss'

document.querySelector('#main').innerHTML = `
    <h1 class="h2 text-center">ViteSite</h1>
    <p>This Website is built using Vite.Vite is the brand new development and build server proposed by Evan You, which
      is fast.
      Very fast. And it is framework-agnostic, so its scope is not reduced to Vue apps.
      Actually, it supports Vue.js, React (+ Preact) and Svelte.</p>
    <div class="row mx-auto">
      <h2 class="col-sm-12 text-center mt-4 p-4">Advantages of Vite</h2>
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
            href="#list-home" role="tab" aria-controls="home">Bundeled Development</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
            href="#list-profile" role="tab" aria-controls="profile">Generalities</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
            href="#list-messages" role="tab" aria-controls="messages">SASS Support in Vite</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list"
            href="#list-settings" role="tab" aria-controls="settings">Dependency Management</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            the dev build process that most of front-end developers use: the source code, which is not directly
            understandable by browsers,
            is compiled and bundled. The main reason for bundling is that browsers do not understand modules formats
            used in the source code (cf B.),
            so we have to concatenate everything into huge scripts. The pain point here is that, for any modification
            done in the source code,
            part or all of the application has to be rebuilt, which takes time.
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            Vite is a development server based on ES modules and a production server based on the bundler Rollup (which
            itself relies on ES modules).
            Even though Vite has built-in support for Vue apps (this point is being discussed here), Vite is
            framework-agnostic and can support other
            frameworks with plugins. It currently has working plugins for React, Preact and Svelte. Also, VitePress, a
            static site generator based
            on Vue and Vite ("VuePress's brother") is currently under development.
            <!---
              -->In dev mode, Vite supports HMR (Hot Module Replacement) for the frameworks previously mentionned.
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            Wonderfully, we don't have to mess around with any plugins to get Vite to support SASS.
            There's just two steps:
            <li>npm install --save-dev sass</li>
            <li> in any CSS files where you want to write SASS, change the file extension from `.css` to `.scss`
              (and update any references in your HTML or JS files).</li>
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            This is an important point: excepted for dev dependencies, Vite looks for an ES distribution, or, when it is
            not available,
            prebundles the dependency into ESM.
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <a class="float-right" href="https://indepth.dev/posts/1318/a-note-on-vite-a-very-fast-dev-build-tool">Source: The
          Vite Advantage by Elise Patrikainen</a>
      </div>
    </div>
`
