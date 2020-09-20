<template>
    <div>
        <vue-editor
            v-model="content"
            :customModules="customModulesForEditor"
            :editorOptions="editorSettings"
            style="background-color: white;"
        ></vue-editor>
        <input type="hidden" :name="name" v-model="content">
    </div>
</template>

<script>
import { VueEditor, Quill } from 'vue2-editor';
import ImageResize from 'quill-image-resize';

export default {
    name: "TextEditorComponent",
    props: ['slug', 'initial-content', 'name'],
    data() {
        return {
            content: this.initialContent,
            customModulesForEditor: [
                { alias: "imageResize", module: ImageResize }
            ],
            editorSettings: {
                modules: {
                    imageResize: {}
                }
            }
        }
    },
    components: {
      VueEditor
    }
}
</script>

<style scoped>

</style>
