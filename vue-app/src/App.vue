<template>
  <div id="app">
    <dropdown
              v-bind:title=placeholder
              v-bind:options=options
    >
     <!-- <template v-slot:option="{ option }">
                {{option.value}}
      </template>-->
    </dropdown>
  </div>
</template>

<script>
import Dropdown from './components/Dropdown'
import Alert from "./components/Alert";

export default {
  name: 'app',
  components: {
    Alert,
    Dropdown,
  },
  data() {
    return {
      options: [
        {
          value: "option 1"
        },
        {
          value: "option 2"
        },
        {
          value: "option 3"
        },
      ],

      placeholder:'',
    };
  },
  methods: {
  }
};
</script>

<style lang="sass">
  @import '~bulma'
</style>