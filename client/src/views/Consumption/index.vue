<template lang="pug">
    .consumption
        v-btn(@click="goToAddPage") Add consumption

</template>

<script>
  export default {
    methods: {
      goToAddPage() {
        this.$router.push({ name: "consumption-add" })
      }
    }
  }
</script>
