<template>
    <form @submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" v-model="fields.name" />
            <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
        </div>
    
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="fields.email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" v-model="fields.title" />
            <div v-if="errors && errors.title" class="text-danger">{{ errors.title[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" v-model="fields.content"></textarea>
            <div v-if="errors && errors.content" class="text-danger">{{ errors.content[0] }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send message</button>

        <div v-if="success" class="alert alert-success mt-3">
            Message sent!
        </div>
    </form>
</template>
<script>
import FormMixin from '../FormMixin';
export default {
  mixins: [ FormMixin ],
  data() {
    return {
      'action': '/submit',
    }
  }
}
</script>