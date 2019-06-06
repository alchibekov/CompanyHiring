<template>
    <div class="dropdown"
         v-bind:class="{ 'is-active': isDropdownActive }"
    >
        <div class="dropdown-trigger"
             @click="toggleDropdown"
        >
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                <span><!--Dropdown button-->
                 {{ config.placeholder ? config.placeholder : "" }}</span>
                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <!--<div class="dropdown-content">
                <a href="#" class="dropdown-item">
                    Dropdown item
                </a>
                <a class="dropdown-item">
                    Other dropdown item
                </a>
                <a href="#" class="dropdown-item is-active">
                    Active dropdown item
                </a>
                <a href="#" class="dropdown-item">
                    Other dropdown item
                </a>
                <hr class="dropdown-dividner">
                <a href="#" class="dropdown-item">
                    With a divider
                </a>
            </div>-->
            <div class="dropdown-content">
                <a
                        v-for="(option,index) in configOptions"
                        v-bind:class="{ 'is-active': isDropdownElementActive }"
                        class="dropdown-item"
                        @click="setCurrentSelectedOption()"
                        @mouseenter="onMouseEnter($event, index)"
                        @mouseleave="onMouseLeave($event, index)"
                >
                    {{ option.value }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "BulmaDropdown",
        props: [/*"config"*/],

        data() {
            return {
                isDropdownActive: false,
                isDropdownElementActive: false,
                configOptions:[],
                selected:'',
                config: {
                    options: [
                        {
                            value: "option 1"
                        },
                        {
                            value: "option 2"
                        },
                        {
                            value: "option 3"
                        }
                    ],
                    placeholder: "Dropdown",
                }
            }
        },
        methods: {
            toggleDropdown() {
                this.isDropdownActive = !this.isDropdownActive;
            },

            setConfigData() {
                this.configOptions = this.config.options;
                this.placeholder = this.config.options;

            },
            setCurrentSelectedOption() {
                this.isDropdownElementActive = !this.isDropdownElementActive;
            },
            onMouseEnter(e){
                    e.target.style.backgroundColor = 'blue'
            },
            onMouseLeave(e){
                    e.target.style.backgroundColor = 'white'
            }
        },
        computed: {
        },
        created() {
            this.setConfigData();
        },
    };
</script>

<style lang="scss" scoped>
    @import "BulmaDropdown";
    @import "~bulma";
</style>

