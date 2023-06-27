<template>
  <q-page>
    <div class="row justify-center my-5">
      <q-input v-if="!showCreatedCard" @click="showCreatedCard = !showCreatedCard" standout="bg-white"
               class="w-500" outlined v-model="formCreate.content" label="Crear una nota"/>
      <q-card v-else class="keep-card">
        <q-card-section>
          <div class="flex justify-between">
            <div class="items-start">
              <q-input standout="bg-white" borderless v-model="formCreate.title" label="Título"/>

            </div>
            <div>
              <q-btn @click="formCreate.has_pin = !formCreate.has_pin" class="justify-center" flat>
                <q-tooltip class="f-12">Fijar nota</q-tooltip>

                <q-icon name="push_pin" :color="formCreate.has_pin === false ? 'grey-5' : ''"/>
              </q-btn>
            </div>
          </div>
          <q-input rows="3" autogrow v-model="formCreate.content" borderless type="textarea"
                   label="Contenido de la nota"/>
        </q-card-section>
        <q-card-actions class="justify-between" align="stretch">
          <q-btn flat>
            <q-tooltip class="f-12">Archivar</q-tooltip>
            <q-icon name="move_to_inbox"/>
          </q-btn>

          <q-btn class="mr-1" flat>
            Cerrar
          </q-btn>

        </q-card-actions>
      </q-card>
    </div>
    <div class="q-pa-md row items-start q-gutter-md" @click="closeCreateNote()">
      <q-card class="my-card w-300" v-for="note in notes" :key="note.id">
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
import axios from 'axios'

export default {
  name: 'IndexPage',
  data() {
    return {
      showCreatedCard: false,
      notes: ref([]),
      apiUrl: 'http://localhost:8000/api/v1/',
      formCreate: {
        title: '',
        content: '',
        has_pin: false,
      }
    }
  },
  methods: {
    getNotes() {
      axios.get(this.apiUrl + 'notes').then(res => {
        this.notes = res.data.notes
      }).catch(err => {
        console.error(err)
      })
    },
    closeCreateNote() {
      this.showCreatedCard = false;
      this.formCreate = {
        title: '',
        content: '',
        has_pin: false,
      }
    }
  },
  mounted() {
    this.getNotes();
  }

}

</script>

