<template>
    <article class="message" v-if="show">
        <div class="message-header">
            <p>{{ title }}</p>
            <button class="delete" aria-label="delete" @click="close"></button>
        </div>
        <div class="message-body">
            <div
                        v-for="(option,index) in options"
                        class="dropdown-item"
                >
                <slot>
                </slot>
            </div>
        </div>
    </article>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                required: true
            }
        },
        data() {
            return {
                show: true
            }
        },
        methods: {
            close() {
                this.show = false
            }
        }
    }
</script>