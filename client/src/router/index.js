import Router from "vue-router"
import MiddlewareRegistrator from "./MiddlewareRegistrator"

import consumption from "./consumption"

const router = new Router({
    mode: "history",
    base: process.env.BASE_URL,
    routes: [
      ...consumption
    ]
  }
)

router.beforeEach((to, from, next) => {
  if (to.meta.title) {
    document.title = `Finance - ${to.meta.title}`
  }

  next()
})

router.beforeEach(MiddlewareRegistrator(router))

export default router