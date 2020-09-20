<template>
    <div>
        <img v-if="imageSrc" class="img-thumbnail mb-6" :src="imageSrc"  alt="preview_image"/>
        <div class="form-group custom-file">
            <div class="custom-file mt-2">
                <input id="uploaded_file" name="uploaded_file" type="file" ref="file" class="custom-file-input"
                       @change="handleFileUpload">
                <label class="custom-file-label" for="uploaded_file">
                    <span class="d-inline-block text-truncate w-75">{{ placeholder }}</span>
                </label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['placeholder', 'img'],
        data() {
            return {
                file: '',
                filename: '',
                imageSrc: this.img
            }
        },
        methods: {
            handleFileUpload() {
                this.file = this.$refs.file.files[0];
                this.placeholder = this.file.name;
                this.imageSrc = URL.createObjectURL(this.file);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
