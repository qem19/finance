<template lang="pug">
    .consumption-add

        v-btn(@click="add") Add
</template>

<script>
    import ConsumptionApi from "@/api/consumptions"

  export default {
    data() {
      return {
        consumption: null
      }
    },
    methods: {
      add() {
        ConsumptionApi.add(this.consumption)
      }
    }
  }
</script>
