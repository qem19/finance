import axios from "axios"

const CONSUMPTION_PATH = '/consumption'

export default {
  index(query) {
    return axios.get(CONSUMPTION_PATH, { params: query })
  },
  add(params) {
    return axios.post(CONSUMPTION_PATH, params)
  },
}