<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

defineProps({
    errors: Object
})

const form = reactive({
    title: null,
    content: null
})

const submitFunction = () => {
    Inertia.post('/inertia', form)
}
</script>

<template>
    <form @submit.prevent="submitFunction">
        <input name="title" v-model="form.title">{{ form.title }}<br>
        <div v-if="errors.title">{{ errors.title }}</div>
        <input name="contednt" v-model="form.content">
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>