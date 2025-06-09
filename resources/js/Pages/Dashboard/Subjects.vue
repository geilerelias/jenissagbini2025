<script setup>
import {onMounted, ref, shallowRef, watch} from 'vue';
import {useForm, usePage} from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import {useDate} from 'vuetify';

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


const DEFAULT_RECORD = {title: '', author: '', genre: '', year: adapter.getYear(adapter.date()), pages: 1}

const books = ref([])
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

    const found = books.value.find(book => book.id === id)

    record.value = {
        id: found.id,
        title: found.title,
        author: found.author,
        genre: found.genre,
        year: found.year,
        pages: found.pages,
    }

    dialog.value = true
}

function remove(id) {
    const index = books.value.findIndex(book => book.id === id)
    books.value.splice(index, 1)
}

function save() {
    if (isEditing.value) {
        const index = books.value.findIndex(book => book.id === record.value.id)
        books.value[index] = record.value
    } else {
        record.value.id = books.value.length + 1
        books.value.push(record.value)
    }

    dialog.value = false
}

function reset() {
    dialog.value = false
    record.value = DEFAULT_RECORD
    books.value = [
        {id: 1, title: 'To Kill a Mockingbird', author: 'Harper Lee', genre: 'Fiction', year: 1960, pages: 281},
        {id: 2, title: '1984', author: 'George Orwell', genre: 'Dystopian', year: 1949, pages: 328},
        {id: 3, title: 'The Great Gatsby', author: 'F. Scott Fitzgerald', genre: 'Fiction', year: 1925, pages: 180},
        {id: 4, title: 'Sapiens', author: 'Yuval Noah Harari', genre: 'Non-Fiction', year: 2011, pages: 443},
        {id: 5, title: 'Dune', author: 'Frank Herbert', genre: 'Sci-Fi', year: 1965, pages: 412},
    ]
}

</script>

<template>
    <admin-layout title="Asignaturas" route="subjects.index">
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


        <v-sheet border rounded>
            <v-data-table
                :headers="headers"
                :hide-default-footer="books.length < 11"
                :items="books"
            >
                <template v-slot:top>
                    <v-toolbar flat>
                        <v-toolbar-title>
                            <v-icon color="medium-emphasis" icon="mdi-book-multiple" size="x-small" start></v-icon>

                            Popular books
                        </v-toolbar-title>

                        <v-btn
                            class="me-2"
                            prepend-icon="mdi-plus"
                            rounded="lg"
                            text="Add a Book"
                            border
                            @click="add"
                        ></v-btn>
                    </v-toolbar>
                </template>

                <template v-slot:item.title="{ value }">
                    <v-chip :text="value" border="thin opacity-25" prepend-icon="mdi-book" label>
                        <template v-slot:prepend>
                            <v-icon color="medium-emphasis"></v-icon>
                        </template>
                    </v-chip>
                </template>

                <template v-slot:item.actions="{ item }">
                    <div class="d-flex ga-2 justify-end">
                        <v-icon color="medium-emphasis" icon="mdi-pencil" size="small" @click="edit(item.id)"></v-icon>

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
        </v-sheet>

        <v-dialog v-model="dialog" max-width="500">
            <v-card
                :subtitle="`${isEditing ? 'Update' : 'Create'} your favorite book`"
                :title="`${isEditing ? 'Edit' : 'Add'} a Book`"
            >
                <template v-slot:text>
                    <v-row>
                        <v-col cols="12">
                            <v-text-field v-model="record.title" label="Title"></v-text-field>
                        </v-col>

                        <v-col cols="12" md="6">
                            <v-text-field v-model="record.author" label="Author"></v-text-field>
                        </v-col>

                        <v-col cols="12" md="6">
                            <v-select v-model="record.genre" :items="['Fiction', 'Dystopian', 'Non-Fiction', 'Sci-Fi']"
                                      label="Genre"></v-select>
                        </v-col>

                        <v-col cols="12" md="6">
                            <v-number-input v-model="record.year" :max="adapter.getYear(adapter.date())" :min="1"
                                            label="Year"></v-number-input>
                        </v-col>

                        <v-col cols="12" md="6">
                            <v-number-input v-model="record.pages" :min="1" label="Pages"></v-number-input>
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
