<template lang="pug">
  v-app
    v-app-bar(app color="primary" dark)
      span Finance
      v-spacer
      v-btn(
        href="https://github.com/vuetifyjs/vuetify/releases/latest"
        target="_blank"
        text
      )
        span.mr-2 Latest Release
        v-icon mdi-open-in-new
    v-content


</template>

<script>

export default {
  components: {

  },
  data: () => ({
    //
  }),
};
</script>
