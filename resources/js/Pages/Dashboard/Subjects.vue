<script setup>
import {onMounted, ref, shallowRef, watch} from 'vue';
import {useForm, usePage} from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import {useDate} from 'vuetify';
import axios from 'axios';

const page = usePage();
const subjects = ref(page.props.subjects || []);

const form = useForm({
    name: '',
    description: '',
    image: null,
});

const adapter = useDate();
const preview = ref(null);
const dialog = ref(false);

const headers = [
    {title: 'Nombre', key: 'name', align: 'start'},
    {title: 'Descripción', key: 'description'},
    {title: 'Imagen', key: 'image_path'},
    {title: 'Acciones', key: 'actions', align: 'end', sortable: false},
];

const submitForm = () => {
    form.clearErrors();

    if (!form.name || !form.description) {
        if (!form.name) form.setError('name', 'El nombre es obligatorio.');
        if (!form.description) form.setError('description', 'La descripción es obligatoria.');
        return;
    }

    form.post(route('subjects.store'), {
        forceFormData: true,
        onSuccess: () => {
            form.reset();
            preview.value = null;
            dialog.value = false;
        },
    });
};

watch(() => form.image, (image) => {
    if (image && image instanceof File) {
        const reader = new FileReader();
        reader.onload = (e) => (preview.value = e.target.result);
        reader.readAsDataURL(image);
    } else {
        preview.value = null;
    }
});


const DEFAULT_RECORD = {name: '', description: '', image_path: ''}

const record = ref(DEFAULT_RECORD)
const isEditing = shallowRef(false)


onMounted(() => {
    reset()
})

function add() {
    isEditing.value = false
    record.value = DEFAULT_RECORD
    dialog.value = true
}

function edit(id) {
    isEditing.value = true

    const found = subjects.value.find(subject => subject.id === id)

    record.value = {
        id: found.id,
        name: found.name,
        description: found.description,
        image_path: found.image_path
    }

    dialog.value = true
}

function remove(id) {
    const index = subjects.value.findIndex(subject => subject.id === id)
    subjects.value.splice(index, 1)
}

function save() {
    if (isEditing.value) {
        const index = subjects.value.findIndex(subject => subject.id === record.value.id)
        subjects.value[index] = record.value
    } else {
        record.value.id = subjects.value.length + 1
        subjects.value.push(record.value)
    }

    dialog.value = false
}

const reset = () => {
    dialog.value = false;
    form.reset();
    axios.get(route('subjects.index'))
        .then(response => {
            // Si la respuesta es un array directo
            if (Array.isArray(response.data)) {
                subjects.value = response.data;
            } else if (response.data.subjects && Array.isArray(response.data.subjects)) {
                // Si la respuesta es { subjects: [...] }
                subjects.value = response.data.subjects;
            } else {
                subjects.value = [];
            }
        })
        .catch(() => {
            subjects.value = [];
        });
}

</script>

<template>
    <admin-layout title="Asignaturas" route="subjects.index">
