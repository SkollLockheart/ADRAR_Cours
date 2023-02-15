<template>
  <h1>TP : Component Communication</h1>
  <ActiveUser :user="activeUser" />
  <UserData v-bind:user="activeUser" v-on:update-user="updateActiveUser" />

</template>

<script>
import UserData from './components/UserData.vue'
import ActiveUser from './components/ActiveUser.vue'

export default {
  name : 'app',
  components : {
    ActiveUser,
    UserData
  },
  data() {
    return {
      activeUser: {
        name: 'Testo',
        age: 42
      }
    }
  },
  methods: {
    updateActiveUser(data) {
      this.activeUser.name = data.name;
      this.activeUser.age = data.age;
    }
  }

}
</script>

