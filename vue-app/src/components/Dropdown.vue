<template>
    <div class="dropdown is-active">
        <div class="dropdown-trigger">
            <button
                    class="button"
                    aria-haspopup="true"
                    aria-controls="dropdown-menu"
                    @click="toggle"
            >
                <span v-if = "title">{{title}}</span>
                <span v-else>Dropdown</span>

                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div
                    class="dropdown-content"
                    v-if="show"
            >
                <div
                    class="dropdown-item"
                    v-for="option in options"
                    v-bind:key="option.id"
                    @mouseenter="onMouseEnter($event, index)"
                    @mouseleave="onMouseLeave($event, index)"
                    @click="setDropdownOption(option)"
                    >
                        <!--<slot name="option" v-bind:option="option">-->
                            {{option.value}}
                        <!--</slot>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
            },
            options:{
                type: [Array, Object]
            },
        },

        data() {
            return{
                show: false
            }
        },
        methods: {
            toggle() {
                this.show = !this.show
            },
            onMouseEnter(e){
                e.target.style.backgroundColor = 'blue'
                e.target.style.color = 'white'
            },
            onMouseLeave(e){
                e.target.style.backgroundColor = 'white'
                e.target.style.color = 'black'
            },
            setDropdownOption(option){
                this.title = option.value,
                this.show = false
            },
        }
    }
</script>