<!--
        <v-container>
            <v-btn color="primary" class="mb-4" @click="dialog = true">
                Agregar asignatura
            </v-btn>

            <v-dialog v-model="dialog" max-width="600px">
                <v-card>
                    <v-card-title>Registrar Asignatura</v-card-title>
                    <v-card-text>
                        <v-row class="mb-4">
                            <v-col cols="12" md="6">
                                <v-text-field
                                    variant="outlined"
                                    v-model="form.name"
                                    label="Nombre de la asignatura"
                                    :error="!!form.errors.name"
                                    :error-messages="form.errors.name"
                                />
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field
                                    variant="outlined"
                                    v-model="form.description"
                                    label="Descripción"
                                    :error="!!form.errors.description"
                                    :error-messages="form.errors.description"
                                />
                            </v-col>
                        </v-row>

                        <v-row>
                            <v-col cols="12" md="6">
                                <v-file-input
                                    variant="outlined"
                                    v-model="form.image"
                                    label="Imagen (opcional)"
                                    accept="image/*"
                                    prepend-icon="mdi-image"
                                    :error="!!form.errors.image"
                                    :error-messages="form.errors.image"
                                />
                            </v-col>
                            <v-col cols="12" md="6" v-if="preview">
                                <v-img :src="preview" aspect-ratio="16/9" class="mt-2"/>
                            </v-col>
                        </v-row>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer/>
                        <v-btn text @click="dialog = false">Cancelar</v-btn>
                        <v-btn color="primary" @click="submitForm" :loading="form.processing"
                               :disabled="form.processing">
                            Guardar Asignatura
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

            <v-data-table :headers="headers" :items="subjects" class="elevation-1" show-headers>
                <template #item.image_path="{ item }">
                    <v-img v-if="item.image_path" :src="`/storage/${item.image_path}`" max-width="100" max-height="60"/>
                    <span v-else class="text-caption text-medium-emphasis">Sin imagen</span>
                </template>

                <template #item.actions="{ item }">
                    <v-btn icon color="primary">
                        <v-icon>mdi-pencil</v-icon>
                    </v-btn>
                    <v-btn icon color="error">
                        <v-icon>mdi-delete</v-icon>
                    </v-btn>
                </template>
            </v-data-table>
        </v-container>
-->

        <v-container>
            <v-card border rounded="lg">
                <v-data-table
                    :headers="headers"
                    :hide-default-footer="subjects.length < 11"
                    :items="subjects"
                >
                    <template v-slot:top>
                        <v-toolbar flat>
                            <v-toolbar-title>
                                <v-icon color="medium-emphasis" icon="mdi-subject-multiple" size="x-small" start></v-icon>
                                Gestión de asignaturas

                            </v-toolbar-title>

                            <v-btn
                                class="me-2"
                                prepend-icon="mdi-plus"
                                rounded="lg"
                                text="Agregar"
                                border
                                @click="add"
                            ></v-btn>
                        </v-toolbar>
                    </template>

                    <template v-slot:item.name="{ value }">
                        <v-chip :text="value" border="thin opacity-25" prepend-icon="mdi-subject" label>
                            <template v-slot:prepend>
                                <v-icon color="medium-emphasis"></v-icon>
                            </template>
                        </v-chip>
                    </template>

                    <template v-slot:item.actions="{ item }">
                        <div class="d-flex ga-2 justify-end">
                            <v-icon color="medium-emphasis" icon="mdi-pencil" size="small"
                                    @click="edit(item.id)"></v-icon>

                            <v-icon color="medium-emphasis" icon="mdi-delete" size="small"
                                    @click="remove(item.id)"></v-icon>
                        </div>
                    </template>

                    <template v-slot:no-data>
                        <v-btn
                            prepend-icon="mdi-backup-restore"
                            rounded="lg"
                            text="Reset data"
                            variant="text"
                            border
                            @click="reset"
                        ></v-btn>
                    </template>
                </v-data-table>
            </v-card>
        </v-container>

        <v-dialog v-model="dialog" max-width="500">
            <v-card
                :subtitle="`${isEditing ? 'Update' : 'Create'} your favorite subject`"
                :title="`${isEditing ? 'Edit' : 'Add'} a subject`"
            >
                <template v-slot:text>
                    <v-row>
                        <v-col cols="12">
                            <v-text-field v-model="record.name" label="Title"></v-text-field>
                        </v-col>

                        <v-col cols="12" md="6">
                            <v-text-field v-model="record.description" label="Author"></v-text-field>
                        </v-col>



                    </v-row>
                </template>

                <v-divider></v-divider>

                <v-card-actions class="bg-surface-light">
                    <v-btn text="Cancel" variant="plain" @click="dialog = false"></v-btn>

                    <v-spacer></v-spacer>

                    <v-btn text="Save" @click="save"></v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </admin-layout>
</template>

<style scoped>
.v-img {
    border-radius: 8px;
    object-fit: cover;
}
</style>

