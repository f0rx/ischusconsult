<template>
  <div>
    <a
      href="#"
      v-text="anchorText"
      @click="$event.preventDefault(), (modal.isOpen = true)"
    ></a>

    <v-modal v-model="modal.isOpen" :title="modal.title">
      <ul>
        <li v-for="(item, i) in documents" :key="i">
          <a :href="'/storage/' + item.full_path">{{ item.name }}</a>
        </li>
      </ul>
    </v-modal>
  </div>
</template>

<script>
export default {
  props: ["anchorText", "incoming"],
  data() {
    return {
      documents: [],
      modal: {
        isOpen: false,
        title: "Uploaded Documents",
      },
    };
  },
  created() {
    this.documents =
      typeof this.incoming != "undefined" ? JSON.parse(this.incoming) : [];
  },
};
</script>
