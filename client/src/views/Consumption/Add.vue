<template lang="pug">
    .consumption-add
        v-form
            v-select(:items="form.categories" label="Категория" v-model="consumption.category_id")
            v-btn(@click="add") Save
</template>

<script>
  import ConsumptionApi from "@/api/consumptions"

  export default {
    data() {
      return {
        consumption: {
          category_id: null
        },
        form: {
          categories: [
            {
              text: 'Продукты',
              value: 1
            }
          ]
        }
      }
    },
    methods: {
      add() {
        ConsumptionApi.add(this.consumption)
      }
    }
  }
</script>
