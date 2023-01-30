import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import { InertiaProgress } from "@inertiajs/progress"

InertiaProgress.init()
import './../css/app.css'

createInertiaApp({

  resolve: name => import(`/resources/js/Pages/${name}.vue`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .mount(el)
  },
})
