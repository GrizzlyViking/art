<template>
    <div class="form-group custom-file">
        <div class="custom-file mt-2">
            <input id="uploaded_file" name="uploaded_file" type="file" ref="file" class="custom-file-input" @change="handleFileUpload">
            <label class="custom-file-label" for="uploaded_file">
                <span class="d-inline-block text-truncate w-75"><slot/> {{ filename }}</span>
            </label>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                file: '',
                filename: ''
            }
        },
        methods: {
            handleFileUpload() {
                this.file = this.$refs.file.files[0];
                this.filename = this.file.name;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
