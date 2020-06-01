import Consumption from "@/views/Consumption"
import ConsumptionAdd from "@/views/Consumption/Add"

export default [
  {
    path: "/consumption",
    name: "consumption-index",
    component: Consumption,
    meta: {
      title: "Расходы",
    }
  },
  {
    path: "/consumption/add",
    name: "consumption-add",
    component: ConsumptionAdd,
    meta: {
      title: "Добавление расхода",
    }
  }
]