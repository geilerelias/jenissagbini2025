<script setup>
import { ref } from "vue";
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticationCard from "@/Components/AuthenticationCard.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import AuthLayout from "../../Layouts/AuthLayout.vue";

const form = useForm({
    password: "",
});

const passwordInput = ref(null);

const submit = () => {
    form.post(route("password.confirm"), {
        onFinish: () => {
            form.reset();

            passwordInput.value.focus();
        },
    });
};
</script>

<template>
    <auth-layout>
        <Head title="Secure Area" />

        <AuthenticationCard>
            <template #logo>
                <AuthenticationCardLogo />
            </template>

            <div class="mb-4 text-sm text-gray-600 text-justify">
                Esta es un área segura de la aplicación. Por favor, confirme su
                contraseña antes de continuar.
            </div>

            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="password" value="Password" />
                    <TextInput
                        id="password"
                        ref="passwordInput"
                        v-model="form.password"
                        autocomplete="current-password"
                        autofocus
                        class="mt-1 block w-full"
                        required
                        type="password"
                    />
                    <InputError :message="form.errors.password" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <PrimaryButton
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        class="ml-4"
                    >
                        Confirm
                    </PrimaryButton>
                </div>
            </form>
        </AuthenticationCard>
    </auth-layout>
</template>
