<template>

  <q-page>
    <div class="q-pa-md row items-start q-gutter-md">

      <q-card class="my-card w-500" v-for="note in notes" :key="note.id">
        <q-card-section>
          <div class="flex justify-between">
            <div class="items-start">
              <div class="text-h6">{{ note.ShortestContent.title }}</div>
            </div>
            <div>
              <q-btn flat>
                <q-icon name="push_pin" color="grey-5"/>
              </q-btn>
            </div>
          </div>
        </q-card-section>
        <q-card-section>
          <div class="text-h7" v-html="note.ShortestContent.content">
          </div>
        </q-card-section>

        <q-card-actions align="around">
          <q-btn flat>
            <q-icon name="delete"/>
          </q-btn>
          <q-btn flat>
            <q-icon name="archive"/>
          </q-btn>
        </q-card-actions>
      </q-card>

    </div>
  </q-page>
</template>

<script>
import {defineComponent, ref} from 'vue'
import axios from "axios";

export default defineComponent({
  name: "ArchivedNotes",
  setup() {
    let notes = ref([])
    const apiUrl = 'http://localhost:8000/api/v1/';

    const getNotes = async () => {
      try {
        const response = await axios.get(apiUrl + 'notes')
        notes.value = response.data.notes
      } catch (error) {
        console.error(error)
      }
    }

    getNotes()
    return {
      notes
    }
  }
})
</script>

<style>
.w-500 {
  width: 300px;
}

</style>
