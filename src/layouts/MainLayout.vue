<template>
  <q-layout view="hHh lpR fFf">

    <q-header elevated class="bg-white text-dark">
      <q-toolbar>
        <q-btn dense flat round icon="menu" @click="toggleLeftDrawer" />

        <q-toolbar-title>
          <q-avatar>
            <img src="https://www.gstatic.com/images/branding/product/1x/keep_2020q4_48dp.png" alt="">
          </q-avatar>
          CIMAKeep
        </q-toolbar-title>
      </q-toolbar>
    </q-header>

    <q-drawer show-if-above v-model="leftDrawerOpen" side="left" bordered>
      <!-- drawer content -->
      <q-list class="list-m-20">
        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
         :title="link.title"/>
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>

  </q-layout>
</template>

<script>
import { ref } from 'vue'
import EssentialLink from "components/EssentialLink.vue";

export default {
  components: {EssentialLink},

  setup () {
    const linksList = [
      {
        title: 'Notas',
        icon: 'lightbulb_outline',
        link: '/'
      },
      {
        title: 'Archivadas',
        icon: 'archive',
        link: '/archived'
      },
    ];
    const leftDrawerOpen = ref(false)

    return {
      leftDrawerOpen,
      essentialLinks: linksList,

      toggleLeftDrawer () {
        leftDrawerOpen.value = !leftDrawerOpen.value
      }
    }
  }
}
</script>
<style>
  .list-m-20{
    margin-top: 20px
  }
  .list-element {
    align-items: center;
  }
</style>
