<template>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="row">
					<div class="col-md-5">
					  <div class="form-group">
					  	<label>Lunch</label>
					  	<input class="form-control" type="number" v-model.number="data.day_meal" placeholder="enter your lunch meal">
					  </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-5">
					  <div class="form-group">
					  	<label>Dinner</label>
					  	<input class="form-control" type="number" v-model.number="data.night_meal" placeholder="enter your lunch meal">
					  </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-md-5">
					  <div class="form-group">
					  	<button class="btn btn-primary btn-block" type="submit" @click="save()">Save</button>
					  </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	
	export default {

		data () {

			return {

				data: {},
			}
		},
		methods: {
			save() {
				const URL = 'http://127.0.0.1:8000/meal/save';
				axios.post(URL, this.data)
				.then((response) => {
					return this.$router.push({
						'name': 'my-meal.list',
						'params': {
							'type': this.type
						}
					});
			    })
			    .catch((err) => {

			        console.log(err.response.data);
			    })
			}
		},
	}

</script>

<style scoped>
	.col-md-5 {

		margin: 0 auto;
	}
	.row{

		margin-top: 20px;
	}
</style>