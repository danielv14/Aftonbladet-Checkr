<template lang="html">
  <p class="lead">Just nu {{count}} <span class="checker">&#10004;</span></p>
</template>

<script>
  export default {
    mounted() {
      // get current checkers count
      this.$http.get('/current').then((response => { this.count = response.body.count }));
    },
    data() {
      return {
        count: ''
      }
    }
  }
</script>
