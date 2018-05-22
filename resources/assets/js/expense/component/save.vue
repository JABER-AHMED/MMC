<template>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleSelect1">
			        Select Member
			    </label>
			    <select v-model="data.user_id" class="form-control m-input m-input--square" id="exampleSelect1">
			        <option v-for="item in user" :value="item.id">{{ item.name }}</option>
			    </select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group m-form__group">
			    <label for="exampleInputEmail1">
			        Expense
			    </label>
			    <input type="number" class="form-control m-input m-input--square" id="exampleInputEmail1" v-model.number="data.expense" aria-describedby="emailHelp" placeholder="Enter expense">
			    <span class="m-form__help">
			        We'll never share your data with anyone else.
			    </span>
			</div>
		</div>
		<button @click="save()" type="button" class="btn btn-primary">
			save
		</button>
	</div>
</template>

<script>
	
	export default {

		data () {

			return {

				user: [],
				data: {

					expense: '',
					user_id: '',
				}
			}
		},
		mounted () {
			if (this.$route.params.expenseId) {
				this.edit(this.$route.params.expenseId);
			}

			const URL = 'http://127.0.0.1:8000/expense/user/list';
			axios.get(URL, this.data)
			.then((response) => {
				this.user = response.data;
			})
			.catch((err) => {
		 		console.log(err.response.data);
			})
		},
		methods: {
			save() {
				const URL = 'http://127.0.0.1:8000/expense/save';
				axios.post(URL, this.data)
				.then((response) => {
					return this.$router.push({
						'name': 'expense.list',
						'params': {
							'type': this.type
						}
					});
			    })
			    .catch((err) => {
			        console.log(err.response.data);
			    })
			},
			edit(id) {
				// this.pleaseWaitLoading();
				axios.get('http://127.0.0.1:8000/expense/list/' + id)
				.then((response) => {
					this.data = response.data.expense;
	                // this.$loading().close();
	                // console.log(this.user);
	                
				})
				.catch((error) => {
					console.log(error.response.data);
					// this.$loading().close();
				})
			}
		}
	}

</script>
<style scoped>

</style>