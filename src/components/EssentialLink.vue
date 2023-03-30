<template>
  <q-item
    clickable
    :to="link"
    exact
  >
    <q-item-section
      v-if="icon"
      avatar
    >
      <q-icon :name="icon" color="grey-6" class="transparent"/>
    </q-item-section>

    <q-item-section>
      <q-item-label class="centered-vertically">{{ title }}</q-item-label>
      <q-item-label class="centered-vertically" caption>{{ caption }}</q-item-label>
    </q-item-section>
  </q-item>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'EssentialLink',
  props: {
    title: {
      type: String,
      required: true
    },

    caption: {
      type: String,
      default: ''
    },

    link: {
      type: String,
      default: '#'
    },

    icon: {
      type: String,
      default: ''
    }
  }
})
</script>
<style>
.centered-vertically {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.transparent {
  background-color: transparent;
  padding: 0;
}
</style>
