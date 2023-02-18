
<script setup>
    import Base from '../layouts/base.vue'

    import { onMounted,ref } from 'vue'
    const showModal = ref(false)
    const hideModal = ref(true)
    const editMode = ref(false)

    let experiences = ref([])

    let form = ref({
        name : '',
        proficiency : '',
        service_id : ''
    })

    async function openModal(){
        showModal.value = !showModal.value
    }
    async function closeModal(){
        showModal.value = !hideModal.value
        form.value = ({})
        editMode.value = false
    }


    const getExperiences = async () => {
        let response = await axios.get('/get_all_experience')
        console.log('response',response)
        //experiences.value = response.data.experiences
    }

    const addExperience = async() => {
        await axios.post('/api/add_experience',form.value)
           .then(response =>{
                getServices()
                getSkills()
                closeModal()
                toast.fire({
                    icon: 'success',
                    title: 'Skill ajouté avec succes!'
                })
            })
    }
</script>


<template>

    <Base />

</template>


