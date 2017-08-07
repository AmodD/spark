<template>
		<div class="card">
		  <div class="card-content">
		    <div class="media">
		      <div class="media-left">
		        <figure class="image is-64x64"><img :src="image" alt="Image"></figure>
		      </div>
		      <div class="media-content">
			      <p class="title is-4">{{ name }}</p>
			      <p class="subtitle is-6">{{ qualification }}</p>
		      </div>
		      <div>{{ designation }}</div>
		    </div>
		  </div>
		</div>
</template>

<script>
    export default {
	props : ['image' , 'name' , 'qualification' , 'designation'],    
        mounted() {
            console.log('Board Component mounted.')
        }
    }
</script>
