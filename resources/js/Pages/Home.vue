<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, onMounted, ref, useTemplateRef } from 'vue';

const chatFooterContainer = useTemplateRef('chat-footer-container');
const paddingBottomValue = ref(0);
const paddingTopValue = ref(0);

const getNavClientHeight = (value) => {
    paddingTopValue.value = value;
}

onMounted(() => {
    let chatFooterContainerHeight = chatFooterContainer.value.clientHeight;
    paddingBottomValue.value = chatFooterContainerHeight;
});

</script>

<template>
    <AppLayout ref="app-layout" @client-height-value="getNavClientHeight">
        <div class="grid-container">
            <!-- This contains the list of the users whether they are online or not -->
            <div class="sidebar-container"></div>
            <div class="chat-container">
                <div class="chat-inner-container">
                    <div class="chat-body-container" :style="{
                        paddingBottom: `${paddingBottomValue}px`,
                        paddingTop: `${paddingTopValue}px`
                    }">
                        <!-- This is where the chat bubbles will appear. This container will be split into two columns, -->
                        <div class="chat-bubbles-container"></div>
                    </div>

                    <div ref="chat-footer-container" class="chat-footer-container">
                        <div class="message-container bg-gray-100">
                            <textarea placeholder="Aa" class="text-area" name="" id=""></textarea>
                            <div class="button-container">
                                <button>
                                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#ffffff"
                                            d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z" />
                                    </svg>
                                </button>
                                <button>
                                    <svg class="w-full h-full" xmlns="chttp://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="#ffffff"
                                            d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480l0-83.6c0-4 1.5-7.8 4.2-10.8L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.grid-container {
    position: absolute;
    display: flex;
    width: 100%;
    height: 100vh;
}

.sidebar-container {
    height: 100%;
    width: 320px;
}

@media (max-width: 768px) {
    .sidebar-container {
        display: none;
    }
}

.chat-container {
    height: 100%;
    width: 100%;
    background-color: #ffffff;
}

.chat-inner-container {
    height: 100%;
    max-width: 769px;
    min-width: 320px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    overflow-y: auto;
    overflow-x: hidden;
}

.chat-body-container {
    width: 100%;
    height: 100%;
    overflow-y: auto;
    overflow-x: hidden;
    position: absolute;
    padding-left: 1rem;
    padding-right: 1rem;
}

.chat-bubbles-container {
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
}

.chat-footer-container {
    position: absolute;
    width: 100%;
    padding: 1rem 0;
    background-color: #ffffff;
    bottom: 0;
    display: flex;
    justify-content: center;
}

.message-container {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    overflow: hidden;
    width: 100%;
    height: 150px;
    border-radius: 1.6rem;
    position: relative;
}

.text-area {
    width: 100%;
    resize: none;
    background-color: transparent;
    border: none;
    overflow-y: auto;
    overflow-x: hidden;
    box-shadow: none;
    outline: none;
    height: 100%;
    padding: 1rem;

}

.button-container {
    width: 100%;
    z-index: 0;
    display: flex;
    justify-content: space-between;
    padding: 0.6rem 2rem;
}

button {
    height: 40px;
    padding: 0.6rem;
    background-color: #5b8af0;
    border-radius: 100%;
}
</style>
