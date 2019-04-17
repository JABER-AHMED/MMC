<template>
	<div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
		    		<thead>
				        <tr>
				          	<th v-for="item in user">{{ item.name }}</th>
				        </tr>
				    </thead>
  				</table>
			</div>
		</div>
	</div>
</template>

<script>
	
	export default {

		data () {
			return {
				meals: [],
				user: []
			}
		},
		mounted() {
			const URL = 'http://127.0.0.1:8000/dashboard-data';
			axios.get(URL, this.data)
			.then((response) => {
				this.user = response.data.user;
				this.meals = response.data.meals;
			})
			.catch((err) => {
		 		console.log(err.response.data);
			})
		}
	}

</script>