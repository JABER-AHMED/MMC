<template>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Day Meal</th>
							<th>Night Meal</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="(item, index) in meal">
							<td>{{ ++index }}</td>
							<td>{{ item.day_meal }}</td>
							<td>{{ item.night_meal }}</td>
							<td>{{ item.created_at }}</td>
							<td>
								<a class="btn btn-danger" @click="update(item.id)">Edit</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</template>

<script>
	
	export default {

		data () {

			return {

				meal: [],
			}
		},
		methods: {

			update(id = null) {
				if (id) {
					return this.$router.push({
						'name': 'meal.edit',
						'params': {
							'mealId': id,
							'type': this.type
						}
					});
				}
				return this.$router.push({
					name: 'my-meal.save'
				})
			}
		},
		mounted () {
			const URL = 'http://127.0.0.1:8000/meal/list';
			axios.get(URL, this.data)
				.then((response) => {

					this.meal = response.data.meal;
					console.log(this.meal);

			})
			.catch((err) => {

			 	console.log(err.response.data);
			})
		}
	}

</script>
<style>
	
	.row {

		margin-top: 20px;
	}

</style>